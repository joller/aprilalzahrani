<?php require_once('_html_head.php') ?>
<div class="contact"><a href='/contact.php'>Contact</a></div>
<?php require_once('header.php') ?>
</div>
<div class="wrap">
	<div id="container">
		<div id="refresh"></div>
		<ul id="filter">
			<li><a href="#" class="active" data-filter="item"></a></li>
			<li><a href="#"  id="startbtn" data-filter="bookone">Book I</a></li>
			<li><a href="#" data-filter="booktwo">Book II</a></li>
			<li><a href="#" data-filter="bookthree">Book III</a></li>
		</ul>
		<?php require_once('gallery.php') ?>
		<?php require_once('galleryTwo.php') ?>
		<?php require_once('galleryThree.php') ?>


	</div>
</div>
</div>
</body>
</html>