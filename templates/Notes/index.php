<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Note[]|\Cake\Collection\CollectionInterface $notes
 */
?>
<div class="notes index content">
    <?= $this->Html->link(__('Ajouter une note'), ['action' => 'add'], ['class' => 'btn btn-secondary']) ?>
    <h3><?= __('Mes notes') ?></h3>
    <div class="row">
        <?php foreach ($notes as $note) : ?>
            <div class="col-12 col-md-4 col-sm-6 col-xs-12">
                <?= $this->element('Notes/card', ['note' => $note]); ?>
            </div>
        <?php endforeach; ?>
    </div>
    <br>
    <div class="paginator text-center">
        <ul class="pagination justify-content-center">
            <?= $this->Paginator->prev(__('previous')) ?>
            <?= $this->Paginator->next(__('next')) ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
