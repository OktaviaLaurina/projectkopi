<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrediksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prediksi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kopi_id');
            
            $table->string('hari');
            $table->string('jumlahitem');
            $table->timestamps();

            $table->foreign('kopi_id')->references('id')->on('kopi')
            ->onUpdate('CASCADE')
            ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prediksi');
    }
}
