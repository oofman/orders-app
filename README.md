<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## About Orders App

This is a very basic example of how to retrieve the order from your Shopify shop.
It connects to the Shopify Rest API making use of:
`AccessToken`
`Version`
`ShopId`

You can fill these variables in the .env file in the root of the project, for running it locally.
These will be set in a parameter store like: AWS Parameter Store

## Prerequisite

- Running PHP 8.1 or above
- Running Composer 2.5.7 or above

## Setup

1 - Clone the [repo](https://github.com/oofman/orders-app.git) to your local

2 - run `composer install` and/or `composer update`

3 - rename `.env.example` to `.env` and fill in the required variables.

4 - run `php artisan serve`

## Missing Elements

1 - Database - I chose to use the Rest API as my data source, and not keep the data stored locally for a couple of reasons:

- Time constraint
- No order manipulation can be done without access to the API.
- I would use and RDS and not NoSQL if I did implement saving to a database.

2 - Pagination

- Listing pages should have the ability to paginate.
- Currently its only listing all the orders but this will be an issue over time.

3 - Unit tests

- Build way better unit tests.
- Each action under each controller should have a unit-test that makes sure the actions are working.