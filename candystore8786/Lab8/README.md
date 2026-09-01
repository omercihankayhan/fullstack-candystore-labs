Lab 8 README — PHP + MySQL CRUD Operations (NEST257)

Purpose
Lab 8 introduces full database integration using PHP and MySQL.
You build CRUD operations (Create, Read, Update, Delete) for the Candystore inventory.

Learning Objectives
- Connect PHP to MySQL
- Perform CRUD operations
- Use SQL queries inside PHP scripts
- Display database results on a webpage
- Update and delete records securely

Folder Contents
Lab8/
│
├── display_candies.php     # Read operation (SELECT)
├── insert_candies.php      # Create operation (INSERT)
├── update_candy.php        # Update operation (UPDATE)
├── delete_candy.php        # Delete operation (DELETE)
└── screenshots/            # Database output screenshots

Description
This lab transforms the Candystore project into a dynamic, database‑driven application.
You implement:
- Database connection using mysqli
- SQL queries for CRUD
- HTML tables to display results
- Forms to insert/update/delete candy records
This is the core of full‑stack development — connecting front‑end UI to real database logic.

How to Run
Place Lab8 under your Apache directory:
/var/www/candystore8786/
Ensure MySQL is running and your database is imported.

Update your connection details inside each PHP file:
php
$host = "localhost";
$user = "root";
$pass = "yourpassword";
$db   = "candystore";

Access the pages:
http://localhost/candystore8786/Lab8/display_candies.php
