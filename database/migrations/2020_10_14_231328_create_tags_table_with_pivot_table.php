<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTableWithPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('tags'))
        {
            Schema::create('tags', function (Blueprint $table) {
                $table->id();

                $table->string('name');

                $table->timestamps();
            });
        }

        if(!Schema::hasTable('food_item_tag'))
        {
            Schema::create('food_item_tag', function (Blueprint $table) {

                // FK food_item_id
                $table->unsignedBigInteger('food_item_id');
                // FK tag_id
                $table->unsignedBigInteger('tag_id');

                // Primary
                $table->primary(['food_item_id', 'tag_id']);

                $table->foreign('food_item_id')->references('id')->on('food_items')
                    ->onDelete('cascade');

                $table->foreign('tag_id')->references('id')->on('tags')
                    ->onDelete('cascade');

                $table->timestamps();
            });
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_item_tag');
        Schema::dropIfExists('tags');
    }
}
