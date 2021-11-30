CREATE DATABASE shippingSolutions;
USE shippingSolutions;

CREATE TABLE users (
	id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    type VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    address VARCHAR(255),
    pendingOrders INT,
    deliveredOrders INT,
    
    PRIMARY KEY (id),
    CONSTRAINT chkType CHECK (type IN ('driver', 'client', 'exec'))
);

CREATE TABLE orders (
	id INT NOT NULL AUTO_INCREMENT,
    clientId INT NOT NULL,
	payload VARCHAR(255),   
    status VARCHAR(255),
    dateDelivered DATE,
    driverName VARCHAR(255),
    
    PRIMARY KEY (id),
    FOREIGN KEY (clientId) REFERENCES users(id),
    CONSTRAINT chkStatus CHECK (status IN ('Delivered', 'Pending'))
);

-- Adding some example users
INSERT INTO users (
    name,
    type,
    username,
    password
)
VALUES 
(
    'Omar Alomar',
    'exec',
    'omaro2000',
    'pass123'
),
(
    'Mike Lawson',
    'driver',
    'mikey0',
    'qwerty'
),
(
    'Mahmoud Zaatari',
    'driver',
    'mohd44',
    'qwerty123'
);
INSERT INTO users (
    name,
    type,
    username,
    password,
    address,
    pendingOrders,
    deliveredOrders
)
VALUES 
(
    'Mark Scott',
    'client',
    'mark123',
    'asf444',
    '1432 Arroyo Lane',
    0,
    1
),
(
    'Bob Lewis',
    'client',
    'mark123',
    'tgif33',
    '123 Campus Drive',
    1,
    1
);