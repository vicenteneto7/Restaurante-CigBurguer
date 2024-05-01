<?= $this->extend('layouts/layout_auth') ?>
<?= $this->section('content') ?>

<div class="container-1">
  <img src="<?= base_url('assets/images/logo.png') ?>" />

<div class="form-login">
  <?= form_open('/auth/login_submit') ?>
    <p>Restaurante</p>
    <select class="form-select" name="select_restaurant" id="select_restaurant">
      <option value=""></option>
      <?php foreach ($restaurants as $restaurant) : ?>
        <option value="<?= Encrypt($restaurant['id'])?>"> <?= $restaurant['name']?> </option>
      <?php endforeach; ?>
    </select>
    <?= display_error('select_restaurant', $validation_errors) ?> <!-- pode apresentar nulo ou o código de html -->

    <hr />

    <input type="text" id="text_username" name="text_username" placeholder="Usuário" value="<?= old('text_username') ?>"  /> <!-- value = persistência dos dados antigos q ele colocou no input antes de clicar em 'entrar' -->
    <?= display_error('text_username', $validation_errors) ?> <!-- pode apresentar nulo ou o código de html -->

    <input type="password" id="text_password" name="text_password" placeholder="Senha" value="<?= old('text_password') ?>" />
    <?= display_error('text_password', $validation_errors) ?> <!-- pode apresentar nulo ou o código de html -->

    <button>Entrar</button>
  <?= form_close() ?>
  </div>


  <p style="margin-top: 1rem;">Não tem uma conta? <a href="#">Cadastre-se</a></p>
  <a href="#">Recuperar senha</a>

</div>


<?= $this->endSection() ?>