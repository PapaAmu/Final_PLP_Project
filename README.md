# Invoice System

An Invoice System built using Laravel and Vue.js, with MariaDB & MySQL for database management, Git & GitHub for version control, and styled with CSS and Tailwind CSS. The frontend utilizes JavaScript and Blade templates.

## Features

- User registration and authentication
- Dashboard with an invoice table displaying all available invoices
- Create and save new invoices to the database
- Update user profile
- Delete user account
- Built using the Faker library for generating sample data

## Technologies Used

- **Laravel**: Backend framework
- **Vue.js**: Frontend framework
- **MariaDB & MySQL**: Database management systems
- **Git & GitHub**: Version control
- **CSS & Tailwind CSS**: Styling
- **JavaScript & Blade**: Templating and interactivity

## Installation

### Prerequisites

- PHP >= 7.3
- Composer
- Node.js & npm
- Laravel CLI
- MySQL or MariaDB

### Steps

1. **Clone the repository:**

    ```bash
    git clone https://github.com/yourusername/invoice-system.git
    cd invoice-system
    ```

2. **Install dependencies:**

    ```bash
    composer install
    npm install
    ```

3. **Configure the environment variables:**

    Copy the `.env.example` file to `.env` and modify the database configuration:

    ```bash
    cp .env.example .env
    ```

    Update the following lines in your `.env` file to match your database setup:

    ```dotenv
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password
    ```

4. **Generate application key:**

    ```bash
    php artisan key:generate
    ```

5. **Run database migrations and seeders:**

    ```bash
    php artisan migrate --seed
    ```

6. **Run the development server:**

    ```bash
    php artisan serve
    ```

    In a separate terminal window, run:

    ```bash
    npm run dev
    ```

7. **Access the application:**

    Open your browser and go to `http://localhost:8000`

## Usage

1. **Register an account:**
   - Navigate to the registration page and create a new account.
   
2. **Login to the dashboard:**
   - Use your credentials to log in.
   
3. **View invoices:**
   - The dashboard displays a table with all available invoices in the database.

4. **Create a new invoice:**
   - Use the provided form on the dashboard to create and save a new invoice to the database.

5. **Update user profile:**
   - Navigate to the profile section and update your profile information.

6. **Delete user account:**
   - Navigate to the account deletion section and delete your account permanently.

## Contributing

We welcome contributions! Please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes.
4. Commit your changes (`git commit -am 'Add some feature'`).
5. Push to the branch (`git push origin feature-branch`).
6. Create a new Pull Request.

## Contact

For questions or support, please contact [realtee.lukhele@gmail.com](mailto:realtee.lukhele@gmail.com).
