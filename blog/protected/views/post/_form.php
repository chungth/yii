<?php $mySnippets = array(
    'Users' => array(
        'id1' => 'John',
        'id2' => 'Paul',
    ),
    'Phrases' => array(
        'Text Foo' => 'foo',
        'Text Bar' => 'bar'
    )
); ?>
<form method="post" action="">


<?php
 $this->widget(
    'application.extensions.ddeditor.DDEditor',
    array(
        'model'=>$model,
        'attribute'=>'content',
        'htmlOptions'=>array('rows'=>10, 'cols'=>70),
        'previewRequest'=>'post/preview',
        'additionalSnippets'=>array('My Snippets'=>$mySnippets),
	));
 echo  CHtml::submitButton('ok');
?>

</form>

<?php 
$parser=new CMarkdownParser;
$codeblk = '~~~~ [php] public function actionView($id){ $model= $this->loadModel($id); $this->render(\'view\',array(\'model\'=>$model)); } ~~~~';

echo $parser->safeTransform($codeblk);

?>
