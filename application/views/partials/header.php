<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>scoul uploads</title>
<!-- CSS -->
<link rel="stylesheet" href="<?=base_url('assets/css/page.css')?>">
</head>
<body>
<div id="container">
<div id="header">
<h1>SCOUL-ERP UPLOADS</h1>
</div>
<div id="body">
<div id="left_body">
<ul>
<li id=""><a href="<?=base_url("welcome/index")?>/<?=$this->session->userdata('emp_code')?>">Upload employee photo</a></li>
<li><a href="<?=base_url("welcome/viewupload")?>/<?=$this->session->userdata('emp_code')?>">View employee photo</a></li>

</ul>
</div>
<?php $this->view($content); ?>