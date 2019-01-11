# A Simple php application excercise

This is a simple application for php exerecises for demonstrating the php skills and features. 
It handles the xml file upload for projects with the project entity have name and description. It has two api endpoints for fetching the projects.

# Framework Used

This application has been developed with **Laravel** PHP framework. Laravel framework is very efficient for PHP application development with its Artisan console, easy routing, eloquent services, caching and many more. It provides PHPUnit out of the box with its own classes and methods for several testing purposes.

### Requirement
The application requires PHP version > 7.1.3
(The application has been developed in LAMP environment with PHP version **7.2.11** and **Laravel v5.7.9**

## Steps to setup the application

1. Clone the application
2. Copy .env.example and rename to .env
3. Update MySQL credentials in the .env file
4. Open the terminal and change the directory to the root of the application
5. Run **composer update**
6. Run **php artisan migrate** to create the project table
7. Run **php artisan serve** to run the PHP's built-in development server. Alternatively, one can use Apache or Nginx


## Time Taken to complete the application
As it is a small laravel application with no complex business logic and involves minimal operations, it took approximately one and half hour for the backend development and testing and other for the front-end stuffs.

## Future Improvement
1. Catching specific exception rather than dealing with the generic.
2. Writing unit tests for the uploads and api end points
3. PHP Docblock is not highly considered in this small project and can be improved in the future.
4. Due to the nature of the project a firm SOLID principle is not followed and can be refactored accordingly for future updates. 