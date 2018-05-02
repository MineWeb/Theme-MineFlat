<div id="heading-breadcrumbs">
  <div class="container">
    <div class="row">
    </div>
  </div>
</div>
<div id="content">
  <section class="bar background-white">
    <div class="container vote">
  	  <div class="row">
  		  <div class="col-md-12">
  		    <div class="col-md-12">
                  <div class="row">
                      <div class="col-md-12"><h2 class="border-blue"><?= $Lang->get('STAFF__RANK_1') ?></h2></div>
                  </div>
                  <div class="row">
                        <?php foreach($users as $k=>$v): $v = current($v); ?>
                            <?php
                                if($v['rank'] == 4)
                                {
                                    echo '<div class="col-md-3 col-sm-3">
  		                        <div class="box-image-text blog">
  		                            <div class="box-staff">
  		                                <h4 class="pseudo-staff">'.$v["pseudo"].'</h4>
  		                                <img src="https://visage.surgeplay.com/bust/144/'.$v["pseudo"].'" alt="" width="144" height="144" style="margin: 0 0 0 50px;" /><br />
  		                                <p class="author-category">'.$v["pseudo"].' '.$Lang->get("STAFF__DESC_1").'</p>
  		                            </div>
  		                        </div>
  		                    </div>';
                                }else{
                                    echo "";
					            }
                            ?>
						<?php endforeach; ?>
  		            </div>
  		    </div>
  		    <div class="col-md-12">
                  <div class="row">
                      <div class="col-md-12"><h2 class="border-blue"><?= $Lang->get('STAFF__RANK_2') ?></h2></div>
                  </div>
  		            <div class="row">
  		                <?php foreach($users as $k=>$v2): $v2 = current($v2); ?>
                            <?php
                                if($v2['rank'] == 3)
                                {
                                    echo '<div class="col-md-3 col-sm-3">
  		                        <div class="box-image-text blog">
  		                            <div class="box-staff">
  		                                <h4 class="pseudo-staff">'.$v2["pseudo"].'</h4>
  		                                <img src="https://visage.surgeplay.com/bust/144/'.$v2["pseudo"].'" alt="" width="144" height="144" style="margin: 0 0 0 50px;" /><br />
  		                                <p class="author-category">'.$v2["pseudo"].' '.$Lang->get("STAFF__DESC_2").'</p>
  		                            </div>
  		                        </div>
  		                    </div>';
                                }else{
                                    echo "";
					            }
                            ?>
						<?php endforeach; ?>
  		          </div>
  		    </div>
  		    <div class="col-md-12">
      		        <div class="row">
      		            <div class="col-md-12"><h2 class="border-blue"><?= $Lang->get('STAFF__RANK_3') ?></h2></div>
      		        </div>
  		            <div class="row">

  		                 <?php foreach($users as $k=>$v3): $v3 = current($v3); ?>
                            <?php
                                if($v3['rank'] == 2)
                                {
                                    echo '<div class="col-md-3 col-sm-3">
  		                        <div class="box-image-text blog">
  		                            <div class="box-staff">
  		                                <h4 class="pseudo-staff">'.$v3["pseudo"].'</h4>
  		                                <img src="https://visage.surgeplay.com/bust/144/'.$v3["pseudo"].'" alt="" width="144" height="144" style="margin: 0 0 0 50px;" /><br />
  		                                <p class="author-category">'.$v3["pseudo"].' '.$Lang->get("STAFF__DESC_3").'</p>
  		                            </div>
  		                        </div>
  		                    </div>';
                                }else{
                                    echo "";
					            }
                            ?>
						<?php endforeach; ?>
  		            </div>
  		    </div>
          <div class="col-md-4">
            <h6 class="sm-txt">Par <?= $Lang->get('STAFF__AUTEUR') ?>, design par Narty</h6>
          </div>
            </div>
  		</div>
    </div>
  </section>
</div>