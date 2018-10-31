<h2>Cadastro</h2>

<?php
    if($this->session->flashdata('errors')) {
        echo $this->session->flashdata('errors');
    }
?>

<?php 
    echo validation_errors("<p class='bg-danger'>");

    $attributes = array('id' => 'register_form', 'class' => 'form_horizontal');
    echo form_open('users/register', $attributes); 
?>

        <div class="form-group">
            <?php 
                echo form_label('Nome');
                $data = array(
                    'class' => 'form-control',
                    'name' => 'first_name',
                    'placeholder' => 'Nome',
                    'value' => set_value('first_name')
                );
                echo form_input($data);
            ?>
        </div>

        <div class="form-group">
            <?php 
                echo form_label('Sobrenome');
                $data = array(
                    'class' => 'form-control',
                    'name' => 'last_name',
                    'placeholder' => 'Sobrenme',
                    'value' => set_value('last_name')
                );
                echo form_input($data);
            ?>
        </div>

        <div class="form-group">
            <?php 
                echo form_label('Email');
                $data = array(
                    'class' => 'form-control',
                    'name' => 'email',
                    'placeholder' => 'Email',
                    'value' => set_value('email')
                );
                echo form_input($data);
            ?>
        </div>

        <div class="form-group">
            <?php 
                echo form_label('Usuário');
                $data = array(
                    'class' => 'form-control',
                    'name' => 'username',
                    'placeholder' => 'Nome de usuário',
                    'value' => set_value('username')
                );
                echo form_input($data);
            ?>
        </div>

        <div class="form-group">
            <?php 
                echo form_label('Senha');
                $data = array(
                    'class' => 'form-control',
                    'name' => 'password',
                    'placeholder' => 'Senha do usuário'
                );
                echo form_password($data); 
            ?>
        </div>

        <div class="form-group">
            <?php 
                echo form_label('Confirmar Senha');
                $data = array(
                    'class' => 'form-control',
                    'name' => 'confirm_password',
                    'placeholder' => 'Senha do usuário'
                );
                echo form_password($data);
            ?>
        </div>

        <div class="form-group">
            <?php
                $data = array(
                    'class' => 'btn btn-primary',
                    'name' => 'submit',
                    'value' => 'Cadastrar'
                );
                echo form_submit($data);
            ?>
        </div>
<?php 
    echo form_close(); 
?>