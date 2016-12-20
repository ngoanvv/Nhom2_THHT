<h3 class="title-category">
<i class="fa fa-bars" style="color:#fff" aria-hidden="true"></i>
<a href="" title=""><?=lang('catepro');?></a>
</h3>
<ul class="list-category">

<?php foreach($cate_all as $cat) : ?>
    <li>
    <h2 class="cate-item"><a href="<?=base_url($cat->alias.'.html')?>" title="<?=@$cat->name;?>"><?=@$cat->name;?></a></h2>
   
    <?php  foreach($cate_sub as $sub){
    
    if ($sub->parent_id == $cat->id) {?>
     <li>
     
     <a title="<?=@$sub->name;?>" href="<?=base_url($sub->alias.'.html')?>"> <?=@$sub->name;?> 
   
    </a>
    
   
    
    </li>
     <?php
    } }
    ?>
   
    </li>
    <?php endforeach;?>
    
    
	

</ul>


    <div class="clearfix"></div>