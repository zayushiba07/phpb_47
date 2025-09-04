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
SELECT CASE gender WHEN 'Male' THEN 'M' WHEN 'Female' THEN 'F' END, users.* FROM users; 
SELECT (CASE gender WHEN 'Male' THEN 'M' ELSE 'F' END) gender, users.* FROM users;
SELECT (IF(gender = 'Male', 'M', 'F')) gender, users.* FROM users;
SELECT CEIL(AVG(height)) avg_height, FLOOR(AVG(weight)) avg_weight, users.* FROM users GROUP BY gender;
SELECT CEIL(12.34) `ceil`, FLOOR(67.89) `floor`; -- 13, 67
SELECT ROUND(12.34); -- 12
SELECT ROUND(12.64); -- 13
SELECT ROUND(12.66, 1); -- 12.7
SELECT ROUND(12.66, -1); -- 10
SELECT ROUND(15.66, -1); -- 20

==================== AUTO_INCREMENT ====================
ALTER TABLE student AUTO_INCREMENT = 1;
