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
Free: 5,54GB
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
