<?php defined( 'ABSPATH' ) or die(''); ?>
<div class="the-add-template" style="clear:both;float:left; margin:10px 3px;">
	<a class="wps_add_template btn btn-primary wps-btn wps-btn-blue">Add Template</a>
</div>
<div class="the-template-content" style="clear:both;display:table;margin:10px 3px;">
	<?php echo self::getHtml('_tabsection_templates_ajax'); ?>
</div>