<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cl_tag', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('parentid')
                ->default(0)
                ->nullable(true)
                ->comment('对应卡片表主键ID');

            $table->integer('order')
                ->default(0)
                ->nullable(true)
                ->comment('排序');

            $table->string('tag_name')
                ->default('')
                ->nullable(true)
                ->comment('标签名称');

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
        Schema::dropIfExists('cl_tag');
    }
}
