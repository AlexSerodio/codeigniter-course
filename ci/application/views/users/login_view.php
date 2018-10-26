<h2>Login form</h2>

<?php $attributes = array('id' => 'login_form', 'class' => 'form_horizontal'); ?>

<?php echo form_open('users/login', $attributes); ?>

    <div class="form-group">
        <?php echo form_label('Usuário') ?>

        <?php 
            $data = array(
                'class' => 'form-control',
                'name' => 'username',
                'placeholder' => 'Nome de usuário'
            );
        ?>

        <?php echo form_input($data) ?>
    </div>

    <div class="form-group">
        <?php echo form_label('Senha') ?>

        <?php 
            $data = array(
                'class' => 'form-control',
                'name' => 'password',
                'placeholder' => 'Senha do usuário'
            );
        ?>

        <?php echo form_password($data) ?>
    </div>

    <div class="form-group">
        <?php 
            $data = array(
                'class' => 'btn btn-primary',
                'name' => 'submit',
                'value' => 'Entrar'
            );
        ?>

        <?php echo form_submit($data) ?>
    </div>
<?php echo form_close(); ?>