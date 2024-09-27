<?php
$show = get_field('show_hero');

if (!is_admin()) {
    if (!$show) return;
}

$hero_title = get_field('hero_title') ?? 'Title here...';
$hero_description = get_field('hero_description') ?? 'Description here...';
$hero_buttons = get_field('hero_buttons');
$first_cta = $hero_buttons['lets_talk'] ?? '';
$second_cta = $hero_buttons['cta_portfolio'] ?? '';
$hero_image = get_field('hero_image');
?>


<section id="home-hero" class="hero mt-5 mb-5">
    <div class="container">

        <div class=" align-item-center">
            <div class="hero-left">
                <?php if ($hero_title <> '') : ?>
                    <h1><?php echo $hero_title; ?></h1>
                <?php endif; ?>

                <?php if ($hero_description <> '') : ?>
                    <p><?php echo $hero_description; ?></p>
                <?php endif; ?>
            </div class="">
            <?php if ($first_cta <> '') : ?>
                <a href="<?php echo $first_cta['url']; ?>"
                    class=" btn--primary mr-3"><?php echo $first_cta['title']; ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M8 10H8.01M12 10H12.01M16 10H16.01M9 16H5C3.89543 16 3 15.1046 3 14V6C3 4.89543 3.89543 4 5 4H19C20.1046 4 21 4.89543 21 6V14C21 15.1046 20.1046 16 19 16H14L9 21V16Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a> <?php endif; ?>

            <!-- <?php if ($second_cta <> '') : ?>
                <a href="<?php echo $second_cta['url']; ?>" class="btn--secondary">
                    <?php echo $second_cta['title']; ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.2929 3.29289C10.6834 2.90237 11.3166 2.90237 11.7071 3.29289L17.7071 9.29289C18.0976 9.68342 18.0976 10.3166 17.7071 10.7071L11.7071 16.7071C11.3166 17.0976 10.6834 17.0976 10.2929 16.7071C9.90237 16.3166 9.90237 15.6834 10.2929 15.2929L14.5858 11L3 11C2.44772 11 2 10.5523 2 10C2 9.44771 2.44772 9 3 9H14.5858L10.2929 4.70711C9.90237 4.31658 9.90237 3.68342 10.2929 3.29289Z" fill="#6B7280" />
                    </svg>
                </a>
            <?php endif; ?> -->


        </div>
        <div class="hero-right">
            <?php if ($hero_image <> '') : ?>
                <img src="<?php echo $hero_image['url']; ?>" alt="?php echo $hero_image">
            <?php endif; ?>
        </div>
    </div>


    </div>
</section>