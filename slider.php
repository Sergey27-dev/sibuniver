<?php
            $query = new WP_Query;
            $slider_posts = $query -> query('category_name=slider');
            foreach ($slider_posts as $post) {
                $post->slider_img = get_field('slider_img', $post -> ID);
            }

            ?>

            <div class="top-content">


            <div class="slider">
                <div class="slider__wrapper">
                    <div class="slider__items">
                        <?php foreach ($slider_posts as $post) :
                            ?>
                            <div class="slider__item">
                                <img src="<?= $post->slider_img ?>">
                                <span id="text-course">КУРС</span>
                                <span class="slider__headline"><?= $post->headline ?></span>
                                <span class="slider__description"><?= $post->description ?></span>
                                <a class="slider__link" href="<?= $post->course_link ?>">Подробнее</a>

                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <a class="slider__control slider__control_prev" href="#" role="button" data-slide="prev"></a>
                <a class="slider__control slider__control_next" href="#" role="button" data-slide="next"></a>
            </div>