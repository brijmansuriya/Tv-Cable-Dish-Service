<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCatIdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pack_img', function (Blueprint $table) {
            $table->string('c_name')->nullable()->after('id');
            $table->tinyInteger('is_payed')->default('0')->after('c_name');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pack_img', function (Blueprint $table) {
            $table->dropColumn('c_name');
            $table->dropColumn('is_payed');
        });
    }
}
