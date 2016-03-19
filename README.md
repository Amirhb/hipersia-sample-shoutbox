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
Models are located as PHP files in the Models folder. Each model-file is php class which inherited by \Spot\Entity .
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
## Controllers
## Assets
## Routing
## View