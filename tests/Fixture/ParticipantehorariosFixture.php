<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ParticipantehorariosFixture
 */
class ParticipantehorariosFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id_participantehorarios' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'participante_id' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'horario_id' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fecharegistro' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        '_indexes' => [
            'fkparticipante' => ['type' => 'index', 'columns' => ['participante_id'], 'length' => []],
            'fkhorarioparticipante' => ['type' => 'index', 'columns' => ['horario_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_participantehorarios'], 'length' => []],
            'fkhorarioparticipante' => ['type' => 'foreign', 'columns' => ['horario_id'], 'references' => ['horarios', 'id_horarios'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fkparticipante' => ['type' => 'foreign', 'columns' => ['participante_id'], 'references' => ['participantes', 'id_participantes'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_spanish_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_participantehorarios' => 1,
                'participante_id' => 1,
                'horario_id' => 1,
                'fecharegistro' => '2020-04-07 20:46:40',
            ],
        ];
        parent::init();
    }
}
