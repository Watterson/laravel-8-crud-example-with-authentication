<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_payment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('_fk_user');
            $table->string('provider')->nullable();
            $table->integer('account_number')->nullable();
            $table->integer('sortcode')->nullable();
            $table->integer('end_date')->nullable();
            $table->integer('csv')->nullable();
            $table->string('postcde')->nullable();
            $table->integer('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_payment');
    }
}
