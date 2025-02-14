# How to perform the performance tests

The test is done using `Locust`: https://locust.io/.

The Docker receipt in `docker-compose.yml` has been adapted from this link: https://docs.locust.io/en/stable/running-in-docker.html

To make the test:

**Note**: I assume that the Docker are locally installed.

1. Go to the folder through command line prompt: `tests/php_vs_php_2/docker-receipt/1_1/` (relative path to this repository)
1. Build the environemnt with the command: `docker compose up --build`
1. Access the address: `http://localhost:8089`

There you will see a simple form. Just look to the third input (the only one empty), where you will put an endpoint to test. Remember: the Docker receipt run in an isolated environment. You must fill this form input with THE INTERNAL ADDRESS FROM RECEIPT. It is just the service name found in the `docker-compose.yml` file. For example: there are one service called `apache`. Then, in the blank input just fill with `http://apache` and start the test. Of course, you can run in an not isolated environment, so you may not have such restrinctions. But to keep things simple, just let focus to the objective to test different environments setup from this receipt.


