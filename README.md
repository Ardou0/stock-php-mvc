# Stock-PHP-MVC

This project is a basic implementation of the MVC (Model-View-Controller) model in PHP without using an external library. The goal is to show how to structure a web application by separating the different responsibilities to facilitate maintenance and scalability.

## Table of Contents

- [Introduction](https://github.com/Ardou0/stock-php-mvc/blob/main/#introduction)
- [Directory Structure](https://github.com/Ardou0/stock-php-mvc/blob/main/#directory-structure)
- [How to Run the Application](https://github.com/Ardou0/stock-php-mvc/blob/main/#how-to-run-the-application)
- [Available Routes](https://github.com/Ardou0/stock-php-mvc/blob/main/#available-routes)
- [Testing](https://github.com/Ardou0/stock-php-mvc/blob/main/#testing)
- [License](https://github.com/Ardou0/stock-php-mvc/blob/main/#license)

## Introduction

This PHP application demonstrates a simple MVC architecture. It includes basic routing, controller, and model implementations to manage web requests and responses. It's designed to be a lightweight and understandable example for learning purposes.

## Directory Structure

-   `README.md`: This file, providing an overview of the project.
-   `LICENSE`: Contains the MIT license information.
-   `docker-compose.yml`: Docker Compose configuration for running the application.
-   `start.bash`: Bash script to start the Docker containers.
-   `stop.bash`: Bash script to stop the Docker containers.
-   `conf/`: Configuration files for Nginx, PHP, and MySQL.
    -   `default-front.conf`: Nginx configuration file.
    -   `dockerfile`: Dockerfile for the PHP container.
    -   `website.sql`: SQL script to create the database.
    -   `www.conf`: PHP-FPM configuration file.
-   `front/`: Contains the application's source code.
    -   `index.php`: Main entry point for the application.
    -   `Config/`: Configuration files.
        -   `database.php`: Database configuration.
    -   `Controllers/`: Contains the controller classes.
        -   `ErrorController.php`: Controller for handling errors.
        -   `HomeController.php`: Controller for the home page.
    -   `Core/`: Core classes for the MVC framework.
        -   `Controller.php`: Base controller class.
        -   `Model.php`: Base model class.
        -   `Router.php`: Router class for handling URL routing.
    -   `Tests/`: Contains the test files.
        -   `TestModel.php`: Model for testing the database connection.
        -   `run_tests.php`: Script to run the tests.
    -   `Views/`: Contains the view templates.
        -   `error/index.php`: View for the error page.
        -   `home/index.php`: View for the home page.
        -   `layouts/main.php`: Main layout file.

## How to Run the Application

1.  **Prerequisites:**
    -   Docker
    -   Docker Compose

2.  **Clone the repository:**

    ```bash
    git clone <repository_url>
    cd stock-php-mvc
    ```

3.  **Start the application:**

    ```bash
    bash start.bash
    ```

    This script starts the Docker containers defined in `docker-compose.yml`.  It also checks if docker compose is installed.

4.  **Stop the application:**

    ```bash
    bash stop.bash
    ```

    This script stops the Docker containers. To remove the volumes too, you can use:

    ```bash
    bash stop.bash -v
    ```

5.  **Access the application:**

    Open your web browser and navigate to the URL provided by the `start.bash` script (usually `http://localhost`).

## Available Routes

The application defines the following routes in `front/index.php`:

-   `/index`: Home page.
-   `/`: Home page.
-   `/error`: Error page.

## Testing

To run the tests, you can access the error page with the debug parameter:

```
/error?debug=true
```

This will execute the tests defined in `front/Tests/run_tests.php`.  The test checks the database connection.

## License

This project is licensed under the MIT License - see the [LICENSE](https://github.com/Ardou0/stock-php-mvc/blob/main/LICENSE) file for details.