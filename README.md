# User Form Project
A simple web application built with **HTML, CSS, JavaScript, PHP, and MySQL**.  
It allows adding users with their **name** and **age**, storing them in a MySQL database, displaying all users in a table, and toggling their status between **0 and 1**.

---

## Features
- Add new users via a form (Name + Age).  
- Store submitted data into a MySQL database.  
- Display all records in a table below the form.  
- Each record has a **Toggle** button to switch status between 0 and 1.  
- The updated status is reflected immediately on the webpage.

---

## Technologies Used
- **HTML** → Page structure  
- **CSS** → Basic styling (`style.css`)  
- **JavaScript (Fetch API)** → Toggle status dynamically (`script.js`)  
- **PHP** → Handle form submissions (`process.php`) and database connection (`db.php`)  
- **MySQL** → Database to store user information

---

## Project Files
- `index.php` → Main page with form and table display.  
- `process.php` → Handles form submission and inserts data into the database.  
- `toggle.php` → Updates the status (0 or 1) for a user.  
- `db.php` → Contains the database connection details.  
- `script.js` → Sends toggle requests using Fetch API.  
- `style.css` → Adds basic styling to the page.

---

## Database Setup
1. Open **phpMyAdmin**.
2. Create a database named:user_data
3. Run the following SQL to create the `users` table:
```sql
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  age INT NOT NULL,
  status INT(1) DEFAULT 0
);


---

How to Run the project
1. Install XAMPP and start Apache and MySQL.
2. Copy the project folder to:
C:\xampp\htdocs\user_form_project
3. Open the project in your browser:
http://localhost/user_form_project/

---

Project created as part of the Smart Methods Summer Training Task.
