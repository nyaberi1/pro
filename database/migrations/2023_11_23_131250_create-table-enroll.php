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
            $table->string('idno');
            $table->string('country');
            $table->string('county');
            $table->string('faculty');
            $table->string('course_d');
            $table->string('yearofenroll');
            $table->string('admletter');
            $table->string('passport');
            $table->string('resultsslip');
            $table->string('kcseliving');
            $table->string('scannedid');
            $table->string('birthcert');



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
