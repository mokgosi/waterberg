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
        Schema::create('tenders', function (Blueprint $table) {
            $table->id();
            $table->string('number', 255)->unique(); //bid number
            $table->string('title', 255); //Bid
            $table->string('amount', 255)->nullable(); 
            $table->string('attachment', 255); 
            $table->string('slug', 300); 
            $table->text('content'); //description/instructions 
            $table->foreignId('tender_category_id')->nullable()->constrained();	
            $table->date('opening_date'); //bid_date
            $table->date('closing_date');   //bide closing date
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenders');
    }
};
