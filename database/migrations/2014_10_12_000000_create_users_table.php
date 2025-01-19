<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * This method is used to create the `users` table with a minimalistic structure
     * and concise field names for better performance and simplicity.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('uuid')->primary(); // Primary key: Unique identifier (UUID) for each user.
            $table->string('n'); // User's name (shortened to 'n').
            $table->string('e')->unique(); // User's email address (shortened to 'e') and must be unique.
            $table->string('p'); // User's password (shortened to 'p') stored securely.
            $table->string('ph')->unique()->nullable(); // User's phone number (shortened to 'ph'), optional and unique.
            $table->enum('r', ['u', 'a'])->default('u'); // User's role (shortened to 'r'), 'u' for user, 'a' for admin. Defaults to 'u'.
            $table->timestamp('t_e')->nullable(); // Trial end date (shortened to 't_e'), nullable.
            $table->timestamp('s_s')->nullable(); // Subscription start date (shortened to 's_s'), nullable.
            $table->timestamp('s_e')->nullable(); // Subscription end date (shortened to 's_e'), nullable.
            $table->enum('pl', ['w', 'm', 'y'])->default('m'); // Subscription plan (shortened to 'pl'), 'w' for weekly, 'm' for monthly, 'y' for yearly. Defaults to 'm'.
            $table->rememberToken(); // Token for persistent login sessions ("remember me" functionality).
            $table->timestamps(); // Auto-managed fields for created_at and updated_at timestamps.
        });
    }

    /**
     * Reverse the migrations.
     *
     * This method is used to drop the `users` table when rolling back the migration.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
