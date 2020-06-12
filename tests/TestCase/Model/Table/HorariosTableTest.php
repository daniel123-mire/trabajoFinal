<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HorariosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HorariosTable Test Case
 */
class HorariosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HorariosTable
     */
    protected $Horarios;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Horarios',
        'app.Catalogos',
        'app.Ponentes',
        'app.Horariodetalles',
        'app.Participantehorarios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Horarios') ? [] : ['className' => HorariosTable::class];
        $this->Horarios = TableRegistry::getTableLocator()->get('Horarios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Horarios);

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
