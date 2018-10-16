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

php artisan make:factory PostFactory [--model=Post] // command create factory on model

// fix bug not auto update timestamp
    # https://github.com/laravel/framework/issues/22900
    # https://ma.ttias.be/laravel-mysql-auto-adding-update-current_timestamp-timestamp-fields/
// get log db
    # https://stackoverflow.com/questions/27753868/how-to-get-the-query-executed-in-laravel-5-dbgetquerylog-returning-empty-arr