<?php $this->load->view('adminlte3/global/01_head'); ?>
<?php $this->load->view('adminlte3/global/02_navbar'); ?>
<?php $this->load->view('adminlte3/global/03_sidebar'); ?>
<!-- bagian dinamis -->
<?php $this->load->view('adminlte3/'.$active_controller.'/'.$active_function); ?>
<!-- bagian dinamis -->
<?php $this->load->view('adminlte3/global/05_footer'); ?>
<?php $this->load->view('adminlte3/global/07_javascript'); ?>