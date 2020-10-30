<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('book_copy_id');
            $table->foreign('book_copy_id')->references('id')->on('book_copies')->onDelete('cascade');
            $table->string('status');
            $table->unsignedBigInteger('loan_request_id');
            $table->foreign('loan_request_id')->references('id')->on('loan_requests')->onDelete('cascade');
            $table->unsignedBigInteger('return_request_id');
            $table->foreign('return_request_id')->references('id')->on('return_requests')->onDelete('cascade');
            $table->timestamp('lend_at')->nullable();
            $table->timestamp('lend_expire_at')->nullable();
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
        Schema::dropIfExists('book_users');
    }
}
