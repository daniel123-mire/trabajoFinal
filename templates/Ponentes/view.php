<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $ponente
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ponente'), ['action' => 'edit', $ponente->id_ponentes], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ponente'), ['action' => 'delete', $ponente->id_ponentes], ['confirm' => __('Are you sure you want to delete # {0}?', $ponente->id_ponentes), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ponentes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ponente'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ponentes view content">
            <h3><?= h($ponente->id_ponentes) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombrecompleto') ?></th>
                    <td><?= h($ponente->nombrecompleto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sexo') ?></th>
                    <td><?= h($ponente->sexo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Foto') ?></th>
                    <td><?= h($ponente->foto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cv') ?></th>
                    <td><?= h($ponente->cv) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nivelacademico') ?></th>
                    <td><?= h($ponente->nivelacademico) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cuenta') ?></th>
                    <td><?= h($ponente->cuenta) ?></td>
                </tr>
                <tr>
                    <th><?= __('Password') ?></th>
                    <td><?= h($ponente->password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Correo') ?></th>
                    <td><?= h($ponente->correo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Ponentes') ?></th>
                    <td><?= $this->Number->format($ponente->id_ponentes) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
