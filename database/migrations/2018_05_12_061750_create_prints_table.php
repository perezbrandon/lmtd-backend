<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prints', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('title');
            $table->string('artist_id');
            $table->string('picture');
            $table->string('edition_size');
            $table->string('technique')->nullable();
            $table->string('manufacture');
            $table->string('vendor_id');
            $table->string('original_price');
            $table->string('release_date');
            $table->string('height');
            $table->string('width');
            $table->string('event')->nullable();
            $table->string('status');
            $table->timestamps();


            $table->foreign('artist_id')
                  ->references('id')
                  ->on('artists')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('vendor_id')
                  ->references('id')
                  ->on('vendors')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prints');
    }
}
