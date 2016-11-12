<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->index(); // 标题
            $table->text('body'); // 内容
            $table->integer('user_id')->unsigned()->default(0)->index();  // 发布者
            $table->integer('category_id')->unsigned()->default(0)->index(); // 类别
            $table->integer('reply_count')->default(0)->index(); // 评论
            $table->integer('view_count')->unsigned()->default(0)->index(); // 查看
            $table->integer('collect_count')->default(0)->index(); // 收藏
            $table->integer('last_reply_user_id')->unsigned()->default(0)->index();
            $table->integer('order')->default(0)->index(); // 排序
            $table->enum('is_top', ['yes',  'no'])->default('no')->index(); // 置顶
            $table->enum('is_lock', ['yes',  'no'])->default('no')->index(); // 锁定
            $table->text('excerpt')->nullable(); // 摘要
            $table->enum('is_tagged', ['yes',  'no'])->default('no')->index(); // 标记
            $table->softDeletes(); // 软删除
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
        Schema::drop('topics');
    }
}
