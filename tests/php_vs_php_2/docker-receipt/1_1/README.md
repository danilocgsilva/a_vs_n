# How to perform the performance tests

The test is done using `Locust`: https://locust.io/.

The Docker receipt in `docker-compose.yml` has been adapted from this link: https://docs.locust.io/en/stable/running-in-docker.html

To make the test:

**Note**: I assume that the Docker are locally installed.

1. Go to the folder through command line prompt: `tests/php_vs_php_2/docker-receipt/1_1/` (relative path to this repository)
1. Build the environemnt with the command: `docker compose up --build`
1. Access the address: `http://localhost:8089`

There you will see a simple form. Just look to the third input (the only one empty), where you will put an endpoint to test. Remember: the Docker receipt run in an isolated environment. You must fill this form input with THE INTERNAL ADDRESS FROM RECEIPT. It is just the service name found in the `docker-compose.yml` file. For example: there are one service called `apache`. Then, in the blank input just fill with `http://apache` and start the test. Of course, you can run in an not isolated environment, so you may not have such restrinctions. But to keep things simple, just let focus to the objective to test different environments setup from this receipt.

## Intent

Print something like `Hello world`. Just that. It is the simplest possible thing to do. But it can be performed by several ways. And the choosed way can have differet impact on performance.

Each way to serve to this porpouse served by one or some Docker containers. Their receipts can be found in `docker-compose.yml`.

## What is available to be tested?

### Apache
* Available on local host by port 1580.
* Check result in browser: `http://localhost:1580`
* Internal Docker DNS (which must be used in Locust as a URL): `http://apache`
* Uses only the `apache` service in the `docker-compose.yml` file.
---
### NGINX
* Available on local host by port 1581.
* Check result in browser: `http://localhost:1581`
* Internal Docker DNS (which must be used in Locust as a URL): `http://nginx`
* Uses only the `nginx` service in the `docker-compose.yml` file.
---
### Apache with php module
* Uses apache, but instead of using a static file to be shown, it is dynamically printed by a simple php statement.
* Available on local host by port 1582.
* Check result in browser: `http://localhost:1582`
* Internal Docker DNS (which must be used in Locust as a URL): `http://php_apache`
* Uses only the `php_apache` service in the `docker-compose.yml` file.
---
### NGINX as proxy reverse, with PHP
* Available on local host by port 1583.
* Check result in browser: `http://localhost:1583`
* Internal Docker DNS (which must be used in Locust as a URL): `http://nginx_php`
* Needs two containers:
  * `nginx_php` as reverse proxy.
  * `nginx_php_fpm` is the container serving php vm.
---
### Apache with a full html
Several tests is designed only to print a simple *Hello world* string. But as a more suitable format, the *Apache with a full html* serves the basic html structure. This means that are 10x more strings to be shown tha a simple *Hello world* statement. Does it makes some diference on server usage?
* Available on local host by port 1584.
* Check result in browser: `http://localhost:1584`
* Internal Docker DNS (which must be used in Locust as a URL): `http://apache_full_html`
* Uses only the `apache_full_html` service in the `docker-compose.yml` file.
---
### PHP built in server
Does it using the PHP built in server have a much different performance?
* Available on local host by port 1585.
* Check result in browser: `http://localhost:1585`
* Internal Docker DNS (which must be used in Locust as a URL): `http://built_in_server`
* Uses only the `built_in_server` service in the `docker-compose.yml` file.