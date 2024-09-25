CREATE DATABASE your_actual_database;

USE your_actual_database;

CREATE TABLE scheduled_services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    request_id VARCHAR(255),
    laptop_id VARCHAR(255),
    customer_name VARCHAR(255),
    laptop_model VARCHAR(255),
    laptop_serial_number VARCHAR(255),
    issue_description TEXT,
    service_date DATE,
    service_time TIME
);
