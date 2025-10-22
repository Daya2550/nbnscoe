<?php
require_once __DIR__ . '/../lib/db.php';
require_once __DIR__ . '/../lib/helpers.php';
$sections = require __DIR__ . '/../config/sections.php';

function fetch_all($sql, $params = [], $types = ''): array {
    $mysqli = db();
    if ($params) {
        $stmt = $mysqli->prepare($sql);
        if ($types === '') {
            // infer all as string
            $types = str_repeat('s', count($params));
        }
        $stmt->bind_param($types, ...$params);
        $stmt->execute();
        $res = $stmt->get_result();
    } else {
        $res = $mysqli->query($sql);
    }
    return $res ? $res->fetch_all(MYSQLI_ASSOC) : [];
}

// Fallback: lightly scrape SKNSCOE homepage (remote or local mirror) to prefill empty sections
function http_get(string $url, int $timeout = 5): ?string {
    $ctx = stream_context_create([
        'http' => [
            'method' => 'GET',
            'timeout' => $timeout,
            'header' => "User-Agent: SKNSCOE-Local/1.0\r\nAccept: text/html\r\n"
        ],
        'https' => [
            'method' => 'GET',
            'timeout' => $timeout,
            'header' => "User-Agent: SKNSCOE-Local/1.0\r\nAccept: text/html\r\n"
        ]
    ]);
    $html = @file_get_contents($url, false, $ctx);
    return $html !== false ? $html : null;
}

function load_scraped_home_html(): ?string {
    // Try live site first, then local mirror
    $live = http_get('https://www.sknscoe.ac.in/');
    if ($live) return $live;
    $local = __DIR__ . '/../_scrape/index.html';
    if (is_file($local)) {
        $html = @file_get_contents($local);
        if ($html !== false) return $html;
    }
    return null;
}

function extract_list_items(string $html, string $sectionTitle, int $max = 10): array {
    $out = [];
    $pattern = '/<title[^>]*>\s*' . preg_quote($sectionTitle, '/') . '\s*<\\/title>.*?<ul[^>]*>(.*?)<\\/ul>/is';
    if (preg_match($pattern, $html, $m)) {
        $ul = $m[1];
        if (preg_match_all('/<li[^>]*>(.*?)<\\/li>/is', $ul, $liMatches)) {
            foreach ($liMatches[1] as $liHtml) {
                $title = trim(strip_tags($liHtml));
                $link = null;
                if (preg_match('/<a[^>]+href=\"([^\"]+)/i', $liHtml, $am)) {
                    $link = html_entity_decode($am[1], ENT_QUOTES);
                    if ($link && str_starts_with($link, './')) $link = ltrim($link, './');
                    if ($link && str_starts_with($link, '/')) $link = 'https://www.sknscoe.ac.in' . $link;
                }
                if ($title !== '') {
                    $out[] = ['title' => $title, 'link_url' => $link];
                    if (count($out) >= $max) break;
                }
            }
        }
    }
    return $out;
}

function extract_youtube_iframes(string $html, int $max = 6): array {
    $out = [];
    if (preg_match_all('/<iframe[^>]+src=\"([^\"]*youtube[^\"]+)\"[^>]*><\\/iframe>/i', $html, $matches)) {
        foreach ($matches[1] as $idx => $src) {
            $embed = '<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="' . htmlspecialchars($src, ENT_QUOTES) . '" allowfullscreen></iframe></div>';
            $out[] = ['title' => null, 'embed_html' => $embed, 'youtube_url' => $src];
            if (count($out) >= $max) break;
        }
    }
    return $out;
}

$president = fetch_all("SELECT * FROM messages WHERE type='president' ORDER BY updated_at DESC LIMIT 1");
$principal = fetch_all("SELECT * FROM messages WHERE type='principal' ORDER BY updated_at DESC LIMIT 1");
$news = fetch_all("SELECT * FROM news WHERE is_active=1 ORDER BY COALESCE(published_at, created_at) DESC LIMIT 6");
$workshops = fetch_all("SELECT * FROM workshops ORDER BY COALESCE(date, created_at) DESC LIMIT 6");
$publications = fetch_all("SELECT * FROM publications ORDER BY year DESC, created_at DESC LIMIT 6");
$newsletters = fetch_all("SELECT * FROM newsletters ORDER BY COALESCE(published_at, created_at) DESC LIMIT 6");
$prev_events = fetch_all("SELECT * FROM events WHERE category='previous' ORDER BY COALESCE(date, created_at) DESC LIMIT 6");
$latest_events = fetch_all("SELECT * FROM events WHERE category='latest' ORDER BY COALESCE(date, created_at) DESC LIMIT 6");
$gate = fetch_all("SELECT * FROM gate_qualifiers ORDER BY COALESCE(year, YEAR(created_at)) DESC, created_at DESC LIMIT 10");
$videos = fetch_all("SELECT * FROM videos ORDER BY created_at DESC LIMIT 6");
$press = fetch_all("SELECT * FROM press_news ORDER BY COALESCE(date, created_at) DESC LIMIT 6");
$achievements = fetch_all("SELECT * FROM achievements ORDER BY COALESCE(date, created_at) DESC LIMIT 6");


include __DIR__ . '/../templates/header.php';
include __DIR__ . '/../templates/home.php';
include __DIR__ . '/../templates/footer.php';
