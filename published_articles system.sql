CREATE TABLE published_articles(

id INT AUTO_INCREMENT PRIMARY KEY,

title TEXT,

authors TEXT,

abstract LONGTEXT,

pdf_file VARCHAR(500),

doi VARCHAR(255),

volume VARCHAR(20),

issue_no VARCHAR(20),

published_date DATE

);