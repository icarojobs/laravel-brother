# laravel-brother
The most complete package to help you in everyone project

# dependencies
https://github.com/nWidart/laravel-modules

Change composer.json of root to:

 "psr-4": {
             "App\\": "app/",
             "Modules\\" : "Modules/"
         }

# modules
CoreHelper: Contain many helper functions. eg: Date helpers, Money helpers, etc

Date Helper:
use Modules\CoreHelper\Http\Controllers\DateController;

usage:
$date = DateController::mysql_to_date('2017-08-17');


usage:
$date = DateController::date_to_mysql('17/08/2017');