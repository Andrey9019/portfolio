<?php
$show = get_field('show_projects');

// Перевіряємо, чи показувати блок 
if (!is_admin() && !$show) {
    echo 'Projects section is disabled.';
    return;
}

$projects_title = get_field('projects_title') ?? 'Title here...';
$projects_description = get_field('projects_description') ?? 'Description here...';

// Витягуємо дані великої групи
$projects_group = get_field('projects_group');


// Перевірка наявності великої групи
if ($projects_group) {

    // Доступ до полів для картки 1
    $portfolio_card_1 = $projects_group['portfolio_card'];
    $cta_project_link_1 = $portfolio_card_1['cta_project_link'] ?? array('url' => '#', 'target' => '_self');
    $project_image_1 = $portfolio_card_1['project_image'] ?? null;
    $project_name_1 = $portfolio_card_1['project_name'] ?? 'Name Project...';
    $project_description_1 = $portfolio_card_1['project_description'] ?? 'Description Project...';

    // Доступ до полів для картки 2
    $portfolio_card_2 = $projects_group['portfolio_card_2'];
    $cta_project_link_2 = $portfolio_card_2['cta_project_link_2'] ?? array('url' => '#', 'target' => '_self');
    $project_image_2 = $portfolio_card_2['project_image_2'] ?? null;
    $project_name_2 = $portfolio_card_2['project_name_2'] ?? 'Name Project...';
    $project_description_2 = $portfolio_card_2['project_description_2'] ?? 'Description Project...';

    // Доступ до полів для картки 3
    $portfolio_card_3 = $projects_group['portfolio_card_3'];
    $cta_project_link_3 = $portfolio_card_3['cta_project_link_3'] ?? array('url' => '#', 'target' => '_self');
    $project_image_3 = $portfolio_card_3['project_image_3'] ?? null;
    $project_name_3 = $portfolio_card_3['project_name_3'] ?? 'Name Project...';
    $project_description_3 = $portfolio_card_3['project_description_3'] ?? 'Description Project...';

    // Доступ до полів для картки 4
    $portfolio_card_4 = $projects_group['portfolio_card_4'];
    $cta_project_link_4 = $portfolio_card_4['cta_project_link_4'] ?? array('url' => '#', 'target' => '_self');
    $project_image_4 = $portfolio_card_4['project_image_4'] ?? null;
    $project_name_4 = $portfolio_card_4['project_name_4'] ?? 'Name Project...';
    $project_description_4 = $portfolio_card_4['project_description_4'] ?? 'Description Project...';

    // Доступ до полів для картки 5
    $portfolio_card_5 = $projects_group['portfolio_card_5'];
    $cta_project_link_5 = $portfolio_card_5['cta_project_link_5'] ?? array('url' => '#', 'target' => '_self');
    $project_image_5 = $portfolio_card_5['project_image_5'] ?? null;
    $project_name_5 = $portfolio_card_5['project_name_5'] ?? 'Name Project...';
    $project_description_5 = $portfolio_card_5['project_description_5'] ?? 'Description Project...';

    // Доступ до полів для картки 6
    // $portfolio_card_6 = $projects_group['portfolio_card_6'];
    // $cta_project_link_6 = $portfolio_card_6['cta_project_link_6'] ?? array('url' => '#', 'target' => '_self');
    // $project_image_6 = $portfolio_card_6['project_image_6'] ?? null;
    // $project_name_6 = $portfolio_card_6['project_name_6'] ?? 'Name Project...';
    // $project_description_6 = $portfolio_card_6['project_description_6'] ?? 'Description Project...';
}

?>
<section class="portfolio-block">
    <div class="container d-block">

        <div class="portfolio-txt">
            <h2><?php echo esc_html($projects_title); ?></h2>
            <p><?php echo esc_html($projects_description); ?></p>
        </div>
        <div class="portfolio-cards ">
            <!-- Portfolio Card 1 -->
            <div class="col-md-4  ">
                <a href="<?php echo esc_url($cta_project_link_1['url']); ?>" target="<?php echo esc_attr($cta_project_link_1['target']); ?>" class="card-link">
                    <div class="portfolio-card">
                        <div class="card ">
                            <?php if ($project_image_1) : ?>
                                <img src="<?php echo esc_url($project_image_1['url']); ?>" alt="<?php echo esc_attr($project_image_1['alt']); ?>" class="card-img">
                            <?php else : ?>
                                <img src="" alt="Placeholder Image" class="card-img">
                            <?php endif; ?>
                            <div>
                                <h4><?php echo esc_html($project_name_1); ?></h4>
                                <p><?php echo esc_html($project_description_1); ?></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Portfolio Card 2 -->
            <div class="col-md-4  ">
                <a href="<?php echo esc_url($cta_project_link_2['url']); ?>" target="<?php echo esc_attr($cta_project_link_2['target']); ?>" class="card-link">
                    <div class="portfolio-card">
                        <div class="card">
                            <?php if ($project_image_2) : ?>
                                <img src="<?php echo esc_url($project_image_2['url']); ?>" alt="<?php echo esc_attr($project_image_2['alt']); ?>" class="card-img">
                            <?php else : ?>
                                <img src="" alt="Placeholder Image" class="card-img">
                            <?php endif; ?>
                            <div>
                                <h4><?php echo esc_html($project_name_2); ?></h4>
                                <p><?php echo esc_html($project_description_2); ?></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Portfolio Card 3 -->
            <div class="col-md-4  ">
                <a href="<?php echo esc_url($cta_project_link_3['url']); ?>" target="<?php echo esc_attr($cta_project_link_3['target']); ?>" class="card-link">
                    <div class="portfolio-card">
                        <div class="card">
                            <?php if ($project_image_3) : ?>
                                <img src="<?php echo esc_url($project_image_3['url']); ?>" alt="<?php echo esc_attr($project_image_3['alt']); ?>" class="card-img">
                            <?php else : ?>
                                <img src="" alt="Placeholder Image" class="card-img">
                            <?php endif; ?>
                            <div>
                                <h4><?php echo esc_html($project_name_3); ?></h4>
                                <p><?php echo esc_html($project_description_3); ?></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Portfolio Card 4 -->
            <div class="col-md-4  ">
                <a href="<?php echo esc_url($cta_project_link_4['url']); ?>" target="<?php echo esc_attr($cta_project_link_4['target']); ?>" class="card-link">
                    <div class="portfolio-card">
                        <div class="card">
                            <?php if ($project_image_4) : ?>
                                <img src="<?php echo esc_url($project_image_4['url']); ?>" alt="<?php echo esc_attr($project_image_4['alt']); ?>" class="card-img">
                            <?php else : ?>
                                <img src="" alt="Placeholder Image" class="card-img">
                            <?php endif; ?>
                            <div>
                                <h4><?php echo esc_html($project_name_4); ?></h4>
                                <p><?php echo esc_html($project_description_4); ?></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Portfolio Card 5 -->
            <div class="col-md-4  ">
                <a href="<?php echo esc_url($cta_project_link_5['url']); ?>" target="<?php echo esc_attr($cta_project_link_5['target']); ?>" class="card-link">
                    <div class="portfolio-card">
                        <div class="card">
                            <?php if ($project_image_5) : ?>
                                <img src="<?php echo esc_url($project_image_5['url']); ?>" alt="<?php echo esc_attr($project_image_5['alt']); ?>" class="card-img">
                            <?php else : ?>
                                <img src="" alt="Placeholder Image" class="card-img">
                            <?php endif; ?>
                            <div>
                                <h4><?php echo esc_html($project_name_5); ?></h4>
                                <p><?php echo esc_html($project_description_5); ?></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Portfolio Card 6 -->
            <!-- <div class="col-md-4  ">
                <a href="<?php echo esc_url($cta_project_link_6['url']); ?>" target="<?php echo esc_attr($cta_project_link_6['target']); ?>" class="card-link">
                    <div class="portfolio-card">
                        <div class="card">
                            <?php if ($project_image_6) : ?>
                                <img src="<?php echo esc_url($project_image_6['url']); ?>" alt="<?php echo esc_attr($project_image_6['alt']); ?>" class="card-img">
                            <?php else : ?>
                                <img src="" alt="Placeholder Image" class="card-img">
                            <?php endif; ?>
                            <div>
                                <h4><?php echo esc_html($project_name_6); ?></h4>
                                <p><?php echo esc_html($project_description_6); ?></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div> -->

        </div>
    </div>
</section>