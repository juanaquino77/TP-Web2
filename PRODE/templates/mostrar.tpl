{include file='header.tpl'}
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-md-3">
              {include file='menuAside.tpl'}
        </div>
        <div class="col-12 col-md-9">
          <h1>{{$cabecera}}</h1>
          <div>
              {include file='equipos.tpl'}
          </div>
        </div>
      </div>
    </div><!-- /.container -->
{include file='newFooter.tpl'}