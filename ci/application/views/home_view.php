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

<h1>Test view home</h1>

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