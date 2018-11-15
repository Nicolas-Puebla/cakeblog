<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NoticiasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NoticiasTable Test Case
 */
class NoticiasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NoticiasTable
     */
    public $Noticias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.noticias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Noticias') ? [] : ['className' => NoticiasTable::class];
        $this->Noticias = TableRegistry::getTableLocator()->get('Noticias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Noticias);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
