<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_article', function (Blueprint $table) {
            $table->increments('artikel_id');
            $table->char('artikel_judul', 100);
            $table->char('artikel_gambar', 100);
            $table->text('artikel_konten');
            $table->boolean('artikel_status')->default(1);
            $table->timestamp('artikel_created_at')->default(now());
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');
    }
}
