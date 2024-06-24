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
        Schema::create('committee_councillor', function (Blueprint $table) {
            $table->id();

            $table->unsignedBiginteger('councillor_id')->unsigned();
            $table->unsignedBiginteger('committee_id')->unsigned();

            $table->foreign('councillor_id')->references('id')->on('councillors')->onDelete('cascade');
            $table->foreign('committee_id')->references('id')->on('committees')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('committee_councillor');
    }
};
