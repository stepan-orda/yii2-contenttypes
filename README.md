yii2-contenttypes
=================
Adaptation of contenttypes from Django for Yii2.

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

And apply the migration:

```sh
$ php yii migrate/up --migrationPath=@vendor/stepanorda/yii2-contenttypes/migrations
```