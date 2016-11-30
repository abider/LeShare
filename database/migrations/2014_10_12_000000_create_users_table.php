<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->nullable()->unique();
            $table->string('mobile')->unique();
            $table->string('password');
            $table->string('login_token')->nullable();
            $table->enum('is_locked', ['yes',  'no'])->default('no')->index(); // 锁定
            $table->string('avatar')->nullable(); // 头像url
            $table->integer('topic_count')->default(0)->index(); // 发表
            $table->integer('reply_count')->default(0)->index(); // 回复
            $table->string('city')->nullable();
            $table->string('company')->nullable();
            $table->string('introduction')->nullable(); // 介绍
            $table->boolean('verified')->default(false)->index(); // 验证
            $table->tinyInteger('status')->default(1)->comment("1-正常，2-禁用");
            $table->tinyInteger('confirm_email')->default(2)->comment('1-验证，2-没验证');
            $table->timestamp('last_actived_at')->nullable(); // 最后登录时间
            $table->rememberToken();
            $table->softDeletes();
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
        Schema::drop('users');
    }
}
