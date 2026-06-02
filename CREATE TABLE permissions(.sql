CREATE TABLE permissions(
id INT AUTO_INCREMENT PRIMARY KEY,
role_id INT,
module_name VARCHAR(100),
can_view TINYINT(1),
can_add TINYINT(1),
can_edit TINYINT(1),
can_delete TINYINT(1)
);