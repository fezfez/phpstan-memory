# Memory consumption reproduction case

```bash
php -v
PHP 7.4.3 (cli) (built: Oct  6 2020 15:47:56) ( NTS )
```


```bash
time ./vendor/bin/phpstan analyse --debug -vvv src/LargeMemoryConsumption.php 
Note: Using configuration file /home/fezfez/work/phpstan-memory/phpstan.neon.
Result cache not used because of debug mode.
/home/fezfez/work/phpstan-memory/src/LargeMemoryConsumption.php
--- consumed 210 MB, total 246 MB
Result cache was not saved because only files were passed as analysed paths.

                                                                                                                        
 [OK] No errors                                                                                                         
                                                                                                                        

Used memory: 246 MB

real	0m2,555s
user	0m2,179s
sys	0m0,356s

```


```bash
time ./vendor/bin/phpstan analyse --debug -vvv src/MemoryConsumptionMini.php 
Note: Using configuration file /home/fezfez/work/phpstan-memory/phpstan.neon.
Result cache not used because of debug mode.
/home/fezfez/work/phpstan-memory/src/MemoryConsumptionMini.php
--- consumed 22 MB, total 58 MB
Result cache was not saved because only files were passed as analysed paths.

                                                                                                                        
 [OK] No errors                                                                                                         
                                                                                                                        

Used memory: 58 MB

real	0m0,393s
user	0m0,323s
sys	0m0,053s


```
