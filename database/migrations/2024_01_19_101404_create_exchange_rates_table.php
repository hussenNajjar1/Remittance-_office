<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('exchange_rates', function (Blueprint $table) {
            $table->id();
            $table->string('currency_from');
            $table->string('currency_to');
            $table->decimal('exchange_rate', 10, 2);
            $table->timestamps();

        });

        DB::table('exchange_rates')->insert([
            ['currency_from' => 'USD', 'currency_to' => 'EUR', 'exchange_rate' => 0.85],
            ['currency_from' => 'USD', 'currency_to' => 'TRY', 'exchange_rate' => 14.50],
            ['currency_from' => 'EUR', 'currency_to' => 'USD', 'exchange_rate' => 1.18],
            ['currency_from' => 'EUR', 'currency_to' => 'TRY', 'exchange_rate' => 11.00],
            ['currency_from' => 'TRY', 'currency_to' => 'USD', 'exchange_rate' => 0.069],
            ['currency_from' => 'TRY', 'currency_to' => 'EUR', 'exchange_rate' => 0.091],
            // يمكنك إضافة المزيد حسب الحاجة
        ]);
    }

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exchange_rates');
    }
};