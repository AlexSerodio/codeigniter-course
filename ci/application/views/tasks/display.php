<h1>Task Display View</h1>

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
                    <a href="<?php echo base_url('tasks/delete/') . $task->id . '/' . $task->project_id; ?>">Remover</a>
                </div>
            </td>
            <td><?php echo $task->task_body; ?></td>
            <td><?php echo $task->date_created; ?></td>
            <td><a href="<?php echo base_url(''); ?>">View</a></td>
        </tr>
    </tbody>
</table>