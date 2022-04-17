<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class ChangeTheColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //
    public function up()
    {
        Schema::table('pets', function (Blueprint $table) {
            $affected = DB::table('pets')
                ->where('specie','bunny')
                ->update(
                    ['specie'=>'coelho']
                );
            $affected = DB::table('pets')
                ->whereIn('specie',['mamba','mamba-negra'])
                ->update(
                    ['specie'=>'cobra']
                );
            $affected = DB::table('pets')
                ->whereIn('specie',['pikachu','bulbasauro','squirtle'])
                ->update(
                    ['specie'=>'pokemon']
                );
            $affected = DB::table('pets')
                ->whereIn('specie',['dragao de komodo','dragão de komodo'])
                ->update(
                    ['specie'=>'dragao-de-komodo']
                );
            $affected = DB::table('pets')
                ->whereIn('specie',['papagaio','periquito'])
                ->update(
                    ['specie'=>'ave']
                );
            $affected = DB::table('pets')
                ->where('specie','dog')
                ->update(
                    ['specie'=>'cachorro']
                );
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
