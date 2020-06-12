<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EventosFixture
 */
class EventosFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id_eventos' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'titulo' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_spanish_ci', 'comment' => '', 'precision' => null],
        'descripcion' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_spanish_ci', 'comment' => '', 'precision' => null],
        'fechainicio' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        'fechafin' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        'observaciones' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_spanish_ci', 'comment' => '', 'precision' => null],
        'logotipo' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_spanish_ci', 'comment' => '', 'precision' => null],
        'eslogan' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_spanish_ci', 'comment' => '', 'precision' => null],
        'lugar' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_spanish_ci', 'comment' => '', 'precision' => null],
        'inicioregistro' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        'cierreregistro' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        'categoria_id' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'organizador_id' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fkcategoria' => ['type' => 'index', 'columns' => ['categoria_id'], 'length' => []],
            'fkorganizador' => ['type' => 'index', 'columns' => ['organizador_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_eventos'], 'length' => []],
            'fkcategoria' => ['type' => 'foreign', 'columns' => ['categoria_id'], 'references' => ['categorias', 'id_categorias'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fkorganizador' => ['type' => 'foreign', 'columns' => ['organizador_id'], 'references' => ['organizadores', 'id_organizadores'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'id_eventos' => 1,
                'titulo' => 'Lorem ipsum dolor sit amet',
                'descripcion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'fechainicio' => '2020-04-07 19:37:32',
                'fechafin' => '2020-04-07 19:37:32',
                'observaciones' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'logotipo' => 'Lorem ipsum dolor sit amet',
                'eslogan' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'lugar' => 'Lorem ipsum dolor sit amet',
                'inicioregistro' => '2020-04-07 19:37:32',
                'cierreregistro' => '2020-04-07 19:37:32',
                'categoria_id' => 1,
                'organizador_id' => 1,
            ],
        ];
        parent::init();
    }
}
