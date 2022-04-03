# Results in Macbook pro mid 2012 13

## Author 

Name: Danilo Carlos de Góes Silva

Email: contact@danilocgsilva.me

Linkedin: https://www.linkedin.com/in/danilocgsilva/

Github: https://github.com/danilocgsilva

Stackoverflow: https://stackoverflow.com/users/6083799/danilocgsilva

Meetup: https://www.meetup.com/pt-BR/members/143824372/

## System tested

* Processor: Intel(R) Core(TM) i5-3210M CPU @ 2.50GHz
* Disk (1) manufacturer/model: KINGSTON SA400S37480G
* Disk (2) manufacturer/model: LITEON LCH-256V2S
* Disk (1) size: 479,76 GB (479.760.007.168 bytes)
* Disk (2) size: 255,72 GB (255.716.540.416 bytes)
* OS: mac OS Catalina 10.15.7
* PHP version:
```
PHP 7.4.19 (cli) (built: May 13 2021 06:24:07) ( NTS )
Copyright (c) The PHP Group
Zend Engine v3.4.0, Copyright (c) Zend Technologies
    with Zend OPcache v7.4.19, Copyright (c), by Zend Technologies
```
* PHP hosted by disk 1, Kingston
* PHP installation method: homebrew
* Node version: v14.16.1
* Node hosted by disk 2, Liteon
* Node installation method: nvm
* Memory:
```
Total of 16GB
Free: 5.54GB
```

To get cpu information
```
sysctl machdep.cpu.brand_string
```

To get memory information: Activity Monitor

To get disk information: Goes to "About This Mac" menu and access "System Report". Them searches for "storage" section.

To get the php version:
```
php --version
```

To get the node version:
```
node --version
```

## Node tests

```
shell> LC_ALL=en_US.utf8 date ; time node node/max.js
Sat Jul 17 22:09:45 -03 2021
72
node node/max.js  0,06s user 0,01s system 94% cpu 0,075 total

.
.

shell> LC_ALL=en_US.utf8 date ; time node node/max.js
Sat Jul 17 22:09:46 -03 2021
72
node node/max.js  0,06s user 0,01s system 94% cpu 0,073 total

.
.

shell> LC_ALL=en_US.utf8 date ; time node node/max.js
Sat Jul 17 22:09:46 -03 2021
72
node node/max.js  0,05s user 0,02s system 96% cpu 0,074 total

.
.

shell> LC_ALL=en_US.utf8 date ; time node node/max.js
Sat Jul 17 22:09:47 -03 2021
72
node node/max.js  0,05s user 0,01s system 95% cpu 0,071 total

.
.

shell> LC_ALL=en_US.utf8 date ; time node node/max.js
Sat Jul 17 22:09:48 -03 2021
72
node node/max.js  0,05s user 0,01s system 93% cpu 0,071 total
```

## PHP tests

```

shell> LC_ALL=en_US.utf8 date ; time php php/max.php
Sat Jul 17 22:17:56 -03 2021
72php php/max.php  0,02s user 0,02s system 93% cpu 0,046 total

.
.

shell> LC_ALL=en_US.utf8 date ; time php php/max.php
Sat Jul 17 22:17:57 -03 2021
72php php/max.php  0,02s user 0,02s system 92% cpu 0,047 total

.
.

shell> LC_ALL=en_US.utf8 date ; time php php/max.php
Sat Jul 17 22:17:59 -03 2021
72php php/max.php  0,02s user 0,02s system 92% cpu 0,044 total

.
.

shell> LC_ALL=en_US.utf8 date ; time php php/max.php
Sat Jul 17 22:18:00 -03 2021
72php php/max.php  0,02s user 0,02s system 89% cpu 0,046 total

.
.

shell> LC_ALL=en_US.utf8 date ; time php php/max.php
Sat Jul 17 22:18:01 -03 2021
72php php/max.php  0,02s user 0,02s system 87% cpu 0,047 total

```

## Interpretation

First, I would like to point out in the first place that the node and PHP binaries are installed in different storages. May it cause different results in performance? I don't know.

The time utility from mac OS, unfortunately, cuts a decimal place for precision if compared to Linux.

For **node**, there are a big difference between the *user* and *system* time. In five tests, we got between 0.05 and 0.06 as *user time*, and 0.01 in four, while 0.02 in just one of the tests for *system time*.

For **php**, in all five tests runned consistently the time mac os utility give 0.02 seconds both for *user time* and *system time*.

It seems that the PHP implementation for mac, for doing the same task as node, is more eficiently implemented in mac. The user processes seems to take almost three times more in node than the PHP, despite it tooks a litle more from system time. Thus, does the PHP implementations delegates more stuffs to the system than the node to make the same task? But the final total time is better in PHP. PHP is winner here.

## Json for some *structured* data

```json
{
    "description": "Test propposed by https://github.com/danilocgsilva/a_vs_n/blob/master/node_vs_php/max_native_function_time/README.md. \nThe test consists in testing the native max method of each tested language, that includes php and node. I give three numbers: 12, 16 and 72, and the method returns the higher between then. The intent is to test the performance in each language for each language.",
    "author": {
        "name": "Danilo Carlos de Góes Silva",
        "email": "contact@danilocgsilva@gmail.com",
        "linkedin": "https://www.linkedin.com/in/danilocgsilva",
        "stackoverflow": "https://stackoverflow.com/users/6083799/danilocgsilva",
        "meetup": "https://www.meetup.com/pt-BR/members/143824372/"
    },
    "system_tested": {
        "processor": {
            "name": "Intel(R) Core(TM) i5-3210M CPU @ 2.50GHz",
            "method": "command terminal: `sysctl machdep.cpu.brand_string`"
        },
        "memory": {
            "total": "16GB",
            "others": {
                "Free memory when testing": "5.54GB"
            },
            "method": "Mac application: Activity Monitor"
        },
        "disks": 
            [
                {
                    "name": "KINGSTON SA400S37480G",
                    "method": "Goes to \"About This Mac\" menu and access \"System Report\". Them searches for \"storage\" section",
                    "size": "479,76 GB (479.760.007.168 bytes)",
                    "hosts": "PHP"
                },
                {
                    "name": "LITEON LCH-256V2S",
                    "method": "Goes to \"About This Mac\" menu and access \"System Report\". Them searches for \"storage\" section",
                    "size": "255,72 GB (255.716.540.416 bytes)",
                    "hosts": "node"
                }
            ]
        }
    }
}
```
