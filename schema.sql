-- 1. Create and select the database
CREATE DATABASE IF NOT EXISTS mediqueue_db;
USE mediqueue_db;

-- 2. Clear existing tables safely for testing (in reverse dependency order)
SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE IF EXISTS medical_records;
DROP TABLE IF EXISTS appointments;
DROP TABLE IF EXISTS doctors;
DROP TABLE IF EXISTS patients;
DROP TABLE IF EXISTS admins;
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS clinics;
SET FOREIGN_KEY_CHECKS = 1;

-- ==========================================
-- DDL: Create 7 Exact Tables from Diagram
-- ==========================================

-- Table 1: Clinics 
CREATE TABLE clinics (
    clinic_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    location VARCHAR(255) NOT NULL,
    contact_info VARCHAR(100) NOT NULL
) ENGINE=InnoDB;

-- Table 2: Users (Superclass for Auth)
CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    role ENUM('Patient', 'Doctor', 'Admin') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Table 3: Admins (Subclass)
CREATE TABLE admins (
    admin_id INT PRIMARY KEY,
    FOREIGN KEY (admin_id) REFERENCES users(user_id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- Table 4: Patients (Subclass)
CREATE TABLE patients (
    patient_id INT PRIMARY KEY,
    FOREIGN KEY (patient_id) REFERENCES users(user_id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- Table 5: Doctors (Subclass)
CREATE TABLE doctors (
    doctor_id INT PRIMARY KEY,
    clinic_id INT NOT NULL,
    specialty VARCHAR(100) NOT NULL,
    FOREIGN KEY (doctor_id) REFERENCES users(user_id) ON DELETE CASCADE,
    FOREIGN KEY (clinic_id) REFERENCES clinics(clinic_id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- Table 6: Appointments 
CREATE TABLE appointments (
    appointment_id INT AUTO_INCREMENT PRIMARY KEY,
    patient_id INT NOT NULL,
    doctor_id INT NOT NULL,
    appointment_time DATETIME NOT NULL,
    status ENUM('Available', 'Booked', 'Cancelled') DEFAULT 'Available',
    FOREIGN KEY (patient_id) REFERENCES patients(patient_id) ON DELETE CASCADE,
    FOREIGN KEY (doctor_id) REFERENCES doctors(doctor_id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- Table 7: Medical Records 
CREATE TABLE medical_records (
    record_id INT AUTO_INCREMENT PRIMARY KEY,
    appointment_id INT NOT NULL UNIQUE,
    visit_notes TEXT NOT NULL,
    record_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (appointment_id) REFERENCES appointments(appointment_id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- ==========================================
-- DML: Insert Seed Data for Prototype Demo
-- ==========================================

INSERT INTO clinics (clinic_id, name, location, contact_info) VALUES 
(1, 'MediQueue Main Hospital', 'Dhaka, Bangladesh', '+880-1234-567890');

-- 1. Create Base Users
INSERT INTO users (user_id, email, password_hash, role) VALUES 
(1, 'admin@mediqueue.org', '$2y$10$e812...', 'Admin'),
(2, 'avance@mediqueue.org', '$2y$10$a1b2c3...', 'Doctor'),
(3, 'bmiller@patient.com', '$2y$10$x7y8z9...', 'Patient');

-- 2. Distribute Base Users into Subclass Tables
INSERT INTO admins (admin_id) VALUES (1);
INSERT INTO doctors (doctor_id, clinic_id, specialty) VALUES (2, 1, 'Cardiology');
INSERT INTO patients (patient_id) VALUES (3);

-- 3. Create Appointment and Medical Record
INSERT INTO appointments (appointment_id, patient_id, doctor_id, appointment_time, status) VALUES 
(101, 3, 2, '2026-08-10 10:00:00', 'Booked');

INSERT INTO medical_records (appointment_id, visit_notes) VALUES 
(101, 'Patient reported mild chest pain. Prescribed rest and standard diagnostic ECG.');
-- Insert the standard user into the users table
INSERT INTO users (user_id, email, password_hash, role) 
VALUES (1843, 'user0843@gmail.com', '$2y$10$wO3pE7jP.x8qQyQ/K2YIYe2V.QvE3sM5R1a8X/3kQ3vG8Z2m9P6qK', 'Patient')
ON DUPLICATE KEY UPDATE email = VALUES(email);

-- Link the user to the Patients subclass table
INSERT INTO patients (patient_id) 
VALUES (1843)
ON DUPLICATE KEY UPDATE patient_id = VALUES(patient_id);