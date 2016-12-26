<?php
	define('__TITLE',get_bloginfo('name'));
	define('__DESC',get_bloginfo('description'));
	define('__HOME_URL',esc_url(home_url( '/' )));
	define('__CONTACT_NO', get_option('contact_number'));
	define('__EMAIL', get_option('email'));
	define('__FACEBOOK', 'http://facebook.com/'.get_option('facebook_page_url'));
	define('STYLE_URI',get_stylesheet_uri());
	define('TMPLT_URI',get_template_directory_uri());
	
	function mcwb_resources(){
		wp_enqueue_style('style',STYLE_URI);
		$scripts = array(
				'holder.min'=>'/lib/holderjs/holder.min.js',
				'bootstrap.min'=>'/lib/bootstrap/dist/js/bootstrap.min.js',
		);
		$dependcies = array(
				'holder.min'=>null,
				'bootstrap.min'=>array('jquery')
		);
		foreach($scripts as $script=>$path)
			wp_enqueue_script($script, TMPLT_URI.$path,$dependcies[$script]);
	}
	function theme_prefix_setup() {
		add_theme_support( 'custom-logo' ,array(
					'height'      => 100,
				   'width'       => 100,
				   'flex-width' => true,
		));
		add_theme_support( 'post-thumbnails' ); 
	}
	function blog_logo($args=array()){
		$width = $args['width'];
		$height = $args['height'];
		$alt =__TITLE;
		$custom_logo_id = get_theme_mod( 'custom_logo' );
		$image = wp_get_attachment_image_src( $custom_logo_id , 'full' )[0];
		echo "<img src='$image' width='$width' height='$height' alt='$alt'/>";
	}

	
	function wp_nav_menu_footer($args=array()){
		$args['echo']=false;
		$args['container']=false;
		$args['items_wrap']='<dl id="%1$s" class="%2$s footer-nav pull-right">%3$s</dl>';
		$args['depth']=0;
		$menu =wp_nav_menu( $args );
		echo str_replace('li','dd',$menu);

	}
	

	function special_nav_class ($classes, $item) {
		if (in_array('current-menu-item', $classes) ){
			$classes[] = 'active ';
		}
		return $classes;
	}
	
	class new_general_setting{
		private $f_name;
		private $f_description;
		private $f_prefix;

		function new_general_setting($array){
			$this->f_name = $array[0];
			$this->f_description = $array[1];
			if(isset($array[2])){
				$this->f_prefix =  $array[2];
			}
			add_filter( 'admin_init' , array( &$this , 'register_fields' ) );
		}

		function register_fields(){
			register_setting( 'general', $this->f_name, 'esc_attr' );
			add_settings_field( $this->f_name, 
								'<label for="'.$this->f_name.'">'.__($this->f_description, $this->f_name ).'</label>' ,
								array(&$this, 'fields_html') ,
								'general' );
		}

		function fields_html(){
			$value = get_option( $this->f_name, '' );
			$prefix = $this->f_prefix;
			echo $prefix.'<input type="text"  name="'.$this->f_name.'" value="' . $value . '" />';
		}
	}
	$contact = new new_general_setting( array('contact_number', 'Contact Number') );
	$email = new new_general_setting( array('email', 'Email') );
	$fb = new new_general_setting( array('facebook_page_url', 'Facebook Page URL','http://www.facebook.com/') );
	function custom_widget_init(){
		add_theme_support( 'customize-selective-refresh-widgets' );
		if (function_exists('register_sidebar')) {
			
			register_sidebar(array(
				'name' => 'Widgetized Area',
				'id'   => 'widgetized-area',
				'description'   => 'This is a widgetized area.',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h4>',
				'after_title'   => '</h4>'
			));

		}
	}
	add_action( 'widgets_init', 'custom_widget_init' );
	add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
	add_action('wp_enqueue_scripts','mcwb_resources');
	add_action( 'after_setup_theme', 'theme_prefix_setup' );
?>