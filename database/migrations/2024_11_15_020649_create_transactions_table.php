<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('transaction_id');
            $table->foreignId('account_id')->constrained('accounts');
            $table->foreignId('item_rental_id')->constrained('rental');
            $table->date('transaction_date');
            $table->decimal('transaction_amount', 8, 2);
            $table->text('transaction_comment')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
