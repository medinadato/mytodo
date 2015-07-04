mytodo
==========

A Symfony project created on June 16, 2015, 1:47 am.

# Installation

## Server

Create a local.mytodo file in symfony using the docs/nginx/nginx.conf


## Database

$ mysql -uroot -p -e 'create schema mytodo'

Then forward Engineering the design model in docs/db

### In case you need to import more entities

$ php app/console doctrine:mapping:import --force MDNTodoBundle yml
$ php app/console doctrine:mapping:convert annotation ./src
$ php app/console doctrine:generate:entities MDNTodoBundle

### Sample data

$ mysql > INSERT INTO user VALUES (1, 'Renato', null), (2, 'John', null);
$ mysql > INSERT INTO task (name, user_id, status_id) values ('Clean the room', 1, 'P'), ('Wash the dishes', 1, 'D'), ('Sell the table', 2, 'P'), ('Sell the house', 1, 'P');


## Application

$ composer.phar install --prefer-dist

$ php app/console assets:install --symlink


# Entities (if not existing)






