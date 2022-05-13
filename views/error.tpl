<?php $this->insert('partials/header') ?>

<div class="alert alert-danger d-flex align-items-center" role="alert">
 <svg class="bi flex-shrink-0 me-2" width="34" height="34" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
 &nbsp; &nbsp;
 <h1><?=$this->e($error)?> </h1>
</div>

<?php $this->insert('partials/footer') ?>