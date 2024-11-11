<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
  <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://randomuser.me/api/portraits/men/1.jpg" alt="User Image">
    <div>
      <p class="app-sidebar__user-name"><?=ucfirst($_SESSION['userData']['razonsocial']); ?></p>
      <p class="app-sidebar__user-designation"><?=ucfirst($_SESSION['userData']['descripcion']); ?></p>
    </div>
  </div>
  <ul class="app-menu">
    <li>
      <a class="app-menu__item <?= ($data['page_name']=='dashboard') ? 'active' : ''; ?>" href="<?= base_url(); ?>/dashboard">
        <i class="app-menu__icon bi bi-speedometer"></i>
        <span class="app-menu__label">Dashboard</span>
      </a>
    </li>
    <li>
      <a class="app-menu__item <?= ($data['page_name']=='empresa') ? 'active' : ''; ?>" href="<?= base_url(); ?>/empresa">
        <i class="app-menu__icon bi bi-info-circle-fill"></i>
        <span class="app-menu__label">Empresa</span>
      </a>
    </li>
    <li>
      <a class="app-menu__item <?= ($data['page_name']=='paginas') ? 'active' : ''; ?>" href="<?= base_url(); ?>/paginas">
        <i class="app-menu__icon bi bi-postcard-fill"></i>
        <span class="app-menu__label">Paginas</span>
      </a>
    </li>
  </ul>
</aside>