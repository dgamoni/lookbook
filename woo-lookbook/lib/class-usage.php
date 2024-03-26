<?php

 //include the main class file
  require_once("admin-page-class/admin-page-class.php");


  /**
   * configure admin page
   */
  $config = array(    
    'menu'           => 'woocommerce',             //sub page to settings page
    'page_title'     => __('LookBook','apc'),       //The name of this page 
    'capability'     => 'edit_themes',         // The capability needed to view the page 
    'option_group'   => 'lookbook_options',       //the name of the option to create in the database
    'id'             => 'lookbook_page',            // meta box id, unique per page
    'fields'         => array(),            // list of fields (can be added by field arrays)
    'local_images'   => false,          // Use local or hosted images (meta box images for add/remove)
    'use_with_theme' => false,          //change path if used with theme set to true, false for a plugin or anything else for a custom path(default false).
  );  
  
  /**
   * instantiate admin page
   */
  $options_panel = new BF_Admin_Page_Class($config);
  $options_panel->OpenTabs_container('');
  
  /**
   * LookBook Options admin page tabs listing
   */
  $options_panel->TabsListing(array(
    'links' => array(
      'lookbook_help' =>  __('Help','apc'),
      'lookbook_1' =>  __('Lookbook 1','apc'),
      'lookbook_2' =>  __('Lookbook 2','apc'),
      'lookbook_options' =>  __('Global Options','apc'),
      'lookbook_addon' =>  __('Addon','apc'),

      
    )
  ));
  
  /**
   * Open admin page tab Global Options
   */
  $options_panel->OpenTab('lookbook_options');
  	$options_panel->Title(__("Global Options","apc"));
    $options_panel->addTypo('look_title_typography_field_id',array('name' => __("Title - text options","apc"),'std' => array('size' => '80px', 'color' => '#ffffff', 'face' => 'helvetica', 'style' => 'normal'), 'desc' => __('.look_title {<br>&nbsp;&nbsp;&nbsp;font-size: 80px;<br>&nbsp;&nbsp;&nbsp;font-family: helvetica;<br>&nbsp;&nbsp;&nbsp;<span style="text-decoration: line-through;">font-weight: normal;</span><br>&nbsp;&nbsp;&nbsp;font-style: normal;<br>&nbsp;&nbsp;&nbsp;color: white;<br>}','apc')));
    $options_panel->addTypo('look_description_typography_field_id',array('name' => __("Description - text options","apc"),'std' => array('size' => '18px', 'color' => '#ffffff', 'face' => 'helvetica', 'style' => 'normal'), 'desc' => __('.look_description {<br>&nbsp;&nbsp;&nbsp;font-size: 18px;<br>&nbsp;&nbsp;&nbsp;font-family: helvetica;<br>&nbsp;&nbsp;&nbsp;<span style="text-decoration: line-through;">font-weight: normal;</span><br>&nbsp;&nbsp;&nbsp;font-style: normal;<br>&nbsp;&nbsp;&nbsp;color: white;<br>}','apc')));
    $options_panel->addTypo('look_price_typography_field_id',array('name' => __("Product link - text options","apc"),'std' => array('size' => '11px', 'color' => '#000000', 'face' => 'helvetica', 'style' => 'normal'), 'desc' => __('.lookbook-textelement a {<br>&nbsp;&nbsp;&nbsp;font-size: 11px;<br>&nbsp;&nbsp;&nbsp;font-family: helvetica;<br>&nbsp;&nbsp;&nbsp;<span style="text-decoration: line-through;">font-weight: normal;</span><br>&nbsp;&nbsp;&nbsp;font-style: normal;<br>&nbsp;&nbsp;&nbsp;color: black;<br>}','apc')));
    $options_panel->addTypo('main_title_typography_field_id',array('name' => __("Main title - text options* (only for full-width template)","apc"),'std' => array('size' => '41px', 'color' => '#000000', 'face' => 'helvetica', 'style' => 'normal'), 'desc' => __('.main_look_title {<br>&nbsp;&nbsp;&nbsp;font-size: 41px;<br>&nbsp;&nbsp;&nbsp;font-family: helvetica;<br>&nbsp;&nbsp;&nbsp;font-weight: normal;<br>&nbsp;&nbsp;&nbsp;font-style: normal;<br>&nbsp;&nbsp;&nbsp;color: black;<br>}','apc')));
  $options_panel->CloseTab();
  
  /**
   * Open lookbook admin page lookbook_1
   */
  $options_panel->OpenTab('lookbook_1');
	  $options_panel->Title(__("Lookbook 1","apc"));

	  $repeater_fields_look_1[] = $options_panel->addText('look_1_title',array('name'=> __('Title ','apc')),true);
	  $repeater_fields_look_1[] = $options_panel->addText('look_1_description',array('name'=> __('Description ','apc')),true);
	  $repeater_fields_look_1[] = $options_panel->addCheckbox('look_1_checkbox_field_id',array('name'=> __('Hidden Title & Description','apc'), 'std' => false, 'desc' => __('OFF - visible title and description, ON - hidden title and description','apc')), true);
	  $repeater_fields_look_1[] = $options_panel->addSelect('look_1_select_field_id',array('style1'=>'style 1','style2'=>'style 2','style3'=>'style 3','style4'=>'style 4', 'style5'=>'style 5', 'style6'=>'style 6', 'style7'=>'style 7', 'style8'=>'style 8', 'style9'=>'style 9'),array('name'=> __('Select theme ','apc'), 'std'=> array('style1'), 'desc' => __('Select a template to display this block. Total available 9 styles.<br> <a href="'.$this->url .'help/img/style_good_640.png" target="_blank">View all style</a>','apc')),true);
	  $repeater_fields_look_1[] = $options_panel->addImage('look_1_image_field_id_1',array('name'=> __('Image 1','apc'), 'desc' => __('Proportions for the image 1.<br> Style 1 => 5X6.<br>Style 2,3,4,7,9 => 7X8.<br>Style 5,6,8 => 3X2.','apc')),true);
	  $repeater_fields_look_1[] = $options_panel->addImage('look_1_image_field_id_2',array('name'=> __('Image 2','apc'), 'desc' => __('Proportions for the image 2.<br> Style 1,2,3,5,8,9 => 7X8.<br>Style 4,6,7 => 3X2.','apc')),true);
	  $repeater_fields_look_1[] = $options_panel->addImage('look_1_image_field_id_3',array('name'=> __('Image 3','apc'), 'desc' => __('Proportions for the image 3.<br>Style 2,3,4,9 => 7X8.<br>Style 1,8 => 3X2.<br>Style 5,6,7 => none.','apc')),true);
	  $repeater_fields_look_1[] = $options_panel->addImage('look_1_image_field_id_4',array('name'=> __('Image 4','apc'), 'desc' => __('Proportions for the image 4.<br>Style 3 => 7X8.<br>Style 2,8 => 3X2.<br>Style 1,4,5,6,7,9 => none.','apc')),true);
	  $repeater_fields_look_1[] = $options_panel->addImage('look_1_image_field_id_5',array('name'=> __('Image 5','apc'), 'desc' => __('Proportions for the image 5.<br>Style 3 => 8X7.<br>Style 1,2,4,5,6,7,9 => none.','apc')),true);
	  $repeater_fields_look_1[] = $options_panel->addPosts('look_1_posts_field_id_1',array('args' => array('post_type' => 'product')),array('name'=> __('Select link for product','apc'), 'desc' => __('Visible title product and price','apc')),true);
	  $repeater_fields_look_1[] = $options_panel->addPosts('look_1_posts_field_id_2',array('args' => array('post_type' => 'product')),array('name'=> __('Select link for product','apc'), 'desc' => __('Visible title product and price','apc')),true);
	  $repeater_fields_look_1[] = $options_panel->addPosts('look_1_posts_field_id_3',array('args' => array('post_type' => 'product')),array('name'=> __('Select link for product','apc'), 'desc' => __('Visible title product and price','apc')),true);

	  $options_panel->addRepeaterBlock('re1_',array('sortable' => true, 'name' => __('Custom blocks. Sort by dragging','apc'),'fields' => $repeater_fields_look_1, 'desc' => __('Add custom blocks. Fill them. Save. Use the shortcode <code>[lookbook id=&quot;1&quot;]</code>','apc')));
    $options_panel->addTypoColor('look_1_background_color',array('name' => __("Background color","apc"),'std' => array('color' => '#000000'), 'desc' => __('','apc')));
  $options_panel->CloseTab();

  /**
   * Open lookbook admin page lookbook_2
   */
  $options_panel->OpenTab('lookbook_2');
	  $options_panel->Title(__("Lookbook 2","apc"));
		 
		  $repeater_fields_look_2[] = $options_panel->addText('look_2_title',array('name'=> __('Title ','apc')),true);
		  $repeater_fields_look_2[] = $options_panel->addText('look_2_description',array('name'=> __('Description ','apc')),true);
		  $repeater_fields_look_2[] = $options_panel->addCheckbox('look_2_checkbox_field_id',array('name'=> __('Hidden Title & Description','apc'), 'std' => false, 'desc' => __('OFF - visible title and description, ON - hidden title and description','apc')), true);
		  $repeater_fields_look_2[] = $options_panel->addSelect('look_2_select_field_id',array('style1'=>'style 1','style2'=>'style 2','style3'=>'style 3','style4'=>'style 4', 'style5'=>'style 5', 'style6'=>'style 6', 'style7'=>'style 7', 'style8'=>'style 8', 'style9'=>'style 9'),array('name'=> __('Select theme ','apc'), 'std'=> array('style1'), 'desc' => __('Select a template to display this block. Total available 9 styles.<br> <a href="'.$this->url .'help/img/style_good_640.png" target="_blank">View all style</a>','apc')),true);
		  $repeater_fields_look_2[] = $options_panel->addImage('look_2_image_field_id_1',array('name'=> __('Image 1','apc'), 'desc' => __('Proportions for the image 1.<br> Style 1 => 5X6.<br>Style 2,3,4,7,9 => 7X8.<br>Style 5,6,8 => 3X2.','apc')),true);
		  $repeater_fields_look_2[] = $options_panel->addImage('look_2_image_field_id_2',array('name'=> __('Image 2','apc'), 'desc' => __('Proportions for the image 2.<br> Style 1,2,3,5,8,9 => 7X8.<br>Style 4,6,7 => 3X2.','apc')),true);
		  $repeater_fields_look_2[] = $options_panel->addImage('look_2_image_field_id_3',array('name'=> __('Image 3','apc'), 'desc' => __('Proportions for the image 3.<br>Style 2,3,4,9 => 7X8.<br>Style 1,8 => 3X2.<br>Style 5,6,7 => none.','apc')),true);
		  $repeater_fields_look_2[] = $options_panel->addImage('look_2_image_field_id_4',array('name'=> __('Image 4','apc'), 'desc' => __('Proportions for the image 4.<br>Style 3 => 7X8.<br>Style 2,8 => 3X2.<br>Style 1,4,5,6,7,9 => none.','apc')),true);
		  $repeater_fields_look_2[] = $options_panel->addImage('look_2_image_field_id_5',array('name'=> __('Image 5','apc'), 'desc' => __('Proportions for the image 5.<br>Style 3 => 8X7.<br>Style 1,2,4,5,6,7,9 => none.','apc')),true);
		  $repeater_fields_look_2[] = $options_panel->addPosts('look_2_posts_field_id_1',array('args' => array('post_type' => 'product')),array('name'=> __('Select link for product','apc'), 'desc' => __('Visible title product and price','apc')),true);
		  $repeater_fields_look_2[] = $options_panel->addPosts('look_2_posts_field_id_2',array('args' => array('post_type' => 'product')),array('name'=> __('Select link for product','apc'), 'desc' => __('Visible title product and price','apc')),true);
		  $repeater_fields_look_2[] = $options_panel->addPosts('look_2_posts_field_id_3',array('args' => array('post_type' => 'product')),array('name'=> __('Select link for product','apc'), 'desc' => __('Visible title product and price','apc')),true);

		  $options_panel->addRepeaterBlock('re2_',array('sortable' => true, 'name' => __('Custom blocks. Sort by dragging','apc'),'fields' => $repeater_fields_look_2, 'desc' => __('Add custom blocks. Fill them. Save. Use the shortcode <code>[lookbook id=&quot;2&quot;]</code>','apc')));

      $options_panel->addTypoColor('look_2_background_color',array('name' => __("Background color","apc"),'std' => array('color' => '#000000'), 'desc' => __('','apc')));
  $options_panel->CloseTab();

  /**
  *  Open lookbook admin page addon tab
  */
  $options_panel->OpenTab('lookbook_addon');
    $options_panel->Title(__("Addon for Lookbook","apc"));
    
    // simple-lazyload tested
    //$options_panel->Subtitle(__(" 1. Simple lazyload","apc"));
    //$options_panel->addCheckbox('lazyload_checkbox_field_id',array('name'=> __('Enable lazyload for Lookbook','apc'), 'std' => true, 'desc' => __('Simple checkbox field description','apc')));
    //$options_panel->addSelect('animate_select_field_id',array('300'=>'300','400'=>'400','500'=>'500','600'=>'600','700'=>'700','800'=>'800'),array('name'=> __('Animate speed ','apc'), 'std'=> array('800'), 'desc' => __('Simple select field description','apc')));
    
    // jquery-zoom
    $options_panel->Subtitle(__(" 1. JQuery Zoom","apc"));
    $options_panel->addCheckbox('zoom_checkbox_field_id',array('name'=> __('Enable zoom for Lookbook','apc'), 'std' => true, 'desc' => __('OFF - no effect','apc')));
    $options_panel->addSelect('zoom_select_field_id',array('1'=>'1','2'=>'2','3'=>'3'),array('name'=> __('Magnify ','apc'), 'std'=> array('1'), 'desc' => __('Magnify 1->5. Default 1.','apc')));
  
  $options_panel->CloseTab();

  /**
  *  Open lookbook admin help tab
  */
  $options_panel->OpenTab('lookbook_help');
    $options_panel->Title(__("Help","apc"));
    $options_panel->addParagraph(__("<a href='".$this->url ."documentation/index.html' target='_blank'>Please, read full documentation!</a>","apc"));
    $options_panel->Subtitle(__("Structure and style","apc"));

    $options_panel->addParagraph(__("<a href='".$this->url ."help/img/style_good_640.png' target='_blank'><img src='".$this->url ."help/img/style_two_col1_620.png'></a>","apc"));
  $options_panel->CloseTab();


 