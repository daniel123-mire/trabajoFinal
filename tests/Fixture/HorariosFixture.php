<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HorariosFixture
 */
class HorariosFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id_horarios' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'catalogo_id' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ponente_id' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fkcatalogo' => ['type' => 'index', 'columns' => ['catalogo_id'], 'length' => []],
            'fkponente' => ['type' => 'index', 'columns' => ['ponente_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_horarios'], 'length' => []],
            'fkcatalogo' => ['type' => 'foreign', 'columns' => ['catalogo_id'], 'references' => ['catalogos', 'id_catalogos'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fkponente' => ['type' => 'foreign', 'columns' => ['ponente_id'], 'references' => ['ponentes', 'id_ponentes'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'id_horarios' => 1,
                'catalogo_id' => 1,
                'ponente_id' => 1,
            ],
        ];
        parent::init();
    }
}
