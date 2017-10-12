<div>
	<table class="table table-striped">
	  <thead>
	    <tr>
	      <th># Equipo</th>
	      <th>Nombre</th>
	      <th>Estadio</th>
	    </tr>
	  </thead>
	  <tbody>
        {foreach from=$equipos item=equipo} 
		    <tr>
		      <td>{$equipo['Id_equipo']}</td>
		      <td>{$equipo['Nombre']}</td>
		      <td>{$equipo['Estadio']}</td>
		    </tr>
        {/foreach}
	  </tbody>
	</table>
</div>
	