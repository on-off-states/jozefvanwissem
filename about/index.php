<?php include('../perch/runtime.php'); ?>

<?php perch_layout('global/global.head', array(
  'title'=>'About',
  'class'=>'about',
)); ?>

<?php perch_layout('global/global.social_media'); ?>

<?php perch_layout('global/global.header'); ?>

<main>
	<h1 class="visuallyhidden">About/biography</h1>
<!-- static mark up -->
<!-- new bio text october 2018 ------------------------------
<p>To get into Jozef Van Wissem’s world is to surrender to the inevitability—and timelessness—of a strange  music created at its own pace, in a manner wholly of its creator’s making. He sets the listener into a private world, looking out through a glass darkly, such is the intense quality of the music. Brevity, simplicity, directness is the key. (Quietus)</p>
 
<p>Van Wissem is ‘both an avant-garde composer and a baroque lutenist, and thus no stranger to dichotomy’ (New York Times). He has been ‘pushing the lute’s agenda out of the academy and into more accessible circles’ (Pitchfork). He’s performed over 1200 solo lute concerts in churches and at concert venues around the world, including prestigious rock festivals like ATP and Primavera Sound, playing his all black, one-of-a-kind baroque lute custom build for him.</p>
<p>The titles of his works  often have a Christian-mystical appeal. Van Wissem moved to New York in 1993 and studied lute with Pat O’Brien. In 2013 he  won the Cannes Soundtrack Award for best score at the Cannes Film Festival for <cite>Only Lovers Left Alive</cite>.</p>
<p>Van Wissem has released three records with the filmdirector Jim Jarmusch.  He was commissioned to compose a sound piece for Hans Holbein’s painting <cite>The Ambassadors</cite> (1533) by the National Gallery. In December 2017 he was invited to perform the madrigal depicted in Caravaggio’s painting <cite>.the Lute Player </cite> (1596) at the Hermitage museum. His  new record, features this Renaissance work, entitled <cite>You Know That I Love You</cite>. The record’s title <cite>We Adore You, You Have No Name</cite> comes from the <cite>Secret of Secrets</cite> book, a description of worship of the nameless all-inclusive God.</p> 
-->
<?php 
perch_content('Biography'); 
// perch_content('Bio text'); 
?>

</main>

<?php perch_layout('global/global.footer'); ?>