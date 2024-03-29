<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->uuid('id')->unique()->primary();
            $table->string('title', 128)->index()->nullable()->comment('标题');
            $table->integer('year')->unsigned()->nullable()->comment('年份');
            $table->tinyInteger('started_weeks')->unsigned()->nullable()->comment('开始周数');
            $table->tinyInteger('ended_weeks')->unsigned()->nullable()->comment('结束周数');
            $table->integer('started_at')->unsigned()->nullable()->comment('开始时间');
            $table->integer('ended_at')->unsigned()->nullable()->comment('结束时间');
            $table->text('remark')->nullable()->comment('备注');
            $table->tinyInteger('loop')->unsigned()->nullable()->comment('重复 0不重复 1重复');
            $table->tinyInteger('tips')->unsigned()->nullable()->comment('提醒 0不提醒 1提醒');
            $table->tinyInteger('openness')->unsigned()->nullable()->comment('开放度 0公开 3私域一对多 7专属一对一 15机构');
            $table->uuid('parent_id')->index()->nullable()->comment('父ID');
            $table->integer('created_at')->unsigned()->nullable();
            $table->integer('updated_at')->unsigned()->nullable();
            $table->integer('created_by')->index()->unsigned()->nullable()->comment('用户ID');
            $table->integer('updated_by')->index()->unsigned()->nullable()->comment('用户ID');
            $table->integer('deleted_at')->unsigned()->nullable();
            $table->comment('日程安排表');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
};
