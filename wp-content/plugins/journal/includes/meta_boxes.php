<?php
/**
 * Created by PhpStorm.
 * User: Tova
 * Date: 2/25/17
 * Time: 1:00 PM
 */


use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Custom Data')->show_on_post_type('meal')->set_priority('high')
    ->add_fields(array(
    Field::make('text', 'client_fname', 'Client First Name'),
    Field::make('text', 'client_lname', 'Client Last Name')
));

//carbon_get_post_meta($id, $name, $type = null):


