<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminMessagesTable extends Migration
{
    public function up()
    {
        Schema::create('admin_messages', function (Blueprint $table) {
            $table->id();
            $table->string('user')->nullable();
            $table->text('message');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('admin_messages');
    }
}
