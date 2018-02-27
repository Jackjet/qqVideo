<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->default(0)->comment("父级ID");
            $table->string('name')->index()->comment("类型名称");
            $table->string('code')->nullable()->comment("类型代码");
            $table->string('type_code')->index()->comment("类型类别代码");
            $table->string('remark')->nullable()->comment("备注");
            $table->integer('sort')->default(0)->comment("排序");
            $table->integer('status')->default(1)->comment("状态：1正常2禁用");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('types');
    }
}
