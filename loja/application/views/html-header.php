<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    
    <?php
      echo meta(array('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0')) .
      link_tag('assets/css/bootstrap.min.css') .
      link_tag('assets/css/bootstrap-reponsive.min.css') .
      link_tag('assets/css/estilos.css');
    ?>
    <script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script> 
    <script src="<?php echo base_url('assets/js/jquery.mask.js');?>"></script>   
</head>
<body>
