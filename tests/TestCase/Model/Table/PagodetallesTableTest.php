<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PagodetallesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PagodetallesTable Test Case
 */
class PagodetallesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PagodetallesTable
     */
    protected $Pagodetalles;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Pagodetalles',
        'app.Pagos',
        'app.Catalogos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Pagodetalles') ? [] : ['className' => PagodetallesTable::class];
        $this->Pagodetalles = TableRegistry::getTableLocator()->get('Pagodetalles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Pagodetalles);

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
