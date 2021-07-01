<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBodyWeightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('body_weights', function (Blueprint $table) {
            $table->bigIncrements('id');;
            $table->unsignedBigInteger('user_id');
            $table->double('bodyweight', 4, 1);
            $table->date('date');
            $table->timestamps();

            $table->foreign('user_id') //外部キーの宣言
                ->references('id') //参照先
                ->on('users') //参照テーブル
                ->onDelete('cascade'); //参照テーブルカラムが消えたら同時に消す
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('body_weights');
    }
}
