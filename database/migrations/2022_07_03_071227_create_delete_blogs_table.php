<?php

use App\all_blogs;
use App\delete_blog;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeleteBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // public function up()
    // {
    //     Schema::create('delete_blogs', function (Blueprint $table) {
    //         $table->increments('id');
    //         $table->timestamps();
    //     });
    // }
    public function up()
    {
        //Create the table
        Schema::create('delete_blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('content');
            $table->string('created_by');
            $table->timestamps();
        });

        //Copy column from last table to new table
       
    }







    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delete_blogs');
    }
}
