<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParseTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parse_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->integer('sort')->default(0)->comment("排序");
            $table->string("avatar_url")->nullable()->comment("头像URL");
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
        Schema::dropIfExists('parse_types');
    }
}
