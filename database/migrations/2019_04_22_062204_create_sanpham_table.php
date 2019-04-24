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
            $table->bigIncrements('id');
            $table->integer('id_loai');
            $table->integer('id_user');
            $table->integer('id_tinhthanhpho');
            $table->integer('id_quan');
            $table->string('ten');
            $table->string('tinhtrangphaply')->nullable();
            $table->float('dientich')->nullable();
            $table->float('duongtruocnha')->nullable();
            $table->string('huong')->nullable();
            $table->string('thuocduan')->nullable();
            $table->integer('sotang')->nullable();
            $table->integer('phongngu')->nullable();
            $table->integer('phongtam')->nullable();
            $table->double('gia');
            $table->text('tienich')->nullable();
            $table->text('moitruongxungquanh')->nullable();
            $table->text('noidung')->nullable();
            $table->string('hinhdaidien');
            $table->string('diachi');
            $table->string('latitude');
            $table->string('longitude');
            $table->integer('views');
            $table->integer('trangthai')->default('1');
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
        Schema::dropIfExists('sanpham');
    }
}
