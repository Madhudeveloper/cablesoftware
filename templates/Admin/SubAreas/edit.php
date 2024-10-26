<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SubArea $subArea
 * @var string[]|\Cake\Collection\CollectionInterface $mainAreas
 * @var string[]|\Cake\Collection\CollectionInterface $companies
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $subArea->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $subArea->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Sub Areas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="subAreas form content">
            <?= $this->Form->create($subArea) ?>
            <fieldset>
                <legend><?= __('Edit Sub Area') ?></legend>
                <?php
                    echo $this->Form->control('main_area_id', ['options' => $mainAreas]);
                    echo $this->Form->control('name');
                    echo $this->Form->control('status');
                    echo $this->Form->control('company_id', ['options' => $companies]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
