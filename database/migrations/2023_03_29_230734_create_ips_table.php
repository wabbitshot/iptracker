<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIpsTable extends Migration
{
    public function up()
    {
        Schema::create('ips', function (Blueprint $table) {
            $table->id();
            $table->string('ip_address')->unique();
            $table->string('mac_address');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ips');
    }
}
