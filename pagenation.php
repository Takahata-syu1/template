<div class="pagenation pagenum">

<?php $maxpage = $wp_query->max_num_pages;
$current = $paged;
if(!$current) {$current = 1;} ?>

<?php $sidenum = 3;
$shownum = $sidenum * 3 + 1;

if($current > $sidenum &&
   $current < $maxpage-$sidenum+1){
	$start = $current - $sidenum;
	$end = $current + $sidenum;
} elseif($current <= $sidenum) {
	$start = 1;
	$end = min($shownum,$maxpage);
} else {
	$start = max($maxpage-$shownum+1,1);
	$end = $maxpage;
} ?>

<?php previous_posts_link('&lt;'); ?>

<?php for($i=$start; $i <= $end; $i++): ?>
	<?php if($i == $current): ?>
	<span><?php echo $i; ?></span>
	<?php else: ?>
	<a href="<?php echo get_pagenum_link($i); ?>"><?php echo $i; ?></a>
	<?php endif; ?>
<?php endfor; ?>

<?php next_posts_link('&gt;'); ?>

</div>