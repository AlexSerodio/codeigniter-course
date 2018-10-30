<div class="col-xs-9">
    <h1>Nome: <?php echo $project_data->project_name; ?></h1>
    <p>Data de criação: <?php echo $project_data->date_created; ?></p>
    <h3>Descrição</h3>
    <p><?php echo $project_data->project_body; ?></p>

    <h3>Tarefas</h3>

    <?php if($completed_tasks): ?>
        <ul>
            <?php foreach($completed_tasks as $task): ?>
                <li>
                    <a href="<?php echo base_url('tasks/display/') . $task->task_id; ?>">
                        <?php echo $task->task_name; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        <ul>
    <?php else: ?>
        <p>Esse projeto não possui nenhuma trefa pendente.</p>
    <?php endif; ?>

</div>

<div class="col-xs-3 pull-right">
    <ul class='list-group'>
        <h4>Ações do Projeto</h4>
        <li class='list-group-item'><a href="<?php echo base_url('tasks/create/') . $project_data->id; ?>">Criar Tarefa</a></li>
        <li class='list-group-item'><a href="<?php echo base_url('projects/edit/') . $project_data->id; ?>">Editar Projeto</a></li>
        <li class='list-group-item'><a href="<?php echo base_url('projects/delete/') . $project_data->id; ?>">Excluir Projeto</a></li>
    </ul>
</div>