<h4>
 hello ! These are public properties of widget
</h4>
<ul>
	<li>controller: <?php echo get_class($this->controller); ?></li>
	<li>actionPrefix: <?php echo $this->actionPrefix;?></li>
	<li>id: <?php echo $this->id;?></li>
	<li>owner: <?php echo get_class($this->owner);?></li>
	<li>skin: <?php echo $this->skin;?></li>
	<li>viewPath: <?php echo $this->viewPath;?></li>
	<li> <h4>porlet public properties</h4></li>
	<li>contentCssClass: <?php echo $this->contentCssClass;?></li>
	<li>decorationCssClass: <?php echo $this->decorationCssClass;?></li>
	<li>hideOnEmpty: <?php echo $this->hideOnEmpty;?> </li>
	<li>htmlOptions: <?php echo '<pre>'.print_r($this->htmlOptions,true).'</pre>';?></li>
	<li>tagName: <?php echo $this->tagName;?></li>
	<li>title: <?php echo $this->title?> </li>
	<li>titleCssClass: <?php echo $this->titleCssClass; ?> </li>
</ul>