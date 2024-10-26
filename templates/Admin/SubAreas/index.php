<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\SubArea> $subAreas
 */
?>
<div class="subAreas index content">
    <?= $this->Html->link(__('New Sub Area'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Sub Areas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('main_area_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('company_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($subAreas as $subArea): ?>
                <tr>
                    <td><?= $this->Number->format($subArea->id) ?></td>
                    <td><?= $subArea->has('main_area') ? $this->Html->link($subArea->main_area->name, ['controller' => 'MainAreas', 'action' => 'view', $subArea->main_area->id]) : '' ?></td>
                    <td><?= h($subArea->name) ?></td>
                    <td><?= h($subArea->status) ?></td>
                    <td><?= $subArea->has('company') ? $this->Html->link($subArea->company->company_name, ['controller' => 'Companies', 'action' => 'view', $subArea->company->id]) : '' ?></td>
                    <td><?= h($subArea->created) ?></td>
                    <td><?= h($subArea->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $subArea->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subArea->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subArea->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subArea->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
