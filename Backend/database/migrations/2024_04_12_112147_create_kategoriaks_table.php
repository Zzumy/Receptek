<?php

use App\Models\Kategoriak;
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
        Schema::create('kategoriaks', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->timestamps();
        });

        Kategoriak::create([
            'nev' => 'Főétel'
        ]);
        
        Kategoriak::create([
            'nev' => 'Leves'
        ]);
        
        Kategoriak::create([
            'nev' => 'Édesség'
        ]);
        
        Kategoriak::create([
            'nev' => 'Saláta'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategoriaks');
    }
};
