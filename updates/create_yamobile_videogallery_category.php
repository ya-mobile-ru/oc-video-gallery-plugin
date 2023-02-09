<?php

namespace Yamobile\VideoGallery\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class CreateYamobileVideoGalleryCategory extends Migration
{
    public function up()
    {
        Schema::create('yamobile_videogallery_category', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('name');
            $table->text('slug');
            $table->text('image')->nullable();
            $table->text('heading')->nullable();
            $table->text('description')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
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
