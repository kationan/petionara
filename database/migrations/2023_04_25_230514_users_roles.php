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
        Schema::create('users_roles', function(Blueprint $table){
            $table->integer("user_id")->index();
            $table->integer("role_uuid")->index();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // dropIexist("users_roles");
    }
};
