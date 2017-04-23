<table class="table">
    <thead>
        <?php if ($this->session->userdata('name')=="admin" && $this->session->userdata('id_usuario')=="6"):?>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Patente</th>
            <th>Usuario</th>        
            <th>Acciones</th>
         <?php else :?>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Patente</th>
            <th>Usuario</th> 
        <?php endif?>
    </thead>
    <tbody>
        <?php foreach ($unidad as $unidad): ?>
        <tr>
            <?php if ($this->session->userdata('id_usuario')=="6") :?>
                <td><?=$unidad->marca?></td>
                <td><?=$unidad->modelo?></td>
                <td><?=$unidad->patente?></td>
                <td><?=$unidad->email?></td>
                <td><?php if ($unidad->id_usuario=='6'):?>
                    <a href="<?=base_url()?>index.php/unidad/editar/<?=$unidad->id_unidad?>" class="btn btn-warning" >Editar</a> <a href="<?=base_url()?>index.php/unidad/eliminar/<?=$unidad->id_unidad?>" class="btn btn-danger" >Eliminar</a>
                    <?php else:?>
                    <a href="" class="btn btn-warning" disabled="disabled" >Editar</a> <a href="" disabled="disabled" class="btn btn-danger" >Eliminar</a>
                    <?php endif?>
                </td>
            <?php else:?>
                <td><?=$unidad->marca?></td>
                <td><?=$unidad->modelo?></td>
                <td><?=$unidad->patente?></td>            
                <td><a href="<?=base_url()?>index.php/unidad/editar/<?=$unidad->id_unidad?>" class="btn btn-warning" >Editar</a> <a href="<?=base_url()?>index.php/unidad/eliminar/<?=$unidad->id_unidad?>" class="btn btn-danger" >Eliminar</a></td>
            <?php endif?>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>