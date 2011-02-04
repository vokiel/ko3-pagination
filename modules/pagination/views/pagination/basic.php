<p class="pagination">

	<?php if ($first_page !== FALSE): ?>
		<a href="<?php echo HTML::chars($page->url($first_page)) ?>" rel="first" class="first"><?php echo __('First') ?></a>
	<?php else: ?>
		<span><?php echo __('First') ?></span>
	<?php endif ?>

	<?php if ($previous_page !== FALSE): ?>
		<a href="<?php echo HTML::chars($page->url($previous_page)) ?>" rel="prev" class="prev"><?php echo __('Previous') ?></a>
	<?php else: ?>
		<span><?php echo __('Previous') ?></span>
	<?php endif ?>

	<?php for ($i = 1; $i <= $total_pages; $i++): ?>

		<?php if ($i == $current_page): ?>
			<strong><?php echo $i ?></strong>
		<?php else: ?>
			<a href="<?php echo HTML::chars($page->url($i)) ?>"><?php echo $i ?></a>
		<?php endif ?>

	<?php endfor ?>

	<?php if ($next_page !== FALSE): ?>
		<a href="<?php echo HTML::chars($page->url($next_page)) ?>" rel="next" class="next"><?php echo __('Next') ?></a>
	<?php else: ?>
		<span><?php echo __('Next') ?></span>
	<?php endif ?>

	<?php if ($last_page !== FALSE): ?>
		<a href="<?php echo HTML::chars($page->url($last_page)) ?>" rel="last" class="last"><?php echo __('Last') ?></a>
	<?php else: ?>
		<span><?php echo __('Last') ?></span>
	<?php endif ?>

</p><!-- .pagination -->