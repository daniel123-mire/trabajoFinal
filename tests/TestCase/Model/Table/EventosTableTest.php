<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EventosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EventosTable Test Case
 */
class EventosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EventosTable
     */
    protected $Eventos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Eventos',
        'app.Categorias',
        'app.Organizadores',
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
        $config = TableRegistry::getTableLocator()->exists('Eventos') ? [] : ['className' => EventosTable::class];
        $this->Eventos = TableRegistry::getTableLocator()->get('Eventos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Eventos);

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
