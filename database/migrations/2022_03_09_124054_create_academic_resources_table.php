<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_resources', function (Blueprint $table) {
            $table->id();
            $table->string('url', 255);
            $table->string('isbn', 50);
            $table->string('title', '100');
            $table->text('abstract');
            $table->json('citations');
            $table->string('accessed_count')->comment('numbers of how many times users view the resource');
            $table->unsignedBigInteger('authors_id');
            $table->foreign('authors_id')->references('id')->on('authors');
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
        Schema::dropIfExists('academic_resources');
    }
}
