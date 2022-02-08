<?= $this->Form->create($category, [
  "id" => "frm-edit-category"
]) ?>
<div class="row custom-padding">
   <div class="col-sm-6">
       <!-- text input -->
       <div class="form-group">
           <label>Name</label>
           <input type="text" value="<?= $category->name ?>" required class="form-control" placeholder="Name" name="name">
       </div>
   </div>
</div>

<div class="row custom-padding">
   <div class="col-sm-6">
       <!-- Select multiple-->
       <div class="form-group">
           <button class="btn btn-primary">Submit</button>
       </div>
   </div>
</div>
  <?= $this->Form->end() ?>
