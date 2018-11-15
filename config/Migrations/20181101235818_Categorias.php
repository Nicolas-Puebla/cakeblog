<?php
use Migrations\AbstractMigration;

class Categorias extends AbstractMigration
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
        $categorias = $this->table('categorias');
        $categorias->addColumn('parent_id', 'integer', ['null' => true, 'default' => null])
            ->addColumn('nombre', 'string', ['limit' => 255])
            ->addColumn('descripcion', 'string', ['limit' => 255, 'null' => true, 'default' => null])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime', ['null' => true, 'default' => null])
            ->create();
    }
}
