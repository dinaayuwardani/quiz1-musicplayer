<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAlbumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_album', function (Blueprint $table) {
            $table->increments('album_id');
            $table->string('album_name', 100);
            $table->integer('album_id_artist')->unsigned();
            $table->timestamps();          
        });

        Schema::table('tb_album', function(Blueprint $table) {
            $table->foreign('album_id_artist')->references('artist_id')->on('tb_artist')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_album');
    }
}
