<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->engine = "innoDB";
            $table->increments('id');
            $table->string('title')->nullable()->index()->comment("标题");
            $table->string('sub_title')->nullable()->comment("副标题");
            $table->integer('type_id')->default(1)->index()->comment("类型ID");
            $table->integer('parse_type_id')->nullable()->comment("解析类型ID");
            $table->integer("total_num")->default(0)->comment("集数");
            $table->longText('year')->nullable()->comment("年份");
            $table->longText('aera')->nullable()->comment("地区");
            $table->longText('language')->nullable()->comment("语言");
            $table->longText('descript')->nullable()->comment("描述");
            $table->string('remark')->nullable()->comment("备注");
            $table->string('update_time_str')->nullable()->comment("更新时间字符串");
            $table->integer('hit')->default(0)->comment("点击数");
            $table->float('grade')->default(9.9)->comment("分数");
            $table->integer('sort')->default(0)->comment("排序");
            $table->integer('status')->default(1)->comment("状态：1连载中2完结3预告");
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
        Schema::dropIfExists('albums');
    }
}
