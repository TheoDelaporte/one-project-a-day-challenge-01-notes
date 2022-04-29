<div class="row">
    <div class="card col-sm-4" style="width: 18rem;">
        <div class="card-header text-center">
            <h5 class="card-title"><?= h($note->title) ?></h5>
        </div>
        <div class="card-body">
            <p class="card-text"><b><?= $this->Paginator->sort('note') ?> : </b><br><?= h($note->note) ?></p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?= $this->Paginator->sort('id') ?> : <?= $this->Number->format($note->id) ?></li>
            <li class="list-group-item"><?= $this->Paginator->sort('created') ?> : <?= h($note->created) ?></li>
            <li class="list-group-item"><?= $this->Paginator->sort('modified') ?> : <?= h($note->modified) ?></li>
        </ul>
        <div class="card-body text-center">
            <?= $this->Html->link(__('View'), ['action' => 'view', $note->id], ['class' => "btn btn-primary btn-sm"]) ?>
            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $note->id], ['class' => "btn btn-warning btn-sm"]) ?>
            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $note->id], ['class' => "btn btn-danger btn-sm"], ['confirm' => __('Are you sure you want to delete # {0}?', $note->id)]) ?>
        </div>
    </div>
</div>
