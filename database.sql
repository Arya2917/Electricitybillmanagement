CREATE DATABASE IF NOT EXISTS electricity_bills;
USE electricity_bills;

CREATE TABLE IF NOT EXISTS customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    address VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS bills (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT,
    amount DECIMAL(10, 2),
    due_date DATE,
    FOREIGN KEY (customer_id) REFERENCES customers(id)
);
