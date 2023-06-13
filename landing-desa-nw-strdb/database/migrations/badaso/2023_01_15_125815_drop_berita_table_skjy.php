<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropBeritaTableSkjy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::dropIfExists('berita');

        } catch (PDOException $ex) {
            $this->down();
            throw $ex;
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
			$table->string('title', 255);
			$table->string('slug', 255);
			$table->string('writer', 100);
			$table->text('caption');
			$table->timestamps();
			$table->string('images', 255);
        });
    }
}
