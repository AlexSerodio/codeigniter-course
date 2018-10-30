<h1>Projetos</h1>

<p class='bg-success'> 
    <?php 
        if($this->session->flashdata('project_created')) {
            echo $this->session->flashdata('project_created');
        }

        if($this->session->flashdata('project_updated')) {
            echo $this->session->flashdata('project_updated');
        }

        if($this->session->flashdata('project_deleted')) {
            echo $this->session->flashdata('project_deleted');
        }

        if($this->session->flashdata('task_updated')) {
            echo $this->session->flashdata('task_updated');
        }

        if($this->session->flashdata('task_deleted')) {
            echo $this->session->flashdata('task_deleted');
        }
    ?>
</p>

<a class='btn btn-primary pull-right' href="<?php echo base_url('projects/create'); ?>">Criar Projeto</a>
<table class='table table-hover'>
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
                <?php echo "<td><a href='". base_url('projects/display/') . $project->id ."'>" . $project->project_name . "</td>"; ?>
                <?php echo "<td>" . $project->project_body . "</td>"; ?>
            
                <td><a class='btn btn-danger' href="<?php echo base_url('projects/delete/') . $project->id; ?>"><span class='glyphicon glyphicon-remove'></span></a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>