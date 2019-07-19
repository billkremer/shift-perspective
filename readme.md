# Phenomenal-Perspectives

This is a demonstration of a [Myers-Briggs Type Indicator](https://www.themyersbriggs.com/) questionnaire.

## How to run locally

1. git clone this repo to your computer
    * ```$ git clone git@github.com:billkremer/shift-perspective.git```
2. ```$ cd shift-perspective```
3. Install Dependencies
    * ```$ composer install```
4. update .env
    * ```$ cp .env.example .env```
5. Add Key
    * ```$ php artisan key:generate```

6. Create and Populate the Database 
    * ```$ php artisan migrate:fresh```
    * ```$ php artisan db:seed```


7. Run local server
    * ```$ php artisan serve```
8. find app at [http://127.0.0.1:8000/](http://127.0.0.1:8000/) (or wherever the prompt displays)


## Find on Heroku

[https://phenomenal-perspectives.herokuapp.com/](https://phenomenal-perspectives.herokuapp.com/)

note: Heroku version of application uses PostgreSQL.

## Potential Issues / Considerations

* The Dimension provided for Introvert / Extravert is EI, which is displayed in the mockup results reversed as Introvert --- Extravert. This convention is opposite of the other three dimensions where the Dimension is in the same order as the displayed result range. (JP --> Judging --- Perceiving)

* The scale for the answers was requested to be from 1 - 7. It may be easier for users to conceptualize the results if the scale was from -3 - +3. For the purposes of this exercise, 1 - 7 was used.  Could also consider using text labels. For this project the text scale:(Completely Disagree, Strongly Disagree, Disagree Somewhat, Neutral, Agree Somewhat, Strongly Agree, Completely Agree) was used.

* The page is set to display all the questions from the desired quiz stored in the database.  In this case there are 10 questions.  If another quiz should have many more questions, it may be necessary to display them in smaller groups.

* This code challenge is suggested to take 3 hours.  Accounting for time to perform basic functionality testing and writing-up instructions, Automated Testing has been omitted from this project.

## Technology

* [Laravel](https://laravel.com/) for basic framework and front end components.

* [SQLite](https://www.sqlite.org/) for local database use.

* [Heroku](https://www.heroku.com/) for running in production.

* [PostgreSQL](https://www.postgresql.org/) for production database use.


## Log
* 15-07-2019 initial creation and database
* 16-07-2019 database, migrations & seeding
* 17-07-2019 initial controllers and models, formatting of questions
* 18-07-2019 updates to formatting, parse answers into Type Indicators
* 19-07-2019 cleanup of loose ends & review documentation

