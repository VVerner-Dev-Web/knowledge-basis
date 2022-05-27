<?php
$logo_white_path = VV_APP_URL . '/assets/img/logotipo-all-white.png';
$logo_path = VV_APP_URL . '/assets/img/logotipo';
$logo_link           = get_theme_mod( 'logo_link' );
$logo_link           = $logo_link ? $logo_link : home_url( '/' );
$width               = get_theme_mod( 'logo_width', 200 );
$height              = get_theme_mod( 'header_height', 90 );

/*if ( ! empty( $site_logo_id ) && ! is_numeric( $site_logo_id ) ) {
	// Fallback to `logo_width` and `header_height` if
	// the logo is a string, ie. it's the default value.
	$site_logo = array( $site_logo_id, $width, $height );
}

if ( ! empty( $site_logo_sticky_id ) && ! is_numeric( $site_logo_sticky_id ) ) {
	$site_logo_sticky = array( $site_logo_sticky_id, $width, $height );
}

if ( ! empty( $site_logo_dark_id ) && ! is_numeric( $site_logo_dark_id ) ) {
	$site_logo_dark = array( $site_logo_dark_id, $width, $height );
}
*/
?>

<!-- Header logo -->
<a href="<?php echo esc_url( $logo_link ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?><?php echo get_bloginfo( 'name' ) && get_bloginfo( 'description' ) ? ' - ' : ''; ?><?php bloginfo( 'description' ); ?>" rel="home">
		<?php
		if ( $logo_path ) {
			$site_title = esc_attr( get_bloginfo( 'name', 'display' ) );
			if ( $logo_path) echo '<img  width="200" height="90" src="' . esc_url($logo_white_path ) . '" class="header-logo-dark" alt="'.$site_title.'"/>';
			else echo '<img  width="200" height="90" src="' . esc_url( $logo_path ) . '" class="header-logo-dark" alt="'.$site_title.'"/>';
		} else {
			bloginfo( 'name' );
		}
		?>
</a>
<?php
if(get_theme_mod('site_logo_slogan')){
	echo '<p class="logo-tagline">'.get_bloginfo('description').'</p>';
}
?>
