run create table:
    php artisan migrate
reset all command migration :
    php artisan migrate:reset  or php artisan mirgate:rollback --step=5
delete all table & run command migrate :
    php artisan migrate:fresh

//========DB Seeders================
php artisan make:seeder UsersTableSeeder
    composer dump-autoload
    php artisan db:seed
    php artisan db:seed --class=UsersTableSeeder
    php artisan migrate:refresh --seed (hook)