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
        Schema::create('emp_infos', function (Blueprint $table) {
            $table->id();
            $table->string('role');
            $table->string('emp_name');
            $table->string('contect');
            $table->string('email');
            $table->string('Hobbie_id');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emp_infos');
    }
};
