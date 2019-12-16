# Recrutement test

# Mission 1

Create a Laravel command that will calculate the sum of an array given as input

Example of command usage:

```shell
php artisan run:array_sum [1,2,[3,4,[5,6,[5]]]] -> output 26
```

# Mission 2

Create a Laravel command to replace strings represented by delimiter with arguments.

The command will take two arguments, 

First: string with elements to replace with its arguments, your have template pattern {} and inside the index of argument 
exp: '{1}_{0}'
Second: list of arguments, exp: {1} {0}

Example:

```php
php artisan run:string_replace '{1}_{0}' {1} {0} -> output: {0}_{1}
php artisan run:string_replace '{1}_{0}' hello world -> output: world_hello
```
