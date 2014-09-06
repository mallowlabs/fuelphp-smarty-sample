# Sample Application with FuelPHP

## Heroku Deploy

```
$ heroku create
$ git push heroku master
$ heroku config:set FUEL_ENV=production
$ heroku addons:add cleardb
$ heroku run php oil refine migrate
$ heroku open
```
