# Populling names in database

This is an helper project that can help in several tests.

This one have s simple duty: populate a database with users name. For example, there are methods here to make you easily populate a mysql database with tens of thousads users names to see the database load. This has been first created with the tests for time in fetching random people names from a database with different database loads. You can check this project in link [mysql - few data load vs much data load](../../tests/mysql/fewDataLoad_vs_muchDataLoad/README.md).

## Prerequesites

* have php installed
* have a database available to you to connect and perform the database filling.

## Preparation for tests

1. Go to the root project folder.
2. Copy the `.env.example` to `.env` and fill in this file the database informations for connection.
3. Execute in the command line: "`php composer.phar install`". wait for installation.
4. Generate the users table typing in the command line: "`php artisan migrate`"

## Performing the tests

Be in the root project folder. All commands must be typed in this location.

To fill the databas with 1000 names:

`php artisan popule 1000`

To clean the users table (new tests can be performed only when the users table are empty):

`php artisan clean`

As the test can take much time, can be a problema to track everything that happens in the terminal. So, each time that you populate the database, the software writes in the root diretory a file that registers the time for database populatting. It is called *populling-output-HASH*, beign the hash a code that tells the exact moment of file creation.
