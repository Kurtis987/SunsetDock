<?php

   function sunset_customize_register($sunset_customize){
   	

//header
	$sunset_customize->add_section('header', array(
   		'title' 	=>__('Header', 'Sunset Dock'),
   		 'description' => sprintf(__('options for header', 'Sunset Dock')),
   		 'priority' 	=> 100
   	));
	$sunset_customize->add_setting('background_img', array(
   		'default' => get_bloginfo('template_directory').'/images/sunset.jpeg',
   		'type'		=> 'theme_mod'
   	));

   	$sunset_customize->add_control(new WP_Customize_Image_Control($sunset_customize,'background_img', array(
   			'label'	=> __('background image', 'Sunset Dock'),
   			'section' => 'header',
   			'settings' => 'background_img',
   			'priority' 	=> 1
   		)));

   	//
   	$sunset_customize->add_setting('navbar_bg_color', array(
   		'default' => '#1b1919',
   		'type'		=> 'theme_mod'
   	));

   	$sunset_customize->add_control(new WP_Customize_Color_Control( $sunset_customize, 'navbar_bg_color', array(
   		'label' => __('background color', 'Sunset Dock'),
   		'section' => 'header',
   		'priority' => 2,
   		'settings' => 'navbar_bg_color'

   	)));

      $sunset_customize->add_setting('logo', array(
         'default' => get_bloginfo('template_directory').'/images/logo.png',
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control(new WP_Customize_Image_Control($sunset_customize,'logo', array(
            'label'  => __('logo image', 'Sunset Dock'),
            'section' => 'header',
            'settings' => 'logo',
            'priority'  => 3
         )));

      $sunset_customize->add_setting('link1', array(
         'default' => _x('Boats', 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('link1', array(
         'label'  => __('Link 1', 'Sunset Dock'),
         'section' => 'header',
         'priority'  => 4
      ));
      $sunset_customize->add_setting('link2', array(
         'default' => _x('Stats', 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('link2', array(
         'label'  => __('Link 2', 'Sunset Dock'),
         'section' => 'header',
         'priority'  => 5
      ));
      $sunset_customize->add_setting('link3', array(
         'default' => _x('Reviews', 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('link3', array(
         'label'  => __('Link 3', 'Sunset Dock'),
         'section' => 'header',
         'priority'  => 6
      ));
  


      //section 1
      $sunset_customize->add_section('Section 1', array(
         'title'  =>__('Section 1', 'Sunset Dock'),
          'description' => sprintf(__('options for section 1', 'sunset')),
          'priority'    => 100
      ));
      $sunset_customize->add_setting('heading1', array(
         'default' => _x('TAKE A MOMENT TO', 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('heading1', array(
         'label'  => __('Heading', 'Sunset Dock'),
         'section' => 'Section 1',
         'priority'  => 1
      ));

       $sunset_customize->add_setting('heading2', array(
         'default' => _x('Book Our Boats.', 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('heading2', array(
         'label'  => __('Heading 2', 'Sunset Dock'),
         'section' => 'Section 1',
         'priority'  => 2
      ));

      $sunset_customize->add_setting('hr_bg_color', array(
         'default' => '#ff9800',
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control(new WP_Customize_Color_Control( $sunset_customize, 'hr_bg_color', array(
         'label' => __('HR color', 'Sunset Dock'),
         'section' => 'Section 1',
         'priority' => 3,
         'settings' => 'hr_bg_color'

      )));

      $sunset_customize->add_setting('standard', array(
         'default' => get_bloginfo('template_directory').'/images/fishingboat1.jpg',
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control(new WP_Customize_Image_Control($sunset_customize,'standard', array(
            'label'  => __('image 1', 'Sunset Dock'),
            'section' => 'Section 1',
            'settings' => 'standard',
            'priority'  => 4
         )));

      $sunset_customize->add_setting('picture_caption1', array(
         'default' => _x("Smith's Standard", 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('picture_caption1', array(
         'label'  => __('Picture Caption 1', 'Sunset Dock'),
         'section' => 'Section 1',
         'priority'  => 5
      ));

      $sunset_customize->add_setting('picture_caption2', array(
         'default' => _x("FROM $149 A Day", 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('picture_caption2', array(
         'label'  => __('Picture Caption 2', 'Sunset Dock'),
         'section' => 'Section 1',
         'priority'  => 5
      ));

      $sunset_customize->add_setting('Exclusive', array(
         'default' => get_bloginfo('template_directory').'/images/fishingboat2.jpg',
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control(new WP_Customize_Image_Control($sunset_customize,'Exclusive', array(
            'label'  => __('image 2', 'Sunset Dock'),
            'section' => 'Section 1',
            'settings' => 'Exclusive',
            'priority'  => 6
         )));

      $sunset_customize->add_setting('picture_caption3', array(
         'default' => _x("Smith's Exclusive", 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('picture_caption3', array(
         'label'  => __('Picture Caption 3', 'Sunset Dock'),
         'section' => 'Section 1',
         'priority'  => 7
      ));

      $sunset_customize->add_setting('picture_caption4', array(
         'default' => _x("FROM $289 A Day", 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('picture_caption4', array(
         'label'  => __('Picture Caption 4', 'Sunset Dock'),
         'section' => 'Section 1',
         'priority'  => 8
      ));

      $sunset_customize->add_setting('button_text', array(
         'default' => _x("Check For Availability", 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('button_text', array(
         'label'  => __('Button text', 'Sunset Dock'),
         'section' => 'Section 1',
         'priority'  => 9      
      ));




      //Buttons
      $sunset_customize->add_section('Buttons', array(
         'title'  =>__('Buttons', 'Sunset Dock'),
          'description' => sprintf(__('options for buttons', 'Sunset Dock')),
          'priority'    => 100
      ));
      $sunset_customize->add_setting('button_bg_color', array(
         'default' => '#ff9800',
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control(new WP_Customize_Color_Control( $sunset_customize, 'button_bg_color', array(
         'label' => __('Button color', 'Sunset Dock'),
         'section' => 'Buttons',
         'priority' => 10,
         'settings' => 'button_bg_color'

      )));
      $sunset_customize->add_setting('button_font_color', array(
         'default' => '#ffffff',
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control(new WP_Customize_Color_Control( $sunset_customize, 'button_font_color', array(
         'label' => __('Button Font Color', 'Sunset Dock'),
         'section' => 'Buttons',
         'priority' => 11,
         'settings' => 'button_font_color'

      )));



      //Section 2
      $sunset_customize->add_section('Section 2', array(
         'title'  =>__('Section 2', 'Sunset Dock'),
          'description' => sprintf(__('options for Section 2', 'Sunset Dock')),
          'priority'    => 100
      ));
      $sunset_customize->add_setting('section2_bg_color', array(
         'default' => '#3b3939',
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control(new WP_Customize_Color_Control( $sunset_customize, 'section2_bg_color', array(
         'label' => __('background color', 'Sunset Dock'),
         'section' => 'Section 2',
         'priority' => 1,
         'settings' => 'section2_bg_color'

      )));

      $sunset_customize->add_setting('section2_logo', array(
         'default' => get_bloginfo('template_directory').'/images/logo.png',
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control(new WP_Customize_Image_Control($sunset_customize,'section2_logo', array(
            'label'  => __('logo image', 'Sunset Dock'),
            'section' => 'Section 2',
            'settings' => 'section2_logo',
            'priority'  => 2
         )));
      $sunset_customize->add_setting('stats_color', array(
         'default' => '#ff9800',
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control(new WP_Customize_Color_Control( $sunset_customize, 'stats_color', array(
         'label' => __('stats color', 'Sunset Dock'),
         'section' => 'Section 2',
         'priority' => 3,
         'settings' => 'stats_color'

      )));
      $sunset_customize->add_setting('descriptions_color', array(
         'default' => '#ffffff',
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control(new WP_Customize_Color_Control( $sunset_customize, 'descriptions_color', array(
         'label' => __('descriptions color', 'Sunset Dock'),
         'section' => 'Section 2',
         'priority' => 4,
         'settings' => 'descriptions_color'

      )));
      $sunset_customize->add_setting('stat1', array(
         'default' => _x("12", 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('stat1', array(
         'label'  => __('Stat 1', 'Sunset Dock'),
         'section' => 'Section 2',
         'priority'  => 5      
      ));
      $sunset_customize->add_setting('label1', array(
         'default' => _x("YEARS", 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('label1', array(
         'label'  => __('label 1', 'Sunset Dock'),
         'section' => 'Section 2',
         'priority'  => 6      
      ));

      $sunset_customize->add_setting('stat2', array(
         'default' => _x("1", 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('stat2', array(
         'label'  => __('Stat 2', 'Sunset Dock'),
         'section' => 'Section 2',
         'priority'  => 7      
      ));
      $sunset_customize->add_setting('label2', array(
         'default' => _x("EXPERIENCE", 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('label2', array(
         'label'  => __('label 2', 'Sunset Dock'),
         'section' => 'Section 2',
         'priority'  => 8      
      ));


      $sunset_customize->add_setting('stat3', array(
         'default' => _x("700+", 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('stat3', array(
         'label'  => __('Stat 3', 'Sunset Dock'),
         'section' => 'Section 2',
         'priority'  => 9      
      ));
      $sunset_customize->add_setting('label3', array(
         'default' => _x("HAPPY GUESTS", 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('label3', array(
         'label'  => __('label 3', 'Sunset Dock'),
         'section' => 'Section 2',
         'priority'  => 10      
      ));

      $sunset_customize->add_setting('stat4', array(
         'default' => _x("2", 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('stat4', array(
         'label'  => __('Stat 4', 'Sunset Dock'),
         'section' => 'Section 2',
         'priority'  => 11     
      ));
      $sunset_customize->add_setting('label4', array(
         'default' => _x("BOATS", 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('label4', array(
         'label'  => __('label 4', 'Sunset Dock'),
         'section' => 'Section 2',
         'priority'  => 12      
      ));

      $sunset_customize->add_setting('stat5', array(
         'default' => _x("5", 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('stat5', array(
         'label'  => __('Stat 5', 'Sunset Dock'),
         'section' => 'Section 2',
         'priority'  => 13     
      ));
      $sunset_customize->add_setting('label5', array(
         'default' => _x("PARTNERS", 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('label5', array(
         'label'  => __('label 5', 'Sunset Dock'),
         'section' => 'Section 2',
         'priority'  => 14      
      ));

      $sunset_customize->add_setting('stat6', array(
         'default' => _x("2", 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('stat6', array(
         'label'  => __('Stat 6', 'Sunset Dock'),
         'section' => 'Section 2',
         'priority'  => 15    
      ));
      $sunset_customize->add_setting('label6', array(
         'default' => _x("STAFF", 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('label6', array(
         'label'  => __('label 6', 'Sunset Dock'),
         'section' => 'Section 2',
         'priority'  => 16      
      ));

      $sunset_customize->add_setting('stat7', array(
         'default' => _x("99%", 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('stat7', array(
         'label'  => __('Stat 7', 'Sunset Dock'),
         'section' => 'Section 2',
         'priority'  => 17    
      ));
      $sunset_customize->add_setting('label7', array(
         'default' => _x("SATISFACTION", 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('label7', array(
         'label'  => __('label 7', 'Sunset Dock'),
         'section' => 'Section 2',
         'priority'  => 18      
      ));



       //Section 3
      $sunset_customize->add_section('Section 3', array(
         'title'  =>__('Section 3', 'Sunset Dock'),
          'description' => sprintf(__('options for Section 3', 'Sunset Dock')),
          'priority'    => 100
      ));

      $sunset_customize->add_setting('paragraph1', array(
         'default' => _x("SUMMER SPECIAL", 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('paragraph1', array(
         'label'  => __('paragraph 1', 'Sunset Dock'),
         'section' => 'Section 3',
         'priority'  => 1      
      ));
      $sunset_customize->add_setting('section3_heading1', array(
         'default' => _x("Receive 15% off by booking today!", 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('section3_heading1', array(
         'label'  => __('heading 1', 'Sunset Dock'),
         'section' => 'Section 3',
         'priority'  => 2      
      ));
      $sunset_customize->add_setting('buttontext1', array(
         'default' => _x("Learn About The Discount", 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('buttontext1', array(
         'label'  => __('button text', 'Sunset Dock'),
         'section' => 'Section 3',
         'priority'  => 3      
      ));

      $sunset_customize->add_setting('section3_bg_color', array(
         'default' => '#ffffff',
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control(new WP_Customize_Color_Control( $sunset_customize, 'section3_bg_color', array(
         'label' => __('background color', 'Sunset Dock'),
         'section' => 'Section 3',
         'priority' => 4,
         'settings' => 'section3_bg_color'

      )));
      $sunset_customize->add_setting('section3_font_color', array(
         'default' => '#000000',
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control(new WP_Customize_Color_Control( $sunset_customize, 'section3_font_color', array(
         'label' => __('font color', 'Sunset Dock'),
         'section' => 'Section 3',
         'priority' => 5,
         'settings' => 'section3_font_color'
      )));


      $sunset_customize->add_setting('section3_heading_color', array(
         'default' => '#000000',
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control(new WP_Customize_Color_Control( $sunset_customize, 'section3_heading_color', array(
         'label' => __('heading font color', 'Sunset Dock'),
         'section' => 'Section 3',
         'priority' => 6,
         'settings' => 'section3_heading_color'

      )));




  //Section 4
      $sunset_customize->add_section('Section 4', array(
         'title'  =>__('Section 4', 'Sunset Dock'),
          'description' => sprintf(__('options for Section 4', 'Sunset Dock')),
          'priority'    => 100
      ));

      $sunset_customize->add_setting('section4_bg_color', array(
         'default' => '#302e2e',
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control(new WP_Customize_Color_Control( $sunset_customize, 'section4_bg_color', array(
         'label' => __('background color', 'Sunset Dock'),
         'section' => 'Section 4',
         'priority' => 1,
         'settings' => 'section4_bg_color'

      )));

      $sunset_customize->add_setting('section4_wrapper_color', array(
         'default' => '#141212',
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control(new WP_Customize_Color_Control( $sunset_customize, 'section4_wrapper_color', array(
         'label' => __('wrapper background color', 'Sunset Dock'),
         'section' => 'Section 4',
         'priority' => 2,
         'settings' => 'section4_wrapper_color'

      )));

      $sunset_customize->add_setting('section4_inner_color', array(
         'default' => '#000000',
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control(new WP_Customize_Color_Control( $sunset_customize, 'section4_inner_color', array(
         'label' => __('inner wrapper background color', 'Sunset Dock'),
         'section' => 'Section 4',
         'priority' => 3,
         'settings' => 'section4_inner_color'

         )));
      
      $sunset_customize->add_setting('section4_heading', array(
         'default' => _x("Reviews", 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('section4_heading', array(
         'label'  => __('section 4 heading', 'Sunset Dock'),
         'section' => 'Section 4',
         'priority'  => 4      
      ));

      $sunset_customize->add_setting('section4_heading_color', array(
         'default' => '#ffffff',
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control(new WP_Customize_Color_Control( $sunset_customize, 'section4_heading_color', array(
         'label' => __('heading color', 'Sunset Dock'),
         'section' => 'Section 4',
         'priority' => 5,
         'settings' => 'section4_heading_color'

      )));


      $sunset_customize->add_setting('section4_names_color', array(
         'default' => '#ff9800',
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control(new WP_Customize_Color_Control( $sunset_customize, 'section4_names_color', array(
         'label' => __('names color', 'Sunset Dock'),
         'section' => 'Section 4',
         'priority' => 6,
         'settings' => 'section4_names_color'

      )));

      $sunset_customize->add_setting('section4_reviews_color', array(
         'default' => '#555',
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control(new WP_Customize_Color_Control( $sunset_customize, 'section4_reviews_color', array(
         'label' => __('reviews color', 'Sunset Dock'),
         'section' => 'Section 4',
         'priority' => 7,
         'settings' => 'section4_reviews_color'

      )));

      $sunset_customize->add_setting('img1', array(
         'default' => get_bloginfo('template_directory').'/images/testimonial-1.jpg',
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control(new WP_Customize_Image_Control($sunset_customize,'img1', array(
            'label'  => __('image 1', 'Sunset Dock'),
            'section' => 'Section 4',
            'settings' => 'img1',
            'priority'  => 8
         )));


      $sunset_customize->add_setting('name1', array(
         'default' => _x("Ashley W.", 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('name1', array(
         'label'  => __('name 1', 'Sunset Dock'),
         'section' => 'Section 4',
         'priority'  => 9     
      ));

      $sunset_customize->add_setting('review1', array(
         'default' => _x("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pretium, nisi ut volutpat mollis, leo risus interdum arcu.", 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('review1', array(
         'label'  => __('review 1', 'Sunset Dock'),
         'section' => 'Section 4',
         'priority'  => 10     
      ));

      $sunset_customize->add_setting('img2', array(
         'default' => get_bloginfo('template_directory').'/images/testimonial-2.jpg',
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control(new WP_Customize_Image_Control($sunset_customize,'img2', array(
            'label'  => __('image 2', 'Sunset Dock'),
            'section' => 'Section 4',
            'settings' => 'img2',
            'priority'  => 11
         )));


      $sunset_customize->add_setting('name2', array(
         'default' => _x("William B.", 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('name2', array(
         'label'  => __('name 2', 'Sunset Dock'),
         'section' => 'Section 4',
         'priority'  => 12     
      ));

      $sunset_customize->add_setting('review2', array(
         'default' => _x("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pretium, nisi ut volutpat mollis, leo risus interdum arcu.", 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('review2', array(
         'label'  => __('review 2', 'Sunset Dock'),
         'section' => 'Section 4',
         'priority'  => 13     
      ));


      $sunset_customize->add_setting('img3', array(
         'default' => get_bloginfo('template_directory').'/images/testimonial-3.jpg',
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control(new WP_Customize_Image_Control($sunset_customize,'img3', array(
            'label'  => __('image 3', 'Sunset Dock'),
            'section' => 'Section 4',
            'settings' => 'img3',
            'priority'  => 14
         )));


      $sunset_customize->add_setting('name3', array(
         'default' => _x("Samantha C.", 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('name3', array(
         'label'  => __('name 3', 'Sunset Dock'),
         'section' => 'Section 4',
         'priority'  => 15     
      ));

      $sunset_customize->add_setting('review3', array(
         'default' => _x("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pretium, nisi ut volutpat mollis, leo risus interdum arcu.", 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('review3', array(
         'label'  => __('review 3', 'Sunset Dock'),
         'section' => 'Section 4',
         'priority'  => 16     
      ));


      $sunset_customize->add_setting('img4', array(
         'default' => get_bloginfo('template_directory').'/images/testimonial-4.jpg',
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control(new WP_Customize_Image_Control($sunset_customize,'img4', array(
            'label'  => __('image 4', 'Sunset Dock'),
            'section' => 'Section 4',
            'settings' => 'img4',
            'priority'  => 17
         )));


      $sunset_customize->add_setting('name4', array(
         'default' => _x("Taron L.", 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('name4', array(
         'label'  => __('name 4', 'Sunset Dock'),
         'section' => 'Section 4',
         'priority'  => 18     
      ));

      $sunset_customize->add_setting('review4', array(
         'default' => _x("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pretium, nisi ut volutpat mollis, leo risus interdum arcu.", 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('review4', array(
         'label'  => __('review 4', 'Sunset Dock'),
         'section' => 'Section 4',
         'priority'  => 19     
      ));

       $sunset_customize->add_setting('section4_button_text', array(
         'default' => _x("Join These Happy Customers - Book Now!", 'Sunset Dock'),
         'type'      => 'theme_mod'
      ));

      $sunset_customize->add_control('section4_button_text', array(
         'label'  => __('Button text', 'Sunset Dock'),
         'section' => 'Section 4',
         'priority'  => 20      
      ));









   }
   add_action('customize_register', 'sunset_customize_register');

?>