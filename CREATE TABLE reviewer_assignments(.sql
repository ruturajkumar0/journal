CREATE TABLE reviewer_assignments(

id INT AUTO_INCREMENT PRIMARY KEY,

manuscript_id INT,

reviewer_id INT,

assigned_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

review_status VARCHAR(50)

);