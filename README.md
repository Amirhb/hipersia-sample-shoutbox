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
Data-Mapping is supported by [Spot ORM](http://phpdatamapper.com "Spot ORM") and you can change dsn and name properties to support other databases which get supported bt Spot ORM.
## Models
## Migration
## Controllers
## Assets
## Routing
## View