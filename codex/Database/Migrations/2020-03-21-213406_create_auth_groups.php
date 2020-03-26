<?php namespace Codex\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAuthGroups extends Migration
{
    public function up()
    {
        /**
         * Insert Group Datas
         */
        $this->db->table('auth_groups')->emptyTable();
        $groups = [
            ['id' => 1, 'name' => 'Root','description' => 'All permissions'],
            ['id' => 2, 'name' => 'Admin','description' => 'Advanced permission'],
            ['id' => 3, 'name' => 'Customer','description' => 'Customer content manage'],
            ['id' => 4, 'name' => 'Guest','description' => 'Visitor']
        ];
        $this->db->table('auth_groups')->insertBatch($groups);
        
        /**
         * Insert user r00t
         */
        $this->db->table('users')->emptyTable();
        $user = [
            'id' => 1,
            'email' => 'root@change.me',
            'username' => 'changeme',
            'password_hash' => '$2y$10$Rd19keVTTjea8YjOX9WdFOS3ToLhFTl2SV/EZTp8GvBF39JYCKdD2',
            'active' => '1'
        ];
        $this->db->table('users')->insert($user);
        
        /**
         * Insert user group
         */
        $this->db->table('auth_groups_users')->emptyTable();
        $userGroupAssoc = [
            'group_id' => 1,
            'user_id' => 1,
        ];
        $this->db->table('auth_groups_users')->insert($userGroupAssoc);
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->db->table('auth_groups')
        ->whereIn('id', [1,2,3,4])
        ->delete();
        $this->db->table('users')->delete(['id' => 0]);
    }
}