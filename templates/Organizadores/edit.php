<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $organizadore
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $organizadore->id_organizadores],
                ['confirm' => __('Are you sure you want to delete # {0}?', $organizadore->id_organizadores), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Organizadores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="organizadores form content">
            <?= $this->Form->create($organizadore) ?>
            <fieldset>
                <legend><?= __('Edit Organizadore') ?></legend>
                <?php
                    echo $this->Form->control('nombreorazonsocial');
                    echo $this->Form->control('rfc');
                    echo $this->Form->control('contacto');
                    echo $this->Form->control('url');
                    echo $this->Form->control('correo');
                    echo $this->Form->control('telefono');
                    echo $this->Form->control('direccion');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
