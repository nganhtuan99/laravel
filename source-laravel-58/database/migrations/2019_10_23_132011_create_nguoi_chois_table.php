<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNguoiChoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguoi_choi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('ten_dang_nhap');
            $table->text('mat_khau');
            $table->text('email');
            $table->text('hinh_dai_dien');
            $table->unsignedInteger('diem_cao_nhat');
            $table->unsignedInteger('credit');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nguoi_choi');
    }
}
