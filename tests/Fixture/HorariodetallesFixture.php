<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HorariodetallesFixture
 */
class HorariodetallesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id_horariodetalles' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'fecha' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'horarioinicio' => ['type' => 'time', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'horariofin' => ['type' => 'time', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'lugar' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_spanish_ci', 'comment' => '', 'precision' => null],
        'horario_id' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fkhorario' => ['type' => 'index', 'columns' => ['horario_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_horariodetalles'], 'length' => []],
            'fkhorario' => ['type' => 'foreign', 'columns' => ['horario_id'], 'references' => ['horarios', 'id_horarios'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'id_horariodetalles' => 1,
                'fecha' => '2020-04-07',
                'horarioinicio' => '20:43:48',
                'horariofin' => '20:43:48',
                'lugar' => 'Lorem ipsum dolor sit amet',
                'horario_id' => 1,
            ],
        ];
        parent::init();
    }
}
