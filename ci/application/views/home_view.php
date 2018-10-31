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

<div class="jumbotron">
    <h2 class='text-center'>Bem Vindo!</h2>
</div>

<?php if(isset($projects)): ?>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3>Projetos</h3>
        </div>

        <div class="panel-body">
            <ul class='list-group'>
                <?php foreach($projects as $project): ?>
                    <li class='list-group-item'>
                        <a href="<?php echo base_url('projects/display/') . $project->id; ?>">
                            <?php echo $project->project_name; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>
<?php if(isset($tasks)): ?>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3>Tarefas</h3>
        </div>

        <div class="panel-body">
            <ul class='list-group'>
                <?php foreach($tasks as $task): ?>
                    <li class='list-group-item'>
                        <a href="<?php echo base_url('tasks/display/') . $task->id; ?>">
                            <?php echo $task->task_name; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>