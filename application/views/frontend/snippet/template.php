<!DOCTYPE html>
<html>
<?php 
$this->load->view('frontend/snippet/header');?>
<body>
<?php
$this->load->view('frontend/snippet/navbar');
if(!empty($isi)){$this->load->view($isi);}
$this->load->view('frontend/snippet/footer');
?>
</body>
</html>
