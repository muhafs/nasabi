<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();


            $table->foreignId('father_id')->nullable()->constrained('members');
            $table->foreignId('mother_id')->nullable()->constrained('members');
            // $table->foreignId('country_id')->constrained();

            $table->string('full_name');
            // $table->boolean('gender')->default(1); // true = MALE | false = FEMALE
            $table->enum('gender', ['M', 'F'])->default('M');

            $table->date('birth_date')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
