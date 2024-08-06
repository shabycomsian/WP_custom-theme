<?php /*Customizer Code HERE*/
add_action('customize_register', 'theme_home_customizer');
function theme_home_customizer($wp_customize){
    
    //All our sections, settings, and controls will be added here
   $wp_customize->add_section('logo_images' , array(
		'title' => __('Logo', 'Smart Recroot'),
		'description' => 'You can change logo here',
		'priority'   => 30,
		));

	$wp_customize->add_setting('homepage_image' , array(
			'default-image' => '',
		));

	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'homepage_image' , array(
		'label' => __('Edit Logo' , 'Smart Recroot'),
		'section' => 'logo_images',
		'settings' => 'homepage_image'
		)));
    
    
    
    
 //adding section in wordpress customizer   
$wp_customize->add_section('home_settings_section', array(
  'title'          => 'Home Page Sections'
 ));
 
//adding setting for footer text area
$wp_customize->add_setting('text_setting', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting', array(
 'label'   => 'Home Section 1',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting2', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting2', array(
 'label'   => 'Heading Here',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting2',
)));


//adding setting for footer text area
$wp_customize->add_setting('text_setting1', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting1', array(
 'label'   => 'Content here',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting1',
  'type' => 'textarea',
)));
//adding setting for footer text area
$wp_customize->add_setting('text_setting3', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting3', array(
 'label'   => 'Botton 1 Text',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting3',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting4');
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting4', array(
 'label'   => 'Botton 1 Link',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting4',
 
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting5', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting5', array(
 'label'   => 'Botton 2 Text',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting5',
)));
//adding setting for footer text area
$wp_customize->add_setting('text_setting6');
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting6', array(
 'label'   => 'Botton 2 Link',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting6',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_settingg115');
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'text_settingg115', array(
 'label'   => 'Banner Image',
  'section' => 'home_settings_section',
 'settings'    => 'text_settingg115',
)));


//adding setting for footer text area
$wp_customize->add_setting('text_setting7', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting7', array(
 'label'   => 'Home Section 2',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting7',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting8', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting8', array(
 'label'   => 'Content here',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting8',
 'type' => 'textarea',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting9', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting9', array(
 'label'   => 'Botton 1 Text',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting9',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting10');
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting10', array(
 'label'   => 'Botton 1 Link',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting10',
)));
//adding setting for footer text area
$wp_customize->add_setting('text_setting11', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting11', array(
 'label'   => 'Botton 2 Text',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting11',
)));
//adding setting for footer text area
$wp_customize->add_setting('text_setting12');
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting12', array(
 'label'   => 'Botton 2 Link',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting12',
)));
//adding features1
$wp_customize->add_setting('text_setting3500', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting3500', array(
 'label'   => 'Features Section Heading',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting3500',
)));
//adding features1
$wp_customize->add_setting('text_setting35000', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting35000', array(
 'label'   => 'Features Section Sub-Heading',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting35000',
)));
//adding features1
$wp_customize->add_setting('text_setting350', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting350', array(
 'label'   => 'Features Section 1 Heading',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting350',
)));
//adding features2
$wp_customize->add_setting('text_setting351', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting351', array(
 'label'   => 'Features Section Content',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting351',
 'type' => 'textarea',
)));
//adding features3
$wp_customize->add_setting('text_setting352');
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'text_setting352', array(
 'label'   => 'Features Image',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting352',
)));
//adding features4
$wp_customize->add_setting('text_setting353', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting353', array(
 'label'   => 'Features link Text',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting353',
)));
//adding features4
$wp_customize->add_setting('text_setting354', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting354', array(
 'label'   => 'Features link',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting354',
)));
//adding features2
$wp_customize->add_setting('text_setting360', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting360', array(
 'label'   => 'Features Section 2 Heading',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting360',
)));
//adding features2
$wp_customize->add_setting('text_setting361', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting361', array(
 'label'   => 'Features Section Content',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting361',
 'type' => 'textarea',
)));
//adding features3
$wp_customize->add_setting('text_setting362');
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'text_setting362', array(
 'label'   => 'Features Image',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting362',
)));
//adding features4
$wp_customize->add_setting('text_setting363', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting363', array(
 'label'   => 'Features link Text',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting363',
)));
//adding features4
$wp_customize->add_setting('text_setting364', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting364', array(
 'label'   => 'Features link',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting364',
)));
//adding features3
$wp_customize->add_setting('text_setting370', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting370', array(
 'label'   => 'Features Section 3 Heading',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting370',
)));
//adding features2
$wp_customize->add_setting('text_setting371', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting371', array(
 'label'   => 'Features Section Content',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting371',
 'type' => 'textarea',
)));
//adding features3
$wp_customize->add_setting('text_setting372');
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'text_setting372', array(
 'label'   => 'Features Image',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting372',
)));
//adding features4
$wp_customize->add_setting('text_setting373', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting373', array(
 'label'   => 'Features link Text',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting373',
)));
//adding features4
$wp_customize->add_setting('text_setting374', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting374', array(
 'label'   => 'Features link',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting374',
)));
//adding features4
$wp_customize->add_setting('text_setting380', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting380', array(
 'label'   => 'Features Section 4 Heading',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting380',
)));
//adding features2
$wp_customize->add_setting('text_setting381', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting381', array(
 'label'   => 'Features Section Content',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting381',
 'type' => 'textarea',
)));
//adding features3
$wp_customize->add_setting('text_setting382');
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'text_setting382', array(
 'label'   => 'Features Image',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting382',
)));
//adding features4
$wp_customize->add_setting('text_setting383', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting383', array(
 'label'   => 'Features link Text',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting383',
)));
//adding features4
$wp_customize->add_setting('text_setting384', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting384', array(
 'label'   => 'Features link',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting384',
)));
//////features 5
//adding features4
$wp_customize->add_setting('text_setting3880', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting3880', array(
 'label'   => 'Features Section 5 Heading',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting3880',
)));
//adding features2
$wp_customize->add_setting('text_setting3881', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting3881', array(
 'label'   => 'Features Section Content',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting3881',
 'type' => 'textarea',
)));
//adding features3
$wp_customize->add_setting('text_setting3882');
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'text_setting3882', array(
 'label'   => 'Features Image',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting3882',
)));
//adding features4
$wp_customize->add_setting('text_setting3883', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting3883', array(
 'label'   => 'Features link Text',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting3883',
)));
//adding features4
$wp_customize->add_setting('text_setting3884', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting3884', array(
 'label'   => 'Features link',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting3884',
)));


//adding setting for footer text area
$wp_customize->add_setting('text_setting13', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting13', array(
 'label'   => 'Home Section 3 Heading',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting13',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting14', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting14', array(
 'label'   => 'Content Here',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting14',
 'type' => 'textarea',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting15');
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'text_setting15', array(
 'label'   => 'Banner Image',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting15',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting16', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting16', array(
 'label'   => 'Home Section 4 Heading',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting16',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting17', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting17', array(
 'label'   => 'Sub-heading',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting17',
 'type' => 'textarea',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting18', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting18', array(
 'label'   => 'Home Section 5 Heading',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting18',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting19', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting19', array(
 'label'   => 'Sub-heading',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting19',
 'type' => 'textarea',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting20', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting20', array(
 'label'   => 'Home Section 6 Heading',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting20',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting21', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting21', array(
 'label'   => 'Content here',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting21',
 'type' => 'textarea',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting22', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting22', array(
 'label'   => 'Botton Text',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting22',
)));
//adding setting for footer text area
$wp_customize->add_setting('text_setting23');
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting23', array(
 'label'   => 'Botton Link',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting23',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting24', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting24', array(
 'label'   => 'Home Section 7 Heading',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting24',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting25', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting25', array(
 'label'   => 'Sub-heading',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting25',
 'type' => 'textarea',
)));
//adding setting for footer text area
$wp_customize->add_setting('text_setting26', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting26', array(
 'label'   => 'Video Link',
  'section' => 'home_settings_section',
 'settings'    => 'text_setting26',
)));


$wp_customize->add_section('features_settings_section', array(
  'title'          => 'Features Page Section'
 ));
 
//adding setting for footer text area
$wp_customize->add_setting('text_setting101', array(
 'default'        => 'Default Text For features Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting101', array(
 'label'   => 'Features Section 1',
  'section' => 'features_settings_section',
 'settings'    => 'text_setting101',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting102', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting102', array(
 'label'   => 'Features  Heading',
  'section' => 'features_settings_section',
 'settings'    => 'text_setting102',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting103', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting103', array(
 'label'   => 'Features Content',
  'section' => 'features_settings_section',
 'settings'    => 'text_setting103',
  'type' => 'textarea',
)));
////about
$wp_customize->add_section('about_settings_section', array(
  'title'          => 'About Us Page Section'
 ));
 
//adding setting for footer text area
$wp_customize->add_setting('text_setting1101', array(
 'default'        => 'Default Text For features Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting1101', array(
 'label'   => 'About Section 1',
  'section' => 'about_settings_section',
 'settings'    => 'text_setting1101',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting1102', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting1102', array(
 'label'   => 'about us  Heading',
  'section' => 'about_settings_section',
 'settings'    => 'text_setting1102',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting1103', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting1103', array(
 'label'   => 'About Content',
  'section' => 'about_settings_section',
 'settings'    => 'text_setting1103',
  'type' => 'textarea',
)));
//adding setting for footer text area
$wp_customize->add_setting('text_setting11022', array(
 'default'        => 'Default Text For About Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting11022', array(
 'label'   => 'about us Section Heading 1',
  'section' => 'about_settings_section',
 'settings'    => 'text_setting11022',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting11033', array(
 'default'        => 'Default Text For About Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting11033', array(
 'label'   => 'About us Content 1',
  'section' => 'about_settings_section',
 'settings'    => 'text_setting11033',
  'type' => 'textarea',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting11044');
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'text_setting11044', array(
 'label'   => 'Image 1',
  'section' => 'about_settings_section',
 'settings'    => 'text_setting11044',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting11055');
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting11055', array(
 'label'   => 'Link 1',
  'section' => 'about_settings_section',
 'settings'    => 'text_setting11055',
 'type' => 'dropdown-pages',
)));
// section 2
//adding setting for footer text area
$wp_customize->add_setting('text_setting110222', array(
 'default'        => 'Default Text For About Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting110222', array(
 'label'   => 'about us Section Heading 2',
  'section' => 'about_settings_section',
 'settings'    => 'text_setting110222',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting110333', array(
 'default'        => 'Default Text For About Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting110333', array(
 'label'   => 'About us Content 2',
  'section' => 'about_settings_section',
 'settings'    => 'text_setting110333',
  'type' => 'textarea',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting110444');
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'text_setting110444', array(
 'label'   => 'Image 2',
  'section' => 'about_settings_section',
 'settings'    => 'text_setting110444',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting110555');
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting110555', array(
 'label'   => 'Link 2',
  'section' => 'about_settings_section',
 'settings'    => 'text_setting110555',
 'type' => 'dropdown-pages',
)));
//end secton 2
//section3
//adding setting for footer text area
$wp_customize->add_setting('text_setting1102222', array(
 'default'        => 'Default Text For About Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting1102222', array(
 'label'   => 'about us Section Heading 3',
  'section' => 'about_settings_section',
 'settings'    => 'text_setting1102222',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting1103333', array(
 'default'        => 'Default Text For About Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting1103333', array(
 'label'   => 'About us Content 3',
  'section' => 'about_settings_section',
 'settings'    => 'text_setting1103333',
  'type' => 'textarea',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting1104444');
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'text_setting1104444', array(
 'label'   => 'Image 3',
  'section' => 'about_settings_section',
 'settings'    => 'text_setting1104444',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting1105555');
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting1105555', array(
 'label'   => 'Link 3',
  'section' => 'about_settings_section',
 'settings'    => 'text_setting1105555',
 'type' => 'dropdown-pages',
)));
//end section 3

//adding setting for footer text area
$wp_customize->add_setting('text_setting71', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting71', array(
 'label'   => 'Features Section 2',
  'section' => 'features_settings_section',
 'settings'    => 'text_setting71',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting81', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting81', array(
 'label'   => 'Content here',
  'section' => 'features_settings_section',
 'settings'    => 'text_setting81',
 'type' => 'textarea',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting91', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting91', array(
 'label'   => 'Botton 1 Text',
  'section' => 'features_settings_section',
 'settings'    => 'text_setting91',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting310');
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting310', array(
 'label'   => 'Botton 1 Link',
  'section' => 'features_settings_section',
 'settings'    => 'text_setting310',
 'type' => 'dropdown-pages',
)));
//adding setting for footer text area
$wp_customize->add_setting('text_setting311', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting311', array(
 'label'   => 'Botton 2 Text',
  'section' => 'features_settings_section',
 'settings'    => 'text_setting311',
)));
//adding setting for footer text area
$wp_customize->add_setting('text_setting312');
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting312', array(
 'label'   => 'Botton 2 Link',
  'section' => 'features_settings_section',
 'settings'    => 'text_setting312',
 'type' => 'dropdown-pages',
)));

//contact us page

$wp_customize->add_section('contact_settings_section', array(
  'title'          => 'Contact Page Section'
 ));
 
//adding setting for footer text area
$wp_customize->add_setting('text_setting201', array(
 'default'        => 'Default Text For contact Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting201', array(
 'label'   => 'Contact First Text Here',
  'section' => 'contact_settings_section',
 'settings'    => 'text_setting201',
 'type' => 'textarea',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting202', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting202', array(
 'label'   => 'Contact  Text Here',
  'section' => 'contact_settings_section',
 'settings'    => 'text_setting202',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting203', array(
 'default'        => 'Default Text For Home Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting203', array(
 'label'   => 'Contact  Text Here',
  'section' => 'contact_settings_section',
 'settings'    => 'text_setting203',
  'type' => 'textarea',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting204');
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'text_setting204', array(
 'label'   => 'Contact info icon Here',
  'section' => 'contact_settings_section',
 'settings'    => 'text_setting204',
)));
//adding setting for footer text area
$wp_customize->add_setting('text_setting205', array(
 'default'        => 'Default Text For contact Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting205', array(
 'label'   => 'Contact Text Here',
  'section' => 'contact_settings_section',
 'settings'    => 'text_setting205',
)));
//adding setting for footer text area
$wp_customize->add_setting('text_setting206', array(
 'default'        => 'Default Text For contact Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting206', array(
 'label'   => 'Contact Text Here',
  'section' => 'contact_settings_section',
 'settings'    => 'text_setting206',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting207');
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'text_setting207', array(
 'label'   => 'Contact info icon Here',
  'section' => 'contact_settings_section',
 'settings'    => 'text_setting207',
)));
//adding setting for footer text area
$wp_customize->add_setting('text_setting208', array(
 'default'        => 'Default Text For contact Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting208', array(
 'label'   => 'Contact Text Here',
  'section' => 'contact_settings_section',
 'settings'    => 'text_setting208',
)));
//adding setting for footer text area
$wp_customize->add_setting('text_setting209', array(
 'default'        => 'Default Text For contact Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting209', array(
 'label'   => 'Contact Text Here',
  'section' => 'contact_settings_section',
 'settings'    => 'text_setting209',
)));
//adding setting for footer text area
$wp_customize->add_setting('text_setting210', array(
 'default'        => 'Default Text For contact Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting210', array(
 'label'   => 'Contact Text Here',
  'section' => 'contact_settings_section',
 'settings'    => 'text_setting210',
)));

//adding setting for footer text area
$wp_customize->add_setting('text_setting211');
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'text_setting211', array(
 'label'   => 'Contact info icon Here',
  'section' => 'contact_settings_section',
 'settings'    => 'text_setting211',
)));
//adding setting for footer text area
$wp_customize->add_setting('text_setting212', array(
 'default'        => 'Default Text For contact Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting212', array(
 'label'   => 'Contact Text Here',
  'section' => 'contact_settings_section',
 'settings'    => 'text_setting212',
)));
//adding setting for footer text area
$wp_customize->add_setting('text_setting213', array(
 'default'        => 'Default Text For contact Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting213', array(
 'label'   => 'Contact Text Here',
  'section' => 'contact_settings_section',
 'settings'    => 'text_setting213',
)));
//adding setting for footer text area
$wp_customize->add_setting('text_setting214', array(
 'default'        => 'Default Text For contact Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting214', array(
 'label'   => 'Contact Text Here',
  'section' => 'contact_settings_section',
 'settings'    => 'text_setting214',
)));
$wp_customize->add_section('testimonial_settings_section', array(
  'title'          => 'Testimonial Page Section'
 ));
 
//adding setting for footer text area
$wp_customize->add_setting('text_setting786', array(
 'default'        => 'Default Text For contact Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting786', array(
 'label'   => 'Testimonial First Text Here',
  'section' => 'testimonial_settings_section',
 'settings'    => 'text_setting786',
 'type' => 'textarea',
)));
//adding setting for footer text area
$wp_customize->add_setting('text_setting787', array(
 'default'        => 'Default Text For contact Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting787', array(
 'label'   => 'Testimonial First Text Here',
  'section' => 'testimonial_settings_section',
 'settings'    => 'text_setting787',
)));
//adding setting for footer text area
$wp_customize->add_setting('text_setting788', array(
 'default'        => 'Default Text For contact Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting788', array(
 'label'   => 'Testimonial 2 Section Text Here',
  'section' => 'testimonial_settings_section',
 'settings'    => 'text_setting788',
 'type' => 'textarea',
)));
//adding setting for footer text area
$wp_customize->add_setting('text_setting789', array(
 'default'        => 'Default Text For contact Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting789', array(
 'label'   => 'Testimonial 2 Section heading',
  'section' => 'testimonial_settings_section',
 'settings'    => 'text_setting789',
)));


//adding Section Become a partner

$wp_customize->add_section('partner_settings_section', array(
  'title'          => 'Become A Partner Page Section'
 ));
 
//adding setting for footer text area
$wp_customize->add_setting('text_setting3321', array(
 'default'        => 'Default Text For Partner Section heading',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting3321', array(
 'label'   => 'Partner Section Heading',
  'section' => 'partner_settings_section',
 'settings'    => 'text_setting3321',
 'type' => 'textarea',
)));
//adding setting for footer text area
$wp_customize->add_setting('text_setting3322', array(
 'default'        => 'Default Text For Partner Section Heading',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting3322', array(
 'label'   => 'Partner Section Heading Text',
  'section' => 'partner_settings_section',
 'settings'    => 'text_setting3322',
)));
//adding setting for footer text area
$wp_customize->add_setting('text_setting3323', array(
 'default'        => 'Default Text For Partner Section Textarea',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting3323', array(
 'label'   => 'Partner Section Textarea',
  'section' => 'partner_settings_section',
 'settings'    => 'text_setting3323',
 'type' => 'textarea',
)));
//adding features1
$wp_customize->add_setting('text_setting3324', array(
 'default'        => 'Default Text For Partner Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting3324', array(
 'label'   => 'Partner Features Title',
  'section' => 'partner_settings_section',
 'settings'    => 'text_setting3324',
)));
//adding features2
$wp_customize->add_setting('text_setting3325', array(
 'default'        => 'Default Text For Partner Textarea Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting3325', array(
 'label'   => 'Features Section Content',
  'section' => 'partner_settings_section',
 'settings'    => 'text_setting3325',
 'type' => 'textarea',
)));
$wp_customize->add_setting('text_setting3326');
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'text_setting3326', array(
 'label'   => 'Partner Features Image',
  'section' => 'partner_settings_section',
 'settings'    => 'text_setting3326',
)));
$wp_customize->add_setting('text_setting3327');
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'text_setting3327', array(
 'label'   => 'Partner Banner 1',
  'section' => 'partner_settings_section',
 'settings'    => 'text_setting3327',
)));
//adding features 2
$wp_customize->add_setting('text_setting3328', array(
 'default'        => 'Default Text For Partner Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting3328', array(
 'label'   => 'Partner Features Section 5 Title',
  'section' => 'partner_settings_section',
 'settings'    => 'text_setting3328',
)));
//adding features2
$wp_customize->add_setting('text_setting3329', array(
 'default'        => 'Default Text For Partner Textarea Section',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting3329', array(
 'label'   => 'Features Section Content',
  'section' => 'partner_settings_section',
 'settings'    => 'text_setting3329',
 'type' => 'textarea',
)));
$wp_customize->add_setting('text_setting3330');
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'text_setting3330', array(
 'label'   => 'Partner Features Image',
  'section' => 'partner_settings_section',
 'settings'    => 'text_setting3330',
)));
$wp_customize->add_setting('text_setting3331', array(
 'default'        => 'Default Text For Partner Section Heading',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting3331', array(
 'label'   => 'Partner Section Heading Text',
  'section' => 'partner_settings_section',
 'settings'    => 'text_setting3331',
)));
//adding setting for footer text area
$wp_customize->add_setting('text_setting3332', array(
 'default'        => 'Default Text For Partner Section Textarea',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting3332', array(
 'label'   => 'Partner Section Textarea',
  'section' => 'partner_settings_section',
 'settings'    => 'text_setting3332',
 'type' => 'textarea',
)));
$wp_customize->add_setting('text_setting3333');
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'text_setting3333', array(
 'label'   => 'Partner Banner',
  'section' => 'partner_settings_section',
 'settings'    => 'text_setting3333',
)));
$wp_customize->add_setting('text_setting3334', array(
 'default'        => 'Default Text For Partner Section Heading',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting3334', array(
 'label'   => 'Partner Section Heading Text',
  'section' => 'partner_settings_section',
 'settings'    => 'text_setting3334',
)));
//adding setting for footer text area
$wp_customize->add_setting('text_setting3335', array(
 'default'        => 'Default Text For Partner Section Textarea',
 'transport' => 'refresh'
 ));
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'text_setting3335', array(
 'label'   => 'Partner Section Textarea',
  'section' => 'partner_settings_section',
 'settings'    => 'text_setting3335',
 'type' => 'textarea',
)));
$wp_customize->add_setting('text_setting3336');
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'text_setting3336', array(
 'label'   => ' Partner Banner ',
  'section' => 'partner_settings_section',
 'settings'    => 'text_setting3336',
)));
}
?>