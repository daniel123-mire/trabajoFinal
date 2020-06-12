<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PagosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PagosTable Test Case
 */
class PagosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PagosTable
     */
    protected $Pagos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Pagos',
        'app.Participantes',
        'app.Pagodetalles',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Pagos') ? [] : ['className' => PagosTable::class];
        $this->Pagos = TableRegistry::getTableLocator()->get('Pagos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Pagos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
