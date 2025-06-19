# 🚗 Vehicle Rental System in Laravel

This is a web-based **Vehicle Rental Management System** built using **Laravel**. It allows users to book vehicles online, manage vehicle listings, check availability, and much more.

## 🔗 Features

- User registration and login
- Vehicle listing and management
- Booking vehicles
- Admin panel for managing vehicles and users
- Role-based access control
- Payment integration ready (optional)
- Responsive user interface

---

## 🖥️ Requirements

Make sure your system has the following installed:

- PHP >= 8.0
- Composer
- Laravel >= 9.x
- MySQL or any other supported database
- Node.js & npm (for frontend assets)
- Git (for cloning the repository)

---

## 📦 How to Install on Your Local Machine

### 1. Clone the Repository

Open your terminal and run:

```bash
git clone https://github.com/creativedesk1000/vehicle-rental-system-in-laravel.git
cd vehicle-rental-system-in-laravel
2. Install PHP Dependencies
bash
Copy
Edit
composer install
3. Install Frontend Dependencies
bash
Copy
Edit
npm install && npm run dev
4. Setup Environment File
Copy the .env.example to .env:

bash
Copy
Edit
cp .env.example .env
5. Generate Application Key
bash
Copy
Edit
php artisan key:generate
6. Configure Database
Open the .env file and update the following lines with your database credentials:

env
Copy
Edit
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
7. Run Migrations
bash
Copy
Edit
php artisan migrate
8. (Optional) Seed the Database
bash
Copy
Edit
php artisan db:seed
9. Start the Development Server
bash
Copy
Edit
php artisan serve
Then visit: http://127.0.0.1:8000

📁 Folder Structure
app/ - Core application logic

routes/ - Web and API routes

resources/views/ - Blade templates for frontend

public/ - Frontend assets (CSS, JS, images)

database/ - Migrations and seeders

📄 License
This project is open-source and free to use under the MIT License.

🙋‍♂️ Contributing
Feel free to fork this repository and submit pull requests. For major changes, please open an issue first to discuss what you'd like to change.

📧 Contact
If you face any issues, feel free to open an issue or contact the maintainer:

Creative Desk
GitHub: @creativedesk1000


