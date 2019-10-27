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

            $table->string('card_name')
                ->default(null)
                ->nullable(true)
                ->comment('卡片名称');

            $table->text('card_style')
                ->default(null)
                ->nullable(true)
                ->comment('卡片样式 json存储');

            $table->string('tag_id')
                ->default(null)
                ->nullable(true)
                ->comment('标签ID 多个用,隔开');

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
        Schema::dropIfExists('cl_card');
    }
}
