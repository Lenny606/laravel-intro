<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reviews', function (Blueprint $table) {  //modifies table
            
            $table->foreignId("user_id")->after('movie_id')//puts new columnt not at last position but specifies
            ->nullable(); //can be null
        });
            ; 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->dropColumn('user_id');   //for rollback , always check if does opposite
        });
    }
};
