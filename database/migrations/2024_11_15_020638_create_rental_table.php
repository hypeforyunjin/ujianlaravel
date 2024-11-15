<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('rental', function (Blueprint $table) {
            $table->id('item_rental_id');
            $table->foreignId('customer_id')->constrained('customers');
            $table->foreignId('movie_id')->constrained('movies');
            $table->date('rental_date_out');
            $table->date('rental_date_returned')->nullable();
            $table->decimal('rental_amount_due', 8, 2);
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('rental');
    }
};
