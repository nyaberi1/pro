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
        Schema::create('enrolls', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('regno');
            $table->string('phone');
            $table->enum('gender', ['male', 'female']);
            $table->string('idno');
            $table->string('birthdate');
            $table->string('country');
            $table->string('county');
            $table->enum('level', ['masters', 'degree', 'diploma', 'certificate']);
            $table->enum('faculty', ['bit', 'bcom', 'bair', 'beda']);
            $table->enum('course_d', ['4y', '3y', '1y']);
            $table->string('yearofenroll');
            $table->string('admletter')->nullable(true);
            $table->string('passport')->nullable(true);
            $table->string('resultsslip')->nullable(true);
            $table->string('kcseliving')->nullable(true);
            $table->string('scannedid')->nullable(true);
            $table->string('birthcert')->nullable(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrolls');
    }
};
