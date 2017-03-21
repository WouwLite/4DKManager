<p align="center"><img src="https://securehub.eu/4dk-nl/images/SN_4DK_tweeluik.png" height="150px"></p>

<p align="center">
<a href="https://laravel.com"><img src="https://img.shields.io/badge/laravel_version-5.4-blue.svg" alt="Laravel Version"></a>
<a href="#"><img src="https://img.shields.io/badge/build-0.1-blue.svg" alt="Build"></a>
<a href="#"><img src="https://img.shields.io/badge/status-development-yellow.svg" alt="Status"></a>
<a href="https://opensource.org/licenses/MIT"><img src="https://img.shields.io/github/license/mashape/apistatus.svg" alt="MIT License"></a>
</p>

## About the Scouting Four Day Camp

If you participate in the 4-days walking event and you are a member of Scouts Netherlands, you will be hosted from the 15th until the 22th of July at the 31th Scouts 4-Days Camp. During this camp we will help you complete the challenging task of walking 30, 40 or 50 kilometres per day. Medical treatment will be available on the campsite, as well as on different scouts-posts on route. There will be a recreation room where you can relax after your walk, whilst enjoying some food or drinks.
No need to cook either, we will do that for you! And it doesn't stop there!
As always you can catch up on your scouts-contacts. Maybe even with scouts from abroad. You spend the night in the middle of quiet and forest filled surrounding in the eastern part of Nijmegen. Everyone is welcome, as an individual walker, or as part of a group.
During the week you can take care of everything yourself, or use our services, for example a wake-up service (if you are afraid you won't wake up in time) and the camp restaurant.

The 4-Day Camp is located on the grounds of Scouts group Keizer Karel, at the Sophiaweg in Nijmegen.

## Contribute

De 4DaagseKamp Manager (4DKM) is een webapplicatie gebouwd op het populaire PHP framework Laravel (versie 5.4). Door het gebruik van een veelzijdig en eenvoudig te begrijpen framework kunnen programmeurs snel en eenvoudig aanpassingen doen of zelfs nieuwe modules toevoegen. De 4DKM is een modulair platform en een bouwen van een module zal binnenkort worden opgenomen in de documentatie.

Hulp is altijd welkom, dus heb je technisch inzicht en denk je een bijdrage te kunnen leveren? Clone deze repository en ga lekker aan de slag!

How?

1. Fork it
2. Create your feature branch: 
    ```
    git checkout -b my-new-feature
    ```
3. Commit your changes: 
    ```
    git commit -am 'Add some feature'
    ```
4. Push to the branch: 
    ```
    git push origin my-new-feature
    ```
5. Submit a pull request

## Privacy and security

If you discover a security vulnerability within the 4DKManager, please send an e-mail to privacy@4dk.nl. All security vulnerabilities will be promptly addressed.

## License

The 4DKManager is open-sourced software licensed under the <a href="https://opensource.org/licenses/MIT">MIT license</a>.



-----------

## Installation (through Command Line Interface)

1. Clone the Git repository:

    ```
    git clone https://github.com/komcommy/4DKManager.git
    ```

2. Create a database in `MySQL`:

    ```
    Host: localhost
    Database: 4dkm_db
    Username: 4dkm_user
    Password: p@ssw0rd
    ```

3. Create database migration:

    ```
    php artisan migrate
    ```
    
4. Create useraccount and grand admin rights:

    Go to http://localhost/register
    After registration, change database values for your account
    ```
    Function: "beheerder"
    Admin: "1"
    ```
    This feature will soon be integrated within the code to simplify actions. But for now, change the database data to become an awesome and sexy admin ;-).

## Updating

Automated updates are not supported yet, follow the documentation when upgrading!

## Usage

Once installed, visit the homepage on http://localhost.
If you have any issues, run the following command in the Command Line Interface:
    ```
    composer update
    ```

Views / pages are found in:
```    
    /resources
    /resources/views
    /resources/IT (CRUD IT manager)
    /resources/admin (admin pages)
    /resources/auth (login and registration pages)
    /resources/clients (CRUD client manager)
    /resources/debug (only for debugging purposes)
    /resources/mealmanager (all mealmanager pages)
    /resources/pages (generic pages)
```

## Configuration

To configure the app, create a .env file (if not present yet).

```
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

BROADCAST_DRIVER=log
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
```
