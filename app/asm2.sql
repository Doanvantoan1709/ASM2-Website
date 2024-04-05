USE asm2;


;

CREATE TABLE products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL UNIQUE,
    image VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    sale_price DECIMAL(10,2) NOT NULL,
    description TEXT NOT NULL,
    status TINYINT(1) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NULL DEFAULT NULL
);


Create table users
(
    id int primary key auto_increment,
    name varchar(100) NOT NULL,
    email varchar(100) NOT NULL UNIQUE,
    password varchar(200) NOT NULL,
    created_at date DEFAULT current_timestamp(),
    updated_at date null
);

Create table personal_access_tokens
(
    id int primary key auto_increment,
    name varchar(100) NOT NULL,
    email varchar(100) NOT NULL UNIQUE,
    password varchar(200) NOT NULL,
    created_at date DEFAULT current_timestamp(),
    updated_at date null
);



Create table customers
(
    id int primary key auto_increment,
    name varchar(100) NOT NULL,
    email varchar(100) NOT NULL UNIQUE,
    phone varchar(100) NOT NULL UNIQUE,
    address varchar(100) NULL,
    gender tinyint NOT NULL DEFAULT '0',
    password varchar(200) NOT NULL,
    email_verified_at date null,
    created_at date DEFAULT current_timestamp(),
    updated_at date null
);

Create table customer_reset_tokens
(
    email varchar(100) primary key,
    token varchar(100) NOT NULL UNIQUE,
    created_at date DEFAULT current_timestamp(),
    updated_at date null
);



Create table carts
(
    customer_id int NOT NULL,
    product_id int NOT NULL,
    price float(10,2) not null,
    quantity int not null,
    primary key (customer_id, product_id),
    FOREIGN KEY (customer_id) REFERENCES customers(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);


Create table orders
(
    id int primary key auto_increment,
    name varchar(100) NULL,
    email varchar(100) NULL,
    phone varchar(100) NULL,
    address varchar(100) NULL,
    token varchar(50) NULL,
    customer_id int NOT NULL,
    status tinyint(1) DEFAULT '0',
    created_at date DEFAULT current_timestamp(),
    updated_at date null,
    FOREIGN KEY (customer_id) REFERENCES customers(id)
);

Create table order_details
(
    order_id int NOT NULL,
    product_id int NOT NULL,
    quantity tinyint NOT NULL,
    price float(10,3) NOT NULL,
    primary key (order_id, product_id),
    FOREIGN KEY (order_id) REFERENCES orders(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);
