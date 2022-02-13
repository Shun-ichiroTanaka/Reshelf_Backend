<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('nickname')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable(); // いる？
            $table->string('password');
            $table->text('description')->nullable();
            $table->string('icon_img')->nullable();
            $table->string('cover_img')->nullable();
            $table->string('own_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('youtube_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('linked_in_url')->nullable();
            // $table->boolean('buyer_flag')->nullable(); // 購入者フラグ
            // $table->boolean('author_flag')->nullable(); // 著者フラグ
            $table->rememberToken(); // いる？
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
        Schema::dropIfExists('users');
    }
}
