# Results in Windows 10 from LG Gram 2018

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
* Disk size: 256052966400
* OS: Windows 10
* PHP version: 
```
PHP 7.3.12 (cli) (built: Nov 19 2019 13:58:02) ( ZTS MSVC15 (Visual C++ 2017) x64 )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.3.12, Copyright (c) 1998-2018 Zend Technologies
```
* PHP installation method: wamp stack installation
* Node version: v12.18.3
* Node installation method: visual studio installer utility
* Memory:
```
Sum      : 8589934592
```

The informations has been taken with following commands:

To get cpu information
```
Get-WmiObject Win32_Processor
```

To get memory information:
```
Get-WmiObject Win32_PhysicalMemory | Measure-Object -Property Capacity -Sum
```

To get disk information:
```
wmic diskdrive get model,serialNumber,size,mediaType
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
PS> (get-date).toString([CultureInfo]'en-us') ; Measure-Command -Expression { node .\node\max.js }
8/28/2020 11:07:52 AM


Days              : 0
Hours             : 0
Minutes           : 0
Seconds           : 0
Milliseconds      : 82
Ticks             : 829511
TotalDays         : 9,60082175925926E-07
TotalHours        : 2,30419722222222E-05
TotalMinutes      : 0,00138251833333333
TotalSeconds      : 0,0829511
TotalMilliseconds : 82,9511

.
.


PS> (get-date).toString([CultureInfo]'en-us') ; Measure-Command -Expression { node .\node\max.js }
8/28/2020 11:08:18 AM


Days              : 0
Hours             : 0
Minutes           : 0
Seconds           : 0
Milliseconds      : 103
Ticks             : 1038364
TotalDays         : 1,20181018518519E-06
TotalHours        : 2,88434444444444E-05
TotalMinutes      : 0,00173060666666667
TotalSeconds      : 0,1038364
TotalMilliseconds : 103,8364

.
.

PS> (get-date).toString([CultureInfo]'en-us') ; Measure-Command -Expression { node .\node\max.js }
8/28/2020 11:08:36 AM


Days              : 0
Hours             : 0
Minutes           : 0
Seconds           : 0
Milliseconds      : 83
Ticks             : 835870
TotalDays         : 9,6744212962963E-07
TotalHours        : 2,32186111111111E-05
TotalMinutes      : 0,00139311666666667
TotalSeconds      : 0,083587
TotalMilliseconds : 83,587


.
.


PS> (get-date).toString([CultureInfo]'en-us') ; Measure-Command -Expression { node .\node\max.js }
8/28/2020 11:08:55 AM


Days              : 0
Hours             : 0
Minutes           : 0
Seconds           : 0
Milliseconds      : 87
Ticks             : 874648
TotalDays         : 1,01232407407407E-06
TotalHours        : 2,42957777777778E-05
TotalMinutes      : 0,00145774666666667
TotalSeconds      : 0,0874648
TotalMilliseconds : 87,4648

.
.

PS> (get-date).toString([CultureInfo]'en-us') ; Measure-Command -Expression { node .\node\max.js }
8/28/2020 11:09:09 AM


Days              : 0
Hours             : 0
Minutes           : 0
Seconds           : 0
Milliseconds      : 99
Ticks             : 994458
TotalDays         : 1,15099305555556E-06
TotalHours        : 2,76238333333333E-05
TotalMinutes      : 0,00165743
TotalSeconds      : 0,0994458
TotalMilliseconds : 99,4458

```

## PHP tests

```
PS> (get-date).toString([CultureInfo]'en-us') ; Measure-Command -Expression { php .\php\max.php }
8/28/2020 11:29:40 AM


Days              : 0
Hours             : 0
Minutes           : 0
Seconds           : 0
Milliseconds      : 108
Ticks             : 1084976
TotalDays         : 1,25575925925926E-06
TotalHours        : 3,01382222222222E-05
TotalMinutes      : 0,00180829333333333
TotalSeconds      : 0,1084976
TotalMilliseconds : 108,4976

.
.

PS> (get-date).toString([CultureInfo]'en-us') ; Measure-Command -Expression { php .\php\max.php }
8/28/2020 11:29:50 AM


Days              : 0
Hours             : 0
Minutes           : 0
Seconds           : 0
Milliseconds      : 175
Ticks             : 1753204
TotalDays         : 2,0291712962963E-06
TotalHours        : 4,87001111111111E-05
TotalMinutes      : 0,00292200666666667
TotalSeconds      : 0,1753204
TotalMilliseconds : 175,3204

.
.

PS> (get-date).toString([CultureInfo]'en-us') ; Measure-Command -Expression { php .\php\max.php }
8/28/2020 11:30:06 AM


Days              : 0
Hours             : 0
Minutes           : 0
Seconds           : 0
Milliseconds      : 104
Ticks             : 1048145
TotalDays         : 1,21313078703704E-06
TotalHours        : 2,91151388888889E-05
TotalMinutes      : 0,00174690833333333
TotalSeconds      : 0,1048145
TotalMilliseconds : 104,8145


.
.


PS> (get-date).toString([CultureInfo]'en-us') ; Measure-Command -Expression { php .\php\max.php }
8/28/2020 11:30:33 AM


Days              : 0
Hours             : 0
Minutes           : 0
Seconds           : 0
Milliseconds      : 215
Ticks             : 2156922
TotalDays         : 2,4964375E-06
TotalHours        : 5,99145E-05
TotalMinutes      : 0,00359487
TotalSeconds      : 0,2156922
TotalMilliseconds : 215,6922

.
.


PS> (get-date).toString([CultureInfo]'en-us') ; Measure-Command -Expression { php .\php\max.php }
8/28/2020 11:30:54 AM


Days              : 0
Hours             : 0
Minutes           : 0
Seconds           : 0
Milliseconds      : 194
Ticks             : 1946122
TotalDays         : 2,25245601851852E-06
TotalHours        : 5,40589444444444E-05
TotalMinutes      : 0,00324353666666667
TotalSeconds      : 0,1946122
TotalMilliseconds : 194,6122
```


## Interpretation

Node took an averange of 91 milliseconds in five calls while php took an averange of 160 milliseconds in five calls for the same task. **NODE IS WINNER**, because performed a little more 60% faster than PHP in the same operation. Node perform the same task in little less than 2/3 the time needed by PHP.

**Same system but different OS have an OBSCENE different result**: check for another result testing done in the same computer but in different OS [here](Ubuntu_LG_Gram_2018_PHP_Is_Winner.md). **PHP IS MORE THAN 10 TIMES SLOWER THAN ITSELF WHEN PERFORMED IN WINDOWS**. In Ubuntu the **PHP shinnes over Node with a very big margin** even bigger than Node over PHP in Windows, as you can state in the test. You may notice that the PHP version is *little* different between the tested on Linux, but *come on*! Assign such huge performance difference due to the PHP version is not reasoble at all!

Indeed, I already notice the performance difference testing the Drupal installation. The basic database in Linux is written little more than 40 seconds, while the same task performaed in same system but in Windows, it was took 5 minutes. I still have no idea why PHP's performance in Windows is so lame.

I also already tested the Drupal basic database writting time performed in a guest system hosted in Windows. It is very curious the the PHP installed in a guest system can outperform PHP installed nativelly in Windows. I do not remember the precise time, but this tasks perform within almost two minutes, even less than a half performed in the PHP nativelly installed in Windows.

So, if you are a PHP developer, have only Windows at your disposal (and by some weird reason that is not your lazyness to learn another operational system you cannot use Linux to develop) and runtime performance matters in the development evironment, better to run your php system in a Windows WSL or in a virtual machine hosted by VirtualBox. Host virtual machine in another hostess software, in a Vagrant stack or in Docker also may be reasonable (again, if you have only Windows to develop), but not tested for me yet.

Turning the spots to Node, first is noticeble that Node also suffered from the *Windows natural degradated environment* that PHP got, but not in the same intensity (albeit also quite intolarable). The averange in Windows was 91 milliseconds, while in Linux it was 32 milliseconds. The Windows turned Node almost three times slower than if it runs in Linux.

Notice also that the Node version also was not the same, but it is just by one major version difference (if you are smart enough, knows that odd numbers are kept to development Node's version, so it is just one major version difference). So at my point of view also is a tiny difference to assing the huge performance difference to Node version that due the OS. Difference in Node's version may impact on runtime performance, but not in such dramatic way.

## Json for some *structured* data

```json
{
    "description": "Test proposed by https://github.com/danilocgsilva/a_vs_n/blob/master/node_vs_php/max_native_function_time/README.md.\nThe test consists in testing the native max method of each tested language, that includes php and node. I give three numbers: 12, 16 and 72, and the method returns the higher between then. The intent is to test the performance in each language for each language.",
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
            "method": "command in PowerShell terminal: `Get-WmiObject Win32_Processor`"
        },
        "memory": {
            "total": "8589934592",
            "method": "command in PowerShell terminal: `Get-WmiObject Win32_PhysicalMemory | Measure-Object -Property Capacity -Sum`"
        },
        "disk": {
            "name": "LITEON CV8-8E256",
            "method": "command in PowerShell terminal: `wmic diskdrive get model,serialNumber,size,mediaType`",
            "size": "256052966400"
        }
    },
    "testting": [
        {
            "name": "Node",
            "version": "v12.18.3",
            "method": "Visual Studio installer utility."
        },
        {
            "name": "PHP",
            "version": "PHP 7.3.12 (cli) (built: Nov 19 2019 13:58:02) ( ZTS MSVC15 (Visual C++ 2017) x64 )\nCopyright (c) 1997-2018 The PHP Group\nZend Engine v3.3.12, Copyright (c) 1998-2018 Zend Technologies",
            "method": "WAMP stack installation."
        }
    ],
    "raw_output": [
        "PS> (get-date).toString([CultureInfo]'en-us') ; Measure-Command -Expression { node .\node\max.js }\n
8/28/2020 11:07:52 AM\n
\n
\n
Days              : 0\n
Hours             : 0\n
Minutes           : 0\n
Seconds           : 0\n
Milliseconds      : 82\n
Ticks             : 829511\n
TotalDays         : 9,60082175925926E-07\n
TotalHours        : 2,30419722222222E-05\n
TotalMinutes      : 0,00138251833333333\n
TotalSeconds      : 0,0829511\n
TotalMilliseconds : 82,9511",
        "PS> (get-date).toString([CultureInfo]'en-us') ; Measure-Command -Expression { node .\node\max.js }\n
8/28/2020 11:08:18 AM\n
\n
\n
Days              : 0\n
Hours             : 0\n
Minutes           : 0\n
Seconds           : 0\n
Milliseconds      : 103\n
Ticks             : 1038364\n
TotalDays         : 1,20181018518519E-06\n
TotalHours        : 2,88434444444444E-05\n
TotalMinutes      : 0,00173060666666667\n
TotalSeconds      : 0,1038364\n
TotalMilliseconds : 103,8364",
        "PS> (get-date).toString([CultureInfo]'en-us') ; Measure-Command -Expression { node .\node\max.js }\n
8/28/2020 11:08:36 AM\n
\n
\n
Days              : 0\n
Hours             : 0\n
Minutes           : 0\n
Seconds           : 0\n
Milliseconds      : 83\n
Ticks             : 835870\n
TotalDays         : 9,6744212962963E-07\n
TotalHours        : 2,32186111111111E-05\n
TotalMinutes      : 0,00139311666666667\n
TotalSeconds      : 0,083587\n
TotalMilliseconds : 83,587",
        "PS> (get-date).toString([CultureInfo]'en-us') ; Measure-Command -Expression { node .\node\max.js }\n
8/28/2020 11:08:55 AM\n
\n
\n
Days              : 0\n
Hours             : 0\n
Minutes           : 0\n
Seconds           : 0\n
Milliseconds      : 87\n
Ticks             : 874648\n
TotalDays         : 1,01232407407407E-06\n
TotalHours        : 2,42957777777778E-05\n
TotalMinutes      : 0,00145774666666667\n
TotalSeconds      : 0,0874648\n
TotalMilliseconds : 87,4648",
        "PS> (get-date).toString([CultureInfo]'en-us') ; Measure-Command -Expression { node .\node\max.js }\n
8/28/2020 11:09:09 AM\n
\n
\n
Days              : 0
Hours             : 0
Minutes           : 0
Seconds           : 0
Milliseconds      : 99
Ticks             : 994458
TotalDays         : 1,15099305555556E-06
TotalHours        : 2,76238333333333E-05
TotalMinutes      : 0,00165743
TotalSeconds      : 0,0994458
TotalMilliseconds : 99,4458",
        "PS> (get-date).toString([CultureInfo]'en-us') ; Measure-Command -Expression { php .\php\max.php }\n
8/28/2020 11:29:40 AM\n
\n
\n
Days              : 0\n
Hours             : 0\n
Minutes           : 0\n
Seconds           : 0\n
Milliseconds      : 108\n
Ticks             : 1084976\n
TotalDays         : 1,25575925925926E-06\n
TotalHours        : 3,01382222222222E-05\n
TotalMinutes      : 0,00180829333333333\n
TotalSeconds      : 0,1084976\n
TotalMilliseconds : 108,4976",
        "PS> (get-date).toString([CultureInfo]'en-us') ; Measure-Command -Expression { php .\php\max.php }
8/28/2020 11:29:50 AM


Days              : 0
Hours             : 0
Minutes           : 0
Seconds           : 0
Milliseconds      : 175
Ticks             : 1753204
TotalDays         : 2,0291712962963E-06
TotalHours        : 4,87001111111111E-05
TotalMinutes      : 0,00292200666666667
TotalSeconds      : 0,1753204
TotalMilliseconds : 175,3204",
    "PS> (get-date).toString([CultureInfo]'en-us') ; Measure-Command -Expression { php .\php\max.php }\n
8/28/2020 11:30:06 AM\n
\n
\n
Days              : 0\n
Hours             : 0\n
Minutes           : 0\n
Seconds           : 0\n
Milliseconds      : 104\n
Ticks             : 1048145\n
TotalDays         : 1,21313078703704E-06\n
TotalHours        : 2,91151388888889E-05\n
TotalMinutes      : 0,00174690833333333\n
TotalSeconds      : 0,1048145\n
TotalMilliseconds : 104,8145",
        "PS> (get-date).toString([CultureInfo]'en-us') ; Measure-Command -Expression { php .\php\max.php }\n
8/28/2020 11:30:33 AM\n
\n
\n
Days              : 0\n
Hours             : 0\n
Minutes           : 0\n
Seconds           : 0\n
Milliseconds      : 215\n
Ticks             : 2156922\n
TotalDays         : 2,4964375E-06\n
TotalHours        : 5,99145E-05\n
TotalMinutes      : 0,00359487\n
TotalSeconds      : 0,2156922\n
TotalMilliseconds : 215,6922",
        "PS> (get-date).toString([CultureInfo]'en-us') ; Measure-Command -Expression { php .\php\max.php }\n
8/28/2020 11:30:54 AM\n
\n
\n
Days              : 0\n
Hours             : 0\n
Minutes           : 0\n
Seconds           : 0\n
Milliseconds      : 194\n
Ticks             : 1946122\n
TotalDays         : 2,25245601851852E-06\n
TotalHours        : 5,40589444444444E-05\n
TotalMinutes      : 0,00324353666666667\n
TotalSeconds      : 0,1946122\n
TotalMilliseconds : 194,6122"
    ]
}
```
