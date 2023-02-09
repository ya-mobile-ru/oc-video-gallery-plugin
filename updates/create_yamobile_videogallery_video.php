<?php

namespace Yamobile\VideoGallery\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class CreateYamobileVideoGalleryVideo extends Migration
{
    public function up()
    {
        Schema::create('yamobile_videogallery_video', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('name')->nullable();
            $table->text('source');
            $table->integer('category_id')->unsigned()->index();
            $table->text('image')->nullable();
            $table->text('description')->nullable();
            $table->integer('sort_order')->default(0);
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('yamobile_videogallery_category');
    }
}
