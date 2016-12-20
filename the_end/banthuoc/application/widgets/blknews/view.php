				
                               
                               
                                  
                                  <?php foreach($news as $n) : ?>
                                    <li><a title="<?= ($n->title); ?>" href="<?= base_url($n->alias.'.html') ?>"><?= ($n->title); ?></a></li>
                                     <?php endforeach;?>
                               
                          