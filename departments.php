<?php
function university_hub_add_front_page_home_sections() {

$section_status = apply_filters('university_hub_filter_front_page_home_sections_status', false);

if (true !== $section_status) {
    return;
}

$active_sections = university_hub_get_active_homepage_sections();

if (!empty($active_sections)) {
    ?>
    <div class="distance-learning">
        <div class="container">
            <h2>Дистанционное обучение</h2>
            <p>
                Автономная некоммерческая организация дополнительного профессионального образования Сибирский Корпоративный Университет осуществляет образовательную деятельность по множеству различных направлений профессиональной переподготовки и повышении квалификации.
            </p>
        </div>
    </div>
    <div class="departments">
        <div class="container">
            <h2>Факультеты</h2>
            <div>
                <?php
                $categories = get_categories('child_of=9');
                foreach ($categories as $cat) :
                    if($cat->term_id != 47){
                    $cat_param = array(
                        'numberposts' => '999',
                        'category' => $cat->term_id
                    );

                    $my_posts = get_posts($cat_param);
                    ?>
                    <div class="category-<?=$cat->term_id?>">
                        <h3><a href="/category/<?php print $cat->category_nicename; ?>"><?php print $cat->name; ?></a></h3>
                        <div class="wrap-list-depart">
                            <ul>
                                <?php foreach ($my_posts as $post) :
                                    ?>
                                    <li>
                                        <a href="<?= get_permalink( $post) ?>"><?php print $post->post_title; ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <span class="open-wrap-list-depart"></span>
                    </div>
                
                <?php } endforeach; 
                foreach ($categories as $cat) :
                    if($cat->term_id == 47){
                    $cat_param = array(
                        'numberposts' => '999',
                        'category' => $cat->term_id
                    );

                    $my_posts = get_posts($cat_param);
                    ?>
                    <div class="category-<?=$cat->term_id?>">
                        <h3><a href="/category/<?php print $cat->category_nicename; ?>"><?php print $cat->name; ?></a></h3>
                        <div class="wrap-list-depart">
                            <ul>
                                <?php foreach ($my_posts as $post) :
                                    ?>
                                    <li>
                                        <a href="<?= get_permalink( $post) ?>"><?php print $post->post_title; ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <span class="open-wrap-list-depart"></span>
                    </div>
                
                <?php } endforeach; ?>
            </div>
        </div>
    </div>
    <?php
    echo '<div id="front-page-home-sections" class="widget-area">';
    foreach ($active_sections as $section) {
        get_template_part($section['template']);
    }
    echo '</div><!-- #front-page-home-sections -->';
    }
}




