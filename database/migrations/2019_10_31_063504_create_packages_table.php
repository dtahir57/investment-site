<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('package_name');
            $table->integer('price')->nullable();
            $table->string('renewal_time')->nullable();
            $table->integer('package_type');
            $table->string('net_profit')->nullable();
            $table->string('wait_time')->nullable();
            $table->string('referral_bonus')->nullable();
            $table->string('signals')->nullable();
            $table->integer('min_investment')->nullable();
            $table->string('training_sesssions')->nullable();
            $table->string('max_investment')->nullable();
            $table->boolean('trading_material')->default(0);
            $table->boolean('has_support')->default(0);
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
        Schema::dropIfExists('packages');
    }
}
