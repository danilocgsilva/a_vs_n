# PHP vs PHP

A php application can be deployed through several ways. Any path you choose you may enconter trade-offs.

The performance aways matter, so knowing the most "ground performace" of each way may help you choose the most suitable way to go.

The idea of the tests is to print some kind of "Hello world" message in the browser. Usually, the *good practice* is to start of from some well known framework. But the choosed framework may introduce some overhead in your site in the "zero project's day" in a very big degree, depending from your start point.

So, the first thing you do in your project, whatever path you go, you may print a "Hello world" message. This is what this test does and measures the overhead of printing this message in each framework.

This project have a folder for each test scenario. Each folder have its own Docker receipt. To rise the test environment, just go to the folder and type `docker-compose up -d --build`. You may also check that each `docker-compose.yml` have a different port, to switch to another test, just re-run `Locust` (more following) changing just the port.

Check out each scenario:

* [Hello world haw file](hawfile/README.md)
* [Hello world empty basic composer project](basic_composer_project/README.md)
* [Hello world through just download Laravel](laravel/README.md)
* [Hello world through just installed Lumen (Laravel micro framework)](lumen/README.md)
* [Hello world through just download Symfony (Skeleton website)](symfony_website/README.md)
* [Hello world through just download Symfony (no website, just skeleton)](symfony_skeleton/README.md)
* [Slim framework](slim/README.md)

## Methodology

I will use the [Locust](https://locust.io/) in the most basic way, just to fetch basic statistics for each scenario. To use Locust and replicate the tests, just know that you need have Python installed (Locust is written in Python), and have Locust app installed. Then, just write a `locustfile.py`, go to the same folder, and write `locust --host=localhost:<PORT>`, replacing the suitable port. You may check each scenario folder and see the folders.
I think that a good approach is to rise all environment at same time, and perform each test by time. May this avoid that some past environment alters subsequent test. The deal here is to compare each scenario in the same conditions, not to run stuffs in the most cleaner environment. More important is that each test runs in the most homogeneous environment.

The test consists in run Locust and check its statistics for each condition. The test will run for a while (around 25 seconds), and the basic statiscs will be recorded.

## Tests and results

### Intel Generation 11th test

Here are some data about the tested system, getted by the `cat /proc/cpuinfo` Linux command:

* Model name: 11th Gen Intel(R) Core(TM) i7-1165G7 @ 2.80GHz
* Cache size: 12288 KB

Some memory data fetched by `sudo dmidecode --type memory`

* Size: 16384 MB
* Form Factor: SODIMM
* Type: DDR4
* Speed: 3200 MT/s
* Manufacturer: 04CB000080AD
* Configured Memory Speed: 3200 MT/s

This data may worth to frame the results.


