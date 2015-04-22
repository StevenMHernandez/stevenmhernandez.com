<?php namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class MakeUserCommand extends Command{

    protected $name = 'make:user';

    protected $description = 'Create a user.';

    public function fire () {
        $email = $this->ask('Email.');
        $password = $this->secret('Password.');
        $password_confirmation = $this->secret('Password Again.');
        if($password == $password_confirmation) {
            $user = new User;
            $user->email = $email;
            $user->password = Hash::make($password);
            $user->save();
            $this->comment('Created user.');
        } else {
            $this->error('Passwords do not match.');
            $this->error('User not created.');
        }
    }
} 