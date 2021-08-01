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
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable(); // いる？
            $table->string('avatar')->nullable();
            $table->string('password');
            $table->boolean('buyer_flag')->nullable(); // 購入者フラグ
            $table->boolean('author_flag')->nullable(); // 著者フラグ
            $table->string('fb_id')->nullable();
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
