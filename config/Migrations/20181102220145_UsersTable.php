<?php
use Migrations\AbstractMigration;
use Phinx\Db\Action\ChangePrimaryKey;

class UsersTable extends AbstractMigration
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
        $user = $this->table('user');
        $user
            ->addColumn('username', 'string', ['limit' => 50])
            ->addColumn('password', 'string', ['limit' => 255])
            ->addColumn('role', 'string', ['limit' => 20])
            ->addColumn('created', 'datetime', ['null' => true, 'default' => null])
            ->addColumn('modified', 'datetime', ['null' => true, 'default' => null])
            ->create();
    }
}
