<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateQuestions extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('questions');
        $table->addColumn('id_test', 'integer', [
            'default' => null,
            'limit' => 50,
            'null' => false,
        ]);
        $table->addColumn('description', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addForeignkey("id_test","tests","id",["delete"=>"CASCADE","update"=>"CASCADE"]);
        $table->create();
    }
}
