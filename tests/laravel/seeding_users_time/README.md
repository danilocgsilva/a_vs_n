# Time to seed users in database

How much time it takes to populate a database using seed factory from Laravel in different amounts? Is the amount of data proportional to the time for each step?

I propose to test the time and memory required to populate the users table for:

* Populate with 1000 users names
* Populate with 10.000 users names
* Populate with 100.000 users names
* Populate with 1.000.000 users names
* Same tests performed in different databases, as mysql, mariadb, postgree, sql server.

And finally, checks the size of the database in each situation, both as storage and in backup file.

## Disclaimer

Although this is setted as Laravel framework test, it is a test that is more sigficant to the database test itself than a Laravel. Albeit using Faker still means using a tiny layer of php processing and the package itself.
