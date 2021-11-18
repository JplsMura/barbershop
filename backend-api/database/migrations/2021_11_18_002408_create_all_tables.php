<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('avatar')->default('default.php');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
        });

        Schema::create('barbers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('avatar')->default('default.png');
            $table->float('stars')->default(0);
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->timestamps();
        });

        Schema::create('userFavorites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users');
            $table->foreignId('id_barber')->constrained('barbers');
            $table->timestamps();
        });

        Schema::create('userAppointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users');
            $table->foreignId('id_barber')->constrained('barbers');
            $table->dateTime('ap_datetime');
            $table->timestamps();
        });

        Schema::create('barberPhoto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_barber')->constrained('barbers');
            $table->string('url');
            $table->timestamps();
        });

        Schema::create('barberReviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_barber')->constrained('barbers');
            $table->float('rate');
            $table->timestamps();
        });

        Schema::create('barberServices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_barber')->constrained('barbers');
            $table->string('name');
            $table->float('price');
            $table->timestamps();
        });

        Schema::create('barberTestimonials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_barber')->constrained('barbers');
            $table->string('name');
            $table->float('rate');
            $table->string('body');
            $table->timestamps();
        });

        Schema::create('baberAvailability', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_barber')->constrained('barbers');
            $table->integer('weekday');
            $table->text('hours');
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
        Schema::dropIfExists('users');
        Schema::dropIfExists('barbers');
        Schema::dropIfExists('userFavorites');
        Schema::dropIfExists('userAppointments');
        Schema::dropIfExists('barberPhoto');
        Schema::dropIfExists('barberReviews');
        Schema::dropIfExists('barberServices');
        Schema::dropIfExists('barberTestimonials');
        Schema::dropIfExists('baberAvailability');
    }
}
