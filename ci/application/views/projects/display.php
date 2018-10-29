<div class="col-xs-9">
    <h1>Nome do Projeto: <?php echo $project_data->project_name; ?></h1>
    <p>Data de criação: <?php echo $project_data->date_created; ?></p>
</div>

<div class="col-xs-3 pull-right">
    <ul class='list-group'>
        <h4>Ações do Projeto</h4>
        <li class='list-group-item'><a href="<?php //echo base_url('tasks/create/') . $project->id; ?>">Criar Tarefa</a></li>
        <li class='list-group-item'><a href="">Editar Projeto</a></li>
        <li class='list-group-item'><a href="">Excluir Projeto</a></li>
    </ul>
</div>