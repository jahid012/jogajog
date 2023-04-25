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
        Schema::create('users', function (Blueprint $table) {
            
            $table->id();
            $table->string('email',50)->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone',20)->nullable();
            $table->timestamp('phone_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->text('permissions')->nullable();
            $table->string('first_name',50)->nullable();
            $table->string('last_name',50)->nullable();
            $table->enum('user_type', ['admin','staff','lister','user','delivery_man'])->default('user');
            $table->string('gender')->default('male')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->tinyInteger('status')->default(1)->comment('0 inactive, 1 active');
            $table->tinyInteger('is_user_banned')->default(0)->comment('0 unban, 1 ban');
            $table->tinyInteger('newsletter_enable')->default(0)->comment('0 unable, 1 enable');
            $table->integer('otp')->nullable()->comment('used for reset password');
            $table->string('firebase_auth_id', 100)->nullable()->comment('this is for mobile app.');
            $table->tinyInteger('is_password_set')->default(1)->comment('0 for social login');
            $table->text('images')->nullable();
            $table->longText('socials')->nullable()->comment('it will be array data');
            $table->timestamp('last_login')->nullable();
            $table->string('last_ip',30)->nullable();
            $table->timestamp('last_password_change')->nullable();
            $table->bigInteger('image_id')->unsigned()->nullable();
            $table->integer('role_id')->unsigned()->nullable();
            $table->bigInteger('pickup_hub_id')->unsigned()->nullable();
            $table->double('balance', 20,3)->default(0.000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
