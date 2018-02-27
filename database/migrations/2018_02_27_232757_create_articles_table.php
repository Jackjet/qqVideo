<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id')->comment('文章ID');
            $table->integer('category_id')->comment('分类ID');
            $table->string('title',100)->comment('标题');
            $table->string('thumb',255)->comment('缩略图')->nullable();
            $table->string('desc',255)->comment('描述')->nullable();
            $table->string('link',255)->comment('地址')->nullable();
            $table->text('content')->comment('内容')->nullable();
            $table->integer('flag')->comment('标识:1最新2热门3推荐')->default(0);
            $table->integer('hit')->comment('点击量')->default(0);
            $table->integer('sort')->comment('排序')->default(0);
            $table->integer('status')->comment('状态:0禁用1启用')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
