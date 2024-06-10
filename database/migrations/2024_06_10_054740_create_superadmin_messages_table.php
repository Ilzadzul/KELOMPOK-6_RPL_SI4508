<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuperAdminMessagesTable extends Migration
{
    public function up()
    {
        Schema::create('superadmin_messages', function (Blueprint $table) {
            $table->id();
            $table->string('user')->nullable();
            $table->text('message');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('superadmin_messages');
    }
}
