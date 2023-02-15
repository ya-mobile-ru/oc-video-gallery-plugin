<?php

namespace Yamobile\VideoGallery\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class AddIframeToYamobileVideogalleryVideo extends Migration
{
    public function up()
    {
        Schema::table('yamobile_videogallery_video', function ($table) {
            $table->text('iframe');
        });
    }

    public function down()
    {
        Schema::table('yamobile_videogallery_video', function ($table) {
            $table->dropColumn('iframe');
        });
    }
}
