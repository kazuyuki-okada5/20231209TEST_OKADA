<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('categry_id');
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->enum('gender',['1:男性','2:女性','3:その他']);
            $table->string('email', 255);
            $table->string('tell', 255);
            $table->string('address', 255);
            $table->string('building', 255);
            $table->string('detail');
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors');
    }
}
