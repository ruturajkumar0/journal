CREATE TABLE payments(

id INT AUTO_INCREMENT PRIMARY KEY,

author_id INT,

article_id INT,

amount DECIMAL(10,2),

payment_status VARCHAR(50),

transaction_id VARCHAR(255)

);