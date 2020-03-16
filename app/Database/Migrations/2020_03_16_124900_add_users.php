<?php

namespace App\Database\Migrations;

class AddUsers extends \CodeIgniter\Database\Migration
{
    protected $tableName = 'users';
    protected $singleName = 'user';

    public function up()
    {
        $this->forge->addField([
            $this->singleName . '_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            $this->singleName . '_username' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'unique' => true
            ],
            $this->singleName . '_email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'unique' => true
            ],
            $this->singleName . '_role' => [
                'type' => 'INT',
                'default' => 1,
            ],
        ]);
        $this->forge->addKey($this->singleName . '_id', TRUE);
        $this->forge->createTable('blog');
    }

    public function down()
    {
        $this->forge->dropTable($this->tableName);
    }
}