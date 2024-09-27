<?php
$show = get_field('show_portfolio');

// Перевіряємо, чи показувати блок портфоліо
if (!is_admin() && !$show) {
    echo 'Portfolio section is disabled.';
    return;
}

$portfolio_title = get_field('portfolio_title') ?? 'Title here...';
$portfolio_description = get_field('portfolio_description') ?? 'Description here...';
$cta_portfolio = get_field('cta_portfolio');

// Витягуємо дані великої групи
$portfolio_group = get_field('portfolio_group');

// Перевірка наявності великої групи
if ($portfolio_group) {

    // Доступ до полів для картки 1
    $portfolio_card_1 = $portfolio_group['portfolio_card'];
    $cta_project_link_1 = $portfolio_card_1['cta_project_link'] ?? array('url' => '#', 'target' => '_self');
    $project_image_1 = $portfolio_card_1['project_image'] ?? null;
    $project_name_1 = $portfolio_card_1['project_name'] ?? 'Name Project...';
    $project_description_1 = $portfolio_card_1['project_description'] ?? 'Description Project...';

    // Доступ до полів для картки 2
    $portfolio_card_2 = $portfolio_group['portfolio_card_2'];
    $cta_project_link_2 = $portfolio_card_2['cta_project_link_2'] ?? array('url' => '#', 'target' => '_self');
    $project_image_2 = $portfolio_card_2['project_image_2'] ?? null;
    $project_name_2 = $portfolio_card_2['project_name_2'] ?? 'Name Project...';
    $project_description_2 = $portfolio_card_2['project_description_2'] ?? 'Description Project...';

    // Доступ до полів для картки 3
    $portfolio_card_3 = $portfolio_group['portfolio_card_3'];
    $cta_project_link_3 = $portfolio_card_3['cta_project_link_3'] ?? array('url' => '#', 'target' => '_self');
    $project_image_3 = $portfolio_card_3['project_image_3'] ?? null;
    $project_name_3 = $portfolio_card_3['project_name_3'] ?? 'Name Project...';
    $project_description_3 = $portfolio_card_3['project_description_3'] ?? 'Description Project...';

    // Доступ до полів для картки 4
    $portfolio_card_4 = $portfolio_group['portfolio_card_4'];
    $cta_project_link_4 = $portfolio_card_4['cta_project_link_4'] ?? array('url' => '#', 'target' => '_self');
    $project_image_4 = $portfolio_card_4['project_image_4'] ?? null;
    $project_name_4 = $portfolio_card_4['project_name_4'] ?? 'Name Project...';
    $project_description_4 = $portfolio_card_4['project_description_4'] ?? 'Description Project...';
}
?>

<section class="portfolio-block">
    <div class="container d-block">
        <div class="portfolio-header">
            <div class="portfolio-txt">
                <h2><?php echo esc_html($portfolio_title); ?></h2>
                <p><?php echo esc_html($portfolio_description); ?></p>
            </div>
            <div class="portfolio-btn">
                <?php if ($cta_portfolio) : ?>
                    <a href="<?php echo esc_url($cta_portfolio['url']); ?>" class="btn--secondary">
                        <?php echo esc_html($cta_portfolio['title']); ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.2929 3.29289C10.6834 2.90237 11.3166 2.90237 11.7071 3.29289L17.7071 9.29289C18.0976 9.68342 18.0976 10.3166 17.7071 10.7071L11.7071 16.7071C11.3166 17.0976 10.6834 17.0976 10.2929 16.7071C9.90237 16.3166 9.90237 15.6834 10.2929 15.2929L14.5858 11L3 11C2.44772 11 2 10.5523 2 10C2 9.44771 2.44772 9 3 9H14.5858L10.2929 4.70711C9.90237 4.31658 9.90237 3.68342 10.2929 3.29289Z" fill="#6B7280" />
                        </svg>
                    </a>
                <?php endif; ?>
            </div>
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
        </div>
    </div>
</section>