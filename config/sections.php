<?php
return [
    'president_message' => [
        'title' => "PRESIDENT'S MESSAGE",
        'table' => 'messages',
        'fixed_fields' => ['type' => 'president'],
        'fields' => [
            ['name'=>'title','label'=>'Title','type'=>'text','required'=>true],
            ['name'=>'body','label'=>'Body','type'=>'textarea','required'=>true],
            ['name'=>'image_url','label'=>'Image URL','type'=>'text']
        ],
        'order_by' => 'updated_at DESC'
    ],
    'principal_message' => [
        'title' => "PRINCIPAL'S MESSAGE",
        'table' => 'messages',
        'fixed_fields' => ['type' => 'principal'],
        'fields' => [
            ['name'=>'title','label'=>'Title','type'=>'text','required'=>true],
            ['name'=>'body','label'=>'Body','type'=>'textarea','required'=>true],
            ['name'=>'image_url','label'=>'Image URL','type'=>'text']
        ],
        'order_by' => 'updated_at DESC'
    ],
    'news' => [
        'title' => 'NEWS / ANNOUNCEMENT',
        'table' => 'news',
        'fields' => [
            ['name'=>'title','label'=>'Title','type'=>'text','required'=>true],
            ['name'=>'body','label'=>'Body','type'=>'textarea'],
            ['name'=>'link_url','label'=>'Link URL','type'=>'text'],
            ['name'=>'published_at','label'=>'Published At','type'=>'date'],
            ['name'=>'is_active','label'=>'Active','type'=>'checkbox']
        ],
        'order_by' => 'COALESCE(published_at, created_at) DESC'
    ],
    'workshops' => [
        'title' => 'Workshop / FDP / STTP / Seminar',
        'table' => 'workshops',
        'fields' => [
            ['name'=>'title','label'=>'Title','type'=>'text','required'=>true],
            ['name'=>'description','label'=>'Description','type'=>'textarea'],
            ['name'=>'date','label'=>'Date','type'=>'date'],
            ['name'=>'category','label'=>'Type','type'=>'select','options'=>['Workshop','FDP','STTP','Seminar']],
            ['name'=>'brochure_url','label'=>'Brochure/PDF URL','type'=>'text']
        ],
        'order_by' => 'date DESC'
    ],
    'publications' => [
        'title' => 'PUBLICATION',
        'table' => 'publications',
        'fields' => [
            ['name'=>'title','label'=>'Title','type'=>'text','required'=>true],
            ['name'=>'authors','label'=>'Authors','type'=>'text'],
            ['name'=>'journal','label'=>'Journal / Conference','type'=>'text'],
            ['name'=>'year','label'=>'Year','type'=>'number'],
            ['name'=>'link_url','label'=>'Link URL','type'=>'text']
        ],
        'order_by' => 'year DESC, created_at DESC'
    ],
    'newsletters' => [
        'title' => 'NEWS LETTERS',
        'table' => 'newsletters',
        'fields' => [
            ['name'=>'title','label'=>'Title','type'=>'text','required'=>true],
            ['name'=>'issue','label'=>'Issue','type'=>'text'],
            ['name'=>'pdf_url','label'=>'PDF URL','type'=>'text'],
            ['name'=>'published_at','label'=>'Published At','type'=>'date']
        ],
        'order_by' => 'published_at DESC'
    ],
    'previous_events' => [
        'title' => 'Previous Events',
        'table' => 'events',
        'fixed_fields' => ['category' => 'previous'],
        'fields' => [
            ['name'=>'title','label'=>'Title','type'=>'text','required'=>true],
            ['name'=>'description','label'=>'Description','type'=>'textarea'],
            ['name'=>'date','label'=>'Date','type'=>'date'],
            ['name'=>'image_url','label'=>'Image URL','type'=>'text']
        ],
        'order_by' => 'date DESC'
    ],
    'latest_events' => [
        'title' => 'LATEST EVENT',
        'table' => 'events',
        'fixed_fields' => ['category' => 'latest'],
        'fields' => [
            ['name'=>'title','label'=>'Title','type'=>'text','required'=>true],
            ['name'=>'description','label'=>'Description','type'=>'textarea'],
            ['name'=>'date','label'=>'Date','type'=>'date'],
            ['name'=>'image_url','label'=>'Image URL','type'=>'text']
        ],
        'order_by' => 'date DESC'
    ],
    'gate_qualifiers' => [
        'title' => 'GATE Qualifiers',
        'table' => 'gate_qualifiers',
        'fields' => [
            ['name'=>'student_name','label'=>'Student Name','type'=>'text','required'=>true],
            ['name'=>'year','label'=>'Year','type'=>'number'],
            ['name'=>'score','label'=>'Score/AIR','type'=>'text'],
            ['name'=>'branch','label'=>'Branch','type'=>'text']
        ],
        'order_by' => 'year DESC, created_at DESC'
    ],
    'videos' => [
        'title' => 'VIDEO GALLARY',
        'table' => 'videos',
        'fields' => [
            ['name'=>'title','label'=>'Title','type'=>'text','required'=>true],
            ['name'=>'youtube_url','label'=>'YouTube URL','type'=>'text','required'=>true],
            ['name'=>'thumbnail_url','label'=>'Thumbnail URL','type'=>'text']
        ],
        'order_by' => 'created_at DESC'
    ],
    'press' => [
        'title' => 'IN THE NEWS',
        'table' => 'press_news',
        'fields' => [
            ['name'=>'title','label'=>'Title','type'=>'text','required'=>true],
            ['name'=>'source','label'=>'Source','type'=>'text'],
            ['name'=>'link_url','label'=>'Link URL','type'=>'text'],
            ['name'=>'date','label'=>'Date','type'=>'date']
        ],
        'order_by' => 'date DESC'
    ],
'achievements' => [
        'title' => "Student's Achievement",
        'table' => 'achievements',
        'fields' => [
            ['name'=>'student_name','label'=>'Student Name','type'=>'text','required'=>true],
            ['name'=>'title','label'=>'Title','type'=>'text'],
            ['name'=>'description','label'=>'Description','type'=>'textarea'],
            ['name'=>'date','label'=>'Date','type'=>'date'],
            ['name'=>'image_url','label'=>'Image URL','type'=>'text']
        ],
        'order_by' => 'date DESC'
    ],

    // Department: CSE editable sections
    'cse_faculty' => [
        'title' => 'CSE Faculty',
        'table' => 'dept_faculty',
        'fixed_fields' => ['dept' => 'cse'],
        'fields' => [
            ['name'=>'name','label'=>'Name','type'=>'text','required'=>true],
            ['name'=>'qualification','label'=>'Qualification','type'=>'text'],
            ['name'=>'designation','label'=>'Designation','type'=>'text'],
            ['name'=>'experience_years','label'=>'Experience (years)','type'=>'number']
        ],
        'order_by' => 'experience_years DESC, id ASC'
    ],
    'cse_industrial_visits' => [
        'title' => 'CSE Industrial Visits',
        'table' => 'dept_industrial_visits',
        'fixed_fields' => ['dept' => 'cse'],
        'fields' => [
            ['name'=>'title','label'=>'Title','type'=>'text','required'=>true],
            ['name'=>'location','label'=>'Location','type'=>'text'],
            ['name'=>'date','label'=>'Date','type'=>'date'],
            ['name'=>'description','label'=>'Description','type'=>'textarea']
        ],
        'order_by' => 'COALESCE(date, created_at) DESC'
    ],
    'cse_internships' => [
        'title' => 'CSE Internships',
        'table' => 'dept_internships',
        'fixed_fields' => ['dept' => 'cse'],
        'fields' => [
            ['name'=>'organization','label'=>'Organization','type'=>'text','required'=>true],
            ['name'=>'topic','label'=>'Topic','type'=>'text'],
            ['name'=>'duration','label'=>'Duration','type'=>'text'],
            ['name'=>'year','label'=>'Year','type'=>'number'],
            ['name'=>'students','label'=>'Students (comma-separated)','type'=>'textarea']
        ],
        'order_by' => 'COALESCE(year, YEAR(created_at)) DESC, created_at DESC'
    ],
];
