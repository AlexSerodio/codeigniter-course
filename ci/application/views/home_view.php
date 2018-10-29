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