<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('desc');
            $table->string('price');
            $table->string('address');
            $table->string('status');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('types');
            $table->string('services');
            $table->string('imgs_path');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tour');
    }
}
