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
        ->add_tab('Вопросы', [
            Field::make('text', 'crb_q', 'Вопрос')
                ->set_width(33),
            Field::make('text', 'crb_a', 'Ответ')
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
        ]);
}
