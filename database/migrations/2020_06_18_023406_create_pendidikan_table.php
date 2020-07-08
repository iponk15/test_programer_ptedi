<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendidikanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendidikan', function (Blueprint $table) {
            $table->increments('pendidikan_id');
            $table->string('pendidikan_nama', 100);
            $table->string('pendidikan_catatan', 100);
            $table->enum('pendidikan_status', ['0','1','99'])->default('1');
            $table->integer('pendidikan_created_by')->unsigned();
            $table->dateTime('pendidikan_created_date');
            $table->integer('pendidikan_updated_by')->unsigned();
            $table->timestamp('pendidikan_lastupdate')->useCurrent();
            $table->string('pendidikan_ip', 15)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendidikan');
    }
}
