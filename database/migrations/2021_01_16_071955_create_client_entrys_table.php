<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientEntrysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::create('client_entrys', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
             $table->string('organization');
              $table->string('address');
               $table->string('area');
                $table->string('phone');
                 $table->string('requirement');
                 $table->string('level');
                 $table->string('office_phone');
                 $table->string('comment');
                 $table->string('status');

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
        Schema::dropIfExists('client_entrys');
    }
}
