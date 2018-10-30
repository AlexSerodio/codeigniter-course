<h2>Editar Tarefa</h2>

<?php
    if($this->session->flashdata('errors')) {
        echo $this->session->flashdata('errors');
    }
?>

<?php 
    echo validation_errors("<p class='bg-danger'>");

    $attributes = array('id' => 'edit_task_form', 'class' => 'form_horizontal');
    echo form_open('tasks/edit/' . $this->uri->segment(3), $attributes); 
?>

        <div class="form-group">
            <?php 
                echo form_label('Nome');
                $data = array(
                    'class' => 'form-control',
                    'name' => 'task_name',
                    'value' => $task->task_name
                );
                echo form_input($data);
            ?>
        </div>

        <div class="form-group">
            <?php 
                echo form_label('Descrição');
                $data = array(
                    'class' => 'form-control',
                    'name' => 'task_body',
                    'value' => $task->task_body
                );
                echo form_textarea($data);
            ?>
        </div>

        <div class="form-group">
            <?php 
                $data = array(
                    'class' => 'form-control',
                    'name' => 'due_date',
                    'type' => 'date',
                    'value' => $task->due_date
                );
                echo form_input($data);
            ?>
        </div>

        <div class="form-group">
            <?php
                $data = array(
                    'class' => 'btn btn-primary',
                    'name' => 'submit',
                    'value' => 'Alterar'
                );
                echo form_submit($data);
            ?>
        </div>
<?php 
    echo form_close(); 
?>