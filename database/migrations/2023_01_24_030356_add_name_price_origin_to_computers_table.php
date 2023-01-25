<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("computers", function (Blueprint $table) {
            $table->string("name", 100);
            $table->double("price");
            $table->string("origin", 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("computers", function (Blueprint $table) {
            $table->dropColumn("name");
            $table->dropColumn("price");
            $table->dropColumn("origin");
        });
    }
};
