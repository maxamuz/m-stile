<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package npstyle
 */

get_header();
?>

<div id="carouselNpStyleCaptions" class="carousel slide">
    <!-- <div class=" carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div> -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo get_template_directory_uri() . '/img/fon33.jpg' ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <h3>Натяжные потолки <span class="carousel-caption-header">в Минске <br>с установкой</span></h3>
                <p class="carousel-caption-price">от <span>20 <span
                            class="carousel-caption-currency">руб/м2</span></span>
                </p>
                <div class="carousel-caption-description">
                    <p class="carousel-caption-description-text">Узнайте точную стоимость вашего проекта</p>
                    <a href="#bid" class="carousel-caption-description-link">Узнать стоимость</a>
                </div>

            </div>
        </div>
        <div class="carousel-item">
            <img src="<?php echo get_template_directory_uri() . '/img/potoplk1-fon.png' ?>" class="d-block w-100"
                alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h3>Натяжные потолки <span class="carousel-caption-header">в Минске <br>с установкой</span></h3>
                <p class="carousel-caption-price">от <span>479 <span
                            class="carousel-caption-currency">руб/м2</span></span>
                </p>
                <div class="carousel-caption-description">
                    <p class="carousel-caption-description-text">Узнайте точную стоимость вашего проекта</p>
                    <a href="#" class="carousel-caption-description-link">Узнать стоимость</a>
                </div>

            </div>
        </div>
        <div class="carousel-item">
            <img src="<?php echo get_template_directory_uri() . '/img/slide-one.png' ?>" class="d-block w-100"
                alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h3>Натяжные потолки <span class="carousel-caption-header">в Минске <br>с установкой</span></h3>
                <p class="carousel-caption-price">от <span>479 <span
                            class="carousel-caption-currency">руб/м2</span></span>
                </p>
                <div class="carousel-caption-description">
                    <p class="carousel-caption-description-text">Узнайте точную стоимость вашего проекта</p>
                    <a href="#" class="carousel-caption-description-link">Узнать стоимость</a>
                </div>

            </div>
        </div>
    </div>
    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button> -->
</div>

<div class="our-change">
    <div class="container">
        <h3 class="home-title">Почему выбирают нас</h3>
        <div class="row">
            <div class="col">
                <div class="card">
                    <img src="<?php echo get_template_directory_uri() . '/img/montaj3.png' ?>" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <p class="card-text">Чистый и безопасный монтаж</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="<?php echo get_template_directory_uri() . '/img/price-akcii.png' ?>" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <p class="card-text">Акции для любой ситуации и цены без вреда для семейного бюджета</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="<?php echo get_template_directory_uri() . '/img/montaj2.png' ?>" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <p class="card-text">Выполняем монтаж любой сложности на высшем уровне</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="<?php echo get_template_directory_uri() . '/img/eta-rlient.png' ?>" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <p class="card-text">Учитываем пожелания клиента и согласовываем детали работы на каждом этапе
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="<?php echo get_template_directory_uri() . '/img/garantia.png' ?>" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <p class="card-text">Гарантируем качественный материал и комплектующие при доступных ценах</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="types-of-ceilings">
    <div class="container">
        <h3 class="home-title">Виды натяжных потолков</h3>
        <div class="custom-menu-container">
            <?php
            wp_nav_menu([
                'menu' => 'ceilings-menu',
                'menu_class' => 'custom-menu',
                'container' => false,
            ]);
            ?>
            <div class="menu-content-container" id="menu-content-container">
                <!-- Здесь будет подгружаться контент -->
            </div>
        </div>

    </div>
</div>

<div id="calculator-block" class="calculator">
    <div class="container">
        <div class="row calculator-row">
            <div class="col">
                <div class="calculator-content">
                    <h2 class="calculator-content-title">Что входит в стоимость натяжного потолка под ключ?</h2>
                    <p>В калькулятор заложена цена за полотно с установкой, углы, закладные под люстру и закладные под
                        светильники. Но вам не смонтируют натяжной потолок без профиля по периметру помещения,
                        электропроводки под светильники, установки люстры и/или светильников (если потребуется). Для
                        установки натяжного потолка под ключ также может понадобиться микро плинтус (декоративная
                        вставка закрывающая монтажный зазор между стеной и потолком) </p><br>
                    <p> Мы ценим и уважаем наших клиентов
                        поэтому придерживаемся честных цен без скрытых работ и материалов. У нас нет необоснованно
                        завышенных цен. Все предельно честно. Вы можете оставить заявку или позвонить нам по номеру
                        телефона. Для максимально точного расчёта стоимости потолка по вашим размерам нам нужно знать:
                        площадь, периметр, количество углов, количество труб уходящих в потолок, желаемое количество
                        люстр и светильников. Кроме того в разделе</p>
                </div>
            </div>
            <div class="col">
                <?php echo do_shortcode('[ceiling_calculator]'); ?>
            </div>
        </div>

    </div>
</div>

<section class="about">
    <div class="container">
        <h3 class="home-title">О компании</h3>
        <div class="row about-row">
            <div class="col">
                <div class="about-img">
                    <img src="<?php echo get_template_directory_uri() . '/img/montaj-potilka.png' ?>" alt="О компании">
                </div>
            </div>
            <div class="col">
                <div class="about-content">
                    <p>Боитесь столкнуться с недобросовестным подрядчиком? Мы не понаслышке знаем, как порой тяжело
                        найти добросовестных мастеров, которые качественно и в установленные сроки выполняют свою
                        работу, а при возникновении сложных ситуаций решают их сами, не перекладывая этот груз на Вас.
                        VG Ceiling – это финальный этап ремонта без головной боли и переживаний, ведь у нас работают
                        мастера с обширным уровнем знаний и практик в сфере натяжных потолков. Наши замерщики так же
                        хорошо знают свое дело и смогут еще на этапе замера учесть все нюансы, что бы монтаж прошел без
                        проблем.</p>
                    <h3 class="home-title-paragraph">Каким образом наша компания гарантирует отличный результат и
                        высокий уровень доверия?</h3>
                    <p>Мы принимаем на работу специалистов с опытом работы в сфере натяжных потолков не менее 3-х лет,
                        используем только сертифицированный материал с гарантией 15 лет, гарантированные бонусы и скидки
                        всем новым и постоянным клиентам, бесплатный замер и консультация от компетентных сотрудников.
                    </p>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="cooperation">
    <div class="container">
        <h3 class="home-title">Этапы сотрудничества</h3>
        <div class="row">
            <div class="col cooperation-item">
                <img src="<?php echo get_template_directory_uri() . '/img/cooperation-call.png' ?>"
                    alt="Звонок и заявка" class="cooperation-img">
                <p class="cooperation-text">Звонок или заявка на сайте</p>
            </div>
            <div class="col cooperation-item cooperation-item-reverse">
                <p class="cooperation-text">Бесплатный выезд замерщика</p>
                <img src="<?php echo get_template_directory_uri() . '/img/cooperation-zamer.png' ?>"
                    alt="Бесплатный замер" class="cooperation-img">
            </div>
            <div class="col cooperation-item">
                <img src="<?php echo get_template_directory_uri() . '/img/cooperation-predoplata.png' ?>"
                    alt="Документы" class="cooperation-img">
                <p class="cooperation-text">Договор и 30% предоплата</p>
                <span class="cooperation-text text-lite">
                    Для Вашего удобства, заключение договора сразу на объекте
                </span>
            </div>
            <div class="col cooperation-item cooperation-item-reverse">
                <p class="cooperation-text">Производство от 1 до 3 дней</p>
                <img src="<?php echo get_template_directory_uri() . '/img/cooperation-hour.png' ?>" alt="Сжатые сроки"
                    class="cooperation-img">
            </div>
            <div class="col cooperation-item">
                <img src="<?php echo get_template_directory_uri() . '/img/cooperation-montaj.png' ?>"
                    alt="Быстрый монтаж" class="cooperation-img">
                <p class="cooperation-text">Монтаж от 2-х часов</p>
            </div>
            <div class="col cooperation-item cooperation-item-reverse">
                <p class="cooperation-text">Уборка на объекте</p>
                <img src="<?php echo get_template_directory_uri() . '/img/cooperation-uborka.png' ?>"
                    alt="Чистота на объекте" class="cooperation-img">
            </div>
        </div>

    </div>
</section>

<section class="reviews">
    <div class="container">
        <h3 class="text-center home-title">Отзывы наших клиентов</h3>

        <?php

        if (carbon_get_theme_option('rewievs_slider')) {
            $reviews = carbon_get_theme_option('rewievs_slider');
            if (!empty($reviews)) {
                echo '<div id="reviewsCarousel" class="carousel slide" data-bs-ride="carousel">';
                echo '<div class="carousel-inner">';

                foreach ($reviews as $index => $review) {
                    $title = esc_html($review['title_slider']);
                    $text = esc_html($review['text_slider']);
                    $photo = esc_url($review['photo']);
                    $active_class = ($index === 0) ? 'active' : ''; // Первая карточка будет активной
        
                    echo '<div class="carousel-item ' . $active_class . '">';
                    echo '<div class="review-card mx-auto">';
                    echo '<div class="review-text p-4">';
                    echo '<p class="mb-4">' . $text . '</p>';
                    echo '<div class="review-author d-flex align-items-center">';
                    if ($photo) {
                        echo '<img src="' . $photo . '" class="d-block w-50 rounded-circle" alt="' . $title . '">';
                    }
                    echo '<h5 class="mb-1 mx-4">' . $title . '</h5>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }

                echo '</div>'; // Закрываем carousel-inner
                echo '<button class="carousel-control-prev" type="button" data-bs-target="#reviewsCarousel" data-bs-slide="prev">';
                echo '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
                echo '<span class="visually-hidden">Previous</span>';
                echo '</button>';
                echo '<button class="carousel-control-next" type="button" data-bs-target="#reviewsCarousel" data-bs-slide="next">';
                echo '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
                echo '<span class="visually-hidden">Next</span>';
                echo '</button>';
                echo '</div>'; // Закрываем carousel
            }
        }

        ?>

    </div>
</section>

<div class="questions">
    <div class="container">
        <h3 class="text-center home-title home-title-lite">Часто задаваемые вопросы</h3>
        <div class="questions-container">

            <?php

            if (carbon_get_theme_option('crb_faqs')) {
                $faqs = carbon_get_theme_option('crb_faqs');
                echo '<div class="accordion" id="faqAccordion">';
                foreach ($faqs as $index => $faq) {
                    $question = esc_html($faq['crb_question']);
                    $answer = wp_kses_post($faq['crb_answer']);
                    $collapse_id = 'faqCollapse' . $index;
                    $heading_id = 'faqHeading' . $index;

                    echo '<div class="accordion-item">';
                    echo '<h2 class="accordion-header" id="' . $heading_id . '">';
                    echo '<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#' . $collapse_id . '" aria-expanded="true" aria-controls="' . $collapse_id . '">';
                    echo $question;
                    echo '</button>';
                    echo '</h2>';
                    echo '<div id="' . $collapse_id . '" class="accordion-collapse collapse" aria-labelledby="' . $heading_id . '" data-bs-parent="#faqAccordion">';
                    echo '<div class="accordion-body">';
                    echo $answer;
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                echo '</div>';
            }

            ?>

        </div>
    </div>
</div>

<div id="bid" class="bid">
    <div class="container">
        <h3 class="text-center home-title home-title-lite">Оставьте заявку<span class="bid-desc">на замер и получите 4
                бесплатные опции</span></h3>
        <div class="row bid-container-option">
            <div class="col bid-option">
                <p class="text-center">Выезд замерщика</p>
            </div>
            <div class="col bid-option">
                <p class="text-center">Проект вашего потолка</p>
            </div>
            <div class="col bid-option">
                <p class="text-center">Точечные светильники</p>
            </div>
            <div class="col bid-option">
                <p class="text-center">Чистый монтаж</p>
            </div>
        </div>
        <div class="row bid-form-container">
            <div class="col bid-form-phone">
                <p class="text-center bid-form-phone-desc">Позвонитe нам по телефонам:</p>
                <p class="text-center bid-form-phone-item"><a href="tel:+84951428656">8 (495) 142 86 56</a></p>
                <p class="text-center bid-form-phone-item"><a href="tel:+89777155800">8 (977) 715 58 00</a></p>
            </div>
            <div class="col-9 bid-col-9">
                <p class="bid-form-phone-desc">Или оставьте данные и мы вам перезвоним:</p>
                <div class="bid-form">
                    <?php echo do_shortcode('[contact-form-7 id="ea51bf8" title="Форма в блоке заявки"]'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="politic">
        <p>Согласие на обработку <a href="#">персональных данных.</a></p>
    </div>
</div>

<main id="primary" class="site-main">

    <?php
    while (have_posts()):
        the_post();

        get_template_part('template-parts/content', 'page');

        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()):
            comments_template();
        endif;

    endwhile; // End of the loop.
    ?>

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();


