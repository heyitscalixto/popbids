    <?php if(!empty($bottom_pages)):?>
      <ul class="ulfirst">
        <?php foreach($bottom_pages as $page):?>
      		<li>	
            <?php echo $html->link($page['Page']['name'], array('controller' => 'pages', 'action'=>'view', $page['Page']['slug'])); ?> 
            </li>
         
        <?php endforeach;?>
        </ul>         	
    <?php endif;?>