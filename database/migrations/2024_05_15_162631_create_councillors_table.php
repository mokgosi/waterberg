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
        Schema::create('councillors', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('phone_number', 15)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('avatar', 255)->nullable();
            $table->string('slug', 255)->unique();
            $table->text('about')->nullable(); 
            $table->boolean('active')->default(true);
            $table->foreignId('political_party_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('portfolio_id')->nullable()->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('councillors');
    }
};
