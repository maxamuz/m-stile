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
            <div class="carousel-caption d-none d-md-block">
                <h3>Натяжные потолки <span class="carousel-caption-header">в Минске <br>с установкой</span></h3>
                <p class="carousel-caption-price">от <span>20 <span
                            class="carousel-caption-currency">руб/м2</span></span>
                </p>
                <div class="carousel-caption-description">
                    <p class="carousel-caption-description-text">Узнайте точную стоимость вашего проекта</p>
                    <a href="#" class="carousel-caption-description-link">Узнать стоимость</a>
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

<div class="calculator">
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
            <div class="col cooperation-item">
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
            <div class="col cooperation-item">
                <p class="cooperation-text">Производство от 1 до 3 дней</p>
                <img src="<?php echo get_template_directory_uri() . '/img/cooperation-hour.png' ?>" alt="Сжатые сроки"
                    class="cooperation-img">
            </div>
            <div class="col cooperation-item">
                <img src="<?php echo get_template_directory_uri() . '/img/cooperation-montaj.png' ?>"
                    alt="Быстрый монтаж" class="cooperation-img">
                <p class="cooperation-text">Монтаж от 2-х часов</p>
            </div>
            <div class="col cooperation-item">
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

        <div id="reviewsCarousel" class="carousel slide">
            <!-- Индикаторы -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="2"></button>
            </div>

            <!-- Слайды -->
            <div class="carousel-inner">
                <!-- Отзыв 1 -->
                <div class="carousel-item active">
                    <div class="review-card mx-auto">
                        <div class="review-text p-4">
                            <p class="mb-4">"Очень доволен качеством натяжных потолков. Установили быстро, аккуратно,
                                без пыли и мусора. Потолок выглядит идеально ровно, как и обещали. Рекомендую эту
                                компанию!"</p>
                            <div class="review-author d-flex align-items-center">
                                <img src="<?php echo get_template_directory_uri() . '/img/men-potolok.png' ?>"
                                    alt="Фото клиента" class="rounded-circle me-3">
                                <div>
                                    <h5 class="mb-1">Александр</h5>
                                    <p class="text-muted mb-0">г. Минск</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Отзыв 2 -->
                <div class="carousel-item">
                    <div class="review-card mx-auto">
                        <div class="review-text p-4">
                            <p class="mb-4">"Заказывали натяжные потолки в новую квартиру. Работа выполнена
                                профессионально, мастера вежливые, дали полезные советы по уходу. Цена соответствует
                                качеству. Будем обращаться еще."</p>
                            <div class="review-author d-flex align-items-center">
                                <img src="<?php echo get_template_directory_uri() . '/img/woomen-potolok.png' ?>"
                                    alt="Фото клиента" class="rounded-circle me-3">
                                <div>
                                    <h5 class="mb-1">Елена</h5>
                                    <p class="text-muted mb-0">г. Минск</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Отзыв 3 -->
                <div class="carousel-item">
                    <div class="review-card mx-auto">
                        <div class="review-text p-4">
                            <p class="mb-4">"Установили потолки в офисе - выглядит стильно и современно. Сотрудники
                                компании пунктуальные, работают чисто, после себя убирают. Приятно иметь дело с
                                профессионалами."</p>
                            <div class="review-author d-flex align-items-center">
                                <img src="<?php echo get_template_directory_uri() . '/img/men2-potolok.png' ?>"
                                    alt="Фото клиента" class="rounded-circle me-3">
                                <div>
                                    <h5 class="mb-1">Дмитрий</h5>
                                    <p class="text-muted mb-0">г. Минск</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Кнопки навигации -->
            <button class="carousel-control-prev" type="button" data-bs-target="#reviewsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Предыдущий</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#reviewsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Следующий</span>
            </button>
        </div>
    </div>
</section>

<div class="questions">
    <div class="container">
        <h3 class="text-center home-title home-title-lite">Часто задаваемые вопросы</h3>
        <div class="questions-container">

            <div class="accordion" id="accordionExample">
                <!-- Элемент 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                            Может ли натяжной потолок защитить от затопления и что делать, если затопили натяжной
                            потолок?
                        </button>
                    </h2>
                    <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Натяжной потолок может <strong>временно</strong> задержать воду при затоплении, но не
                                защитит от протечки полностью. Его главная функция — эстетическая и практическая
                                (выравнивание поверхности, скрытие коммуникаций), а не гидроизоляция.</p>

                            <h2 class="home-title-paragraph">Что делать, если затопили натяжной потолок?</h2>

                            <ol>
                                <li><strong>Остановите протечку</strong>
                                    <ul>
                                        <li>Перекройте воду в квартире или договоритесь с соседями сверху.</li>
                                        <li>Если вода течёт из-за прорыва трубы или протечки крыши, вызовите аварийную
                                            службу.</li>
                                    </ul>
                                </li>

                                <li><strong>Не трогайте потолок</strong>
                                    <ul>
                                        <li><strong>Не прокалывайте</strong> натяжное полотно — это может привести к
                                            разрыву и резкому сливу воды, повредив мебель и технику.</li>
                                        <li>Если потолок сильно провис, поставьте подпорки (например, деревянные бруски
                                            или швабру), чтобы снизить нагрузку.</li>
                                    </ul>
                                </li>

                                <li><strong>Вызовите мастеров</strong>
                                    <ul>
                                        <li>Обратитесь в компанию, которая устанавливала потолок, или к специалистам по
                                            демонтажу.</li>
                                        <li>Они аккуратно сольют воду через технологические отверстия (например, вокруг
                                            светильников) и снимут полотно для просушки.</li>
                                    </ul>
                                </li>

                                <li><strong>Документируйте ущерб</strong>
                                    <ul>
                                        <li>Сфотографируйте повреждения.</li>
                                        <li>Составьте акт о заливе с участием управляющей компании или соседей.</li>
                                        <li>Если потолок был установлен с гарантией, уточните условия ремонта.</li>
                                    </ul>
                                </li>

                                <li><strong>Ремонт после протечки</strong>
                                    <ul>
                                        <li>После слива воды потолок нужно просушить (1–3 дня).</li>
                                        <li>Если полотно деформировалось, его придётся заменить.</li>
                                        <li>Проверьте электропроводку и утеплитель (если он был над потолком).</li>
                                    </ul>
                                </li>
                            </ol>

                            <div class="highlight">
                                <h2 class="home-title-paragraph">Вывод</h2>
                                <p>Натяжной потолок задержит воду, но не спасёт от потопа. Главное — не паниковать,
                                    остановить протечку и вызвать специалистов для правильного демонтажа. Ремонт или
                                    замена полотна — вопрос договорённости с виновником залива (соседями, УК).</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Элемент 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            Может ли появляться конденсат в натяжном потолке?
                        </button>
                    </h2>
                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Да, конденсат может образовываться на поверхности или под натяжным потолком при
                                определенных условиях. Это происходит из-за разницы температур между помещением и
                                пространством за потолком.</p>

                            <div class="warning">
                                <h2 class="home-title-paragraph">Основные причины появления конденсата:</h2>
                                <ul>
                                    <li><strong>Плохая вентиляция</strong> - недостаточный воздухообмен в помещении</li>
                                    <li><strong>Высокая влажность</strong> - особенно в ванных комнатах, кухнях,
                                        бассейнах</li>
                                    <li><strong>Перепад температур</strong> - холодное перекрытие над теплым помещением
                                    </li>
                                    <li><strong>Неправильный монтаж</strong> - отсутствие тепловой изоляции в холодных
                                        помещениях</li>
                                    <li><strong>Протечки</strong> - скрытые протечки труб над потолком</li>
                                </ul>
                            </div>

                            <h2 class="home-title-paragraph">Чем опасен конденсат?</h2>
                            <ul>
                                <li>Образование плесени и грибка</li>
                                <li>Порча отделочных материалов</li>
                                <li>Неприятный запах в помещении</li>
                                <li>Коррозия металлических элементов конструкции</li>
                            </ul>

                            <div class="solution">
                                <h2 class="home-title-paragraph">Как предотвратить образование конденсата?</h2>
                                <ul>
                                    <li>Обеспечьте хорошую вентиляцию помещения (установите вытяжку или вентилятор)</li>
                                    <li>Используйте потолки с микроперфорацией в помещениях с высокой влажностью</li>
                                    <li>Утеплите перекрытие перед монтажом потолка в холодных помещениях</li>
                                    <li>Поддерживайте стабильную температуру в комнате</li>
                                    <li>Регулярно проветривайте помещение</li>
                                    <li>Для ванных выбирайте специальные влагостойкие полотна</li>
                                </ul>
                            </div>

                            <h2 class="home-title-paragraph">Что делать, если конденсат уже появился?</h2>
                            <ol>
                                <li>Выявите и устраните причину повышенной влажности</li>
                                <li>Просушите помещение с помощью обогревателя или осушителя воздуха</li>
                                <li>Обработайте поверхности антисептиком при появлении плесени</li>
                                <li>Рассмотрите возможность замены полотна на перфорированное</li>
                                <li>При серьезных проблемах обратитесь к специалистам для диагностики</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <!-- Элементы 3-18 -->
                <!-- Для краткости показан шаблон, который нужно повторить для остальных элементов -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            Какой срок службы натяжных потолков?
                        </button>
                    </h2>
                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="material-card">
                                <h2 class="home-title-paragraph">Средний срок службы разных типов натяжных потолков</h2>
                                <table>
                                    <tr>
                                        <th>Тип полотна</th>
                                        <th>Срок службы</th>
                                        <th>Гарантия производителя</th>
                                    </tr>
                                    <tr>
                                        <td>ПВХ (пленочные)</td>
                                        <td>10-15 лет</td>
                                        <td>5-12 лет</td>
                                    </tr>
                                    <tr>
                                        <td>Тканевые (полиэстер)</td>
                                        <td>15-20 лет</td>
                                        <td>10-15 лет</td>
                                    </tr>
                                    <tr>
                                        <td>Тканевые с пропиткой</td>
                                        <td>20-25 лет</td>
                                        <td>15-20 лет</td>
                                    </tr>
                                    <tr>
                                        <td>Сатиновые</td>
                                        <td>12-18 лет</td>
                                        <td>7-15 лет</td>
                                    </tr>
                                </table>
                            </div>

                            <div class="pros-cons">
                                <div class="pros">
                                    <h3 class="home-title-paragraph">Факторы, увеличивающие срок службы:</h3>
                                    <ul>
                                        <li>Качественные материалы от проверенных производителей</li>
                                        <li>Профессиональный монтаж</li>
                                        <li>Правильная эксплуатация</li>
                                        <li>Регулярный уход и очистка</li>
                                        <li>Оптимальные условия в помещении</li>
                                    </ul>
                                </div>
                                <div class="cons">
                                    <h3 class="home-title-paragraph">Что сокращает срок службы:</h3>
                                    <ul>
                                        <li>Низкокачественные материалы</li>
                                        <li>Неправильный монтаж</li>
                                        <li>Механические повреждения</li>
                                        <li>Экстремальные температуры</li>
                                        <li>Постоянная высокая влажность</li>
                                        <li>Контакт с острыми предметами</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="material-card">
                                <h2 class="home-title-paragraph">Как продлить срок службы натяжного потолка</h2>
                                <ol>
                                    <li><strong>Правильный уход:</strong> используйте только мягкие средства для
                                        очистки, избегайте абразивов</li>
                                    <li><strong>Контроль температуры:</strong> поддерживайте в помещении +5°C до +50°C
                                        (оптимально +15°C до +25°C)</li>
                                    <li><strong>Защита от повреждений:</strong> будьте осторожны с острыми предметами
                                        при перемещении мебели</li>
                                    <li><strong>Своевременный ремонт:</strong> устраняйте мелкие повреждения сразу, не
                                        допускайте провисаний</li>
                                    <li><strong>Правильное освещение:</strong> используйте светодиодные лампы, которые
                                        меньше нагреваются</li>
                                </ol>
                            </div>

                            <div class="warning-note">
                                <h2 class="home-title-paragraph">Важно знать!</h2>
                                <p>Фактический срок службы может отличаться от заявленного производителем в зависимости
                                    от условий эксплуатации. Наиболее частая причина преждевременного выхода из строя -
                                    неправильный монтаж и использование некачественных комплектующих.</p>
                                <p>При выборе потолка обращайте внимание не только на срок службы материала, но и на
                                    гарантию, которую предоставляет компания-установщик.</p>
                            </div>

                            <h2 class="home-title-paragraph">Когда стоит заменить натяжной потолок?</h2>
                            <ul>
                                <li>Появились заметные провисания (более 5% от площади)</li>
                                <li>Образовались не устранимые повреждения (разрывы, порезы)</li>
                                <li>Изменение цвета, которое невозможно исправить очисткой</li>
                                <li>Потеря эластичности материала</li>
                                <li>Появление неприятного запаха от материала</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Продолжаем до 18 элемента -->
                <!-- ... -->

                <!-- Элемент 18 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading18">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                            Стоимость установки натяжного потолка?
                        </button>
                    </h2>
                    <div id="collapse18" class="accordion-collapse collapse" aria-labelledby="heading18"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="price-card">
                                <h2 class="home-title-paragraph">Средние цены на материалы</h2>
                                <table class="price-table">
                                    <tr>
                                        <th>Тип полотна</th>
                                        <th>Цена за м² (руб)</th>
                                        <th>Характеристики</th>
                                    </tr>
                                    <tr>
                                        <td>ПВХ матовый</td>
                                        <td>450-800</td>
                                        <td>Классический вариант, скрывает неровности</td>
                                    </tr>
                                    <tr>
                                        <td>ПВХ глянцевый</td>
                                        <td>550-950</td>
                                        <td>Эффект зеркала, визуально увеличивает пространство</td>
                                    </tr>
                                    <tr>
                                        <td>ПВХ сатиновый</td>
                                        <td>650-1100</td>
                                        <td>Мягкий блеск, благородный внешний вид</td>
                                    </tr>
                                    <tr>
                                        <td>Тканевый (полиэстер)</td>
                                        <td>900-1500</td>
                                        <td>Дышащий материал, экологичный</td>
                                    </tr>
                                    <tr>
                                        <td>Тканевый с пропиткой</td>
                                        <td>1200-2000</td>
                                        <td>Влагостойкий, для кухонь и ванных</td>
                                    </tr>
                                    <tr>
                                        <td>Фотопечать</td>
                                        <td>1500-3000+</td>
                                        <td>Индивидуальный дизайн, художественное оформление</td>
                                    </tr>
                                </table>
                            </div>

                            <div class="price-card">
                                <h2 class="home-title-paragraph">Дополнительные работы и комплектующие</h2>
                                <table class="price-table">
                                    <tr>
                                        <th>Наименование</th>
                                        <th>Цена (руб)</th>
                                        <th>Примечание</th>
                                    </tr>
                                    <tr>
                                        <td>Монтаж базового профиля</td>
                                        <td>150-300/м.п.</td>
                                        <td>В зависимости от типа стены</td>
                                    </tr>
                                    <tr>
                                        <td>Установка светильника</td>
                                        <td>400-800/шт</td>
                                        <td>Точечные, LED-панели</td>
                                    </tr>
                                    <tr>
                                        <td>Обход трубы</td>
                                        <td>500-1500/шт</td>
                                        <td>Зависит от диаметра трубы</td>
                                    </tr>
                                    <tr>
                                        <td>Многоуровневая конструкция</td>
                                        <td>+30-50%</td>
                                        <td>К базовой стоимости</td>
                                    </tr>
                                    <tr>
                                        <td>Демонтаж старого потолка</td>
                                        <td>100-200/м²</td>
                                        <td>При необходимости</td>
                                    </tr>
                                    <tr>
                                        <td>Теплоизоляция</td>
                                        <td>200-400/м²</td>
                                        <td>Для холодных помещений</td>
                                    </tr>
                                </table>
                            </div>

                            <div class="highlight-box">
                                <h3 class="home-title-paragraph">Факторы, влияющие на стоимость:</h3>
                                <ul class="factors-list">
                                    <li>Площадь помещения (чем больше - дешевле м²)</li>
                                    <li>Форма комнаты (прямоугольные дешевле сложных форм)</li>
                                    <li>Количество углов и выступов</li>
                                    <li>Высота потолков</li>
                                    <li>Тип и материал стен</li>
                                    <li>Сезон (летом цены могут быть выше)</li>
                                    <li>Срочность выполнения работ</li>
                                    <li>Регион и город</li>
                                    <li>Репутация монтажной компании</li>
                                    <li>Наличие акций и скидок</li>
                                </ul>
                            </div>

                            <div class="warning-box">
                                <h3 class="home-title-paragraph">На что обратить внимание при выборе:</h3>
                                <ul>
                                    <li>В стоимость должна входить <strong>установка профиля, полотна и гарпунного
                                            крепления</strong></li>
                                    <li>Уточните, включены ли в цену <strong>выезд замерщика и доставка
                                            материалов</strong></li>
                                    <li>Проверьте <strong>гарантию на материалы и работу</strong> (обычно 1-5 лет)</li>
                                    <li>Сравнивайте <strong>полные сметы</strong>, а не только цену за квадратный метр
                                    </li>
                                    <li>Дешевые предложения часто скрывают <strong>дополнительные платежи</strong></li>
                                </ul>
                            </div>

                            <h2 class="home-title-paragraph">Пример расчета стоимости</h2>
                            <p>Для комнаты 18 м² (6×3 м) с 4 углами, 5 светильниками и матовым ПВХ:</p>
                            <ul>
                                <li>Материал: 18 м² × 600 руб = 10 800 руб</li>
                                <li>Профиль: 18 м.п. × 200 руб = 3 600 руб</li>
                                <li>Светильники: 5 × 600 руб = 3 000 руб</li>
                                <li>Монтаж: 18 м² × 300 руб = 5 400 руб</li>
                                <li><strong>Итого: ≈ 22 800 руб</strong> (1 267 руб/м²)</li>
                            </ul>

                            <div class="center">
                                <div class="buttom-item">
                                    <a href="#" class="calc-bottom calc-bottom-questions">Рассчитать точную
                                        стоимость</a>
                                </div>
                                <p>Оставьте заявку для получения индивидуального расчета</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="bid">
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
            <div class="col-9">
                <p class="bid-form-phone-desc">Или оставьте данные и мы вам перезвоним:</p>
                <div class="bid-form">
                    <?php echo do_shortcode('[contact-form-7 id="ea51bf8" title="Форма в блоке заявки"]'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="politic"><p>Согласие на обработку <a href="#">персональных данных.</a></p></div>
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


