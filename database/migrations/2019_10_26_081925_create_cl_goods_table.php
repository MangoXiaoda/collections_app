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

            $table->integer('uid')
                ->default(0)
                ->nullable(true)
                ->comment('会员编号');

            $table->string('dev_info')
                ->default('')
                ->nullable(true)
                ->comment('设备信息');

            $table->string('gs_name')
                ->default(null)
                ->nullable(true)
                ->comment('商品名称');

            $table->string('gs_img')
                ->default(null)
                ->nullable(true)
                ->comment('商品图片');

            $table->string('gs_location')
                ->default(null)
                ->nullable(true)
                ->comment('物品存放位置');

            $table->string('gs_location_img')
                ->default(null)
                ->nullable(true)
                ->comment('物品存放位置图片');

            $table->integer('cd_id')
                ->default(0)
                ->nullable(true)
                ->comment('卡片id');

            $table->integer('gs_tag')
                ->default(0)
                ->nullable(true)
                ->comment('商品标签');

            $table->integer('gs_overtime')
                ->default(0)
                ->nullable(true)
                ->comment('商品过期时间');

            $table->timestamps();
            $table->index('uid');
            $table->index('dev_info');
            $table->index('cd_id');
            $table->index('gs_tag');
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
