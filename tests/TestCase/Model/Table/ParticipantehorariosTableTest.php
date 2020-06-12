<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ParticipantehorariosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ParticipantehorariosTable Test Case
 */
class ParticipantehorariosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ParticipantehorariosTable
     */
    protected $Participantehorarios;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Participantehorarios',
        'app.Participantes',
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
        $config = TableRegistry::getTableLocator()->exists('Participantehorarios') ? [] : ['className' => ParticipantehorariosTable::class];
        $this->Participantehorarios = TableRegistry::getTableLocator()->get('Participantehorarios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Participantehorarios);

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
