<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNegaraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('negara', function (Blueprint $table) {
            $table->increments('negara_id');
            $table->string('negara_nama', 100);
            $table->text('negara_deskripsi');
            $table->enum('negara_status', ['0','1','99'])->default('1');
            $table->bigInteger('negara_created_by')->unsigned();
            $table->dateTime('negara_created_date');
            $table->bigInteger('negara_updated_by')->unsigned();
            $table->timestamp('negara_lastupdate')->useCurrent();
            $table->string('negara_ip', 15)->nullable();

            $table->foreign('negara_created_by')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');  

            $table->foreign('negara_updated_by')
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
        Schema::dropIfExists('negara');
    }
}
