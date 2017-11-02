
	

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
          	<form class="form-signin">
		        <h2 class="form-signin-heading">Please sign in</h2>
		        <label for="inputEmail" class="sr-only">Email address</label>
		        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
		        <label for="inputPassword" class="sr-only">Password</label>
		        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
		        <div class="checkbox">
		          <label>
		            <input type="checkbox" value="remember-me"> Remember me
		          </label>
		        </div>
		        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		     </form>
          </div>
        </div>
      </div>
    </div><!-- /.container -->
{include file='footer.tpl'}