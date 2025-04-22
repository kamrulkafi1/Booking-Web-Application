# Travel Package Booking Web Application

This repository contains the **Travel Package Booking Web Application**, a Laravel-based platform designed to simplify travel agency operations by allowing users to browse, book, and manage travel packages. The application also provides administrative functionalities for managing bookings, users, and payments.

---

## Features

### User Features
- **Registration and Login**: Users can create accounts and log in securely.
- **Browse Packages**: View detailed travel package descriptions.
- **Booking**: Book travel packages easily through a user-friendly interface.
- **Payment Management**: Manage payments and download invoices.
- **Contact Form**: Send inquiries directly to the agency.

### Admin Features
- **Admin Dashboard**: Manage packages, bookings, users, and system analytics.
- **User Management**: Add, edit, and remove users.
- **Package Management**: Create, update, or delete travel packages.
- **Booking Management**: Oversee booking statuses and payment information.
- **Analytics**: View system statistics for business insights.

---

## Technologies Used

### Frontend
- **Blade**: Templating engine for Laravel.
- **Tailwind CSS**: For responsive and modern design.

### Backend
- **Laravel Framework**: Robust backend development framework.
- **Eloquent ORM**: Database operations.

### Database
- **MySQL**: Relational database management.

### Security
- **Laravel Sanctum**: Provides secure user authentication.

### Deployment
- **Shared Hosting**: Cost-effective and scalable.

---

## Installation

Follow these steps to set up the application locally:

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/kamrulkafi1/Booking-Web-Application.git
   cd Booking-Web-Application
   ```

2. **Install Dependencies**:
   ```bash
   composer install
   npm install
   ```

3. **Set Up Environment**:
   - Copy the `.env.example` file to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Update database credentials and other environment variables in the `.env` file.

4. **Generate Application Key**:
   ```bash
   php artisan key:generate
   ```

5. **Run Database Migrations**:
   ```bash
   php artisan migrate
   ```

6. **Start Development Server**:
   ```bash
   php artisan serve
   ```

   Access the application at [http://localhost:8000](http://localhost:8000).

---

## Usage

### Users
1. Register and log in.
2. Browse available travel packages.
3. Book packages and manage your booking status.
4. Download invoices for completed payments.
5. Use the contact form for inquiries.

### Admins
1. Log in to the admin dashboard.
2. Manage travel packages, users, and bookings.
3. View analytics for business performance.

---

## Screenshots
*(Include relevant screenshots of the application interface.)*

---

## ERD (Entity-Relationship Diagram)
*(Include the ERD diagram illustrating the database schema.)*

---

## Contributing

1. Fork the repository.
2. Create a feature branch:
   ```bash
   git checkout -b feature-name
   ```
3. Commit your changes:
   ```bash
   git commit -m 'Add feature-name'
   ```
4. Push to the branch:
   ```bash
   git push origin feature-name
   ```
5. Open a Pull Request.

---

## License

This project is licensed under the MIT License. See the `LICENSE` file for details.

---

## Contact
For any inquiries, contact:
- **Name**: Kamrul Kafi
- **GitHub**: [kamrulkafi1](https://github.com/kamrulkafi1)
