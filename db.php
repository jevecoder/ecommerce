<?php
include 'connection.php';
// Pangalan ng output SQL file
$outputFile = 'db.php';

// Mga SQL statements na isasama sa SQL file
$sqlStatements = [
   'CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    role ENUM("admin", "user") DEFAULT "user",
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);',
    'CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL UNIQUE,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);',
    

     'CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL,
    image_url VARCHAR(255),
    category_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);',
    

    'CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status VARCHAR(50) DEFAULT "Pending",
    FOREIGN KEY (user_id) REFERENCES users(id)
);',

'CREATE TABLE order_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (order_id) REFERENCES orders(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);'
];

// Pagbubukas ng file para sa pagsulat
$file = fopen($outputFile, 'w');

// Pag-check kung nakabukas ng maayos ang file
if ($file === false) {
    die('Unable to create file ' . $outputFile);
}

// Pagsusulat ng SQL statements sa file
foreach ($sqlStatements as $sql) {
    fwrite($file, $sql . "\n");
}

// Pagsasara ng file
fclose($file);

echo 'SQL file generated successfully: ' . $outputFile;
?>
