<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeywordsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('keywords', function (Blueprint $table) {
      $table->bigIncrements('id');

      // ここから追加
      $table->string('initial', 1);
      $table->string('keyword');
      $table->text('description');
      $table->integer('categories_id');
      // ここまで追加

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
    Schema::dropIfExists('keywords');
  }
}
