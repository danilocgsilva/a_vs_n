# Result in Ubuntu from Dell Latitude 3400

## Author

Name: Danilo Carlos de Góes Silva

Email: contact@danilocgsilva.me

Linkedin: https://www.linkedin.com/in/danilocgsilva/

Github: https://github.com/danilocgsilva

Stackoverflow: https://stackoverflow.com/users/6083799/danilocgsilva

Meetup: https://www.meetup.com/pt-BR/members/143824372/

## System tested

* Processor: Intel(R) Core(TM) i7-8565U CPU @ 1.80GHz
* Disk manufacturer/model: ADATA Technology Co., Ltd./IM2P33F3 NVMe ADATA 512GB
* Disk size: 476GiB (512GB)
* OS: Ubuntu 20.04.2 LTS
* PHP version:
```
PHP 7.4.3 (cli) (built: Jul  5 2021 15:13:35) ( NTS )
Copyright (c) The PHP Group
Zend Engine v3.4.0, Copyright (c) Zend Technologies
    with Zend OPcache v7.4.3, Copyright (c), by Zend Technologies
```
* PHP installation method: apt utility
* Node version: v14.17.1
* Node installation method: official node script installer
* Memory:
```
MemTotal:       16264844 kB
MemFree:         7555856 kB
MemAvailable:   11447712 kB
```

The informations has been taken with following commands:

To get cpu information
```
cat /proc/cpuinfo
```

To get the memory information
```
cat /proc/meminfo
```

To get disk information:
```
sudo lshw -class storage
sudo lshw -class disk
```

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
Sat 17 Jul 2021 03:34:26 PM -03
72

real    0m0,130s
user    0m0,111s
sys     0m0,022s

.
.

shell> LC_ALL=en_US.utf8 date ; time node node/max.js 
Sat 17 Jul 2021 03:34:29 PM -03
72

real    0m0,117s
user    0m0,085s
sys     0m0,035s

.
.

shell> LC_ALL=en_US.utf8 date ; time node node/max.js 
Sat 17 Jul 2021 03:34:30 PM -03
72

real    0m0,116s
user    0m0,111s
sys     0m0,009s

.
.

shell> LC_ALL=en_US.utf8 date ; time node node/max.js 
Sat 17 Jul 2021 03:35:49 PM -03
72

real    0m0,132s
user    0m0,115s
sys     0m0,021s

.
.

shell> LC_ALL=en_US.utf8 date ; time node node/max.js 
Sat 17 Jul 2021 03:35:50 PM -03
72

real    0m0,140s
user    0m0,120s
sys     0m0,024s
```

## PHP tests

```
shell> LC_ALL=en_US.utf8 date ; time php php/max.php
Sat 17 Jul 2021 03:37:26 PM -03
72
real    0m0,066s
user    0m0,036s
sys     0m0,027s

.
.

shell> LC_ALL=en_US.utf8 date ; time php php/max.php
Sat 17 Jul 2021 03:37:27 PM -03
72
real    0m0,060s
user    0m0,048s
sys     0m0,012s

.
.

shell> LC_ALL=en_US.utf8 date ; time php php/max.php
Sat 17 Jul 2021 03:37:29 PM -03
72
real    0m0,060s
user    0m0,044s
sys     0m0,016s

.
.

shell> LC_ALL=en_US.utf8 date ; time php php/max.php
Sat 17 Jul 2021 03:37:30 PM -03
72
real    0m0,062s
user    0m0,025s
sys     0m0,037s

.
.

shell> LC_ALL=en_US.utf8 date ; time php php/max.php
Sat 17 Jul 2021 03:37:31 PM -03
72
real    0m0,062s
user    0m0,033s
sys     0m0,029s

```
