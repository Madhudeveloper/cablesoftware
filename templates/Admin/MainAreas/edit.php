<div class="container-fluid">
    <div class="row">
        <div class="col-xl-8">
        <div class="card height-equal">
            <div class="card-header">
            <h4>Edit Main Area</h4>
            </div>
            <div class="card-body custom-input">
            <?php echo $this->Form->create($mainArea, ['class' => 'row g-3', 'url' => ['controller' => 'mainareas', 'action' => 'edit', $mainArea->id]]); ?>
                <div class="col-12"> 
                    <label class="form-label" for="first-name">Name <span class="text-danger">*</span></label>
                    <?php echo $this->Form->control('name', ['placeholder' => 'Enter Main Area', 'class' => 'form-control', 'label' => false]); ?>
                    <input type="hidden" name="company_id" value="<?php echo $this->request->getSession()->read('Auth.Admin.company_id'); ?>">
                </div>
                <div class="col-12"> 
                    <label class="form-label" for="validationDefault04">Status <span class="text-danger">*</span></label>
                    <select class="form-select" id="validationDefault04" name="status" required>
                        <option selected disabled value="">Choose...</option>
                        <option value="1" <?php echo ($mainArea->status == 1) ? 'selected' : ''; ?>>Active</option>
                        <option value="0" <?php echo ($mainArea->status == 0) ? 'selected' : ''; ?>>Inactive</option>
                    </select>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <a href="<?php echo $this->Url->build('/admin/mainareas'); ?>" class="btn btn-danger">Cancel</a>
                </div>
            <?= $this->Form->end(); ?>
            </div>
        </div>
        </div>
    </div>
</div>

