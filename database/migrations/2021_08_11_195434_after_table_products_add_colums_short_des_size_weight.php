<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AfterTableProductsAddColumsShortDesSizeWeight extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('short_description');
            $table->string('description');
            $table->integer('weight');
            $table->integer('height');
            $table->integer('width');
            $table->integer('length');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('short_description');
            $table->dropColumn('description');
            $table->dropColumn('weight');
            $table->dropColumn('height');
            $table->dropColumn('width');
            $table->dropColumn('length');
        });
    }
}
