<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CatalogosFixture
 */
class CatalogosFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id_catalogos' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'titulo' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_spanish_ci', 'comment' => '', 'precision' => null],
        'costo' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'totalhoras' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cupolimite' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'actividad_id' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'evento_id' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fkactividad' => ['type' => 'index', 'columns' => ['actividad_id'], 'length' => []],
            'fkevento' => ['type' => 'index', 'columns' => ['evento_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_catalogos'], 'length' => []],
            'fkactividad' => ['type' => 'foreign', 'columns' => ['actividad_id'], 'references' => ['actividades', 'id_actividades'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fkevento' => ['type' => 'foreign', 'columns' => ['evento_id'], 'references' => ['eventos', 'id_eventos'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'id_catalogos' => 1,
                'titulo' => 'Lorem ipsum dolor sit amet',
                'costo' => 1,
                'totalhoras' => 1,
                'cupolimite' => 1,
                'actividad_id' => 1,
                'evento_id' => 1,
            ],
        ];
        parent::init();
    }
}
