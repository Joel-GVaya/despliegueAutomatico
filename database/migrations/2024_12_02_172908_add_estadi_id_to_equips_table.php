<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('equips', function (Blueprint $table) {
            $table->dropColumn('estadi'); // Esborra el camp estadi
            $table->foreignId('estadi_id')->constrained(); // Afegir la clau forana
        });
    }

    public function down()
    {
        Schema::table('equips', function (Blueprint $table) {
            $table->string('estadi');
            $table->dropForeign(['estadi_id']);
            $table->dropColumn('estadi_id');
        });
    }
};
