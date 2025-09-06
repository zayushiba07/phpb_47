==================== INSERT ====================
INSERT INTO student (name, age, weight) VALUES ("Ayushiba", 21, 52.30);
INSERT INTO student (name, age, weight) VALUES ("anu", 21, 82.30);
INSERT INTO student (name, age, weight) VALUES ("ram", 56, 80.30);
INSERT INTO student (name, age, weight) VALUES ("radha", 45, 75.30);
INSERT INTO student (name, age, weight) VALUES ("rajan", 32, 52.30);
INSERT INTO student VALUES ('', "krish", 23, 60.23);

==================== DELETE ====================
DELETE FROM tablename WHERE condition;
DELETE FROM student WHERE id = 4;

==================== UPDATE ====================
UPDATE tablename SET fildname WHERE condition;
UPDATE stud SET Student_Name = "Ayushiba" WHERE id = 3;

==================== SELECT ====================
SELECT * FROM student;
SELECT * FROM student WHERE id = 6;
SELECT * FROM student WHERE age >= 24;
SELECT * FROM stud WHERE degree = "BCA" AND gender = "f";
SELECT * FROM stud WHERE degree = "BCA" OR degree = "BSCIT";
SELECT student_name FROM stud ORDER BY student_name;
SELECT student_name FROM stud ORDER BY student_name DESC;
SELECT * FROM customers WHERE state IS NOT NULL;
SELECT * FROM customers WHERE state IS NULL;
SELECT * FROM stud WHERE student_name LIKE "%a";
SELECT * FROM stud WHERE student_name LIKE "a%";
SELECT * FROM stud WHERE student_name LIKE "%a%";
SELECT * FROM stud WHERE student_name LIKE "____";
SELECT * FROM `customers` WHERE dob < '1999-01-01';
SELECT * FROM `users` WHERE email LIKE '%.%@%';
SELECT * FROM `users` WHERE (name LIKE 'n%' AND gender = 'Male') OR user_occupation = 'Teacher';
SELECT * FROM `users` ORDER BY gender, user_occupation DESC; 
SELECT COUNT(*), users.* FROM `users` GROUP BY user_occupation ORDER BY COUNT(*); 
SELECT AVG(height) `Avg Height`, MAX(height) max_height, MIN(height) min_height, users.* FROM `users` GROUP BY gender;
SELECT SUM(weight) weight_sum, users.* FROM `users` GROUP BY gender;
SELECT (DATEDIFF(NOW(), date_of_birth) / 365) age, users.* FROM `users`;
SELECT CURRENT_DATE(), DATE(NOW());
SELECT (CASE gender WHEN 'Male' THEN 'M' WHEN 'Female' THEN 'F' END) gender, users.* FROM users; 
SELECT (CASE gender WHEN 'Male' THEN 'M' ELSE 'F' END) gender, users.* FROM users;
SELECT (IF(gender = 'Male', 'M', 'F')) gender, users.* FROM users;
SELECT CEIL(AVG(height)) avg_height, FLOOR(AVG(weight)) avg_weight, users.* FROM users GROUP BY gender;
SELECT CEIL(12.34) `ceil`, FLOOR(67.89) `floor`; -- 13, 67
SELECT ROUND(12.34); -- 12
SELECT ROUND(12.64); -- 13
SELECT ROUND(12.66, 1); -- 12.7
SELECT ROUND(12.66, -1); -- 10
SELECT ROUND(15.66, -1); -- 20
SELECT id, CONCAT(first_name, ' ', last_name) full_name FROM `users`; 
SELECT id, CONCAT(MID(name, 1, LOCATE(' ', name)), father_name) full_name, name, father_name FROM `users`;
SELECT id, CONCAT(SUBSTRING_INDEX(name, ' ', 1), ' ', father_name) full_name FROM `users`;
SELECT u.id, u.name, m.message, m.created_at FROM users u, messages m WHERE u.id = m.user_id_1 AND u.id = 1;
SELECT u.id, u.name, m.message, m.created_at FROM users u JOIN messages m ON u.id = m.user_id_1 WHERE u.id = 1;
SELECT u.id, u.name, m.message, m.created_at FROM users u LEFT JOIN messages m ON u.id = m.user_id_1 WHERE u.id = 3;
SELECT u.id, u.name, m.message, m.created_at FROM messages m RIGHT JOIN users u ON u.id = m.user_id_1 WHERE u.id = 3;
SELECT * FROM `users` LIMIT 4 OFFSET 10;
SELECT * FROM `users` LIMIT 10, 4;

==================== AUTO_INCREMENT ====================
ALTER TABLE student AUTO_INCREMENT = 1;
ALTER TABLE a CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
ALTER TABLE table1 CHANGE field1 field2 INT NOT NULL DEFAULT 11;
ALTER TABLE table1 CHANGE field2 field3 VARCHAR(22) NOT NULL DEFAULT '',
	ADD gender ENUM('Male', 'Female') NOT NULL DEFAULT 'Male' FIRST,
	ADD name VARCHAR(33) NOT NULL DEFAULT '' AFTER gender;
ALTER TABLE table1 RENAME COLUMN name TO full_name;
ALTER TABLE table1 RENAME TO table2;

8 bits (1 Byte) TinyInt Signed -128 to 127
8 bits (1 Byte) TinyInt Unsigned 0 to 255
16 bits (2 Bytes) SmallInt Signed -32,768 to 32,767
16 bits (2 Bytes) SmallInt Unsigned 0 to 65,535
24 bits (3 Bytes) MediumInt Signed -83,88,608 to 83,88,607
24 bits (3 Bytes) MediumInt Unsigned 0 to 1,67,77,216
32 bits (4 Bytes) Int Signed -2,14,74,83,648 to 2,14,74,83,647
32 bits (4 Bytes) Int Unsigned 0 to 4,29,49,67,296
64 bits (8 Bytes) BigInt Signed -92,23,37,20,37,09,54,83,064 to 92,23,37,20,37,09,54,83,063
64 bits (8 Bytes) BigInt Unsigned 0 to 1,84,46,74,40,73,70,95,51,615
