<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->engine = 'InnoDb';
            $table->increments('id');
            $table->char('membership_no', 10)->unique();
            $table->char('nric', 12)->index();
            $table->string('name', 100)->index();
            $table->char('gender', 1)->index();
            $table->text('address')->nullable();
            $table->string('postcode', 5)->index();
            $table->string('city', 50)->index();
            $table->char('state', 2)->index();
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
        Schema::dropIfExists('members');
    }
}
