<h1>Projects</h1>

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
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>