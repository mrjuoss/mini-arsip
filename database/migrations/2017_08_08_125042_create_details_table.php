<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_dokumen')->nullable();
            $table->date('tgl_dokumen')->nullable();
            $table->date('tgl_expired')->nullable();
            $table->integer('owner_id')->default(0)->unsigned();
            $table->integer('dokumen_id')->default(0)->unsigned();
            $table->integer('stopmap_id')->default(0)->unsigned();
            $table->foreign('owner_id')->references('id')->on('owners');
            $table->foreign('dokumen_id')->references('id')->on('dokumens');
            $table->foreign('stopmap_id')->references('id')->on('stopmaps');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details');
    }
}
