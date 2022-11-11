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
        Schema::create('tweet_images', function (Blueprint $table) {
            // Tweetsテーブルに存在するidでなければtweet_idに格納できない。
            // Tweetsテーブルからレコードが削除された場合は、Tweet_imagesテーブルの紐づいたレコードも削除される。
            $table->foreignId('tweet_id')->constrained('tweets')->cascadeOnDelete();

            // Imagesテーブルに存在するidでなければimage_idに格納できない。
            // Imagesテーブルからレコードが削除された場合は、Tweetsテーブルの紐づいたレコードも削除される。
            $table->foreignId('image_id')->constrained('images')->cascadeOnDelete();
            
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
        Schema::dropIfExists('tweet_images');
    }
};
