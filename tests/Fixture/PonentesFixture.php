<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PonentesFixture
 */
class PonentesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id_ponentes' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nombrecompleto' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_spanish_ci', 'comment' => '', 'precision' => null],
        'sexo' => ['type' => 'char', 'length' => 1, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_spanish_ci', 'comment' => '', 'precision' => null],
        'foto' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_spanish_ci', 'comment' => '', 'precision' => null],
        'cv' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_spanish_ci', 'comment' => '', 'precision' => null],
        'nivelacademico' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_spanish_ci', 'comment' => '', 'precision' => null],
        'cuenta' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_spanish_ci', 'comment' => '', 'precision' => null],
        'password' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_spanish_ci', 'comment' => '', 'precision' => null],
        'correo' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_spanish_ci', 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_ponentes'], 'length' => []],
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
                'id_ponentes' => 1,
                'nombrecompleto' => 'Lorem ipsum dolor sit amet',
                'sexo' => '',
                'foto' => 'Lorem ipsum dolor sit amet',
                'cv' => 'Lorem ipsum dolor sit amet',
                'nivelacademico' => 'Lorem ipsum dolor sit amet',
                'cuenta' => 'Lorem ipsum dolor ',
                'password' => 'Lorem ipsum dolor sit amet',
                'correo' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
