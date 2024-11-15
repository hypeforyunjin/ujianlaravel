<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id('movie_id');
            $table->integer('release_year');
            $table->string('movie_title');
            $table->text('movie_description')->nullable();
            $table->integer('number_in_stock');
            $table-->enum('rental_or_sale', ['rental', 'sale', 'both']);
            $table->decimal('rental_daily_rate', 8, 2)->nullable();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
