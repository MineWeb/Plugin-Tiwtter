<?= $this->Html->css('Twitter.twitter-homepage.css') ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php if(!empty($twitter['Twitter']['name_twitter'])){ ?>
				<div class="box">
					<div class="col-md-12">
						<h2 class="mt-4 text-center twitter-title">Twitter de <?= $twitter['Twitter']['name_twitter']; ?></h2>
						<div class="twitter">
							<a class="force-overflow twitter-timeline" href="https://twitter.com/<?= $twitter['Twitter']['name_twitter']; ?>?ref_src=twsrc%5Etfw"><?= $Lang->get('HOME__TWEETS') ?></a>
							<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						</div>
					</div>
				</div>
			<?php } else { ?>
				<h2 class="text-center twitter-title"><?= $Lang->get("TWITTER__EMPTY"); ?></h2>
			<?php } ?>
		</div>
	</div>
</div>
