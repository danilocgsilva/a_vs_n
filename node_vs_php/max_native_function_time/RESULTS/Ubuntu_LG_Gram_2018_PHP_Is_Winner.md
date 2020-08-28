# Result in Ubuntu from LG Gram 2018

## Author

Name: Danilo Carlos de Góes Silva

Email: contact@danilocgsilva.me

Linkedin: https://www.linkedin.com/in/danilocgsilva/

Github: https://github.com/danilocgsilva

Stackoverflow: https://stackoverflow.com/users/6083799/danilocgsilva

Meetup: https://www.meetup.com/pt-BR/members/143824372/

## System tested

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
* PHP installation method: apt utility
* Node version: v10.19.0
* Node installation method: apt utility
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
            "name": "Intel(R) Core(TM) i5-8250U CPU @ 1.60GHz",
            "method": "command in linux terminal: `cat /proc/cpuinfo`"
        },
        "memory": {
            "total": "7887608 kB",
            "others": {
                "MemFree": "517308 kB",
                "MemAvailable": "2338900 kB"
            },
            "method": "command in linux terminal: `cat /proc/meminfo`"
        },
        "disk": {
            "name": "LITEON CV8-8E256",
            "method": "command in linux terminal: `sudo lshw -class disk`",
            "size": "238GiB (256GB)"
        }
    },
    "testting": [
        {
            "name": "PHP",
            "version": "PHP 7.4.3 (cli) (built: May 26 2020 12:24:22) ( NTS )\n
Copyright (c) The PHP Group\n
Zend Engine v3.4.0, Copyright (c) Zend Technologies\n
    with Zend OPcache v7.4.3, Copyright (c), by Zend Technologies",
            "method": "ubuntu apt utility"
        },
        {
            "name": "Node",
            "version": "v10.19.0",
            "method": "ubuntu apt utility"
        }
    ],
    "raw_outputs": [
        "shell> LC_ALL=en_US.utf8 date ; time node node/max.js \n
Wed 26 Aug 2020 11:10:20 PM -03\n
72\n
\n
real	0m0,437s\n
user	0m0,399s\n
sys	0m0,040s",
        "shell> LC_ALL=en_US.utf8 date ; time node node/max.js \n
Wed 26 Aug 2020 11:10:22 PM -03\n
72\n
\n
real	0m0,431s\n
user	0m0,413s\n
sys	0m0,020s",
        "shell> LC_ALL=en_US.utf8 date ; time node node/max.js \n
Wed 26 Aug 2020 11:10:23 PM -03\n
72\n
\n
real	0m0,439s\n
user	0m0,404s\n
sys	0m0,037s",
        "shell> LC_ALL=en_US.utf8 date ; time php php/max.php \n
Wed 26 Aug 2020 11:15:20 PM -03\n
72\n
real	0m0,039s\n
user	0m0,022s\n
sys	0m0,015s",
        "LC_ALL=en_US.utf8 date ; time php php/max.php\n
Wed 26 Aug 2020 11:15:23 PM -03\n
72\n
real	0m0,021s\n
user	0m0,012s\n
sys	0m0,009s",
        "shell> LC_ALL=en_US.utf8 date ; time php php/max.php \n
Wed 26 Aug 2020 11:15:26 PM -03\n
72\n
real	0m0,021s\n
user	0m0,010s\n
sys	0m0,011s"
    ],
    "winner": "php",
    "quick_interpretation": "php was three times faster than node",
    "interpretation": "PHP took an averange of 12 milliseconds while node took an averange of 32 milliseconds in three calls. **PHP IS WINNER**, because performed in almost one third time to performe the same operation done by node. The PHP process is almost three times faster than node using its native max function."
}
```