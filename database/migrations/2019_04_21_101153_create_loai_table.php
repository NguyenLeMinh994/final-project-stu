<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loai', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ten');
            $table->unsignedBigInteger('parent_id')->default('0');
            $table->integer('trangthai')->default('1');
            $table->timestamps();
            $table->foreign('parent_id')
                    ->references('id')->on('loai')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('loai');
    }
}
