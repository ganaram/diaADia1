<?php

function validationDiv($campo, $type){
    global $errors;
    $output = '';
    if( isset($errors[$campo]) ){
        $output.= '<div class="alert alert-danger" role="alert">'
        .;
        foreach($errors[$campo] as $error){
            $output.=  $error;
        }
        $output.= '</div>';
    }
    echo $output;
}

function invalidFeedbackDiv($campo){
    global $errors;
    $output = '';
    if( isset($errors[$campo]) ){
        $output.= '<div class="invalid-feedback">';
        foreach($errors[$campo] as $error){
            $output.=  $error;
        }
        $output.= '</div>';
    }
    echo $output;
}

function ada_styles(){
    wp_enqueue_style('ada_main_styles',get_stylesheet_uri(),array('boostrap','ranga_font'),'0.1','all');
    wp_enqueue_style('bootstrap',get_theme_file_uri('css/boostrap.min.css'),'4.1.3','all');
    wp_enqueue_style('ranga_font','https://fonts.googleapis.com/css?family=Ranga',array(),null,null);
    wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.3.1.slim.min.js',array(),'3.3.1',true);
    wp_enqueue_script('popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js',array(),'1.14.3',true);
    wp_enqueue_script('boostrapjs','https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js',array('jquery','popper'),'4.1.3',true);
}
add_action('wp_enqueue_scripts','ada_styles');