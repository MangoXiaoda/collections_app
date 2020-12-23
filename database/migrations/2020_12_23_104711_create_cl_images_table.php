<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cl_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('type')
                ->default(0)
                ->nullable(true)
                ->comment('类型');
            $table->integer('status')
                ->default(0)
                ->nullable(true)
                ->comment('状态');
            $table->integer('uid')
                ->default(0)
                ->nullable(true)
                ->comment('会员编号');
            $table->text('url')
                ->nullable(true)
                ->comment('图片地址');
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
        Schema::dropIfExists('cl_images');
    }
}
