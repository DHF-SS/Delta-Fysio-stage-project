CREATE DATABASE IF NOT EXISTS physio;
USE physio;

-- =========================
-- ADMIN USERS
-- =========================
CREATE TABLE admin_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO admin_users (username, password)
VALUES ('admin', MD5('1234'));

-- =========================
-- PRICES
-- =========================
CREATE TABLE prices (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name_key VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    description_key VARCHAR(255) NOT NULL
);

INSERT INTO prices (name_key, price, description_key) VALUES
('intake', 35.00, 'Initial consultation'),
('sportmassage', 45.00, 'Sports massage'),
('dryneedling', 55.00, 'Dry needling treatment'),
('revalidatie', 60.00, 'Rehabilitation therapy'),
('therapie', 50.00, 'Personal therapy');

-- =========================
-- EMPLOYEES
-- =========================
CREATE TABLE employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    role VARCHAR(100) NOT NULL,
    description TEXT,
    image VARCHAR(255)
);

INSERT INTO employees (name, role, description, image) VALUES
('Jan de Vries', 'Sports Physiotherapist', 'Specialist in sports injuries', 'images/medewerker1.jpg'),
('Lisa Jansen', 'Physiotherapist', 'Back and neck specialist', 'images/medewerker2.jpg'),
('Mark Bakker', 'Rehabilitation Specialist', 'Post-surgery recovery expert', 'images/medewerker3.jpg');

-- =========================
-- CONTACT INFO
-- =========================
CREATE TABLE contact_info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    phone VARCHAR(50),
    email VARCHAR(100),
    address TEXT
);

INSERT INTO contact_info (phone, email, address)
VALUES (
    '0187490973',
    'info@deltafysio.nl',
    'Deltageul 22, 3251NG Stellendam'
);