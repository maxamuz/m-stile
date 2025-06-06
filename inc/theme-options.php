<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options()
{
    Container::make('theme_options', __('Theme Options'))
        ->add_tab('Настройки шапки', [
            Field::make('text', 'crb_city', 'Город')
                ->set_width(33),
            Field::make('text', 'crb_email', 'Email')
                ->set_width(33),
            Field::make('text', 'crb_phone', 'Телефон')
                ->set_width(33),
            Field::make('text', 'crb_vk', 'Вконтакте')
                ->set_width(33),
            Field::make('text', 'crb_w_sapp', 'Вконтакте')
                ->set_width(33),
        ])
        ->add_tab('Слайдер "Отзывы"', [
            Field::make('complex', 'rewievs_slider', __('Slider'))
                ->setup_labels([
                    'plural_name' => 'Отзывы',
                    'singular_name' => 'Отзыв',
                ])
                ->add_fields(array(
                    Field::make('text', 'title_slider', __('Заголовок отзыва')),
                    Field::make('textarea', 'text_slider', __('Текст отзыва')),
                    Field::make('image', 'photo', __('Фотография'))
                        ->set_value_type('url'),
                ))
        ])
        ->add_tab('Часто задаваемые вопросы', [
            Field::make('complex', 'crb_faqs', __('Часто задаваемые вопросы'))
                ->setup_labels([
                    'plural_name' => 'Вопросы',
                    'singular_name' => 'Вопрос',
                ])
                ->add_fields(array(
                    Field::make('text', 'crb_question', __('Вопрос')),
                    Field::make('rich_text', 'crb_answer', __('Ответ')),
                )),
        ]);
    ;

}

add_action('carbon_fields_register_fields', 'crb_attach_page_meta');
function crb_attach_page_meta()
{
    Container::make('post_meta', __('Дополнительные поля'))
        ->where('post_type', '=', 'page') // Привязываем к страницам
        ->add_fields(array(
            Field::make('multiselect', 'crb_related_posts', __('Связанные записи'))
                ->set_options(function () {
                    $posts = get_posts(array(
                        'post_type' => 'post', // Замените на нужный тип поста
                        'numberposts' => -1,
                        'fields' => 'ids' // Получаем только ID
                    ));

                    // Создаем ассоциативный массив для опций
                    $options = [];
                    foreach ($posts as $post_id) {
                        $options[$post_id] = get_the_title($post_id);
                    }
                    return $options;
                }),
        ));
}