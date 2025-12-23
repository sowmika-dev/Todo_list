<h1 align="center"><b>Full Stack Todo Application (CRUD)</b></h1>

---

## 📌 Project Overview
This project is a **Full Stack Web Application** developed to demonstrate **CRUD operations (Create, Read, Update, Delete)** on a specific data entity called **Task (Todo)**.  
The application integrates frontend, backend, and database layers using standard web technologies.

---

## 🎯 Objective
The objective of this project is to develop a **full stack web application** that allows users to:
- Create new tasks
- Read and view existing tasks
- Update task details
- Delete tasks with confirmation  

---

## 🛠️ Technologies Used

### Frontend
- HTML
- CSS
- JavaScript
- Bootstrap (for responsive and user-friendly UI)

### Backend
- PHP
- RESTful API approach

### Database
- MySQL

### Server
- Apache (XAMPP / LAMP / Localhost)

---

## 🏗️ Application Architecture

Frontend (HTML, CSS, JavaScript)  
↓  
Backend API (PHP)  
↓  
Database (MySQL)

The frontend communicates with the backend through HTTP requests.  
The backend processes these requests, interacts with the database, and returns responses to the frontend.

---

## 🔄 Development Approach (Important)

Initially, the CRUD operations were implemented using **separate PHP files**, such as:
- `store.php` – for creating tasks
- `update.php` – for updating tasks
- `delete.php` – for deleting tasks  

Later, for better **code organization, scalability, and maintainability**, all CRUD logic was refactored into a **single RESTful API file**:

- `api/tasks.php`

This API file now handles:
- Create
- Read
- Update
- Delete  

using appropriate HTTP methods.  
This improvement demonstrates an understanding of **professional backend design practices**.

---

## ⭐ Project Features
- Full CRUD functionality (Create, Read, Update, Delete)
- RESTful API-based backend
- Responsive and intuitive user interface
- Form input validation
- Delete confirmation before removing data
- Clean and well-organized code structure
- Separation of frontend, backend, and database logic

---

## 🗃️ Database Design

**Database Name:** `todo_app`  
**Table Name:** `tasks`

### Table Fields
- `id` – Primary Key (Auto Increment)
- `title` – Task title
- `description` – Task description
- `status` – Task status
- `created_at` – Date and time of creation

The database schema is designed to efficiently store and retrieve task information.

---

## 🔄 CRUD Operations Explained

### ➕ Create Operation
- Users can create new tasks using a form.
- Form inputs are validated.
- Valid data is stored in the MySQL database.

### 📖 Read Operation
- Existing tasks are retrieved from the database.
- Tasks are displayed in a user-friendly manner.

### ✏️ Update Operation
- Users can edit existing tasks.
- The edit form is prefilled with current task data.
- Updated information is saved to the database.

### 🗑️ Delete Operation
- Users can delete tasks.
- A confirmation prompt is shown before deletion.
- The selected task is removed from the database.

---

## ⚙️ Configuration Guide (Important)

The database connection file contains **placeholder values** for security and portability.

### Steps to Configure the Database

1. Open the database configuration file:
   - `database.php`

2. Replace the placeholder values with your actual database credentials:

   - Database host
   - Database username
   - Database password
   - Database name

```json
   {
    "host": "localhost",
    "user": "YOUR_DB_USERNAME",
    "pass": "YOUR_DB_PASSOWRD",
    "db": "YOUR_DB_NAME"
   }

```   

3. Save the file after updating the credentials.

This approach ensures the project can be easily configured for different environments without exposing sensitive information.

---

## ▶️ How to Run the Project

1. Place the project folder inside:
   - `htdocs` (XAMPP)  
   - or `/var/www/html` (LAMP)

2. Create the MySQL database and required table.

3. Configure the database credentials in `database.php`.

4. Start Apache and MySQL services.

5. Open a browser and visit:
   - `http://localhost/project-folder-name/htdocs/`

---
