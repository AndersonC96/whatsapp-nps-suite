<?php $title = 'Login'; include __DIR__ . '/../layouts/header.php'; ?>
<div class="column is-half is-offset-one-quarter">
  <h1 class="title has-text-centered">Login</h1>
  <?php if (!empty($erro)): ?>
    <div class="notification is-danger"><?= $erro ?></div>
  <?php endif; ?>
  <form method="POST">
    <div class="field">
      <label class="label">E-mail</label>
      <div class="control">
        <input class="input" type="email" name="email" required>
      </div>
    </div>
    <div class="field">
      <label class="label">Senha</label>
      <div class="control">
        <input class="input" type="password" name="senha" required>
      </div>
    </div>
    <div class="field is-grouped is-grouped-right">
      <div class="control">
        <button class="button is-link">Entrar</button>
      </div>
    </div>
  </form>
</div>
<?php include __DIR__ . '/../layouts/footer.php'; ?>