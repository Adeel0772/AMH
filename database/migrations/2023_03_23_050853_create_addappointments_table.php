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
        Schema::create('addappointments', function (Blueprint $table) {
            $table->id();
            $table->string('apptype');
            $table->string('number');
            $table->string('date');
            $table->string('area');
            $table->string('disease');
            $table->string('email');
            $table->string('description');
            $table->unsignedbiginteger('doctor_id');
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addappointments');
    }
};
