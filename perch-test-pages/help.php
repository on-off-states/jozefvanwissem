<?php include('../perch/runtime.php'); ?>

<?php perch_layout('patterns/head', array(
  'title'=>'patterns',
  'class'=>'patterns',
)); ?>

<?php perch_layout('patterns/header'); ?>

<main>
	<!-- ****************** h1/h2 issue *************** -->
	<h1 class="visuallyhidden">About/biography</h1>

<?php perch_content('Help patterns'); ?>	



</main>

<?php perch_layout('patterns/footer'); ?>