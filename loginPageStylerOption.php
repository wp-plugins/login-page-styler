<?php

add_action( 'admin_menu', 'lps_menu');

function lps_menu(){
	add_menu_page( 'Login Page Styler', 'Login Page Styler','administrator', 'lps_option', 'lps_settings_page', '', 15);
	add_action( 'admin_init', 'lps_register_settings' );

}



function lps_register_settings(){
	register_setting('lps-settings-group', 'lps_login_background_color' );
	register_setting('lps-settings-group', 'lps_login_label_color' );
	register_setting('lps-settings-group', 'lps_login_nav_color');
	register_setting('lps-settings-group', 'lps_login_nav_hover_color');
	register_setting('lps-settings-group', 'lps_login_form_border_radius');
	register_setting('lps-settings-group', 'lps_login_label_size' );
	register_setting('lps-settings-group', 'lps_login_nav_link_hide' );
	register_setting('lps-settings-group', 'lps_login_logo_hide' );
	register_setting('lps-settings-group', 'lps_login_form_position' );
	register_setting('lps-settings-group', 'lps_login_form_color' );
	register_setting('lps-settings-group', 'lps_login_logo_msg_hide');
	register_setting('lps-settings-group', 'lps_login_on_off');
	register_setting('lps-settings-group', 'lps_login_blog_link_hide');
	register_setting('lps-settings-group', 'lps_login_form_input_feild_border_radius' );
	register_setting('lps-settings-group', 'lps_login_background_image');
	register_setting('lps-settings-group', 'lps_login_form_color_opacity');
	register_setting('lps-settings-group', 'lps_login_custom_css');
	register_setting('lps-settings-group', 'lps_login_button_border_radius');
	register_setting('lps-settings-group', 'lps_login_form_border_color');
	register_setting('lps-settings-group', 'lps_login_form_input_feild_border_color');
	register_setting('lps-settings-group', 'lps_login_remember_label_size') ;
	register_setting('lps-settings-group', 'lps_login_logo_link');
	register_setting('lps-settings-group', 'lps_login_logo_tittle');
	register_setting('lps-settings-group', 'lps_body_bg_img');
	register_setting('lps-settings-group', 'lps_login_logo');
	register_setting('lps-settings-group', 'lps_login_logo_width');
	register_setting('lps-settings-group', 'lps_login_logo_height');
	register_setting('lps-settings-group', 'lps_login_button_color');
	register_setting('lps-settings-group', 'lps_login_button_border_color');
	register_setting('lps-settings-group', 'lps_login_button_color_hover');
	register_setting('lps-settings-group', 'lps_login_button_text_color');
	register_setting('lps-settings-group', 'lps_login_button_text_color_hover');
	register_setting('lps-settings-group', 'lps_login_button_border_color_hover');
	register_setting('lps-settings-group', 'lps_login_bg_repeat');
	register_setting('lps-settings-group', 'lps_login_form_input_color_opacity');

	
	
}

add_action( 'admin_enqueue_scripts', 'wp_enqueue_color_picker' );
function wp_enqueue_color_picker( ) {
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'wp-color-picker-script', WP_PLUGIN_URL.'/login-page-styler/loginPageStyler.js', array( 'wp-color-picker' ), false, true );
}

 function lps_settings_page(){?>

<div class='wrap'> 
    <h2><?php _e('Login Page Styler')?></h2>
    <p><strong><?php _e('This plugin is created to help customizing login page  easily  and efficiently.
    This plugin helps you style  the appearance of your login page and makes it more stylish ')?></strong></p>
       <?php settings_errors(); ?>
       <form method="post" action="options.php" >
           <?php settings_fields('lps-settings-group');?>
           <table class="form-table">
		    

		    <tr valign='top'>
               <th scope="row"><?php _e('Login Page Settings');?></th>
		    </tr>


		    <tr valign='top'>
				<th scope='row'><?php _e('On/Off plugin');?></th>
				<td><label for='lps_login_on_off'>
				<input name="lps_login_on_off" type="checkbox" value= '1' <?php checked( 1,  get_option('lps_login_on_off') ); ?> />
				<p class="description"> <?php _e('Check it to On/Off plugin'); ?></p>
				</label>
				</td>
			</tr>

		    
			
			<tr valign='top'>
				<th scope='row'><?php _e('Hide Login Logo');?></th>
				<td><label for='lps_login_logo_hide'>
				<input name="lps_login_logo_hide" type="checkbox" value= '1' <?php checked( 1,  get_option('lps_login_logo_hide') ); ?> />
				<p class="description"> <?php _e('Check it to hide Login Logo'); ?></p>
				</label>
				</td>
			</tr>


			<tr valign='top'>
				<th scope='row'><?php _e('Hide Login Error Msg');?></th>
				<td><label for='lps_login_logo_msg_hide'>
				<input name="lps_login_logo_msg_hide" type="checkbox" value= '1' <?php checked( 1,  get_option('lps_login_logo_msg_hide') ); ?> />
				<p class="description"> <?php _e('Check it to hide Login Error msg'); ?></p>
				</label>
				</td>
			</tr>



			<tr valign='top'>
				<th scope='row'><?php _e('Hide Navigation Links');?></th>
				<td><label for='lps_login_nav_link_hide'>
				<input name="lps_login_nav_link_hide" type="checkbox" value= '1' <?php checked( 1,  get_option('lps_login_nav_link_hide') ); ?> />
				<p class="description"> <?php _e('Check it to hide Navigation Link'); ?></p>
				</label>
				</td>
			</tr>


			<tr valign='top'>
				<th scope='row'><?php _e('Hide Back to Blog Links');?></th>
				<td><label for='lps_login_blog_link_hide'>
				<input name="lps_login_blog_link_hide" type="checkbox" value= '1' <?php checked( 1,  get_option('lps_login_blog_link_hide') ); ?> />
				<p class="description"> <?php _e('Check it to hide Back to Blog Link'); ?></p>
				</label>
				</td>
			</tr>


			<tr valign="top">
			  <th scope="row"><?php _e('Logo Link'); ?></th>
			  <td><label for="lps_login_logo_link">
				  <input type="text" id="lps_login_logo_link"  name="lps_login_logo_link" value="<?php echo get_option( 'lps_login_logo_link' ); ?>" />
				  <p class="description"><?php _e( 'Enter site url eg: www.google.com'); ?></p>
				  </label>
			 </td>
		    </tr>


		    <tr valign="top">
			  <th scope="row"><?php _e('Logo Tittle'); ?></th>
			  <td><label for="lps_login_logo_tittle">
				  <input type="text" id="lps_login_logo_tittle"  name="lps_login_logo_tittle" value="<?php echo get_option( 'lps_login_logo_tittle' ); ?>" />
				  <p class="description"><?php _e( 'Enter Tittle for logo eg:Powered by abcd '); ?></p>
				  </label>
			 </td>
		    </tr>


		    <tr valign="top">
			  <th scope="row"><?php _e('Login Logo'); ?></th>
			  <td><label for="lps_login_logo">
				  <input type="text" id="lps_login_logo"  name="lps_login_logo"  value="<?php echo get_option( 'lps_login_logo' ); ?>" />
				  <p class="description"><?php _e( 'Enter URL for logo'); ?></p>
				 </lable>
			 </td>
		    </tr>


		    <tr valign="top">
			  <th scope="row"><?php _e('Login Logo Width'); ?></th>
			  <td><label for="lps_login_logo_width">
				  <input type="text" id="lps_login_logo_width"  name="lps_login_logo_width"  value="<?php echo get_option( 'lps_login_logo_width' ); ?>" />
				  <p class="description"><?php _e( 'Enter logo width'); ?></p>
				 </lable>
			 </td>
		    </tr>


		    <tr valign="top">
			  <th scope="row"><?php _e('Login Logo Height'); ?></th>
			  <td><label for="lps_login_logo_height">
				  <input type="text" id="lps_login_logo_height"  name="lps_login_logo_height"  value="<?php echo get_option( 'lps_login_logo_height' ); ?>" />
				  <p class="description"><?php _e( 'Enter logo height'); ?></p>
				 </lable>
			 </td>
		    </tr>


		    <tr valign="top">
			  <th scope="row"><?php _e('Login Body Background Image'); ?></th>
			  <td><label for="lps_body_bg_img">
				  <input type="text" id="lps_body_bg_img"  name="lps_body_bg_img" size"50" value="<?php echo get_option( 'lps_body_bg_img' ); ?>" />
				  <p class="description"><?php _e( 'Enter URL for background image'); ?></p>
				  </label>
			 </td>
		    </tr>


            <tr valign="top">
			  <th scope="row"><?php _e('Login Body Background Image Repeat'); ?></th>
			  <td><label for="lps_body_bg_repeat">
				  <select name='lps_login_bg_repeat'>
					     <option value='no-repeat' <?php selected( get_option('lps_login_bg_repeat'),'no-repeat'); ?> >No Repeat</option>
                         <option value='repeat-x' <?php selected( get_option('lps_login_bg_repeat'),'repeat-x'); ?> >Repeat X</option>
                         <option value='repeat-y' <?php selected( get_option('lps_login_bg_repeat'),'repeat-y'); ?> >Repeat Y</option>
				  </select>
				  <p class="description"><?php _e('Backgroun image repeat');?></p>
		          </label>
			 </td>
		    </tr>


			
		    <tr valign="top">
			  <th scope="row"><?php _e( 'Background Color' ); ?></th>
			  <td><label for="lps_login_background_color">
				  <input type="text" class="color-picker" id="lps_login_background_color"  name="lps_login_background_color" value="<?php echo get_option( 'lps_login_background_color' ); ?>" />
				  <p class="description"><?php _e( 'Change background color'); ?></p>
				  </label>
			 </td>
		    </tr>



			<tr>
				<th scope='row'><?php _e('Login Form Color');?></th>
				<td><label for='lps_login_form_color'>
					<input type='text' class='color-picker' id='lps_login_form_color' name='lps_login_form_color' value='<?php echo get_option('lps_login_form_color' ); ; ?>'/>
					<p class='description'><?php _e('Change Form color') ;?></p>
				</label>
				</td>
			</tr>


			<tr>
				<th scope='row'><?php _e('Login Form Background Color with Opacity');?></th>
				<td><label for='lps_login_form_color_opacity'>
					<input type='text' id='lps_login_form_color_opacity' name='lps_login_form_color_opacity' value='<?php echo get_option('lps_login_form_color_opacity' ); ; ?>'/>
					<p class='description'> <?php _e( 'Add RGBA color value eg: 255 , 255 , 255 ,0.5 last value in decimal is the Opacity '); ?></p>
				</label>
				</td>
			</tr>
 


			<tr valign='top'>
				<th scope='row'><?php _e('Login Form Border Radius');?></th>
				<td><label for='lps_login_form_border_radius'>
					<input type='text' id='lps_login_form_border_radius' name='lps_login_form_border_radius' value='<?php echo get_option('lps_login_form_border_radius' ); ; ?>'/>
					<p class="description"><?php _e('Add login form border radius with px eg: 10px '); ?></p>
				</label>
				</td>
			</tr>


			<tr>
				<th scope='row'><?php _e('Login Form Border Color');?></th>
				<td><label for='lps_login_form_border_color'>
					<input type='text' class='color-picker' id='lps_login_form_border_color' name='lps_login_form_border_color' value='<?php echo get_option('lps_login_form_border_color' ); ; ?>'/>
					<p class='description'><?php _e('Change Form  color') ;?></p>
				</label>
				</td>
			</tr>



			<tr valign='top'>
				<th scope='row'><?php _e('Login Form Input Field Border Radius');?></th>
				<td><label for='lps_login_form_input_feild_border_radius'>
					<input type='text' id='lps_login_form_input_feild_border_radius' name='lps_login_form_input_feild_border_radius' value='<?php echo get_option('lps_login_form_input_feild_border_radius' ); ; ?>'/>
					<p class="description"><?php _e( 'Add login form input field border radius with px eg:10px '); ?></p>
				</label>
				</td>
			</tr>


			<tr valign='top'>
				<th scope='row'><?php _e('Login Form Input Field Border Color');?></th>
				<td><label for='lps_login_form_input_feild_border_color'>
					<input type='text' class='color-picker' id='lps_login_form_input_feild_border_color' name='lps_login_form_input_feild_border_color' value='<?php echo get_option('lps_login_form_input_feild_border_color' ); ; ?>'/>
					<p class="description"><?php _e('Change login form input field border color'); ?></p>
				</label>
				</td>
			</tr>


			<tr>
				<th scope='row'><?php _e('Login Form Input Field Color with Opacity');?></th>
				<td><label for='lps_login_form_input_color_opacity'>
					<input type='text' id='lps_login_form_input_color_opacity' name='lps_login_form_input_color_opacity' value='<?php echo get_option('lps_login_form_input_color_opacity' ); ; ?>'/>
					<p class='description'> <?php _e( 'Add RGBA color value eg: 255 , 255 , 255 ,0.5 last value in decimal is the Opacity '); ?></p>
				</label>
				</td>
			</tr>



			<tr valign='top'>
				<th scope='row'><?php _e('Login Button Border Radius');?></th>
				<td><label for='lps_login_button_border_radius'>
					<input type='text' id='lps_login_button_border_radius' name='lps_login_button_border_radius' value='<?php echo get_option('lps_login_button_border_radius' ); ; ?>'/>
					<p class="description"><?php _e('Add login button border radius with px eg:10px'); ?></p>
				</label>
				</td>
			</tr>




			<tr valign='top'>
				<th scope='row'><?php _e('Login Form Label Size');?></th>
				<td><label for='lps_login_label_size'>
					<input type='text'  id='lps_login_label_size' name='lps_login_label_size' value='<?php echo get_option('lps_login_label_size'); ?>' /> 
					<p class='description'> <?php _e( 'Change form label size , add size with px'); ?></p>
				    </label>
			    </td>
			</tr>


			<tr valign='top'>
				<th scope='row'><?php _e('Login Form  Remember Me Label Size');?></th>
				<td><label for='lps_login_remember_label_size'>
					<input type='text'  id='lps_login_remember_label_size' name='lps_login_remember_label_size' value='<?php echo get_option('lps_login_remember_label_size'); ?>' /> 
					<p class='description'> <?php _e( 'Change login form remember me label size , add size with px'); ?></p>
				    </label>
			    </td>
			</tr>


			<tr valign='top'>
				<th scope='row'><?php _e('Label Color');?></th>
				<td><label for='lps_login_label_color'>
					<input type='text' class='color-picker' id='lps_login_label_color' name='lps_login_label_color' value='<?php echo get_option('lps_login_label_color'); ?>' /> 
					<p class='description'> <?php _e( 'Change form label color'); ?></p>
				    </label>
			    </td>
			</tr>

 
            <tr valign='top'>
				<th scope='row'><?php _e('Login Button Color');?></th>
				<td><label for='lps_login_button_color'>
					<input type='text' class='color-picker' id='lps_login_button_color' name='lps_login_button_color' value='<?php echo get_option('lps_login_button_color'); ?>' /> 
					<p class='description'> <?php _e( 'Change login button color'); ?></p></br>
					<p class='description'><?php _e('Border Color');?></p><input type='text' class='color-picker' id='lps_login_button_border_color' name='lps_login_button_border_color' value='<?php echo get_option('lps_login_button_border_color'); ?>' /></br></br>
					<p class='description'><?php _e('Text Color');?></p><input type='text' class='color-picker' id='lps_login_button_text_color' name='lps_login_button_text_color' value='<?php echo get_option('lps_login_button_text_color'); ?>' />
				    </label>
			    </td>
			</tr>


			<tr valign='top'>
				<th scope='row'><?php _e('Login Button Color Hover');?></th>
				<td><label for='lps_login_button_color_hover'>
					<input type='text' class='color-picker' id='lps_login_button_color_hover' name='lps_login_button_color_hover' value='<?php echo get_option('lps_login_button_color_hover'); ?>' /> 
					<p class='description'> <?php _e( 'Change login button color'); ?></p></br>
					<p class='description'><?php _e('Border Color Hover');?></p><input type='text' class='color-picker' id='lps_login_button_border_color_hover' name='lps_login_button_border_color_hover' value='<?php echo get_option('lps_login_button_border_color_hover'); ?>' /></br></br>
					<p class='description'><?php _e('Text Color Hover');?></p><input type='text' class='color-picker' id='lps_login_button_text_color_hover' name='lps_login_button_text_color_hover' value='<?php echo get_option('lps_login_button_text_color_hover'); ?>' />
				    </label>
			    </td>
			</tr>



			<tr vlaign='top'>
				<th scope='row'><?php _e('Navigation Links Color');?></th>
				<td><label for='lps_login_nav_color'>
					<input type='text' class='color-picker' id='lps_login_nav_color' name='lps_login_nav_color' value='<?php echo get_option('lps_login_nav_color' ); ; ?>'/>
					<p class="description"><?php _e('Change navigation link color'); ?></p>
				</label>
				</td>
			</tr>

			
			<tr valign='top'>
				<th scope='row'><?php _e('Navigation Hover Links Color');?></th>
				<td><label for='lps_login_nav_hover_color'>
					<input type='text' class='color-picker' id='lps_login_nav_hover_color' name='lps_login_nav_hover_color' value='<?php echo get_option('lps_login_nav_hover_color' ); ; ?>'/>
					<p class="description"><?php _e('Change navigiation link hover color'); ?></p>
				</label>
				</td>
			</tr>



			<tr valign='top'>
				<th scope='row'><?php _e('Change Login Form Position');?></th>
				<td><label for='lps_login_form_position'>
				<select name="lps_login_form_position">
					<option value='1' <?php selected( get_option('lps_login_form_position'),'1'); ?> >Middle-Center</option>
					<option value='2' <?php selected( get_option('lps_login_form_position'),'2' ); ?> >Middle-Left</option>
					<option value='3' <?php selected( get_option('lps_login_form_position'),'3' ); ?> >Middle-Right</option>
					<option value='4' <?php selected( get_option('lps_login_form_position'),'4' ); ?> >Top-Center</option>
					<option value='5' <?php selected( get_option('lps_login_form_position'),'5' ); ?> >Top-Left</option>
					<option value='6' <?php selected( get_option('lps_login_form_position'),'6' ); ?> >Top-Right</option>
					<option value='7' <?php selected( get_option('lps_login_form_position'),'7' ); ?> >Bottom-Center</option>
					<option value='8' <?php selected( get_option('lps_login_form_position'),'8' ); ?> >Bottom-Left</option>
					<option value='9' <?php selected( get_option('lps_login_form_position'),'9' ); ?> >Bottom-Right</option>

				</select>
				<p class="description"> <?php _e('Select option to change Login Form Position'); ?></p>
				<p class="description"> <?php _e('Bottom positioning works fine with hidden error msg and hidden links'); ?></p>
				</label>
				</td>
			</tr>



            <tr valign="top">
				<th scope="row"><?php _e( 'Custom Css') ?></th>
				<td><label for="lps_login_custom_css">
					<textarea cols="80" rows="7" id="lps_login_custom_css"  name="lps_login_custom_css" ><?php echo get_option( 'lps_login_custom_css' ); ?> </textarea>
					<p class='description'> <?php _e('Add styling inside this text area');?></p>
					</label>
				</td>
			</tr>



           </table>
           <p class="submit">
			<input type="submit" class="button-primary" value="<?php _e( 'Save Changes' ); ?>" />
		</p>

       </form>    

</div>
<?php }; ?>
