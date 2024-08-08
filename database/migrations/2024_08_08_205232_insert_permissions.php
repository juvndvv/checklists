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
        DB::table('permissions')->insert([
            ['name' => 'create_user'],
            ['name' => 'update_user'],
            ['name' => 'delete_user'],
            ['name' => 'view_model'],
            ['name' => 'create_model'],
            ['name' => 'update_model'],
            ['name' => 'delete_model'],
            ['name' => 'view_assignment'],
            ['name' => 'create_assignment'],
            ['name' => 'update_assignment'],
            ['name' => 'delete_assignment'],
            ['name' => 'edit_checklist'],
            ['name' => 'rate_checklist'],
            ['name' => 'view_checklist'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('roles')->where('name', 'create_user')->delete();
        DB::table('roles')->where('name', 'update_user')->delete();
        DB::table('roles')->where('name', 'delete_user')->delete();
        DB::table('roles')->where('name', 'view_model')->delete();
        DB::table('roles')->where('name', 'create_model')->delete();
        DB::table('roles')->where('name', 'update_model')->delete();
        DB::table('roles')->where('name', 'delete_model')->delete();
        DB::table('roles')->where('name', 'view_assignment')->delete();
        DB::table('roles')->where('name', 'create_assignment')->delete();
        DB::table('roles')->where('name', 'update_assignment')->delete();
        DB::table('roles')->where('name', 'delete_assignment')->delete();
        DB::table('roles')->where('name', 'edit_checklist')->delete();
        DB::table('roles')->where('name', 'rate_checklist')->delete();
        DB::table('roles')->where('name', 'view_checklist')->delete();
    }
};
