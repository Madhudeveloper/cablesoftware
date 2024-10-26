<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MainArea $mainArea
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Main Area'), ['action' => 'edit', $mainArea->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Main Area'), ['action' => 'delete', $mainArea->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mainArea->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Main Areas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Main Area'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mainAreas view content">
            <h3><?= h($mainArea->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($mainArea->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Company') ?></th>
                    <td><?= $mainArea->has('company') ? $this->Html->link($mainArea->company->company_name, ['controller' => 'Companies', 'action' => 'view', $mainArea->company->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($mainArea->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($mainArea->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($mainArea->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $mainArea->status ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Sub Areas') ?></h4>
                <?php if (!empty($mainArea->sub_areas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Main Area Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Company Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($mainArea->sub_areas as $subAreas) : ?>
                        <tr>
                            <td><?= h($subAreas->id) ?></td>
                            <td><?= h($subAreas->main_area_id) ?></td>
                            <td><?= h($subAreas->name) ?></td>
                            <td><?= h($subAreas->status) ?></td>
                            <td><?= h($subAreas->company_id) ?></td>
                            <td><?= h($subAreas->created) ?></td>
                            <td><?= h($subAreas->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'SubAreas', 'action' => 'view', $subAreas->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'SubAreas', 'action' => 'edit', $subAreas->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'SubAreas', 'action' => 'delete', $subAreas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subAreas->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
