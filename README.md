
## Information

We built the app using laravel , made a simple backend CRUD and use blade in front end

### Technologies used in Backend

| Technology             |            Description             | Version |
| :--------------------- | :--------------------------------: | :-----: |
| Php                    |            PHP language            |  8.0.2  |
| Laravel                |     Laravel backend framework      |  ^8.65  |
| laravel/ui             |             UI Package             |  ^3.3   |
| realrashid/sweet-alert |        sweet-alert Package         |  ^5.0   |
| maatwebsite/excel      | Excel pacage for laravel framework |   3.1   |
| srmklive/paypal        |      paypal checkout Package       |  ~3.0   |

## Cloning and use

```bash or terminal
  # Cloning app
  git clone  https://github.com/AbderrahmaneAmerhhi/Restaurant-project-with-Laravel8

  # install composer
   composer install
   php artisan config:clear
   php artisan config:cache
  # copy .env.example => rename it to .env

  # generate App key
   php artisan key:generate

  # install node_modules
   npm install

```

## Configuration

```env
# in .env file config database

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=yourdatabse_name
DB_USERNAME=root
DB_PASSWORD=databasepassword


# add your Paypal configuration
PAYPAL_MODE=sandbox
PAYPAL_SANDBOX_API_USERNAME=YourUserName
PAYPAL_SANDBOX_API_PASSWORD=YourPassword
PAYPAL_SANDBOX_API_SECRET=YourSecret


```

## Migrate database and run app

```bash or terminal
  ########### open app in terminal or cmd or bash ... ###############
  # Migrate data base run in terminal
   php artisan migrate

  # seed database
   php artisan db:seed

  # run app
  php artisan serve
   ## in other terminal
    npm run dev

  # open app in
  http://127.0.0.1:8000

  # login to admin dashboard
   Url :http://127.0.0.1:8000/login
   Email :   admin@gmail.com
   Password : admin


```
