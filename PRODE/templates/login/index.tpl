{include file='header.tpl'}
    <div id="wrapper"  class="container login-register">
      <a href="logout">Logout</a>
      <div class="row">
        <div class="col-md-3 col-md-3">
          {include file='menuAside.tpl'}
        </div>
        <div class="col-12 col-md-9">
          <h1>{{$cabecera}}</h1>
          <div class="main">
            <form action="verificarUsuario" method="post">
              <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Chelo.Oliver" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name ="password" placeholder="Password" required>
              </div>
              {if !empty($error) }
                <div class="alert alert-danger" role="alert">{$error}</div>
              {/if}
              <button type="submit" class="btn btn-default">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div><!-- /.container -->
{include file='footer.tpl'}