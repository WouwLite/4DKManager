<p align="center"><img src="https://securehub.eu/4dk-nl/images/Scouting_NL_logo_RGB_transparanteachtergrond.png" height="150px"></p>

<p align="center">
<a href="https://travis-ci.org/komcommy/4DKManager"><img src="https://img.shields.io/travis/komcommy/4DKManager.svg" alt="Build Status"></a>
<a href="#"><img src="https://img.shields.io/badge/version-beta.1709.04-yellow.svg" alt="Version"></a>
<a href="#"><img src="https://img.shields.io/badge/modules-2-yellowgreen.svg" alt="Modules Present"></a>
</p>

## Over 4DKManager

4DKM is een web applicatie gebouwd op PHP Laravel 5.4 ten behoeven van het Scouting 4Daagsekamp te Nijmegen.
De applicatie wordt ontworpen vanuit een modulair oogpunt, kortom, geschikt voor meerdere doeleinden.

## Bijdragen

Het wordt extreem op prijs gesteld als u een bedrijge wilt en kunt leveren.

## Privacy en beveiliging

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

De 4DKManager heeft momenteel nog geen licentie. Zodra de code toepasbaar is zullen wij een licentie toevoegen. Geen zorgen, het is geen closed-source project!



-----------

## Installation (via CLI)

1. Clone the Git repository:

    ```
    git clone https://github.com/komcommy/4DKManager.git
    ```

2. Create a database in `MySQL`:

    ```sql
    CREATE USER 'newuser'@'localhost' IDENTIFIED BY 'password';
    GRANT ALL PRIVILEGES ON * . * TO 'newuser'@'localhost';
    FLUSH PRIVILEGES;
    ```

3. Create authentication files:

    ```
    php artisan make:auth
    ```
    
4. Migrate database tables:

    ```
    php artisan migrate
    ```

## Updating

Automated updates are not supported yet, use the current Git release:

## Usage

More to follow soon!

```html
<html>
    <body>
        <h1>Sample HTML</h1>
        <p>Sample HTML text</p>
    </body>
</html>
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
