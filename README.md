# 🏬 Stationery Store Management System (Cửa hàng văn phòng phẩm) 

A full-featured **Stationery Store Website** built with the **MVC architecture**, providing both **customer-facing e-commerce features** and a **management/admin system**.  
This project demonstrates practical experience in **web application development**, **database design**, **API integration**, and **real-world business workflows**.

---

## 🚀 Project Overview

The Stationery Store Management System is designed to support:
- Online product browsing and purchasing for customers
- Order management and payment processing
- Administrative operations such as product, employee, and invoice management
- Business statistics and reporting with Excel export

The system is suitable for small to medium-sized stationery businesses and serves as a solid demonstration of full-stack development skills.

---

## 🎯 Key Features

### 👤 Authentication & Authorization
- User login / logout
- Role-based access (Admin / Staff / Customer)
- Secure session handling

---

### 🛒 Customer Features (Frontend)
- Browse products by category
- View product details
- Add products to shopping cart
- Update cart quantities
- Place orders
- Online payment via **VNPay**
- View order history

---

### 📦 Product Management
- Add, edit, delete products
- Manage product categories
- Product status control (available / out of stock)
- Image and price management

---

### 🧑‍💼 Employee Management
- Add, update, delete employees
- Assign roles and responsibilities
- Track employee-related activities

---

### 🧾 Order & Invoice Management
- Create and manage orders
- Generate invoices
- Invoice status tracking
- Statistical reports based on invoices

---

### 📊 Statistics & Reports
- Revenue statistics by date/month/year
- Order statistics
- Best-selling products
- Export reports to **Excel**
- Data provided via **RESTful APIs**

---

### 📝 Content & Interaction
- Post and manage articles/news
- Customer Q&A (questions and responses)
- Customer management

---

## 🧩 Data Models

The system includes the following core models:

- **Account** – User authentication and roles
- **Product** – Product information
- **ProductCategory** – Product classification
- **Customer** – Customer details
- **Employee** – Staff management
- **Order** – Customer orders
- **Invoice** – Payment and billing records
- **Question** – Customer questions
- **Post** – News and articles

---

## 🏗️ System Architecture

Presentation Layer (Frontend) -> Controller Layer (MVC Controllers) -> Service / API Layer -> Model Layer -> 
Database

- MVC pattern ensures clear separation of concerns
- APIs support statistics and Excel export
- Easy to maintain and extend

---

## 🛠️ Technologies Used

### Backend
- PHP
- MVC Architecture
- RESTful APIs
- Database ORM / DAO pattern

### Frontend
- HTML, CSS, JavaScript
- MVC View layer
- Responsive UI

### Database
- Relational Database (MySQL / SQL Server)

### Payment
- **VNPay Payment Gateway Integration**

### Other Tools
- Excel Export
- Git & GitHub

---

## ⚙️ Installation & Setup

### Clone the repository
```bash
git clone https://github.com/DuyHoan23/Stationery-Store-Management-System.git
cd Stationery-Store-Management-System
