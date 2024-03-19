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
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('genre');
            $table->string('prenom',100);
            $table->string('localisation',100);
            $table->string('pdp',100);
            $table->boolean('admin');
            });
           
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function($table) {
        $table->dropColumn('genre');
        $table->dropColumn('prenom');
        $table->dropColumn('localisation');
        $table->dropColumn('pdp');
        $table->dropColumn('admin');
        });
    }
};
