<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_tags', function (Blueprint $table) 
        {
            $table->id();

            $table->unsignedBigInteger('contact_id');
            $table->unsignedBigInteger('tag_id');

            $table->index('contact_id', 'contact_tag_contact_idx');
            $table->index('tag_id', 'contact_tag_tag_idx');

            $table->foreign('contact-id', 'contact_tag_contact_fk')->on('contacts')->references('id');
            $table->foreign('tag-id', 'contact_tag_tag_fk')->on('tags')->references('id');

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
        Schema::dropIfExists('contact_tags');
    }
};
