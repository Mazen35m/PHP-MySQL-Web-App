## 📌 Project Overview
This is a lightweight web application built using **HTML, CSS, JavaScript, PHP, and MySQL**. It allows users to submit their name and age via a simple form, stores the data in a database, and displays all records in a responsive table. Additionally, it features an asynchronous toggle button to update the status of any record instantly without reloading the page.

## ✨ Features (Task Requirements Completed)
1. **Web Design:** Designed using HTML, CSS, JavaScript, and PHP.
2. **User Input:** Created a clean, one-line form to submit Name and Age.
3. **Database Integration:** Securely stores submitted data into a MySQL database table.
4. **Data Display:** Fetches and displays all database records in a well-structured table below the form.
5. **AJAX Toggle Button:** Added a toggle button for each record that switches the `status` value between `0` and `1` in the database.
6. **Real-time UI Update:** Reflects the updated status immediately on the webpage after toggling (using the JavaScript Fetch API) without needing a page refresh.

## 🛠️ Technologies Used
- **Frontend:** HTML5, CSS3, Vanilla JavaScript (Fetch API)
- **Backend:** PHP
- **Database:** MySQL

## 📂 File Structure Explained
- `index.php`: The main user interface containing the form, the HTML data table, and the JavaScript logic for the background AJAX requests.
- `db.php`: Establishes the connection to the MySQL database.
- `insert.php`: Handles the form submission (POST request) and inserts new user records into the database.
- `toggle.php`: A backend endpoint that receives the AJAX request to flip the status (`0` to `1` or vice versa) in the database and returns the new status.

## 🚀 How to Run the Project
1. **Database Setup:**
   - Open your MySQL manager (e.g., phpMyAdmin).
   - Create a database and run the following SQL command to create the required table:
     ```sql
     CREATE TABLE users (
         id INT AUTO_INCREMENT PRIMARY KEY,
         name VARCHAR(100) NOT NULL,
         age INT NOT NULL,
         status TINYINT(1) DEFAULT 0
     );
     ```

2. **Configure Database Connection:**
   - Open `db.php`.
   - Update the `$host`, `$user`, `$pass`, and `$dbname` variables to match your server credentials.

3. **Run the App:**
   - Upload the files to your server (or place them in the `htdocs` folder if using XAMPP).
   - Open your browser and navigate to the project link (e.g., `index.php`).
