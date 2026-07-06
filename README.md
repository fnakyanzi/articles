# Student Internship Portal

A web-based internship management system built with **PHP Yii2 Framework** and **PostgreSQL**. The project allows university students (interns) to register, log in, and manage articles while providing a practical introduction to the Yii2 MVC architecture, authentication, ActiveRecord, and CRUD operations.



Project Overview

The Student Internship Portal was developed as a learning project to strengthen my understanding of PHP, the Yii2 Framework, PostgreSQL, and object-oriented programming. Instead of relying entirely on Yii2's Gii code generator, many features were implemented manually to better understand how the framework works behind the scenes.

The application currently supports:

* Intern registration
* Secure login using hashed passwords
* Article creation
* Viewing articles
* Editing articles
* Deleting articles
* University selection during registration
* Authentication using Yii2 IdentityInterface



## Technologies Used

* PHP
* Yii2 Framework
* PostgreSQL
* Bootstrap 5
* HTML5
* CSS3
* DBeaver
* VS Code
* Ubuntu Linux

---

## Features

### Guest Users

* View landing page
* Register as a new intern
* Login to the system

### Interns

* Login securely
* Create articles
* View all articles
* view their own articles
* Update articles
* Delete articles

---

## Database Tables

### Interns

* id
* first_name
* last_name
* username
* email
* password_hash
* auth_key
* university_id

### Universities

* id
* university_name

### Articles

* id
* title
* description
* rating
* created_on
* interns_id (fk to pick intern who created that article)

---

## Project Structure

```
controllers/
    SiteController.php
    ArticlesController.php

models/
    Interns.php
    Articles.php
    University.php
    LoginForm.php

views/
    site/
    articles/
    layouts/

config/
    web.php

web/
    images/
```

---

## Authentication

Authentication is implemented using Yii2's `IdentityInterface`.

During signup:

* Passwords are hashed before being stored in the database.
* An authentication key is generated for each intern.

During login:

* The entered username is searched in the Interns table.
* The entered password is compared with the stored password hash.
* If successful, Yii creates a user session.

---

## CRUD Operations

### Create

Interns can create new articles.

### Read

Interns can view the list of created articles.

### Update

Existing articles can be edited using the same form used for creation.

### Delete

Articles can be permanently removed from the database.

---

## What I Learned

This project helped me understand:

* MVC architecture
* ActiveRecord models
* Controllers and actions
* Views and ActiveForm
* Routing in Yii2
* Database relationships
* Password hashing
* User authentication
* IdentityInterface
* CRUD operations
* Form validation
* Bootstrap integration
* PostgreSQL with Yii2

---

## Challenges Faced

Throughout development, I encountered several issues that became valuable learning experiences.

### Authentication

* Understanding how `IdentityInterface` works.
* Configuring the Interns model to act as the application's authenticated user.
* Implementing login without using Yii2's default User model.

### Password Handling

* Confusion between `password` and `password_hash`.
* Learning to hash passwords during registration.
* Validating hashed passwords correctly during login.

### Routing

* Incorrect controller routes.
* Redirecting to non-existent actions.
* InvalidRouteException errors.

### Forms

* Submit button placed outside the ActiveForm.
* Forms not submitting because of incorrect HTML structure.
* Missing model being passed to the login view.

### Database

* Foreign key naming inconsistencies.
* Forgetting to save related IDs.
* Missing required columns such as `auth_key`.

### Relationships

* Incorrect `hasOne()` and `hasMany()` relationships.
* Confusion about where relationships belong.
* Attempting to define relationships inside a Form Model.

### Debugging

* Learning to use:

  * var_dump()
  * $model->errors
  * PostgreSQL table inspection

---

## Future Improvements

Some features planned for future versions include:

* Role-based access control
* Internship supervisors
* Weekly progress reports
* File uploads
* Profile management
* Search and filtering
* Dashboard analytics
* Password reset
* Email verification
* Pagination
* Responsive dashboard

---

## Installation

Clone the repository:

```bash
git clone https://github.com/your-username/student-internship-portal.git
```

Move into the project:

```bash
cd student-internship-portal
```

Install dependencies:

```bash
composer install
```

Configure your PostgreSQL database in:

```
config/db.php
```

Run the application:

```bash
php yii serve
```

Open:

```
http://localhost:8080
```

---

## Author

**Nakyanzi Faridah**

This project was built as part of my journey to become a full-stack PHP developer. The focus was on understanding concepts thoroughly by building features manually rather than relying solely on automated code generation.

---

## License

This project is available for learning, educational purposes, and portfolio demonstration.
