sf2-project-template
====================

The aim of this project is to provide basic features that each sf2 project most likely will use:

- login ( & logout)
- registration
- translation
- locale specific urls
- support for CoffeeScript and LESS (can be used along/instead of JavaScript and CSS)
- asset management

## Installation

### Install CoffeeScript

npm install coffee-script

### Install LESS

npm install less

### Create configuration file

copy and rename parameters.dist.yml as parameters.yml. If you plan to use MySql then you may now configure the database settings.

### Install composer

Composer is used for dealing (obtaining and installing) with vendor dependencies.

Obtain composer from http://getcomposer.org/.

Installation is simple:

curl -s https://getcomposer.org/installer | php

### Install vendor dependencies

php composer.phar install

## Selecting database driver

This project supports either a relational database such as MySql or MongoDb for storing data. By default, MySql is the default choice.

## Using MySql as the database

### Configure database settings

Configure the required database settings in parameters.yml

### Creating the database

If you haven't already created the database, run this on the command line;

php app/console doctrine:database:create

### Creating database tables

As this project is using migrations, run:

php app/console doctrine:migrations:migrate

## Using MongoDb instead of default relational database

Uncomment the line "new Doctrine\Bundle\MongoDBBundle\DoctrineMongoDBBundle()," in AppKernel.php

If you want to use MongoDb instead, remember to uncomment the lines in config.yml under (including) "doctrine_mongodb:".

Also remember to set mongodb as the driver under fos_user:db_driver in config.yml.

Under "fos_user:user_class:" in config.yml comment out the line "user_class: JmeSf2\GenericUserBundle\Entity\User" and uncomment the line "user_class: JmeSf2\GenericUserBundle\Document\User"

Finally, create the required indexes:

php app/console doctrine:mongodb:schema:create --index

## Creating a new user

You can create a new user simply using the command line:

php app/console fos:user:create

Remember to activate the newly created user:

php app/console fos:user:activate

After that you can login using yoursite.com/login.

## Asset management

During the development, you may need to recreate assets:

php app/console assetic:dump --watch

Remember to dump the assets every time you deploy!

## Testing

Run unit tests:

phpunit -c app