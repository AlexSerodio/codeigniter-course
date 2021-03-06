<h2>Cadastrar Produto</h2>

<?php
    if($this->session->flashdata('errors')) {
        echo $this->session->flashdata('errors');
    }
?>

<?php 
    echo validation_errors("<p class='bg-danger'>");

    $attributes = array('id' => 'create_form', 'class' => 'form_horizontal');
    echo form_open('projects/create', $attributes); 
?>

        <div class="form-group">
            <?php 
                echo form_label('Nome');
                $data = array(
                    'class' => 'form-control',
                    'name' => 'project_name',
                    'placeholder' => 'Nome'
                );
                echo form_input($data);
            ?>
        </div>

        <div class="form-group">
            <?php 
                echo form_label('Descrição');
                $data = array(
                    'class' => 'form-control',
                    'name' => 'project_body',
                );
                echo form_textarea($data);
            ?>
        </div>

        <div class="form-group">
            <?php
                $data = array(
                    'class' => 'btn btn-primary',
                    'name' => 'submit',
                    'value' => 'Criar'
                );
                echo form_submit($data);
            ?>
        </div>
<?php 
    echo form_close(); 
?>