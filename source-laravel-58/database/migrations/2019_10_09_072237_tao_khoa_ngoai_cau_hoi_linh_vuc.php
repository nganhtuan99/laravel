<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaoKhoaNgoaiCauHoiLinhVuc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cau_hoi', function (Blueprint $table) {
            $table->foreign('linh_vuc_id')->references('id')->on('linh_vuc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cau_hoi', function (Blueprint $table) {
            //
        });
    }
}
