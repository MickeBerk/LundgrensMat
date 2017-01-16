<?php
/**
 * @package understrap
 */
?>
<?php acf_form_head(); ?>
<div class="add-recept">
	<?php  
		acf_form( $options = array(
			'post_id'       => 'new_post',
			'new_post'      => array(
				'post_type'     => 'recept',
				'post_status'   => 'publish'
			),
			'post_title'    => true,
			'submit_value'  => 'Skapa nytt recept'
	));?>
</div>
