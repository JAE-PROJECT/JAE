<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('event_users', function (Blueprint $table) {
            $table->bigInteger('id')->change();
            $table->bigInteger('event_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->tinyInteger('presence_confirme')->default(0);
        });

        Schema::table('events', function (Blueprint $table) {
            $table->bigInteger('type_id')->unsigned();
            $table->bigInteger('nombre_place')->unsigned()->default(0);
            $table->string('statut');
            $table->date('date_ouverture');
            $table->string('orateur',255); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
