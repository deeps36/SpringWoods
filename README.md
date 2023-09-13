# SpringWoods

# Project Name

This is a simple project in initial phase where a basic template is used and which covers all the features that needed to run the society !!

# Project Installation Guide

Before you can run this application, please ensure that your system meets the following requirements:

- PHP version >= 7.3
- Composer >= 1.10.13
- XAMPP Server >= 3.2.0

## Getting Started

1. **Clone the Repository:** Start by cloning this repository to your local machine.

2. **Open Terminal:** Open your terminal or command prompt.

3. **Navigate to Project Directory:** Change your current directory to the project folder where you cloned the repository.

4. **Install Dependencies:** Run the following command to install project dependencies using Composer:
   ```bash
   composer install

5.Configure Environment Variables: Open your project's .env file and make sure to update the following variables according to your database setup:
   
    - DB_DATABASE: Your database name.
    - DB_USERNAME: Your database username.
    - DB_PASSWORD: Your database password.

6. Generate Application Key: Run the following command to generate your application key:

        php artisan key:generate

7. Start XAMPP Server: Start your XAMPP server.

8. Database Migration and Seeding: In your terminal, paste and run the following command to set up your database tables and seed data:

        php artisan migrate:fresh --seed

9. Run the Application: Start the application on your local machine with the following command:

        php artisan serve
10. Access the Application: Once it's running on your local machine, access it via the following link:
    
https://127.0.0.1:8000

