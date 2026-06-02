CREATE TABLE article_metrics(

id INT AUTO_INCREMENT PRIMARY KEY,

article_id INT,

views INT DEFAULT 0,

downloads INT DEFAULT 0,

citations INT DEFAULT 0

);