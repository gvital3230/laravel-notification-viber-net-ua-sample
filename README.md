# ViberNetUa Notifications Channel for Laravel Demo

This is sample project with ViberNetUa channel

## Installation

Clone this repo

1. Fill .env file with config settings

``` 
VIBERNETUA_TOKEN='YOUR_TOKEN'
VIBERNETUA_SENDER='YOUR_ALPHA_NAME'
VIBERNETUA_DEBUG='true'
VIBERNETUA_SANDBOX_MODE='true'

```
2. Then run project in docker env

``` bash
./vendor/bin/sail up
```
3. Log in to php container, for example

``` bash
docker exec -it laravel-notification-viber-net-ua-sample_laravel.test_1 bash
```
Alternatively you can launch this project any appropriate for you ways

4. Run test message

``` bash
php artisan send-account-approved +380XXXXXXX
```

