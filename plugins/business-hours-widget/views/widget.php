<!-- This file is used to markup the public-facing widget. -->

<p class="widget-hours-text">

	<?php if ( strlen( trim ( $monday_friday ) ) > 0 ) : ?>
		<span class="day-of-week">Monday-Friday: </span> <?php echo $monday_friday; ?>
	<?php endif; ?>
	
</p>

<p class="widget-hours-text">

	<?php if ( strlen( trim ( $saturday ) ) > 0 ) : ?>
		<span class="day-of-week">Saturday: </span> <?php echo $saturday; ?>
	<?php endif; ?>

</p>

<p class="widget-hours-text">

	<?php if ( strlen( trim ( $sunday ) ) > 0 ) : ?>
		<span class="day-of-week">Sunday: </span> <?php echo $sunday ?>
	<?php endif; ?>
	
</p>