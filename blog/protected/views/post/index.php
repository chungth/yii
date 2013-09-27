<?php 
$this->renderPartial("_form",array('model'=>$model));
?>

<?php 
echo CHtml::button('loadPretty',array('onclick'=>'loadPretty()'))
?>
<div id="codefield">
<pre class="prettyprint"><code>
// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),
</code>
</pre>
</div>
<script type="text/javascript">
function loadPretty(){
	//$('.prettyprinted').removeClass('prettyprinted');
	$('#codefield').append("<pre>
			class Voila {
				public:
				  // Voila
				  static const string VOILA = "Voila";

				  // will not interfere with embedded tags.
				}
				</pre>");
	prettyPrint();
	
}

</script>