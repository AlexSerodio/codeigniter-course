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
                    <td><a href="<?php echo base_url('projects'); ?>">View</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>