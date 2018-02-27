<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string("email")->unique();
            $table->string("nick_name")->unique();
            $table->string("password");
            $table->enum("sex", ['1', '2', '3'])->default(3)->comment("性别：1男，2女，3保密");
            $table->enum("status", ['1', '2'])->default(1)->comment("状态：1正常，2禁止");
            $table->enum("is_vip", ['1', '2'])->default(1)->comment("是否是VIp：1否，2是");
            $table->ipAddress('last_ip')->comment('最后登录ip')->nullable();
            $table->timestamp('last_at')->comment('最后登录时间')->nullable();
            $table->ipAddress('now_ip')->comment('当前登录ip')->nullable();
            $table->timestamp('now_at')->comment('当前登录时间')->nullable();
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
        Schema::dropIfExists('members');
    }
}
