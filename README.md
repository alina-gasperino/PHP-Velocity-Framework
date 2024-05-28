
# Velocity - PHP Framework

Velocity is an in-house PHP framework built for speed and simplicity, designed to make web application development efficient and enjoyable.

## Features

-   Fast and lightweight framework
-   Easy-to-use routing system
-   Clean and organized directory structure
-   Support for Nginx web server
-   Integration with Questblue's PDO Database and Router packages

## Directory Structure Requirements

The required folder structure for a module within the Velocity PHP framework is as follows:

```
- src
  - Module
    - Controller
      - Classes
        - Interfaces
          - SomeInterface.php
        - SomeClass.php
      - Module.php
    - Model
      - Enums
        - SomeEnum.php
      - SomeModel.php
    - View
      - SomeView.php
``` 

**Note:** There is a strict requirement for the module to have the same name as the controller and the first letter to be capitalized.

The folder structure inside of the module should be organized as follows:

-   `Controller`: May have an additional folder for classes, and classes may have an additional folder for interfaces.
-   `View`: Stores view files for the module.
-   `Model`: May have an additional folder for enums.

## Nginx Setup

To set up Velocity with Nginx, add the following configuration to your Nginx server block:

```
server {

    location / {
        index index.php index.html index.htm;
        try_files $uri $uri/ /index.php?$request_uri;
    }

    location /public {
        try_files $uri $uri/ =404;
    }

    location ~ \.php$ {
        try_files $uri =404;
        fastcgi_pass unix:/var/run/php-fpm/php-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }
}
``` 

This configuration enables pretty URLs, sets up the public directory for serving static assets, and configures PHP-FPM for handling PHP requests.

## Dependencies

Velocity relies on the following packages for additional functionality:

-   [Questblue PDO Database](https://gitlab.questblue.com/web-development/composerpackages/pdodatabase): A simple and easy-to-use PDO wrapper for database interactions.
-   [Questblue Router](https://gitlab.questblue.com/web-development/composerpackages/router): A custom-built routing system for PHP web applications that provides an easy way to manage routes, controllers, and views, as well as handle authentication and CLI access.

## Installation

1.  Set up your web server with the appropriate Nginx configuration
    
2.  Install the required dependencies using [Composer](https://getcomposer.org/):

```
composer require questblue/pdodatabase
composer require questblue/router
``` 

3.  Follow the respective package documentation for configuring and using Questblue PDO Database and Questblue Router in your Velocity project.

## Getting Started

After installing and configuring the required dependencies, you can start building your Velocity-based web application by following best practices for organizing your project's directory structure, creating controllers and views, setting up routing, and managing database connections.