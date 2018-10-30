<p class='bg-success'>
    <?php 
        if($this->session->flashdata('login_success')) {
            echo $this->session->flashdata('login_success');
        }

        if($this->session->flashdata('no_access')) {
            echo $this->session->flashdata('no_access');
        }

        if($this->session->flashdata('user_registered')) {
            echo $this->session->flashdata('user_registered');
        }

        if($this->session->flashdata('login_fail')) {
            echo $this->session->flashdata('login_fail');
        }
    ?>
</p>

<?php if(!isset($projects)): ?>
    <div class="jumbotron">
        <h2 class='text-center'>Bem Vindo!</h2>
    </div>
<?php else: ?>
    <h1>Projetos</h1>
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>
                    Nome do Projeto
                </th>
                <th>
                    Descrição do Projeto
                </th>
            </tr>
        <thead>
        <tbody>
            <?php foreach($projects as $project): ?>
                <tr>
                    <td><?php echo $project->project_name; ?></td>
                    <td><?php echo $project->project_body; ?></td>
                    <td><a href="<?php echo base_url('projects/display/') . $project->id; ?>">View</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>

<?php if(isset($tasks)): ?>
    <h1>Tarefas</h1>
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>
                    Nome da Tarefa
                </th>
                <th>
                    Descrição da Tarefa
                </th>
            </tr>
        <thead>
        <tbody>
            <?php foreach($tasks as $task): ?>
                <tr>
                    <td><?php echo $task->task_name; ?></td>
                    <td><?php echo $task->task_body; ?></td>
                    <td><a href="<?php echo base_url('tasks/display/') . $project->id; ?>">View</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>