# Shoutbox Web-App by Hipersia Micro-MVC PHP-Framework

It's a simple Shoutbox app written using [Hipersia Micro-MVC PHP-Framework](https://github.com/Amirhb/hipersia "Hipersia Micro-MVC PHP-Framework") as an example to show how to start codding using the farmework.

Table of contents

## Installation

### Composer
Like other state-of-the-art PHP apps, you should use [Composer](https://getcomposer.org/download/ "Composer") to install all needed dependencies.
```
composer install
```
## Configuration
### Database
There's a config.yml file in the config folder of the project's root. You should customize it based your own environment.
```
dsn: mysql://username:password@localhost/databasename
name: mysql
```
Data-Mapping is supported by [Spot ORM](http://phpdatamapper.com "Spot ORM") and you can change dsn and name properties to support other databases which get supported by Spot ORM.
## Models
Models are located as PHP files in the Models folder. Each model-file is a php class which inherited from \Spot\Entity .
```
namespace app\models;

class Message extends \Spot\Entity
{
    protected static $table = 'messages';
    public static function fields()
    {
        return [
            'id'           => ['type' => 'integer', 'primary' => true, 'autoincrement' => true],
            'author'       => ['type' => 'string', 'required' => true],
            'message'      => ['type' => 'text', 'required' => true],
            'date_created' => ['type' => 'datetime', 'value' => new \DateTime()]
        ];
    }
}
```
For more information on how to develop a Spot Entity, visit [here](http://phpdatamapper.com/docs/entities/ "Working With Entities").
## Migration
You can run migration to create tables based on your models. To do this, you should visit url-of-your-project/migrate.
The default Migration controller looks like as follows:
```
namespace app\controllers;

use hipersia\framework\MigrationController as Migration;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MigrationController extends Migration {

    public function index( Request $request, Response $response) {

        $this->migrate('app\models\Message');

        return $response;
    }
}
```
## Controllers
Controllers are located in Controller folder project's root. A controller inherits from hipersia\framework\Controller and it uses Response and Request object of HttpFoundation.
```
namespace app\controllers;

use hipersia\Base as base;
use hipersia\framework\Controller as Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use hipersia\framework\AssetBundle;

class DefaultController extends Controller {

    public function index( Request $request, Response $response, $args) {

        echo 'You have called ' . $args['uri'];

        return $response;
    }
}
```
### Routing
### Working with Models in your Controller
To access Spot's mapper. You should use base methods of Hipersia framework as follows:
```
$locator = base::getDbLocator();
$mapper = $locator->mapper('app\models\Message');
```
For more information on database queries provided by mappers, visit [here](http://phpdatamapper.com/docs/queries "Queries With Spot").
An Expample on this which handles the shoutbox:
```
namespace app\controllers;

use hipersia\Base as base;
use hipersia\framework\Controller as Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use hipersia\framework\AssetBundle;

class DefaultController extends Controller {

    public function shoutBox( Request $request, Response $response) {

        $locator = base::getDbLocator();
        $mapper = $locator->mapper('app\models\Message');

        if(!empty($_POST)) {
            $message = $mapper->insert([
                'author' => $_POST['author'],
                'message' => $_POST['message']
            ]);
        }

        $messages = $mapper->all();

        AssetBundle::registerCss('bootstrap', __DIR__ . '/../views/css/bootstrap.css');

        return $this->render('shoutbox', ['messages' => $messages]);
    }
}
```
## Assets
## View