# Depression Checker

A web application designed to help gauge a user's mental state based on the PHQ-9 criteria.

## Features

- User authentication and registration.
- Interactive questionnaire based on PHQ-9 criteria.
- Dashboard displaying user's scores over time using Chart.js.
- Secure data handling and storage.

## Getting Started

### Prerequisites

- PHP
- Composer
- Laravel Framework
- MySQL (or your choice of database)

### Installation

1. Clone the repository:
    ```bash
    git clone digital-depression-detection
    ```

2. Navigate to the project directory:
    ```bash
    cd digital-depression-detection
    ```

3. Install the required dependencies:
    ```bash
    composer install
    ```

4. Copy `.env.example` to `.env` and set your database connection details.

5. Generate an application key:
    ```bash
    php artisan key:generate
    ```

6. Run the migrations:
    ```bash
    php artisan migrate
    ```

7. Serve the application:
    ```bash
    php artisan serve
    ```

8. Visit `http://127.0.0.1:8000` in your browser to access the application.

## Contributions

Pull requests are welcome! For major changes, please open an issue first to discuss what you'd like to change.

## License

This project is licensed under the MIT License.

## Acknowledgements

- Laravel Framework
- Chart.js

