-- Create database and tables
CREATE DATABASE IF NOT EXISTS sknscoe DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE sknscoe;

CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100) NOT NULL UNIQUE,
  password_hash VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS messages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  type ENUM('president','principal') NOT NULL,
  title VARCHAR(255) NOT NULL,
  body TEXT NOT NULL,
  image_url VARCHAR(500),
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS news (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  body TEXT,
  link_url VARCHAR(500),
  published_at DATE NULL,
  is_active TINYINT(1) NOT NULL DEFAULT 1,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS workshops (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  description TEXT,
  date DATE NULL,
  category ENUM('Workshop','FDP','STTP','Seminar') NOT NULL DEFAULT 'Workshop',
  brochure_url VARCHAR(500),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS publications (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  authors VARCHAR(500),
  journal VARCHAR(255),
  year INT,
  link_url VARCHAR(500),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS newsletters (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  issue VARCHAR(100),
  pdf_url VARCHAR(500),
  published_at DATE NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS events (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  description TEXT,
  date DATE NULL,
  category ENUM('previous','latest') NOT NULL DEFAULT 'latest',
  image_url VARCHAR(500),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS gate_qualifiers (
  id INT AUTO_INCREMENT PRIMARY KEY,
  student_name VARCHAR(255) NOT NULL,
  year INT,
  score VARCHAR(50),
  branch VARCHAR(100),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS videos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  youtube_url VARCHAR(500) NOT NULL,
  thumbnail_url VARCHAR(500),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS press_news (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  source VARCHAR(255),
  link_url VARCHAR(500),
  date DATE NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS achievements (
  id INT AUTO_INCREMENT PRIMARY KEY,
  student_name VARCHAR(255) NOT NULL,
  title VARCHAR(255),
  description TEXT,
  date DATE NULL,
  image_url VARCHAR(500),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Department-specific tables (CSE and others via dept key)
CREATE TABLE IF NOT EXISTS dept_faculty (
  id INT AUTO_INCREMENT PRIMARY KEY,
  dept VARCHAR(50) NOT NULL,
  name VARCHAR(255) NOT NULL,
  qualification VARCHAR(255),
  designation VARCHAR(255),
  experience_years INT DEFAULT 0,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  INDEX (dept)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS dept_industrial_visits (
  id INT AUTO_INCREMENT PRIMARY KEY,
  dept VARCHAR(50) NOT NULL,
  title VARCHAR(255) NOT NULL,
  location VARCHAR(255),
  date DATE NULL,
  description TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  INDEX (dept)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS dept_internships (
  id INT AUTO_INCREMENT PRIMARY KEY,
  dept VARCHAR(50) NOT NULL,
  organization VARCHAR(255) NOT NULL,
  topic VARCHAR(255),
  duration VARCHAR(100),
  year INT,
  students TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  INDEX (dept)
) ENGINE=InnoDB;


CREATE TABLE IF NOT EXISTS `feedback` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `type` ENUM('student','parent','employer','alumni') NOT NULL,
  `name` VARCHAR(255) NULL,
  `student_name` VARCHAR(255) NULL,
  `program` VARCHAR(255) NULL,
  `semester` VARCHAR(64) NULL,
  `batch_year` VARCHAR(64) NULL,
  `organization` VARCHAR(255) NULL,
  `contact_person` VARCHAR(255) NULL,
  `feedback` TEXT NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE INDEX `idx_feedback_created_at` ON `feedback` (`created_at`);
CREATE INDEX `idx_feedback_type` ON `feedback` (`type`);