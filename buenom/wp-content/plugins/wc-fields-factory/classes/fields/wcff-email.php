<?php 
/**
 * @author 		: Saravana Kumar K
 * @author url  : iamsark.com
 * @copyright	: sarkware.com
 * Class which responsible for creating and maintaining email field ( for both Product, Admin, as well as email fields's meta section )
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

class wcff_field_email extends wcff_field {
	
	function __construct() {
		$this->name 		= 'email';
		$this->label 		= "Email";
		$this->required 	= false;
		$this->valid		= true;
		$this->message 		= "This field can't be Empty";
		$this->params 		= array(
			'placeholder'	=>	'',
			'default_value'	=>	''
		);	
		parent::__construct();
	}
	
	function render_wcff_setup_fields( $type = "wccpf" ) { ob_start(); ?>
	
		<tr>
			<td class="summary">
				<label for="post_type"><?php _e( 'Required', 'wc-fields-factory' ); ?></label>
				<p class="description"><?php _e( 'Is this field Mandatory', 'wc-fields-factory' ); ?></p>
			</td>
			<td>
				<div class="wcff-field-types-meta" data-type="radio" data-param="required">
					<ul class="wcff-field-layout-horizontal">
						<li><label><input type="radio" name="wcff-field-type-meta-required" value="yes" /> <?php _e( 'Yes', 'wc-fields-factory' ); ?></label></li>
						<li><label><input type="radio" name="wcff-field-type-meta-required" value="no" checked/> <?php _e( 'No', 'wc-fields-factory' ); ?></label></li>
					</ul>						
				</div>
			</td>
		</tr>
		
		<tr>
			<td class="summary">
				<label for="post_type"><?php _e( 'Message', 'wc-fields-factory' ); ?></label>
				<p class="description"><?php _e( 'Message to display whenever the validation failed', 'wc-fields-factory' ); ?></p>
			</td>
			<td>
				<div class="wcff-field-types-meta" data-type="text" data-param="message">
					<input type="text" id="wcff-field-type-meta-message" value="<?php echo esc_attr( $this->message ); ?>" />						
				</div>
			</td>
		</tr>	
		
		<?php if( $type == "wccaf" ) : ?>
		
		<tr>
			<td class="summary">
				<label for="post_type"><?php _e( 'Show on Product Page', 'wc-fields-factory' ); ?></label>
				<p class="description"><?php _e( 'Whether to show this custom field on front end product page.', 'wc-fields-factory' ); ?></p>
			</td>
			<td>
				<div class="wcff-field-types-meta" data-type="radio" data-param="show_on_product_page">
					<ul class="wcff-field-layout-vertical">
						<li><label><input type="radio" name="wcff-field-type-meta-show_on_product_page" value="yes" /> <?php _e( 'Show in Product Page', 'wc-fields-factory' ); ?></label></li>
						<li><label><input type="radio" name="wcff-field-type-meta-show_on_product_page" value="no" checked /> <?php _e( 'Hide in Product Page', 'wc-fields-factory' ); ?></label></li>							
					</ul>						
				</div>
			</td>
		</tr>
		
		<?php endif; ?>
		
		<tr>
			<td class="summary">
				<?php if( $type == "wccpf" ) : ?>
				<label for="post_type"><?php _e( 'Visibility', 'wc-fields-factory' ); ?></label>
				<?php else: ?>
				<label for="post_type"><?php _e( 'Show on Cart & Checkout', 'wc-fields-factory' ); ?></label>
				<?php endif; ?>
				<p class="description"><?php _e( 'Whether to show this custom field on Cart & Checkout page.', 'wc-fields-factory' ); ?></p>
			</td>
			<td>
				<div class="wcff-field-types-meta" data-type="radio" data-param="visibility">
					<ul class="wcff-field-layout-vertical">
						<li><label><input type="radio" name="wcff-field-type-meta-visibility" value="yes" <?php echo ( $type == "wccpf" ) ? "checked" : ""; ?> /> <?php _e( 'Show in Cart & Checkout Page', 'wc-fields-factory' ); ?></label></li>
						<li><label><input type="radio" name="wcff-field-type-meta-visibility" value="no" <?php echo ( $type == "wccaf" ) ? "checked" : ""; ?> /> <?php _e( 'Hide in Cart & Checkout Page', 'wc-fields-factory' ); ?></label></li>							
					</ul>						
				</div>
			</td>
		</tr>
		
		<tr>
			<td class="summary">
				<label for="post_type"><?php _e( 'Order Item Meta', 'wc-fields-factory' ); ?></label>
				<p class="description"><?php _e( 'Whether to add this custom field to Order & Email.', 'wc-fields-factory' ); ?></p>
			</td>
			<td>
				<div class="wcff-field-types-meta" data-type="radio" data-param="order_meta">
					<ul class="wcff-field-layout-vertical">
						<li><label><input type="radio" name="wcff-field-type-meta-order_meta" value="yes" <?php echo ( $type == "wccpf" ) ? "checked" : ""; ?> /> <?php _e( 'Add as Order Meta', 'wc-fields-factory' ); ?></label></li>
						<li><label><input type="radio" name="wcff-field-type-meta-order_meta" value="no" <?php echo ( $type == "wccaf" ) ? "checked" : ""; ?> /> <?php _e( 'Do not add', 'wc-fields-factory' ); ?></label></li>							
					</ul>						
				</div>
			</td>
		</tr>
		
		<tr>
			<td class="summary">
				<label for="post_type"><?php _e( 'Place Holder', 'wc-fields-factory' ); ?></label>
				<p class="description"><?php _e( 'Place holder text for this Text Box', 'wc-fields-factory' ); ?></p>
			</td>
			<td>
				<div class="wcff-field-types-meta" data-type="text" data-param="placeholder">
					<input type="text" id="wcff-field-type-meta-placeholder" value="" />
				</div>
			</td>
		</tr>
		
		<tr>
			<td class="summary">
				<label for="post_type"><?php _e( 'Default Value', 'wc-fields-factory' ); ?></label>
				<p class="description"><?php _e( 'Default value for this email box', 'wc-fields-factory' ); ?></p>
			</td>
			<td>
				<div class="wcff-field-types-meta" data-type="text" data-param="default_value">
					<input type="text" id="wcff-field-type-meta-default_value" value="" />
				</div>
			</td>
		</tr>
		<tr>
			<td class="summary">
				<label for="post_type"><?php _e( 'Show login user only', 'wc-fields-factory' ); ?></label>
				<p class="description"><?php _e( 'Show this field only if user has logged-in', 'wc-fields-factory' ); ?></p>
			</td>
			<td>
				<div class="wcff-field-types-meta" data-type="radio" data-param="login_user_field">
					<ul class="wcff-field-layout-vertical">
						<li><label><input type="radio" name="wcff-field-type-meta-login_user_field" value="yes" /> <?php _e( 'Yes', 'wc-fields-factory' ); ?></label></li>
						<li><label><input type="radio" name="wcff-field-type-meta-login_user_field" value="no" checked /> <?php _e( 'No', 'wc-fields-factory' ); ?></label></li>							
					</ul>						
				</div>
			</td>
		</tr>
		
		<?php if( $type == "wccaf" ) : ?>
		
		<tr>
			<td class="summary">
				<label for="post_type"><?php _e( 'Read Only', 'wc-fields-factory' ); ?></label>
				<p class="description"><?php _e( 'Show this field as readonly on front end product page.', 'wc-fields-factory' ); ?></p>
			</td>
			<td>
				<div class="wcff-field-types-meta" data-type="radio" data-param="show_as_read_only">
					<ul class="wcff-field-layout-vertical">
						<li><label><input type="radio" name="wcff-field-type-meta-show_as_read_only" value="yes" /> <?php _e( 'Show as Read Only', 'wc-fields-factory' ); ?></label></li>
						<li><label><input type="radio" name="wcff-field-type-meta-show_as_read_only" value="no" checked /> <?php _e( 'Show as Normal', 'wc-fields-factory' ); ?></label></li>													
					</ul>						
				</div>
			</td>
		</tr>		
		
		<tr>
			<td class="summary">
				<label for="post_type"><?php _e( 'Tips', 'wc-fields-factory' ); ?></label>
				<p class="description"><?php _e( 'Whether to show tool tip icon or not', 'wc-fields-factory' ); ?></p>
			</td>
			<td>
				<div class="wcff-field-types-meta" data-type="radio" data-param="desc_tip">
					<ul class="wcff-field-layout-horizontal">
						<li><label><input type="radio" name="wcff-field-type-meta-desc_tip" value="yes" /> <?php _e( 'Yes', 'wc-fields-factory' ); ?></label></li>
						<li><label><input type="radio" name="wcff-field-type-meta-desc_tip" value="no" checked/> <?php _e( 'No', 'wc-fields-factory' ); ?></label></li>
					</ul>						
				</div>
			</td>
		</tr>
					
		<tr>
			<td class="summary">
				<label for="post_type"><?php _e( 'Description', 'wc-fields-factory' ); ?></label>
				<p class="description"><?php _e( 'Description about this field, if user clicked tool tip icon', 'wc-fields-factory' ); ?></p>
			</td>
			<td>
				<div class="wcff-field-types-meta" data-type="textarea" data-param="description">
					<textarea rows="4" id="wcff-field-type-meta-description"></textarea>	
				</div>
			</td>
		</tr>
		
		<?php 
		endif;
		return ob_get_clean();
	}
	
	function render_product_field( $field ) { 
		
		$wccpf_options = wcff()->option->get_options();
		$fields_cloning = isset( $wccpf_options["fields_cloning"] ) ? $wccpf_options["fields_cloning"] : "no";
		$name_index = $fields_cloning == "yes" ? "_1" : "";
		
		$readonly = isset( $field["show_as_read_only"] ) ? $field["show_as_read_only"] : "no";
		$readonly = ( $readonly == "yes" ) ? "disabled" : "";
		if( isset( $field["login_user_field"] ) ){
			if( $field["login_user_field"] == "yes" ){
				if( !is_user_logged_in() ){
					return;
				}
			}
		}
		ob_start(); ?>
	
		<?php if( has_action('wccpf/before/field/rendering' ) && has_action('wccpf/after/field/rendering' ) ) : ?>
		
			<?php do_action( 'wccpf/before/field/rendering', $field ); ?>
			
			<input type="email" class="wccpf-field" name="<?php echo esc_attr( $field["name"] . $name_index ); ?>" placeholder="<?php echo esc_attr( $field["placeholder"] ); ?>" wccpf-type="email" wccpf-pattern="email" wccpf-mandatory="<?php echo $field["required"]; ?>" <?php echo $readonly; ?> value="<?php echo $field["default_value"]; ?>" />
			<span class="wccpf-validation-message wccpf-is-valid-<?php echo $this->valid; ?>"><?php echo $field["message"]; ?></span>
			
			<?php do_action( 'wccpf/after/field/rendering', $field ); ?>
		
		<?php else : ?>
		
		<table class="wccpf_fields_table <?php echo apply_filters( 'wccpf/fields/container/class', '' ); ?>" cellspacing="0">
			<tbody>
				<tr>
					<td class="wccpf_label"><label for="<?php echo esc_attr( $field["name"] . $name_index ); ?>"><?php echo esc_html( $field["label"] ); ?><?php echo ( isset( $field["required"] ) && $field["required"] == "yes" ) ? ' <span>*</span>' : ''; ?></label></td>
					<td class="wccpf_value">
						<input type="email" class="wccpf-field" name="<?php echo esc_attr( $field["name"] . $name_index ); ?>" placeholder="<?php echo esc_attr( $field["placeholder"] ); ?>" wccpf-type="email" wccpf-pattern="email" wccpf-mandatory="<?php echo $field["required"]; ?>" <?php echo $readonly; ?> value="<?php echo $field["default_value"]; ?>" />
						<span class="wccpf-validation-message wccpf-is-valid-<?php echo $this->valid; ?>"><?php echo $field["message"]; ?></span>
					</td>
				</tr>
			</tbody>
		</table>	
		
		<?php endif; ?>
		
	<?php return ob_get_clean();
	}

	function render_admin_field( $field ) { ob_start(); 
	
		if( $field["location"] != "product_cat_add_form_fields" && $field["location"] != "product_cat_edit_form_fields" ) {
	
		?>
	
		<p class="form-field <?php echo esc_attr( $field['name'] ); ?>_field ">
			<label for="<?php echo esc_attr( $field['name'] ); ?>"><?php echo wp_kses_post( $field['label'] ); ?><?php echo ( isset( $field["required"] ) && $field["required"] == "yes" ) ? ' <span>*</span>' : ''; ?></label>
			<input type="email" name="<?php echo esc_attr( $field['name'] ); ?>" id="<?php echo esc_attr( $field['name'] ); ?>" value="<?php echo esc_attr( $field['value'] ); ?>" placeholder="<?php echo esc_attr( $field['placeholder'] ); ?>" class="wccaf-field" wccaf-type="email" wccaf-pattern="mandatory" wccaf-mandatory="<?php echo $field["required"]; ?>" />
			<?php 
			if ( !empty( $field['description'] ) ) :
				if ( isset( $field['desc_tip'] ) && "no" != $field['desc_tip'] ) : ?>
					<img class="help_tip" data-tip="<?php echo wp_kses_post( $field['description'] ); ?>" src="<?php echo esc_url( wcff()->info["dir"] ); ?>/assets/images/help.png" height="16" width="16" />
				<?php else : ?>
					<span class="description"><?php echo wp_kses_post( $field['description'] ); ?></span>
			<?php 
			endif;
			endif; ?>	
			<span class="wccaf-validation-message wccaf-is-valid-<?php echo $this->valid; ?>"><?php echo $field["message"]; ?></span>	
		</p>
	
		<?php
		
		} else if( $field["location"] == "product_cat_add_form_fields" ) { ?>
			
		<div class="form-field">
			<label for="<?php echo esc_attr( $field['name'] ); ?>"><?php echo wp_kses_post( $field['label'] ); ?><?php echo ( isset( $field["required"] ) && $field["required"] == "yes" ) ? ' <span>*</span>' : ''; ?></label>
			<input type="email" name="<?php echo esc_attr( $field['name'] ); ?>" id="<?php echo esc_attr( $field['name'] ); ?>" value="<?php echo esc_attr( $field['value'] ); ?>" placeholder="<?php echo esc_attr( $field['placeholder'] ); ?>" class="wccaf-field" wccaf-type="email" wccaf-pattern="mandatory" wccaf-mandatory="<?php echo $field["required"]; ?>" />
			<p class="description"><?php echo wp_kses_post( $field['description'] ); ?></p>
			<span class="wccaf-validation-message wccaf-is-valid-<?php echo $this->valid; ?>"><?php echo $field["message"]; ?></span>
		</div>
			
		<?php 
			
		} else if( $field["location"] == "product_cat_edit_form_fields" ) { ?>
		
		<tr class="form-field">
			<th scope="row" valign="top"><label for="<?php echo esc_attr( $field['name'] ); ?>"><?php echo wp_kses_post( $field['label'] ); ?><?php echo ( isset( $field["required"] ) && $field["required"] == "yes" ) ? ' <span>*</span>' : ''; ?></label></th>
			<td>
				<input type="email" name="<?php echo esc_attr( $field['name'] ); ?>" id="<?php echo esc_attr( $field['name'] ); ?>" value="<?php echo esc_attr( $field['value'] ); ?>" placeholder="<?php echo esc_attr( $field['placeholder'] ); ?>" class="wccaf-field" wccaf-type="email" wccaf-pattern="mandatory" wccaf-mandatory="<?php echo $field["required"]; ?>" />
				<p class="description"><?php echo wp_kses_post( $field['description'] ); ?></p>
				<span class="wccaf-validation-message wccaf-is-valid-<?php echo $this->valid; ?>"><?php echo $field["message"]; ?></span>
			</td>
		</tr>
			
		<?php 
		
		}		
		
		return ob_get_clean();
	}
	
	function validate( $val ) {
		if( !filter_var( $val, FILTER_VALIDATE_EMAIL ) === false ) { 
			return true; 
		} else { 
			return false; 
		}
	}
	
}

new wcff_field_email();

?>