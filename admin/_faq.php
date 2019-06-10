		<div class="wide">
			<?php include('_left.php'); ?>
			<div class="r-740<?php if($additional[29]==1){ ?> w-1024<?php } ?>">
				<div class="tree"><a href="/">Главная</a>/<a><?=$seo['menu']?></a></div>
				<div class="pagetext">
					<h1><?=$seo["h1"]?><a class="nap ask-quest">Написать</a></h1>
					<?=$seo["text"]?>
                    <?php
                    $p = $_GET['p']>1?$_GET['p']:1;
                    $onpage = 1000;
                    $goods_r = mysql_query("SELECT * FROM ".MySQLprefix."_faq WHERE st!=0 ORDER BY id ASC LIMIT ".(($p-1)*$onpage).", ".$onpage);
                    if($goods_r && mysql_num_rows($goods_r)>0)
                        while($good = mysql_fetch_assoc($goods_r)){
                            ?>
                            <div class="testimonial post-<?=$good['id']?>">
                                <div class="testimonial-inner">
                                    <div class="testimonial-content">
                                        <div class="testimonial-image">
                                            <img width="125" height="125" src="/<?=$good['logo']?>" class="attachment-125x125 size-125x125 wp-post-image" alt="" sizes="(max-width: 125px) 100vw, 125px" />
                                        </div>
                                        <span class="testimonial-name"><?=$good['name']?></span>
                                        <span class="testimonial-city"><?=$good['city']?></span>
                                    </div>
                                    <div class="testimonial-client">
                                        <?=$good['text']?>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    ?>
				</div>
			</div>
		</div>