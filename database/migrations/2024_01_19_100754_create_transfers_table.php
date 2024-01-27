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
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sender_office_id');
            $table->unsignedBigInteger('receiver_office_id');
            $table->decimal('amount', 10, 2);
            $table->dateTime('transfer_date');
            $table->timestamps();
    
            $table->foreign('sender_office_id')->references('id')->on('offices');
            $table->foreign('receiver_office_id')->references('id')->on('offices');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfers');
    }
};