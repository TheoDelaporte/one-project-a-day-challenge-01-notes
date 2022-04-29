<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Note $note
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="notes form content">
            <?= $this->Form->create($note) ?>
            <fieldset>
                <legend><?= __('Add Note') ?></legend>
                <?php
                echo $this->Form->control(__('title'), ['class' => "form-control"]);
                echo $this->Form->control(__('note'), ['class' => "form-control form-control-lg"]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => "btn btn-primary"]) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
