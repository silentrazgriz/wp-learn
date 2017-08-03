<?php
/*
Plugin Name: Jiwasraya Calculator
Description: Life insurance calculator
Author: vekaputra
Version: 1.0
*/

function jwcalc_admin() {
    include('views/jwcalculator.settings.php');
}

function jwcalc_admin_actions() {
    add_options_page('Jiwasraya Calculator', 'Jiwasraya Calculator', 1,
        'jwcalc', 'jwcalc_admin');
}

add_action('admin_menu', 'jwcalc_admin_actions');