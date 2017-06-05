<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersAndRolesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // Insert admin user
        DB::table('users')->insert(
            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'name@domain.com',
                'password' => bcrypt('secret'),
                'role' => 1,
                'active' => true,
            ]
        );

        // Insert roles
        DB::table('roles')->insert([
                [
                    'id' => 1,
                    'name' => 'Admin',
                    'active' => true,
                ],
                [
                    'id' => 2,
                    'name' => 'Developer',
                    'active' => true,
                ]
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
