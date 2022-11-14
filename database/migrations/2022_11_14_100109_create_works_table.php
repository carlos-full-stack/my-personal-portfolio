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
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('name',30);
            $table->text('description',135);
            $table->string('demo_link');
            $table->string('repo_link');
            $table->string('img_url');
            $table->timestamps();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('set null');

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')
            ->references('id')->on('categories')
            ->onDelete('set null');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('works');
    }
};