<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::table('user_roles', function (Blueprint $table) {
        $table->foreign('_fk_role')->references('id')->on('roles');
        $table->foreign('_fk_user')->references('id')->on('users');

      });

      Schema::table('user_details', function (Blueprint $table) {
        $table->foreign('_fk_user')->references('id')->on('users');

      });

      Schema::table('user_payment', function (Blueprint $table) {
        $table->foreign('_fk_user')->references('id')->on('users');
      });

      Schema::table('order_details', function (Blueprint $table) {
        $table->foreign('_fk_payment')->references('id')->on('user_payment');
      });

      Schema::table('order_items', function (Blueprint $table) {
        $table->foreign('_fk_order')->references('id')->on('order_details');
        $table->foreign('_fk_product')->references('id')->on('products');
      });

      Schema::table('product_categorys', function (Blueprint $table) {
        $table->foreign('_fk_category')->references('id')->on('categorys');
        $table->foreign('_fk_product')->references('id')->on('products');
      });

      Schema::table('user_payment', function (Blueprint $table) {
        $table->foreign('_fk_discount')->references('id')->on('discounts');
        $table->foreign('_fk_product')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
