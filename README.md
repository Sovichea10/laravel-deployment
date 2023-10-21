<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://cdn.hibit.dev/images/posts/2023/headers/laravel_containerization.png" width="200" alt="Docker Swarm Logo"></a></p>

# Laravel deployment with Nginx using Docker

### Why does not using php artisan serve for deployment?

The php artisan serve command is primarily designed for local development purposes rather than production deployments. While it provides a convenient way to quickly start a development server for your Laravel application, it is not recommended for use in a production environment. Here are a few reasons why:

#### 1. Single-threaded and single-user: The built-in development server started by php artisan serve is single-threaded and can handle only one request at a time. It is not optimized for serving multiple concurrent requests, which is essential for handling production-level traffic.
