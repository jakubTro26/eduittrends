<?php
// production
//show_admin_bar( false );

/************************************************************************
 * LGX Event Point functions and definitions
 *************************************************************************/
define('LGXEVENTPOINT_NAME', wp_get_theme()->get( 'Name' ));
define('LGXEVENTPOINT_STYLE', get_template_directory_uri().'/assets/css/');
define('LGXEVENTPOINT_SCRIPT', get_template_directory_uri().'/assets/js/');
define('LGXEVENTPOINT_VENDOR', get_template_directory_uri().'/assets/vendor/'); 
define('LGXEVENTPOINT_URI', get_template_directory_uri().'/');

/************************************************************************
 * Include Theme Config
 *************************************************************************/

if ( file_exists( get_template_directory() . '/lib/theme-config/theme-config.php' ) ) {

	require_once get_template_directory(). '/lib/theme-config/theme-config.php';
}


/************************************************************************
 * Theme Core Functions
 *************************************************************************/

if ( file_exists( get_template_directory() . '/lib/theme-main-functions/theme-core-functions.php' ) ) {

	require_once get_template_directory() . '/lib/theme-main-functions/theme-core-functions.php';
}


/************************************************************************
 * Implement the Custom Header feature.
 *************************************************************************/

if ( file_exists(get_template_directory()  . '/inc/custom-header.php')) {
	require get_template_directory() . '/inc/custom-header.php';
}

/************************************************************************
 * Custom template tags for this theme.
 *************************************************************************/

if ( file_exists(get_template_directory()  . '/inc/template-tags.php')) {
	require get_template_directory() . '/inc/template-tags.php';
}

/************************************************************************
 * Custom functions that act independently of the theme templates.
 *************************************************************************/

if ( file_exists(get_template_directory()  . '/inc/extras.php')) {
	require get_template_directory() . '/inc/extras.php';
}

/************************************************************************
 * Customizer additions.
 *************************************************************************/

if ( file_exists(get_template_directory()  . '/inc/customizer.php')) {
	require get_template_directory() . '/inc/customizer.php';
}

/************************************************************************
 * Load Jetpack compatibility file.
 *************************************************************************/

if ( file_exists(get_template_directory()  . '/inc/jetpack.php')) {
	require get_template_directory() . '/inc/jetpack.php';
}

remove_action( 'woocommerce_after_single_product_summary' ,'woocommerce_upsell_display',15);

add_action('admin_menu', 'custom_menu');


function custom_menu() { 
 
  add_menu_page( 
      'Page Title', 
      'Newsletter', 
      'edit_posts', 
      'menu_slug', 
      'newsletter_callback', 
      'dashicons-media-spreadsheet' 
 
     );
}

function newsletter_callback(){
  global $wpdb;
  //SELECT * FROM `wp_newsletter`
  
  
//   $list=1;


$result= $wpdb->get_results('SELECT * FROM wp_newsletter;');

$count=count($result);

$i=$count;


  ?>

  <div class="nl1">
    <div class="wrap">
      <form class="nl2">
        <table class="wp-list-table widefat fixed striped posts">
          <thead>
            <tr>
              <td id="cb" class="manage-column column-cb check-column ">
                <label class="screen-reader-text" for="cb-select-all-1">Wybierz wszystko</label>
                <input id="cb-select-all-1" type="checkbox">
              </td>
              <th scope="col" id="title" class="manage-column column-title column-primary sortable desc">
                <a href="">
                <span>Tytuł</span><span class="sorting-indicator">
                </span>
                </a>
              </th>
              <th scope="col" id="date" class="manage-column column-date sortable asc">
                <a href="https://bitrends.pl/wp-admin/admin.php?page=menu_slug&orderby=date&order=desc">
                <span>Data</span><span class="sorting-indicator"></span>
                </a>
              </th>
            </tr>
          </thead>
          <tbody>

<?php 

while($i != 0)
{
?>
            <tr id="n1" class="iedit author-self level-0 type-page status-publish hentry">
              <th scope="row" class="check-column">			
                <label class="screen-reader-text" for="cb-select-305">
			            	Wybierz AGENDA			</label>
		            	<input id="cb-select-305" type="checkbox" name="post[]" value="305">
		              	<div class="locked-indicator">
				              <span class="locked-indicator-icon" aria-hidden="true">
                      </span>
				              <span class="screen-reader-text">
				                  “AGENDA” jest zablokowany			
                    	</span>
			              </div>
			        </th>


              <td class="title column-title has-row-actions column-primary page-title" data-colname="Tytuł">
                <div>
                  <?php echo $result[$i-1]->email;        ?>
                </div>  
              </td>



            </tr>

<?php
$i--;
}

?>
          </tbody>
        </table>
      </form>
    </div>
  </div>






<?php
 

}