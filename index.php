<?php
  /*
    Plugin Name: Beden Kitle Endeksi Hesaplama Aracı
    Plugin URI: http://webinyo.com
    Version: 1.0.4
    Author: Savaş Dersim Çelik
    Description: Beden Kitle Endeksi Hesaplama Aracı Eklentisi ve Bileşeni
  */
  
	define( 'bkeha_plugin',  plugin_basename( __FILE__ ) ); // Kodların Bulunduğu Sayfanın Uzantısı
	define( 'bkeha_url',  plugins_url( basename( __DIR__ ) ) ); // Eklentiye Ait Klasörün Bulunduğu Site Adresi
	define( 'bkeha_path',  plugin_dir_path( __FILE__ ) ); // Eklentiye Ait Klasörün Bulunduğu Dizin Yolunu Verir

	add_action( 'widgets_init', 'bkeha_ist_widgets' );
 
	function bkeha_ist_widgets() {
		register_widget( 'bkeha_ist_widget' );
	}
 
	class bkeha_ist_widget extends WP_Widget {
 
		function bkeha_ist_widget() {
			$widget_ops = array( 'classname' => 'widget_ist', 'description' => __('Toplam Site istatistiği listelemeyi sağlar.', 'bkeha') );
			$this->WP_Widget( 'bkeha_ist_widget', __('Beden Kitle Endeksi Hesaplama Aracı', 'bkeha'), $widget_ops );
		}
 
		function widget( $args, $instance ) {
			echo '<iframe src="' . bkeha_url . '/bki/index.html" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" style="width:100%" height="600" ></iframe>';
			echo $after_widget;
		}
 
		function update( $new_instance, $old_instance ) {}
		function form( $instance ) {
			$instance = wp_parse_args( (array) $instance, $defaults );
			echo '<p>Bileşen Ayarı Yoktur Şuan Çalışır Durumdadır.</p>';
		}
	} 
  
	function bkeha_shortcode() {
		return '<iframe src="' . bkeha_url . '/bki/index.html" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" style="width:100%" height="600"></iframe>';
	}
	add_shortcode( 'bkeha', 'bkeha_shortcode' );
  
  
?>