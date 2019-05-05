<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_loai');
            $table->unsignedBigInteger('id_user');

            $table->integer('id_quan')->unsigned();
            $table->integer('id_tp')->unsigned();

            $table->string('ten');
            $table->float('dientich')->nullable();
            $table->string('huong')->nullable();
            $table->string('thuocduan')->nullable();
            $table->integer('sotang')->nullable();
            $table->integer('phongngu')->nullable();
            $table->integer('phongtam')->nullable();
            $table->double('gia');
            $table->text('noidung')->nullable();
            $table->string('hinhdaidien')->nullable();
            $table->string('diachi');
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->integer('views')->default('0');
            $table->integer('trangthai')->default('1');
            $table->timestamps();
            $table->foreign('id_loai')->references('id')->on('loai');
            $table->foreign('id_user')->references('id')->on('users');

        });
        Schema::enableForeignKeyConstraints();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanpham');
    }
}
