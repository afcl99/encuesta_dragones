<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        $table = $this->table('users');
        $data[] = [
            'username'=>'ASD',
            'password'=>'123',
            'firstname'=>'Kevin',
            'lastname'=>'De Bruyne',
            'role'=>'admin',
            'active'=>True,
            'created'=>date('Y-m-d H:i:s'),
            'modified'=>date('Y-m-d H:i:s')];

        $data[] = [
            'username'=>'AERO',
            'password'=>'321',
            'firstname'=>'Alvin',
            'lastname'=>'Meyer',
            'role'=>'admin',
            'active'=>True,
            'created'=>date('Y-m-d H:i:s'),
            'modified'=>date('Y-m-d H:i:s')];

        $data[] = [
            'username'=>'afcl',
            'password'=>'234',
            'firstname'=>'andres',
            'lastname'=>'claros',
            'role'=>'admin',
            'active'=>True,
            'created'=>date('Y-m-d H:i:s'),
            'modified'=>date('Y-m-d H:i:s')];

        $data[] = [
            'username'=>'QUASA',
            'password'=>'156',
            'firstname'=>'Xavier',
            'lastname'=>'Cuasapud',
            'role'=>'admin',
            'active'=>True,
            'created'=>date('Y-m-d H:i:s'),
            'modified'=>date('Y-m-d H:i:s')];
        
        $data[] = [
            'username'=>'MICA',
            'password'=>'675',
            'firstname'=>'Micael',
            'lastname'=>'Angelo',
            'role'=>'admin',
            'active'=>True,
            'created'=>date('Y-m-d H:i:s'),
            'modified'=>date('Y-m-d H:i:s')];
        $table->insert($data)->save();
    }
}
