<?= $this->extend('layouts/layout_auth') ?>
<?= $this->section('content') ?>

<div class="container-1">
  <img src="<?= base_url('assets/images/logo.png') ?>" />


  <?= form_open('/auth/login_submit') ?>
    <p>Restaurante</p>
    <select class="form-select" name="select_restaurant" id="select_restaurant">
      <option value=""></option>
      <?php foreach ($restaurants as $restaurant) : ?>
        <option value="<?= Encrypt($restaurant['id'])?>"> <?= $restaurant['name']?> </option>
      <?php endforeach; ?>
    </select>
    <hr />
    <input type="text" id="text_username" name="text_username" placeholder="Usuário" />
    <input type="password" id="text_password" name="text_password" placeholder="Senha" />
    <button>Entrar</button>
  <?= form_close() ?>


  <p style="margin-top: 1rem;">Não tem uma conta? <a href="#">Cadastre-se</a></p>
  <a href="#">Recuperar senha</a>

</div>


<?= $this->endSection() ?>