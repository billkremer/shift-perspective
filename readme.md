




```composer install```
```npm install``

```php artisan migrate:fresh```
```php artisan db:seed```

## How to run locally

1. git clone this repo to your computer
    * <code>$ git clone git@github.com:billkremer/shortenerl.git</code>
2. <code>$ cd shortenerl</code>
3. Install Dependencies
    * <code>$ composer install</code>
    * <code>$ yarn</code>
4. update .env
    * <code>$ cp .env.example .env</code>
5. Add Key
    * <code>$ php artisan key:generate</code>

```php artisan migrate:fresh```
```php artisan db:seed```


6. Compile
    * <code>$ npm run dev</code>
7. Run local server
    * <code>$ php artisan serve</code>
8. find app at [http://localhost:8000/](http://localhost:8000/)


## Find on Heroku

note: Heroku version of application uses PostgreSQL.

## Potential Issues / Considerations

* The Dimension provided for Introvert / Extravert is EI, which is displayed in the mockup results reversed as Introvert --- Extravert. This convention is opposite of the other three dimensions where the Dimension is in the same order as the displayed result range. (JP --> Judging --- Perceiving)

* The scale for the answers was requested to be from 1 - 7. It may be easier for users to conceptualize the results if the scale was from -3 - +3. For the purposes of this exercise, 1 - 7 was used.

* The page is set to grab all the questions from the desired quiz.  In this case there are 10 questions.  If another quiz should have many more questions, it may be necessary to display them in small groups.

## Log
