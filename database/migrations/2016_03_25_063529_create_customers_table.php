<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    public function up()
    {
        Schema::create('customers', function($table) {
            $table->increments('id'); // id INT AUTO_INCREMENT PRIMARY KEY
            $table->integer('user_id')->unsigned();
            $table->string('name',10);
            $table->string('number',20);
            $table->timestamps(); // created_at TIMESTAMP, updated_at TIMESTAMP
            $table->timestamp('added_at');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
