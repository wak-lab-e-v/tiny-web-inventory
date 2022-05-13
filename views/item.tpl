<?php $this->insert('partials/header') ?>

<div class="container-fluid" style="margin-top:20px; padding: 20px; background-color: lightgray;">
<div class="row">
      <div class="col-2">
            <span class="badge bg-primary">ID</span>
      </div>
      <div class="col-6">
            <h2><?=$this->e($ITEM_ID)?> </h2>
      </div>
      <div class="col-4">
            <img src="createQR.php?id=<?=$this->e($ITEM_ID)?>" />
      </div>
</div>

<div class="row">
      <div class="col-2">
            <span class="badge bg-primary">Name</span>
      </div>
      <div class="col-10">
            <h2><?=$this->e($itemCaption)?> </h2>
      </div>
</div>

<div class="row">
      <div class="col-2">
            <span class="badge bg-info">Status</span>
      </div>
      <div class="col-10">
            <h2><?=$this->e($status)?> </h2>
      </div>
</div>

<div class="row">
      <div class="col-2">
            <span class="badge bg-warning text-dark">Erstellt</span>
      </div>
      <div class="col-10">
            <h2><?=$this->e($created)?> </h2>
      </div>
</div>

<div class="row">
      <div class="col-2">
            <span class="badge bg-warning text-dark">Letzte Änderung</span>
      </div>
      <div class="col-10">
            <h2><?=$this->e($modified)?> </h2>
      </div>
</div>

</div>

<?php $this->insert('partials/footer') ?>
