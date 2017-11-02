<div>
    <form action="agregar" method="post">
        {for $foo=1 to 14}
            <span>{$foo}</span>
            <select name="idClub" class="form-control" id="idClub">
                {foreach from=$equipos item=equipo} 
                    <option value={$equipo['Id_equipo']}>{$equipo['Nombre']}</option>              
                {/foreach}
            </select>
            <span>VS</span>
            <select name="idClub2" class="form-control" id="idClub2">
                {foreach from=$equipos item=equipo} 
                    <option value={$equipo['Id_equipo']}>{$equipo['Nombre']}</option>              
                {/foreach}
            </select>
            <br>
        {/for}
        <button type="submit" class="btn  btn-success">Agregar Fecha</button>
    </form>
</div>
