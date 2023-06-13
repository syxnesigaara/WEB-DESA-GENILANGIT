<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKepengurusanTableAxvs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('kepengurusan', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->string('nama', 100);
			$table->string('images', 255);
			$table->string('no_telp', 15);
			$table->string('nik', 25);
			$table->string('jabatan', 50);
			$table->string('no_sk', 200);
			$table->string('ttl', 200);
			$table->string('gender', 20);
			$table->string('golongan_darah', 3);
			$table->string('agama', 30);
			$table->string('kewarganegaraan', 30);
			$table->string('status', 20);
			$table->boolean('is_kades');
			$table->timestamps();
        });

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
        Schema::dropIfExists('kepengurusan');
    }
}
