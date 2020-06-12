<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PonentesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PonentesTable Test Case
 */
class PonentesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PonentesTable
     */
    protected $Ponentes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Ponentes',
        'app.Horarios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Ponentes') ? [] : ['className' => PonentesTable::class];
        $this->Ponentes = TableRegistry::getTableLocator()->get('Ponentes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Ponentes);

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
}
