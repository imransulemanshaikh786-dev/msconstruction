Star Transport - Project Setup Instructions

1. Database Setup:
   - Open phpMyAdmin (http://localhost/phpmyadmin).
   - Create a new database named 'excel_transport'.
   - Import the file 'database/schema.sql' located in this project folder.

2. Server Configuration:
   - Ensure Apache and MySQL are running in XAMPP.
   - The project uses an .htaccess file to parse HTML files as PHP. This requires the Apache module 'mod_rewrite' (usually enabled by default in XAMPP).
   - If pages download instead of opening, ensure your XAMPP Apache config allows .htaccess overrides:
     - Open 'httpd.conf' in XAMPP.
     - Find the <Directory "C:/xampp/htdocs"> block.
     - Change 'AllowOverride None' to 'AllowOverride All'.
     - Restart Apache.

3. Usage:
   - Access the site at: http://localhost/Excel_Transport/index.html
   - Admin Login: admin@startransport.com / admin123
   - Driver Login: Create a driver via Admin or use a registered driver account.
   - Customer Login: Register a new account.

4. Note:
   - All page files in 'pages/' have an '.html' extension but obtain PHP logic.
   - Do not rename them to '.php' unless you update all links.
