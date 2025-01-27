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
        Schema::create('medewerkers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('persoon_id')->constrained('people')->cascadeOnDelete();
            $table->string('nummer', 20)->unique();
            $table->enum('medewerkertype', ['Assistent', 'Mondhygiënist', 'Tandarts', 'Praktijkmanagement']); 
            $table->string('specialisatie')->nullable();
            $table->string('beschikbaarheid')->nullable(); 
            $table->boolean('isactief')->default(true); 
            $table->text('opmerking')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medewerkers');
    }
};
