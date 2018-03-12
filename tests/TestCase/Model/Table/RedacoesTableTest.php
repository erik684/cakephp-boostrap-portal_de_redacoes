<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RedacoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RedacoesTable Test Case
 */
class RedacoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RedacoesTable
     */
    public $Redacoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.redacoes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Redacoes') ? [] : ['className' => RedacoesTable::class];
        $this->Redacoes = TableRegistry::get('Redacoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Redacoes);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
