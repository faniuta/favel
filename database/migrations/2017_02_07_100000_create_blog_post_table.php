<?php
/**
 * Created by PhpStorm.
 * User: n46v
 * Date: 7/2/2017
 * Time: 10:43 PM
 */
?>

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogPostTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_post', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title');
            $table->string('body');
            $table->integer('user_id');
            $table->dateTime('publish_date');
            $table->string('status')->default('waiting_check');
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
        Schema::drop('blog_post');
    }

}
