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
            $table->uuid('uuid')->primary(); // Unique identifier for each user
            $table->string('name'); // Full name of the user
            $table->string('email')->unique(); // User's email address
            $table->string('password'); // Hashed password for authentication
            $table->string('phone_number')->nullable(); // Optional phone number field
            $table->enum('role', ['user', 'admin', 'moderator'])->default('user'); // User role (with more options like admin and moderator)
            $table->boolean('status')->default(false); // Whether the user's account is not active
            $table->timestamp('trial_end')->nullable(); // Days remaining for trial (nullable)
            $table->timestamp('subscription_start')->nullable(); // Start date of the user's subscription
            $table->timestamp('subscription_end')->nullable(); // End date of the user's subscription
            $table->enum('plan', ['weekly', 'monthly', 'yearly'])->default('monthly'); // Subscription plan
            $table->rememberToken(); // Token for "remember me" functionality
            $table->timestamps(); // Created and updated timestamps
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
