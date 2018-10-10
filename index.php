<?php include('perch/runtime.php'); ?>

<?php perch_layout('global/global.head', array(
  'title'=>'News',
  'class'=>'home news',
)); ?>

<?php perch_layout('global/global.social_media'); ?>

<?php perch_layout('global/global.header'); ?>

<main>
	<h1 class="visuallyhidden">News</h1>
	<!-- perch content: out now headline -->
       <h2 class="_news"><a class="_outsoon" href="https://jozefvanwissem.bandcamp.com/track/bow-down-2">Out soon</a></h2>
    
<!-- 
        <h2 class="_news">&lsquo;Bow down&rsquo;.</br />
        Track from &lsquo;We adore you. You have no name.&rsquo;<br /><a class="_outsoon" href="https://jozefvanwissem.bandcamp.com/track/bow-down-2">Out soon</a></h2>
-->

	
	<!-- perch content: optional image -->
	<figure>
		<figcaption></figcaption>
		<img src="/assets/dist/img/adore_LP-cover.jpg" alt="album artwork" />
	</figure>
    <!-- <p>New album out November 10th</p> -->

</main>	

<?php perch_layout('global/global.footer'); ?>