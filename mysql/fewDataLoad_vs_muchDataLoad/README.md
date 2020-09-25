# Few data load vs much data load

* [File list](#file_list)
* [Performing tests](#Performing_tests)
* [Prerequisites](#Prerequisites)
* [Running tests](#Running_tests)


Does it have difference on load time if you are getting data from a database with few data agains a database with much data?

I propose the task to load 100 person names from database with different ammount of data:
* Fetches 100 person names randomly choosen from the database with 1000 names registers
* Fetches 100 person names randomly choosen from the database with 10000 names registers
* Fetches 100 person names randomly choosen from the database with 100000 names registers
* Fetches 100 person names randomly choosen from the database with 1000000 names registers

Them register the time in each situations.

Good thing to do with other types of databases.

In another test you may also compare the same task comparing a relational from no-sql database as well.


## File list

* `populling`: It is an Laravel. We will use its tools to automatically populate database, and then create an endpoint that will trigger the function to fetch the random choosed users name.

## Performing tests

### Prerequisites

* Have php installed
* Have an database running. The choosen framework by default uses mysql, but any database can enter in the spot.

### Running tests


