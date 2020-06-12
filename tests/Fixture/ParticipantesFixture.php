<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ParticipantesFixture
 */
class ParticipantesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id_participantes' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nombrecompleto' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_spanish_ci', 'comment' => '', 'precision' => null],
        'curp' => ['type' => 'string', 'length' => 18, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_spanish_ci', 'comment' => '', 'precision' => null],
        'intitucionprocedencia' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_spanish_ci', 'comment' => '', 'precision' => null],
        'cuenta' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_spanish_ci', 'comment' => '', 'precision' => null],
        'password' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_spanish_ci', 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_participantes'], 'length' => []],
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
                'id_participantes' => 1,
                'nombrecompleto' => 'Lorem ipsum dolor sit amet',
                'curp' => 'Lorem ipsum dolo',
                'intitucionprocedencia' => 'Lorem ipsum dolor sit amet',
                'cuenta' => 'Lorem ipsum dolor ',
                'password' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
