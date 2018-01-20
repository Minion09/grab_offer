CREATE TABLE users (
              id INT NOT NULL AUTO_INCREMENT,
              PRIMARY KEY(id),
              first_name VARCHAR(20),
              last_name VARCHAR(20),
              password CHAR(40) NOT NULL,
              email VARCHAR(50) UNIQUE,
              role VARCHAR(20) DEFAULT 'user'
            );

CREATE TABLE products (
              id INT NOT NULL AUTO_INCREMENT,
              PRIMARY KEY(id),
              title VARCHAR(20),
              description TEXT,
              price DECIMAL ,
              offered_price DECIMAL,
              product_img_link TEXT
            );