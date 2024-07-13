**PHP MongoDB CRUD Script**

This repository contains a PHP script to perform basic CRUD (Create, Read, Update, Delete) operations on a MongoDB collection.

**Requirements:**

* PHP with MongoDB driver extension ([https://www.php.net/manual/en/set.mongodb.php](https://www.php.net/manual/en/set.mongodb.php))
* Composer (for dependency management, optional)

**How to Use:**

1. **Clone the repository:**

   ```bash
   git clone https://github.com/zawad1992/mongo_php_crud.git
   ```

2. **Install dependencies (if using Composer):**

   ```bash
   cd mongo_php_crud
   composer install
   ```

   Replace `<composer install>` with the specific command your project uses if different (e.g., `php composer.phar install`).

3. **Configure connection details:**

   Edit the `db_connection.php` script and update the following variables with your MongoDB connection details:

   ```php
   $uri = "mongodb://localhost:27017";
   $dbName = "mydatabase"; // This should be your specific db name
   $collectionName = "users"; // This should be your specific collection/table name
   ```

4. **Run the script:**

   ```bash
   # For Windows use
   .\insert_curl.bat

   # For Mac or Linux use
   ./insert_curl.sh
   ```

   This script will attempt to create 1000 random user documents in your MongoDB collection. You can modify the script to perform other CRUD operations as needed.

**Additional Notes:**

* This script uses a basic approach to generate random names and emails. You can improve it for more realistic data generation.
* Consider implementing error handling and validation in a production environment.

**Contributing:**

We welcome contributions to this project!.
