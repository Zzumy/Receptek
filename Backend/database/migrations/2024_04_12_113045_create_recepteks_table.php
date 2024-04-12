<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Receptek;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recepteks', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->foreignId('kat_id')->references('id')->on('kategoriaks');
            $table->string('kep_eleresi_ut');
            $table->string('leiras');
            $table->timestamps();
        });
        Receptek::create([
            'nev' => 'Vargánya Krémleves camembert sajtos mini cipóval',
            'kat_id' => '2',
            'kep_eleresi_ut' => 'asd',
            'leiras' => 'asd'
        ]);

        Receptek::create([
            'nev' => 'Mátrai borzas sültburgonyával és jázminrizzsel',
            'kat_id' => '1',
            'kep_eleresi_ut' => 'asd',
            'leiras' => 'asd'
        ]);

        Receptek::create([
            'nev' => 'Somlói galuska',
            'kat_id' => '3',
            'kep_eleresi_ut' => 'asd',
            'leiras' => 'asd'
        ]);

        Receptek::create([
            'nev' => 'Uborkasaláta',
            'kat_id' => '4',
            'kep_eleresi_ut' => 'asd',
            'leiras' => 'asd'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recepteks');
    }
};
