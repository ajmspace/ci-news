<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        //
        $this->db->disableForeignKeyChecks();

        $this->db->simpleQuery('CREATE TABLE IF NOT EXISTS users (
            username VARCHAR(100) PRIMARY KEY,
            password VARCHAR(100),
            name VARCHAR(100),
            created_at DATETIME NULL,
            updated_at DATETIME NULL
        ) ENGINE=InnoDB');

        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        //
        $this->forge->dropTable('users');
    }
}
