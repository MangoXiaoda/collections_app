<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClCardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cl_card', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('uid')
                ->default(0)
                ->nullable(true)
                ->comment('会员编号');

            $table->string('dev_info')
                ->default('')
                ->nullable(true)
                ->comment('设备信息');

            $table->string('cd_name')
                ->default(null)
                ->nullable(true)
                ->comment('卡片名称');

            $table->text('cd_style')
                ->default(null)
                ->nullable(true)
                ->comment('卡片样式 json存储');

            $table->string('tag_id')
                ->default(0)
                ->nullable(true)
                ->comment('标签ID 多个用,隔开');

            $table->timestamps();
            $table->index('uid');
            $table->index('dev_info');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cl_card');
    }
}
