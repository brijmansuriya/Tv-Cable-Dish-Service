<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatTable extends Migration
{
    
    public function up()
    {
        Schema::create('tbl_package_img', function (Blueprint $table) {
            $table->id();
            $table->Integer('p_id')->nullable();
            $table->string('img')->nullable();
            $table->tinyInteger('active')->default('0');
            $table->tinyInteger('isdelete')->default('0');
            $table->Integer('created_by')->nullable();
            $table->timestamps();
        });
    }
  
    public function down()
    {
        Schema::dropIfExists('tbl_package_img');
    }
}