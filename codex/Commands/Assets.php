<?php namespace Codex\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;
use CodeIgniter\Config\Services;

class Assets extends BaseCommand
{
    protected $group       = 'Assets';
    protected $name        = 'assets:publish';
    protected $description = "Create folders tree for assets and copy asset files";
    
    protected $usage     = "assets:publish";

    protected $arguments = [];

    public function run(array $params = [])
    {
        $row = [];

        $assetsConfig = new \Codex\Config\Assets;
        CLI::write('Copy default template..', 'blue');
        exec("cp -r $assetsConfig->assetsPath $assetsConfig->publicPath");

        CLI::write('Copying dependencies...', 'blue');

        foreach ($assetsConfig->dependencies as $folder => $rows) {
            foreach ($rows as $dep) {
                CLI::write("Copy $dep --> $folder", 'blue');
                $from = APPPATH. '../' . $dep;
                $to   = $assetsConfig->publicPath . $folder.'/';
                exec("cp -r $from $to");
            }
        }

        //exec("cp -r")
        
        
        /*// Consume or prompt for username
        $row['username'] = array_shift($params);
        if (empty($row['username'])) {
            $row['username'] = CLI::prompt('Username', null, 'required');
        }

        // Consume or prompt for password
        $row['password'] = array_shift($params);
        if (empty($row['password'])) {
            $row['password'] = CLI::prompt('Password', null, 'required');
        }

        // Consume or prompt for email
        $row['email'] = array_shift($params);
        if (empty($row['email'])) {
            $row['email'] = CLI::prompt('Email', null, 'required');
        }

        $row['active'] = 1;

        // Save the user
        $users = new UserModel();
        $user = new User($row);

        if ($userId = $users->insert($user)) {
            CLI::write(lang('Auth.registerCLI', [$row['username'], $userId]), 'green');
        } else {
            foreach ($users->errors() as $message) {
                CLI::write($message, 'red');
            }
        }
        */
    }
}