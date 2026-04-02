# 🚗 Car Sales Shop

A Laravel-based web application for buying and selling cars with an admin panel for management and a contact page for user inquiries.

## 📋 Project Overview

This project is a learning application built with the **Laravel Framework** to create a functional car sales platform. The UI was designed using **Cursor AI** to provide a modern and responsive user experience. The application includes essential features for an automotive marketplace.

## ✨ Features

### 🏠 Public Features
- **Car Listings**: Browse available cars for sale
- **Detailed Car Views**: View comprehensive information about each vehicle
- **Contact Page**: Submit inquiries and messages to the admin

### 🔐 Admin Panel
- **Admin Authentication**: Secure login system for administrators
- **Dashboard**: Central hub for managing the platform
- **Listing Management**: Add, edit, and delete car listings
- **Contact Management**: View and respond to user inquiries
- **Functionality**: Mid-level admin features for basic platform management

## 🛠 Technologies Used

- **Backend Framework**: [Laravel](https://laravel.com/)
- **Frontend UI**: HTML, CSS, JavaScript
- **UI Design Tool**: [Cursor AI](https://www.cursor.sh/)
- **Database**: MySQL
- **Server**: PHP

## 📦 Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/TON-617-5PM0-5/car_sales_shop.git
   cd car_sales_shop
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Create environment configuration**
   ```bash
   cp .env.example .env
   ```

4. **Generate application key**
   ```bash
   php artisan key:generate
   ```

5. **Configure database**
   - Update `.env` with your database credentials

6. **Run migrations**
   ```bash
   php artisan migrate
   ```

7. **Seed the database (optional)**
   ```bash
   php artisan db:seed
   ```

8. **Start the development server**
   ```bash
   php artisan serve
   ```

The application will be accessible at `http://localhost:8000`

## 🚀 Usage

### For Users
- Navigate to the homepage to browse available cars
- Click on individual listings to view detailed information
- Use the contact page to send inquiries about specific vehicles

### For Admins
- Login to the admin panel using admin credentials
- Access the dashboard to manage car listings
- View and respond to customer inquiries
- Manage the overall platform content

## 📚 Learning Goals

This project was created as a learning exercise to understand:
- Laravel framework fundamentals
- MVC architecture implementation
- User authentication and authorization
- Admin panel development
- Form handling and validation
- Database management with Laravel

## 🎯 Current Status

-  User-facing car listings
-  Admin authentication
-  Admin panel (mid-development)
-  Contact page functionality

## 👨‍💻 Author

**TON-617-5PM0-5** - Learning Laravel & Web Development

---

**Note**: This is a learning project and may have ongoing development and improvements.
