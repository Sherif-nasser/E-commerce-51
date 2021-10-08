<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->mediumText('pimg');
            $table->string('pname');
            $table->integer('pprice');
            // $table->BigInteger('cat_id');
            // $table->foreign('cat_id')->references('id')->on('categories')->unsigned();
            $table->BigInteger('cat_id');
            // $table->foreign('cat_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::table('products', function($table)
        {
            $table->foreign('cat_id')
            ->references('id')->on('categories')
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
        Schema::dropIfExists('products');
        
    }
}
