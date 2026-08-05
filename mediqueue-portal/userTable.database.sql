CREATE TABLE users(

id INT PRIMARY KEY AUTO_INCREMENT,

fullname VARCHAR(100),

email VARCHAR(100) UNIQUE,

password VARCHAR(255),

role ENUM('admin','patient')

DEFAULT 'patient',

created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);
