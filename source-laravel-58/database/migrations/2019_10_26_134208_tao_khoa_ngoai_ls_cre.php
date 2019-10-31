<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TaoKhoaNgoaiLsCre extends Migration
{ public function up()
    {
        Schema::table('lich_su_mua_credit', function (Blueprint $table) {
            $table->foreign('goi_credit_id')->references('id')->on('goi_credit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('lich_su_mua_credit', function (Blueprint $table) {
            //
        });
    }
}
