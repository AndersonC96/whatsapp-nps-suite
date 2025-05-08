<nav class="navbar is-light mb-4">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">NPS</a>
  </div>
  <div class="navbar-menu">
    <div class="navbar-end">
      <?php if (isset($_SESSION['user'])): ?>
        <a class="navbar-item" href="/logout">Sair</a>
      <?php endif; ?>
    </div>
  </div>
</nav>