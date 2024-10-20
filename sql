CREATE TABLE Engineers (
    EngineerID INT AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(50) NOT NULL,
    LastName VARCHAR(50) NOT NULL,
    Birthdate DATE NOT NULL,
    Age INT NOT NULL,
    Address VARCHAR(255),
    Position VARCHAR(50),
    Salary DECIMAL(10, 2) NOT NULL
);
