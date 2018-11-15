<?php
use Migrations\AbstractMigration;

class CreateNoticias extends AbstractMigration
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
        $table = $this->table('noticias');
        $table->addColumn('nombre', 'string',['limit'=> 100])
              ->addColumn ('descripcion','text')
              ->addColumn ('link', 'string') 
              ->addColumn ('imagen', 'string')
              ->addColumn('created','datetime')
              ->addColumn('modified','datetime')
              ->create();
    }
}
