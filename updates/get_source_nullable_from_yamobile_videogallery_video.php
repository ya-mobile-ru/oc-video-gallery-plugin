<?php

namespace Yamobile\VideoGallery\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class GetSourceNullableFromYamobileVideogalleryVideo extends Migration
{
    public function up()
    {
        Schema::table('yamobile_videogallery_video', function($table)
        {
            $table->text('source')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('yamobile_videogallery_video', function($table)
        {
            $table->text('source')->nullable(false)->change();
        });
    }
}
