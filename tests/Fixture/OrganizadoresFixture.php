<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrganizadoresFixture
 */
class OrganizadoresFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id_organizadores' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nombreorazonsocial' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_spanish_ci', 'comment' => '', 'precision' => null],
        'rfc' => ['type' => 'string', 'length' => 12, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_spanish_ci', 'comment' => '', 'precision' => null],
        'contacto' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_spanish_ci', 'comment' => '', 'precision' => null],
        'url' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_spanish_ci', 'comment' => '', 'precision' => null],
        'correo' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_spanish_ci', 'comment' => '', 'precision' => null],
        'telefono' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_spanish_ci', 'comment' => '', 'precision' => null],
        'direccion' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_spanish_ci', 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_organizadores'], 'length' => []],
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
                'id_organizadores' => 1,
                'nombreorazonsocial' => 'Lorem ipsum dolor sit amet',
                'rfc' => 'Lorem ipsu',
                'contacto' => 'Lorem ipsum dolor sit amet',
                'url' => 'Lorem ipsum dolor sit amet',
                'correo' => 'Lorem ipsum dolor sit amet',
                'telefono' => 'Lorem ipsum dolor sit amet',
                'direccion' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
