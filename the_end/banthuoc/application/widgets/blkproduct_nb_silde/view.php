
				 <?php foreach($pros as $p) : ?>
                <div class="item">
                        <div class="box_prod_home">
                            <a href="<?=base_url(@$p->pro_alias.'.html')?>" class="img_prod_home h_717"><img class="w_100" src="<?=base_url('upload/img/products/'.$p->pro_dir.'/thumbnail_1_'.@$p->pro_img)?>" alt="<?= ($p->pro_name); ?>"/></a>
                            <div class="clearfix"></div>
                            <h3 class="name_prod_home">
                                <a title="<?= ($p->pro_name); ?>" href="<?=base_url(@$p->pro_alias.'.html')?>"><?= ($p->pro_name); ?></a>
                            </h3>
                        </div>
                    </div>
                    
                  <?php endforeach;?>      
