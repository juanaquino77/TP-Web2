{include file='header.tpl'}

<div>
	<table class="table table-striped">
	  <thead>
	    <tr>
	      <th># Partido</th>
	      <th># Fecha</th>
	      <th>Local</th>
	      <th>Visitante</th>
	    </tr>
	  </thead>
	  <tbody>
        {foreach from=$partidos item=partido} 
		    <tr>
		      <td>{$partido['Id_partido']}</td>
		      <td>{$partido['Id_fecha']}</td>
		      <td>{$partido['Id_equipo_local']}</td>
		      <td>{$partido['Id_equipo_visita']}</td>
		    </tr>
        {/foreach}
	  </tbody>
	</table>
</div>
	