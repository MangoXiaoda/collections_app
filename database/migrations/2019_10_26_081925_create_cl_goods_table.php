<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cl_goods', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('goods_name')
                ->default(null)
                ->nullable(true)
                ->comment('商品名称');

            $table->string('goods_img')
                ->default(null)
                ->nullable(true)
                ->comment('商品图片');

            $table->string('goods_location')
                ->default(null)
                ->nullable(true)
                ->comment('物品存放位置');

            $table->string('goods_location_img')
                ->default(null)
                ->nullable(true)
                ->comment('物品存放位置图片');

            $table->tinyInteger('goods_tag')
                ->default(null)
                ->nullable(true)
                ->comment('商品标签');

            $table->tinyInteger('goods_overtime')
                ->default(null)
                ->nullable(true)
                ->comment('商品过期时间');

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
        Schema::dropIfExists('cl_goods');
    }
}
