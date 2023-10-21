<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://cdn.hibit.dev/images/posts/2023/headers/laravel_containerization.png" width="200" alt="Docker Swarm Logo"></a></p>

# Laravel deployment with Nginx using Docker

### Why does not using php artisan serve for deployment?

The php artisan serve command is primarily designed for local development purposes rather than production deployments. While it provides a convenient way to quickly start a development server for your Laravel application, it is not recommended for use in a production environment. Here are a few reasons why:

#### 1. Single-threaded and single-user: The built-in development server started by php artisan serve is single-threaded and can handle only one request at a time. It is not optimized for serving multiple concurrent requests, which is essential for handling production-level traffic.

#### 2. Lack of advanced features: The development server lacks several advanced features required for production deployments, such as load balancing, caching mechanisms, SSL support, process management, and more. These features are typically provided by dedicated web servers or application deployment platforms.

#### 3. Security concerns: The development server is not hardened or optimized for security. It is designed for local development, and exposing it directly to the internet in a production environment can pose security risks. Production deployments typically involve using secure and battle-tested web servers, such as Nginx or Apache, that have robust security features and configurations.

#### 4. Limited scalability: The development server has limitations in terms of scalability and performance. It may not handle high traffic loads efficiently, leading to degraded performance or downtime for your application.


For production deployments, it is recommended to use specialized web servers or application deployment platforms that provide advanced features, scalability, security, and performance optimizations. Popular choices for deploying Laravel applications include Nginx, Apache, and cloud platforms like AWS, Google Cloud, or Heroku.

These platforms offer more robust configurations, load balancing, caching mechanisms, SSL support, process management, and other features necessary for running Laravel applications in production.

## I would like to explain between Dockerfile and Dockerfilebase as seeing inside repository

### Dockefile is a text file that contains a set of instructions used to build a Docker image and the image I pulled from building DockerfileBase

### DockefileBase is a text file that build from scratch of php and nginx service also included other requirements inside
