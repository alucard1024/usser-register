DROP Table if EXISTS users;
CREATE Table users(
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    user_Name VARCHAR(99) NOT NULL,
    user_Email VARCHAR(99) UNIQUE NOT NULL,
    user_Password VARCHAR(99) NOT NULL,
    user_State INTEGER(1) DEFAULT 1,
    user_time_created DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    user_time_updated DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

);
