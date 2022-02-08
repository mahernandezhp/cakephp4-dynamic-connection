<table id="tbl-categories-list" class="table table-bordered table-striped">
  <thead>
      <tr>
            <td colspan="5" align="right"><a href="<?= $this->Url->build('/categories/add', ['fullBase' => true]) ?>">Add Category</a></td>
       </tr>
      <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Action</th>
      </tr>
  </thead>
  <tbody>
      <?php
        if (count($categories) > 0) {
            foreach ($categories as $index => $data) {
        ?>
              <tr>
                  <td><?= $data->id ?></td>
                  <td><?= $data->name ?></td>
                  <td>
                      <form id="frm-user-<?= $data->id ?>" action="<?= $this->Url->build('/categories/delete/' . $data->id, ['fullBase' => false]) ?>" method="post"><input type="hidden" value="<?= $data->id ?>" name="id" /></form>
                      <a href="<?= $this->Url->build('/categories/edit/' . $data->id, ['fullBase' => true]) ?>" class="btn btn-warning">Edit</a>
                      <a href="javascript:void(0)" onclick="if(confirm('Are you sure want to delete ?')){ $('#frm-user-<?= $data->id ?>').submit() }" class="btn btn-danger">Delete</a>
                  </td>
              </tr>
      <?php
            }
        }
        ?>
  </tbody>
</table>