<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SubArea $subArea
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Sub Area'), ['action' => 'edit', $subArea->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Sub Area'), ['action' => 'delete', $subArea->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subArea->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sub Areas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Sub Area'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="subAreas view content">
            <h3><?= h($subArea->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Main Area') ?></th>
                    <td><?= $subArea->has('main_area') ? $this->Html->link($subArea->main_area->name, ['controller' => 'MainAreas', 'action' => 'view', $subArea->main_area->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($subArea->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Company') ?></th>
                    <td><?= $subArea->has('company') ? $this->Html->link($subArea->company->company_name, ['controller' => 'Companies', 'action' => 'view', $subArea->company->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($subArea->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($subArea->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($subArea->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $subArea->status ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
