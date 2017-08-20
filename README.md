# laravel-brother
The most complete package to help you in everyone project

# Dependencies
Nwidat:
```
composer require nwidart/laravel-modules
```

Guzzle: 
```
composer require guzzlehttp/guzzle
```

Change composer.json of root to:
```
"psr-4": {
            "App\\": "app/",
            "Modules\\" : "Modules/",
            "Modules\\CoreHelper\\": "vendor/icarojobs/corehelper"
        }
```       

# Modules
CoreHelper: Contain many helper functions. 
* Date helpers
* Money helpers
* String helpers
* Slack notifications helpers

# Date Helper:
```php
use Modules\CoreHelper\Http\Controllers\DateController;
$date = DateController::date_to_br('2017-08-17');
$date = DateController::date_to_us('17/08/2017');
```

# Money Helper:
```php
use Modules\CoreHelper\Http\Controllers\MoneyController;

$money = MoneyController::money_to_us('350,45');

$money = MoneyController::money_to_br('350.45');
```

# String Helper
```php
use Modules\CoreHelper\Http\Controllers\StringController;

$string = StringController::clear_string("É mano, remove essa ação pra nóis");
```

# Validator Helper
```php
use Modules\CoreHelper\Http\Controllers\ValidatorController;

$cpf = ValidatorController::cpf_validate('322.867.222-51');

$cnpj = ValidatorController::cnpj_validate('75.305.113/0001-02');
```


# Slack Notifications
```php
use Modules\CoreHelper\Notifications\SlackNotifications;

$dados = [
        'channel'   =>  '#notifications',
        'from'      =>  'MOB2YOU Notifications',
        'emoji'     =>  ':mob2you:', // :ghost: , etc...
        'message'   =>  'First Test Slack Notification 3'
    ];

    new SlackNotifications($dados);
```

# Crud Restful (trait)
```php
use Modules\Crud\Http\Controllers\CrudControllerTrait;

class MyRestfulController extends Controller
{
    use CrudControllerTrait;

    protected $model;

    public function __construct(\App\Models\User $model)
    {
        $this->model = $model;
    }

    public function index(Request $request)
    {

        // Get specific user
        // $user = $this->show(1);
        // $userObject = json_decode( $user->content() , false);
        // dd($userObject->name);

        // Get all users
        // $users = $this->all($request);
        // $usersObject = json_decode( $users->content(), false );
        // dd($usersObject->data);
    }
}
```
    
# Setting Crontab / Cronjob / Laravel Tasks
```
In Terminal, run:

$ sudo crontab -e

[ press i to insert mode ]

* * * * * php /path-to-laravel-project/artisan schedule:run >> /dev/null 2>&1

[ press ESC ]
[ press wq! to save and exit ]

You should see the following message: crontab: installing new crontab. 
You can verify the crontab file by using:

$ sudo crontab -l

```    
    
* Author: Icaro Jobs < icarowilliam@me.com >   
