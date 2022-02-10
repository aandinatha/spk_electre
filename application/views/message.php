<?php if ($this->session->has_userdata('msg')) { ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <?php echo $this->session->flashdata('msg'); ?>
    </div>
<?php } ?>