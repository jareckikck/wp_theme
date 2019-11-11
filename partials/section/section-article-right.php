<?php

$title = get_field('article_right_title');
$content = get_field('article_right_content');
$image_ID = get_field('article_right_img_ID');
?>
<section id="article" class="">
	<div class="container p0 article">	
		<div class="cell-6 pd-h-sm cell-m-12 article__video">			
			<?= wp_get_attachment_image( $image_ID, 'article-img' ); ?>
		</div>

		<div class="cell-6 pd-h-sm cell-m-12 article__txt">				
				<h2 class="article__txt--title"> <?= $title ;?></h2>
				<div class="article__txt--content wp-content"> <?= $content ;?></div>
		</div>
		
	</div>
</section>