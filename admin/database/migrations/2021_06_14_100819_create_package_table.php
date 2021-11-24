<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatepackageTable extends Migration
{
    /**create_package_table
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_package', function (Blueprint $table) {
            $table->id();
            $table->Integer('sub_id')->nullable();
            $table->string('package_name')->nullable();
            $table->decimal('price',10,2)->nullable();
            $table->tinyInteger('active')->default('0');
            $table->tinyInteger('isdelete')->default('0');
            $table->Integer('created_by')->nullable();
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
        Schema::dropIfExists('package');
    }
}
