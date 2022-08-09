<?php
$achievements = get_field('our_achievements', 'options');
?>
<?php if (!empty($achievements)) : ?>
	<section class="dt-progress">
		<div class="dt-container">
			<div class="dt-progress__inner">
				<h2 class="dt-articl-title dt-progress__title">Наши достижения</h2>
				<ul class="dt-progress__list">
					<?php foreach ($achievements as $item) : ?>
						<li class="dt-progress__item">
							<img class="dt-progress__image" src="<?= $item['sizes']['medium'] ?>" alt="image">
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php
$about = get_field('about', 'options');
$socials = get_field('socials', 'options');
?>
<section class="dt-about">
	<div class="dt-container">
		<div class="dt-about__inner">
			<div class="dt-about__info">
				<h2 class="dt-articl-title dt-about__title">О нас</h2>
				<div class="dt-about__text">
					<?= $about['text'] ?>
				</div>
				<?php if (!empty($socials)) : ?>
					<div class="dt-about__socials">
						<?php foreach ($socials as $item) : ?>
							<a class="dt-about__socials-link dt-about__socials-vk" href="<?= $item['link'] ?>">
								<img src="<?= $item['icon']['sizes']['medium'] ?>" alt="vk">
							</a>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="dt-about__image">
				<img src="<?= $about['img']['url'] ?>" alt="О нас">
			</div>
		</div>
	</div>
</section>
<?php
$certificates = get_field('certificates', 'options');
?>
<section class="dt-certificates">
	<div class="dt-container">
		<div class="dt-certificates__inner">
			<h2 class="dt-articl-title dt-certificates__title">Лицензии</h2>
			<div class="dt-certificates__text">
				<?= $certificates['title'] ?>
			</div>
			<div class="swiper dt-certificates__slider">
				<div class="swiper-wrapper">
					<?php foreach ($certificates['list'] as $item) : ?>
						<a data-fancybox="gallery" href="<?= $item['url'] ?>" class="swiper-slide dt-certificates__slide">
							<img src="<?= $item['sizes']['medium'] ?>" alt="image">
						</a>
					<?php endforeach; ?>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		</div>
	</div>
</section>