<?php
headerAdmin($data);
?>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="bi bi-gear"></i><?= $data['page_title'] ?></h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="bi bi-gear fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="<?= base_url(); ?>/settings">Dashboard</a></li>
    </ul>
  </div>
  <div class="row">
    
  </div>
</main>
<?php
footerAdmin($data);
?>