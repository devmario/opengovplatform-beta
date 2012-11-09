<?php
// $Id: views-view-field.tpl.php,v 1.1 2008/05/16 22:22:32 merlinofchaos Exp $
 /**
  * This template is used to print a single field in a view. It is not
  * actually used in default Views, as this is registered as a theme
  * function which has better performance. For single overrides, the
  * template is perfectly okay.
  *
  * Variables available:
  * - $view: The view object
  * - $field: The field handler object that can process the input
  * - $row: The raw SQL result that can be used
  * - $output: The processed output that will normally be used.
  *
  * When fetching output from the $row, this construct should be used:
  * $data = $row->{$field->field_alias}
  *
  * The above will guarantee that you'll always get the correct data,
  * regardless of any changes in the aliasing that might happen if
  * the view is modified.
  */
?>
<?php 
$field->options["alt"]="$row->node_data_field_reference_dataset_field_image_description_value";
print '<a href="/test/trunk/node/'.$row->node_data_field_reference_dataset_field_reference_dataset_nid
.'" title=" $row->node_data_field_reference_dataset_field_image_description_value">' . $output.'</a>'; 
//print '<div id="views-slideshow-imageflow-images-1_caption" class="caption" classname="caption" style="width: 930px; padding-top: 19px;">my picture</div>';

//var_dump($row)

?>