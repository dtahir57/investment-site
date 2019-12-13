<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('package_id')->unsigned()->nullable();
            $table->foreign('package_id')
                    ->references('id')
                    ->on('packages')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->string('invested_amount')->nullable();
            $table->date('package_started_at')->nullable();
            $table->date('withdraw_date')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumnIfExists('package_id')->unsigned()->nullable();
            $table->dropColumnIfExists('invested_amount')->nullable();
            $table->dropColumnIfExists('package_started_at')->nullable();
            $table->dropColumnIfExists('withdraw_date')->nullable();
            
        });
    }
}
