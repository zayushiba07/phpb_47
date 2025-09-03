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

==================== AUTO_INCREMENT ====================
ALTER TABLE student AUTO_INCREMENT = 1;
