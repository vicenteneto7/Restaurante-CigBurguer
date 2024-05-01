<?= $this->extend('layouts/layout_auth') ?>
<?= $this->section('content') ?>

<div class="container-1">
  <img src="<?= base_url('assets/images/logo.png') ?>" />
  <form action="#" method="post">
    <p>Restaurante</p>
    <select class="form-select" name="" id="">
      <option value=""></option>
      <?php foreach ($restaurants as $restaurant) : ?>
        <option value="<?= $restaurant['id']?>"> <?= $restaurant['name']?> </option>
      <?php endforeach; ?>
    </select>
    <hr />
    <input type="email" id="text-username" name="text-username" placeholder="E-mail" />
    <input type="password" id="text-password" name="text-password" placeholder="Senha" />
    <button>Entrar</button>
  </form>

  <p style="margin-top: 1rem;">Não tem uma conta? <a href="#">Cadastre-se</a></p>
  <a href="#">Recuperar senha</a>

</div>


<?= $this->endSection() ?>