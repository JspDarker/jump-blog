<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('account_id')->unsigned();
            $table->string('name');
            $table->string('icon')->nullable();
            $table->string('url')->nullable();
            $table->timestamp('updated_at');
            $table->timestamp('created_at')->nullable();

            $table->index('account_id'); // index field # https://ma.ttias.be/laravel-mysql-auto-adding-update-current_timestamp-timestamp-fields/
            $table->foreign('account_id')->references('id')->on('accounts'); // create a relationship
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
}
