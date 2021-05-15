<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Donhang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhang', function (Blueprint $table) {
            
            $table->increments('id');
            $table->primary('id');
            $table->string('ca');
            $table->string('don');
            $table->integer('gia');
            $table->string('tenkh');
            $table->string('sdt');
            $table->text('diachi');
            $table->string('manv');  
            $table->foreign('manv')->references('manv')->on('nhanvien')->onDelete('cascade');          
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
        Schema::dropIfExists('donhang');
    }
}
