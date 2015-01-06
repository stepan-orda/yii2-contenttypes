yii2-contenttypes
=================
This extension keeps track of your models giving them unique ids so you can easily use them in junction tables.
In the future I plan to improve this extension so it will be something like ContentTypes from Django framework.

# Installation
### Downloading yii2-contenttypes using composer

Add yii2-contenttypes to the require section of your composer.json file:

```json
{
     "require": {
         "stepanorda/yii2-contenttypes": "*"
     }
}
```

Then run the command:

```sh
$ php composer.phar update
```

Apply the migration:

```sh
$ php yii migrate/up --migrationPath=@vendor/stepanorda/yii2-contenttypes/migrations
```

# Usage

# License
Apache License 2.0 http://www.apache.org/licenses/