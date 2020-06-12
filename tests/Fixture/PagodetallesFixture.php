<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PagodetallesFixture
 */
class PagodetallesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id_pagodetalles' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'importe' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'pago_id' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'catalogo_id' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fkpagodetalle' => ['type' => 'index', 'columns' => ['pago_id'], 'length' => []],
            'fkcatalogodetalle' => ['type' => 'index', 'columns' => ['catalogo_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_pagodetalles'], 'length' => []],
            'fkcatalogodetalle' => ['type' => 'foreign', 'columns' => ['catalogo_id'], 'references' => ['catalogos', 'id_catalogos'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fkpagodetalle' => ['type' => 'foreign', 'columns' => ['pago_id'], 'references' => ['pagos', 'id_pagos'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'id_pagodetalles' => 1,
                'importe' => 1,
                'pago_id' => 1,
                'catalogo_id' => 1,
            ],
        ];
        parent::init();
    }
}
