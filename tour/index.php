<?php include('../perch/runtime.php'); ?>

<?php perch_layout('global/global.head', array(
  'title'=>'Tour dates',
  'class'=>'tour',
)); ?>

<?php perch_layout('global/global.social_media'); ?>

<?php perch_layout('global/global.header'); ?>
<main>
	<h1 class="visuallyhidden">Tour dates</h1>
	<!-- 
          <li itemscope><time itemprop="date" datetime="2015-01-10">Jan 10</time>:<a itemprop="url" href="http://www.cafeoto.co.uk/"><span itemprop="name">Cafe Oto</span></a></li>

      -->
  <?php perch_content('Tour dates'); ?>

  <!-- static content   
      <ol class="c-event-list">
      	<li>jan 13: Fgo Barbara, Paris</li>
      	<li>feb 3: St Wojciech Church, Poznan</li>
      	<li>feb 4: Kulturhauz, Torun</li>
      	<li>feb 5: Stary Klasztor, Wroclaw</li>
        <li>feb 6: Bar Studio, Warsaw</li>
      	<li>feb 7: Nuuk, Hradec Králové</li>
      	<li>feb 8: Jazz Tibet Club,Olomouc</li>
      	<li>feb 9: Kino Úsmev,Košice</li>
      	<li>feb 10: Záhrada Banská, Bystrica</li>
      	<li>feb 11: Stanica, Žilina</li>
      	<li>feb 12: Stimul Night, Prague</li>
        <li>feb 20: Chiostro di Villa Vogel, Florence</li>
        <li>feb 22: Biko, Milan</li> 
        <li>feb 21: About, Venice</li>
        <li>feb 23: Cineteca di Bologna, Bologna</li>
      	<li>feb 24: Angelo Mai, Rome</li>
      	<li>march 10: Moscow Hall, Moscow</li>
      	<li>march 11: Church of St Anne, St Petersburg</li>
      </ol>
	-->
</main>

<?php perch_layout('global/global.footer'); ?>