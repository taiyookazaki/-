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
    Schema::create('evaluation', function (Blueprint $table) {
        $table->primary(['gotouti_men_id', 'user_id']);
        $table->foreignId('user_id')->constrained('users');   //参照先のテーブル名を
        $table->foreignId('gotouti_men_id')->constrained('gotouti_mens');    //constrainedに記載
        $table->integer('integer');
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
        Schema::dropIfExists('evaluations');
    }
};
