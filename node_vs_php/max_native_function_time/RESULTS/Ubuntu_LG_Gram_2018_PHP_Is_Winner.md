# Results

## System tested:

* Processor: Intel(R) Core(TM) i5-8250U CPU @ 1.60GHz
* Disk manufacturer/model: LITEON CV8-8E256
* Disk size: 238GiB (256GB)
* OS: Ubuntu 20.04
* PHP version: 
```
PHP 7.4.3 (cli) (built: May 26 2020 12:24:22) ( NTS )
Copyright (c) The PHP Group
Zend Engine v3.4.0, Copyright (c) Zend Technologies
    with Zend OPcache v7.4.3, Copyright (c), by Zend Technologies
```
* Node version: v10.19.0
* Memory:
```
MemTotal:        7887608 kB
MemFree:          517308 kB
MemAvailable:    2338900 kB
```

The informations has been taken with following commands:

To get cpu information
```
cat /proc/cpuinfo
```

To get memory information:
```
cat /proc/meminfo
```

To get disk information:
```
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
Wed 26 Aug 2020 11:10:20 PM -03
72

real	0m0,437s
user	0m0,399s
sys	0m0,040s

.
.

shell> LC_ALL=en_US.utf8 date ; time node node/max.js 
Wed 26 Aug 2020 11:10:22 PM -03
72

real	0m0,431s
user	0m0,413s
sys	0m0,020s

.
.

shell> LC_ALL=en_US.utf8 date ; time node node/max.js 
Wed 26 Aug 2020 11:10:23 PM -03
72

real	0m0,439s
user	0m0,404s
sys	0m0,037s
```

## PHP tests

```
shell> LC_ALL=en_US.utf8 date ; time php php/max.php 
Wed 26 Aug 2020 11:15:20 PM -03
72
real	0m0,039s
user	0m0,022s
sys	0m0,015s

.
.

LC_ALL=en_US.utf8 date ; time php php/max.php
Wed 26 Aug 2020 11:15:23 PM -03
72
real	0m0,021s
user	0m0,012s
sys	0m0,009s

.
.

shell> LC_ALL=en_US.utf8 date ; time php php/max.php 
Wed 26 Aug 2020 11:15:26 PM -03
72
real	0m0,021s
user	0m0,010s
sys	0m0,011s
```

## Interpretation

PHP took an averange of 12 milliseconds while node took an averange of 32 milliseconds in three calls. **PHP IS WINNER**, because performed in almost one third time to performe the same operation done by node. The PHP process is almost three times faster than node using its native max function.

**Huge real and user time**: The sys entry for time count is the time took in the kernel, excluding other process, so it is the time considered in the measure.

