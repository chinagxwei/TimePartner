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
        Schema::create('members', function (Blueprint $table) {
            $table->uuid('id')->unique()->primary();
            $table->uuid('wallet_id')->nullable()->comment('钱包ID');
            $table->uuid('organization_id')->nullable()->comment('机构ID');
            $table->string('remark',128)->nullable()->comment('备注');
            $table->string('mobile',18)->index()->nullable()->comment('联系电话');
            $table->string('promotion_sn',32)->index()->nullable()->comment('推广序列号');
            $table->tinyInteger('develop')->unsigned()->nullable();
            $table->tinyInteger('register_type')->unsigned()->default(1)->nullable()->comment('注册状态 1其他 2app');
            $table->integer('created_at')->unsigned()->nullable();
            $table->integer('updated_at')->unsigned()->nullable();
            $table->integer('created_by')->index()->unsigned()->nullable()->comment('用户ID');
            $table->integer('updated_by')->index()->unsigned()->nullable()->comment('用户ID');
            $table->integer('deleted_at')->unsigned()->nullable();
            $table->comment('会员表');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
};
