<p align="center"><img src="https://securehub.eu/4dk-nl/images/SN_4DK_tweeluik.png" height="150px"></p>

<p align="center">
<a href="https://laravel.com"><img src="https://img.shields.io/badge/laravel-5.4-blue.svg" alt="Laravel Version"></a>
<a href="#"><img src="https://img.shields.io/badge/status-development-yellow.svg" alt="Status"></a>
<a href="#"><img src="https://img.shields.io/badge/modules-2-yellowgreen.svg" alt="Modules Present"></a>
</p>

## Over het Scouting Vierdaagsekamp

Tijdens dit kamp begeleiden we je zoveel mogelijk om de zware taak van 30, 40 of 50 km per dag te volbrengen. Er is medische verzorging, op het kampterrein en op de verschillende scouting-posten op de route. Maar wat dacht je van de recreatieruimte waar je na het lopen lekker kunt uitrusten onder het genot van een hapje en een drankje. 
En koken hoeft ook niet meer, dat doen wij voor je! Zo zijn er nog een aantal dingen! 
In iedere geval kun je je scouting-contacten weer op peil brengen. Misschien wel met scouts uit het buitenland! 's Nacht overnacht je in de bosrijke en rustige omgeving in het oosten van Nijmegen. Je bent als individuele loper welkom maar ook in groepsverband. 
Je kunt tijdens de week voor je zelf zorgen maar je kunt ook gebruik maken van, de wekdienst (voor als je je denkt te verslapen) en de kamprestauratie.

## Bijdragen

De 4DaagseKamp Manager (4DKM) is een webapplicatie gebouwd op het populaire PHP framework Laravel (versie 5.4). Door het gebruik van een veelzijdig en eenvoudig te begrijpen framework kunnen programmeurs snel en eenvoudig aanpassingen doen of zelfs nieuwe modules toevoegen. De 4DKM is een modulair platform en een bouwen van een module zal binnenkort worden opgenomen in de documentatie.

Hulp is altijd welkom, dus heb je technisch inzicht en denk je een bijdrage te kunnen leveren? Clone deze repository en ga lekker aan de slag!

## Privacy en beveiliging

Privacy en veiligheid staat hoog in het vaandel en er wordt bij elke implementatie getest of de veiligheid en privacy niet in het geding komt. Heb je een issue gevonden, meld het direct via privacy@4dk.nl.

## License

De 4DKManager heeft momenteel nog geen licentie. Zodra de code toepasbaar is zullen wij een licentie toevoegen. Geen zorgen, het is géén closed-source project! Het doel is om de code toegankelijk en modulair te maken zodat ook andere Scoutinggroepen er gebruik van kunnen maken.



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
