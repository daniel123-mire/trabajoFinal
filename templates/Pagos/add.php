<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pago $pago
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Pagos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="pagos form content">
            <?= $this->Form->create($pago) ?>
            <fieldset>
                <legend><?= __('Add Pago') ?></legend>
                <?php

                    echo $this->Form->control('fechapago', ['empty' => true]);

                    //echo $this->Form->control('participante_id', ['options' => $participantes, 'empty' => true]);
                    echo "Participante";
                    echo "<br></br> ";

                    echo"<select name= 'participante_id'>";
                    foreach($participantes as $participante){
                        echo"<option value ='".$participante['id_participantes']."'>".$participante['nombrecompleto']."</option>";
                    }
                    echo"</select>";



                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
