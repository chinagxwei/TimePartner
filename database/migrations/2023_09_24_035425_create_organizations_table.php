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
        Schema::create('organizations', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('title', 128)->index()->nullable()->comment('标题');
            $table->uuid('member_id')->index()->nullable()->comment('会员ID');
            $table->uuid('order_income_config_id')->nullable()->comment('订单收益配置ID');
            $table->uuid('parent_id')->index()->nullable()->comment('父ID');
            $table->text('belong_agent_node')->nullable()->comment('属于代理节点');
            $table->integer('created_at')->unsigned()->nullable();
            $table->integer('updated_at')->unsigned()->nullable();
            $table->integer('created_by')->index()->unsigned()->nullable()->comment('用户ID');
            $table->integer('updated_by')->index()->unsigned()->nullable()->comment('用户ID');
            $table->integer('deleted_at')->unsigned()->nullable();
            $table->comment('机构表');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organizations');
    }
};
