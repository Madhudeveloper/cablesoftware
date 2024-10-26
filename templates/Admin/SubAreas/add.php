<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SubArea $subArea
 * @var \Cake\Collection\CollectionInterface|string[] $mainAreas
 * @var \Cake\Collection\CollectionInterface|string[] $companies
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Sub Areas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="subAreas form content">
            <?= $this->Form->create($subArea) ?>
            <fieldset>
                <legend><?= __('Add Sub Area') ?></legend>
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
