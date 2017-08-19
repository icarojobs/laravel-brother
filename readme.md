# laravel-brother
The most complete package to help you in everyone project

# Dependencies
Nwidat: https://github.com/nWidart/laravel-modules

Guzzle: composer require guzzlehttp/guzzle

Change composer.json of root to:

 "psr-4": {
             "App\\": "app/",
             "Modules\\" : "Modules/"
         }

# Modules
CoreHelper: Contain many helper functions. eg: Date helpers, Money helpers, etc

# Date Helper:
use Modules\CoreHelper\Http\Controllers\DateController;

usage:
$date = DateController::date_to_br('2017-08-17');


usage:
$date = DateController::date_to_us('17/08/2017');

# Money Helper:
use Modules\CoreHelper\Http\Controllers\MoneyController;

usage: $money = MoneyController::money_to_us('350,45');

usage: $money = MoneyController::money_to_br('350.45');

# String Helper
use Modules\CoreHelper\Http\Controllers\StringController;

usage: $string = StringController::clear_string("É mano, remove essa ação pra nóis");

# Validator Helper
use Modules\CoreHelper\Http\Controllers\ValidatorController;

usage: $cpf = ValidatorController::cpf_validate('322.867.222-51');

usage: $cnpj = ValidatorController::cnpj_validate('75.305.113/0001-02');