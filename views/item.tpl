<?php $this->insert('partials/header') ?>



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

<?php $this->insert('partials/footer') ?>
