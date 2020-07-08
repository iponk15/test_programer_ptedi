<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgamaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agama', function (Blueprint $table) {
            $table->increments('agama_id');
            $table->string('agama_nama', 100);
            $table->text('agama_deskripsi');
            $table->enum('agama_status', ['0','1','99'])->default('1');
            $table->bigInteger('agama_created_by')->unsigned();
            $table->dateTime('agama_created_date');
            $table->bigInteger('agama_updated_by')->unsigned();
            $table->timestamp('agama_lastupdate')->useCurrent();
            $table->string('agama_ip', 15)->nullable();

            $table->foreign('agama_created_by')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');  

            $table->foreign('agama_updated_by')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agama');
    }
}
