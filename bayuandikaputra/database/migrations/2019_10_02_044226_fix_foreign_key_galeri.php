<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixForeignKeyGaleri extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('galeri', function(Blueprint $table)
        {
            $table->dropForeign('fk_galeri_kategori_berita1');
            $table->foreign('kategori_galeri_id', 'fk_galeri_kategori_galeri')->references('id')->on('kategori_galeri')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('galeri', function(Blueprint $table)
        {
            $table->dropForeign('fk_galeri_kategori_galeri');
            $table->foreign('kategori_galeri_id', 'fk_galeri_kategori_berita1')->references('id')->on('kategori_berita')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }
}
