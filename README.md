# Sample Application with FuelPHP

[![Deploy](https://www.herokucdn.com/deploy/button.png)](https://heroku.com/deploy)

This is a sample application with FuelPHP.

## Features

* Use Smarty for template engine (File extension: .tpl)
* Switchable databases (Production: MySQL, Development: SQlite)
* Works on Heroku!

## Heroku Deploy

```
$ heroku create
$ git push heroku master
$ heroku config:set FUEL_ENV=production
$ heroku addons:add cleardb
$ heroku run php oil refine migrate
$ heroku open
```

## LICENSE
See LICENSE.md file.
