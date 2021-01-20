# Memory consumption reproduction case

```bash
php -v
PHP 7.4.3 (cli) (built: Oct  6 2020 15:47:56) ( NTS )
```


```bash
./vendor/bin/phpstan analyse --debug -vvv src/MemoryConsumption.php 
Result cache not used because of debug mode.
/home/fezfez/work/phpstan-memory/src/MemoryConsumption.php
--- consumed 316 MB, total 372 MB
Result cache was not saved because only files were passed as analysed paths.

                                                                                                                        
 [OK] No errors                                                                                                         
                                                                                                                        

💡 Tip of the Day:
PHPStan is performing only the most basic checks.
You can pass a higher rule level through the --level option
(the default and current level is 0) to analyse code more thoroughly.

Used memory: 372 MB

```

```bash
./vendor/bin/phpstan analyse --debug -vvv src/NoMemoryConsumption.php
Note: Using configuration file /home/fezfez/work/phpstan-memory/phpstan.neon.
Result cache not used because of debug mode.
/home/fezfez/work/phpstan-memory/src/NoMemoryConsumption.php
--- consumed 0 B, total 56 MB
Result cache was not saved because only files were passed as analysed paths.


[OK] No errors


Used memory: 56 MB


```
