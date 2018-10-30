<div class="col-xs-9">
    <h1><?php echo $task->task_name; ?></h1>
    <p>Projeto: <?php echo $project_name; ?></p>
    <p>Criado em: <?php echo $task->date_created; ?></p>
    <p>Entrega: <?php echo $task->due_created; ?></p>

    <h4>Descrição</h4>
    <p class='task-description'>
        <?php echo $task->task_body; ?>
    </p>

</div>
<table class='table table-bordered'>
    <thead>
        <tr>
            <th>Nome do Projeto</th>
            <th>Descrição do Projeto</th>
            <th>Data de Criação</th>
        </tr>
    <thead>
    <tbody>
        <tr>
            <td>
                <div class="tas-name">
                    <?php echo $task->task_name; ?>
                </div>
                <div class="task-actions">
                    <a href="<?php echo base_url('tasks/edit/') . $task->id; ?>">Editar</a>
                    <a href="<?php echo base_url('tasks/delete/') . $task->id . '/' . $task->project_id; ?>">Excluir</a>
                </div>
            </td>
            <td><?php echo $task->task_body; ?></td>
            <td><?php echo $task->date_created; ?></td>
            <td>
                <a href="<?php echo base_url('tasks/mark_complete/') . $task->id . '/' . $task->project_id; ?>">Concluir</a>
            </td>
            <td>
                <a href="<?php echo base_url('tasks/mark_pending/') . $task->id . '/' . $task->project_id; ?>">Reativar</a>
            </td>
        </tr>
    </tbody>
</table>

<div class="col-xs-3 pull-right">
    <ul class='list-group'>
        <h4>Ações das Tarefas</h4>
        <li class='list-group-item'><a href="<?php echo base_url('tasks/edit/') . $task->id; ?>">Editar</a></li>
        <li class='list-group-item'><a href="<?php echo base_url('tasks/delete/') . $task->id . '/' . $task->project_id; ?>">Excluir</a></li>
        <li class='list-group-item'><a href="<?php echo base_url('tasks/mark_complete/') . $task->id . '/' . $task->project_id; ?>">Concluir</a></li>
        <li class='list-group-item'><a href="<?php echo base_url('tasks/mark_pending/') . $task->id . '/' . $task->project_id; ?>">Reativar</a></li>
    </ul>
</div>