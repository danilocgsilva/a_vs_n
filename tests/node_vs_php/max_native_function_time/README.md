# Using `max` native function to determine the max between some numbers, WHO IS FASTER?

Both node and php has its native function to determine the max number given numbers:

In PHP:
```
max(12,16,72)
```

In Node:
```
Math.max(12,16,72)
```

Who is faster?

## How to count the time?

This folder have the `node` folder and `php` folder. Each one have just one file with one line performing the task.

The ideia is to use the command line native time counter to count time for each execution provided some times. In linux, the native comand is:

```
time <your_command>
```

## Prerequisites:

* Have php installed locally and acessible in path.
* Have node installed locally and acessible in path.
* Test time with some native shell utiity.

## Performing tests

To test the php, just navigate to the php folder and type (in Unix or Mac terminal):

```
time php max.php
```

To test the node, just navigates to the node folder and type (in Unix or Mac terminal)

```
time node max.js
```

## Care taken to set the tests valid:

* Tests both with node and php should be performed with not much time between then and with exact same system.
