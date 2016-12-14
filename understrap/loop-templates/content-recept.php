<?php
/**
 * The template used for displaying recept
 *
 * 
 */
?>

<?php acf_form_head(); ?>
<?php get_header(); ?>

<div class="content">
 <?php acf_form($options = array(
                                'post_id'           => 'new_post',
                                'new_post'          => array(
                                    'post_type'         => 'event',
                                    'post_status'       => 'publish'
                                    
                                ), 
                                'fields'            => array(
                                    'receptbilder',
                                    'hur_manga_portioner',
                                    'foreberedelser',
                                    'tillagningstid',
                                    'ingredienser',
                                    'gor_sa_har'
                                    ),
                                'submit_value'      => 'Skapa nytt recept',
                            )); ?>
</div>