CREATE DATABASE erp_systems;

USE erp_systems;

CREATE TABLE employees (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  department VARCHAR(100),
  role VARCHAR(100),
  salary DECIMAL(10,2),
  date_joined DATE
);

CREATE TABLE leave_applications (
  id INT AUTO_INCREMENT PRIMARY KEY,
  employee_id INT,
  leave_type VARCHAR(50),
  start_date DATE,
  end_date DATE,
  reason TEXT,
  status VARCHAR(20) DEFAULT 'Pending',
  FOREIGN KEY (employee_id) REFERENCES employees(id)
);
