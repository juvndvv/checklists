<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('roles')->insert([
            ['name' => 'SuperAdmin'],
            ['name' => 'Admin'],
            ['name' => 'Worker'],
            ['name' => 'Viewer'],
        ]);

        DB::table('roles')
            ->where('name', 'SuperAdmin')
            ->update(['childRole' => 2]);

        DB::table('roles')
            ->where('name', 'Admin')
            ->update(['childRole' => 3, 'parentRole' => 1]);

        DB::table('roles')
            ->where('name', 'Worker')
            ->update(['childRole' => 4, 'parentRole' => 2]);

        DB::table('roles')
            ->where('name', 'Viewer')
            ->update(['parentRole' => 3]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('roles', function (Blueprint $table) {
            $table->dropForeign('parentRoleForeign');
            $table->dropForeign('childRoleForeign');
        });

        DB::table('roles')->where('name', 'Viewer')->delete();
        DB::table('roles')->where('name', 'Worker')->delete();
        DB::table('roles')->where('name', 'Admin')->delete();
        DB::table('roles')->where('name', 'SuperAdmin')->delete();
    }
};
