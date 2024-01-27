<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });


        $defaultUser = [
            'name' => 'اسم المستخدم',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin1234'), // تشفير كلمة المرور باستخدام Hash
            'role' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        DB::table('users')->insert($defaultUser);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};