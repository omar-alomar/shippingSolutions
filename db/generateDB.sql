CREATE DATABASE shippingSolutions;
USE shippingSolutions;

CREATE TABLE users (
	id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    type VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    
    PRIMARY KEY (id),
    CONSTRAINT chkType CHECK (type IN ('driver', 'client', 'exec'))
);

CREATE TABLE clients (
	id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    userId INT NOT NULL,
    address VARCHAR(255),
    pendingOrders INT,
    deliveredOrders INT,
    
    PRIMARY KEY (id),
    FOREIGN KEY (userId) REFERENCES users(id)
);

CREATE TABLE orders (
	id INT NOT NULL AUTO_INCREMENT,
    clientId INT NOT NULL,
	payload VARCHAR(255),   
    status VARCHAR(255),
    dateDelivered DATE,
    driverName VARCHAR(255),
    
    PRIMARY KEY (id),
    FOREIGN KEY (clientId) REFERENCES clients(id),
    CONSTRAINT chkStatus CHECK (status IN ('Delivered', 'Pending'))
);