<div class="container  formulario">
<form data-toggle="validator">

  <div class="form-group mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required
    data-error="Por favor, informe um e-mail correto."> 
    <div class="help-block with-errors">
    </div>
    <div id="emailHelp" class="form-text">Nunca compartilhe seu email e senha com ninguém.</div>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Senha:</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">lembrar-me</label>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>