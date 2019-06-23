<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddServisToNotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nota', function (Blueprint $table) {
            $table->unsignedBigInteger('servis_id')->nullable();
            $table->foreign('servis_id')->references('id')->on('servis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nota', function (Blueprint $table) {
            $table->dropForeign('nota_servis_id_foreign');
        });
    }
}
