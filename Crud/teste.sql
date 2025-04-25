create database teste;
use teste;
CREATE TABLE employees (
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(100) NOT NULL,
address VARCHAR(255) NOT NULL,
salary INT NOT NULL
);
INSERT INTO employees (name, address, salary)
VALUES ('Maria Souza', 'Av. B, 456', 6000);
INSERT INTO employees (name, address, salary)
VALUES ('João Silva', 'Rua A, 123', 5000);
UPDATE employees
SET salary = 5500
WHERE name = 'João Silva';
DELETE FROM employees WHERE name = 'Maria Souza';
select * from employees;