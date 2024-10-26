<div class="container-fluid">
    <div class="row">
        <!-- Zero Configuration  Starts-->
        <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
            <h4 class="mb-2">Manage Main Area</h4>
            <a href="<?php echo $this->Url->build('/admin/mainareas/add'); ?>" class="btn btn-primary"><i class="fa fa-plus-square"></i> Add Main Area</a>
            </div>
            <div class="card-body">
            <?php echo $this->Flash->render(); ?><br>
            <div class="table-responsive theme-scrollbar">
                <table class="display" id="basic-1">
                <thead>
                    <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $s=1; foreach ($mainAreas as $mainArea): ?>
                    <tr>
                    <td><?php echo $s; ?></td>
                    <td><?php echo $mainArea['name']; ?></td>
                    <td>
                        <?php if($mainArea['status'] == 1){ ?>
                            <span class="badge rounded-pill badge-success">Active</span>
                        <?php }else{ ?>
                            <span class="badge rounded-pill badge-danger">InActive</span>
                        <?php } ?>
                    </td>
                    <td> 
                        <ul class="action"> 
                        <li class="edit"> <a href="<?php echo $this->Url->build('/admin/mainareas/edit/'.$mainArea['id']); ?>"><i class="icon-pencil-alt"></i></a></li>
                        <li class="delete"> <?= $this->Form->postLink( '<i class="icon-trash"></i>', ['action' => 'delete', $mainArea['id']], [ 'confirm' => __('Are you sure you want to delete this main area?'), 'escape' => false ] ) ?> </li>
                        </ul>
                    </td>
                    </tr>
                <?php $s++; endforeach; ?>
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var toastEl = document.getElementById('liveToast6');
    if (toastEl) {
        var toast = new bootstrap.Toast(toastEl);
        toast.show();
    }
});
</script>