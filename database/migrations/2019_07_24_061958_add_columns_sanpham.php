<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsSanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sanpham', function (Blueprint $table) {
            $table->string('tinhtrangphaply')->nullable();
            $table->dateTime('expired_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sanpham', function (Blueprint $table) {
            $table->dropColumn('tinhtrangphaply');
            $table->dropColumn('expired_at');
        });
    }
}