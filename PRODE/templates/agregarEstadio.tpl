<div>
    
{include file='header.tpl'}
<div>
    <form action="guardarEstadio" method="post">
        <select name="idClub" class="form-control" id="idClub">
            {foreach from=$equipos item=equipo} 
                <option value={$equipo['Id_equipo']}>{$equipo['Nombre']}</option>              
            {/foreach}
        </select>
        <div class="input-group">
            <span class="input-group-addon">Estadio:</span>
            <input type="text" class="form-control" name="nombreEstadio" id="nombreEstadio" placeholder="Ingrese el nombre del estadio">
        </div>
        <button type="submit" class="btn  btn-success">Agregar Estadio</button>
    </form>
</div>
</div>