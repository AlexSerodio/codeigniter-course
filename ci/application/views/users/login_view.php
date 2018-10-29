<?php 
    if(!$this->session->userdata('logged')) { 
?>
        <h2>Login form</h2>

        <?php
            if($this->session->flashdata('errors')) {
                echo $this->session->flashdata('errors');
            }
        ?>

        <?php 
            $attributes = array('id' => 'login_form', 'class' => 'form_horizontal');
            echo form_open('users/login', $attributes); 
        ?>

            <div class="form-group">
                <?php 
                    echo form_label('Usuário');
                    $data = array(
                        'class' => 'form-control',
                        'name' => 'username',
                        'placeholder' => 'Nome de usuário'
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
                        'value' => 'Entrar'
                    );
                    echo form_submit($data);
                ?>
            </div>
        <?php echo form_close(); ?>

<?php 
    } else {
        echo "Logout";
    }
?>