<header id="top-header" class="header">
    <div class="header__info">
        <a href="/" class="header__info__logo">
            <img src="/<?=$additional[5]?>" alt="">
        </a>
        <div class="header__info__title">
            <span><?=$additional[3]?></span>
        </div>
        <div class="header__info__time">
            <span><b>Пн-Пт</b> с 10:00 до 20:00</span>
            <span><b>Сб</b> с 11:00 до 18:00</span>
        </div>
        <div class="header__info__phone">
            <?php $tel_cnt = explode("\r\n", $additional[4]); foreach($tel_cnt AS $tel_cnti){ ?>
                <a><b><?=$tel_cnti?></b></a>
            <?php } ?>
        </div>
        <div class="header__info__request">
            <a href="#callback"><button>Отправить заявку</button></a>
        </div>
    </div>
    <?php if($additional[30]==0){
    $result = mysql_query("SELECT url, menu, id, p_id FROM ".MySQLprefix."_mypages WHERE place='top' AND shows=1 AND id!=77 ORDER BY p_id ASC, sort_id ASC");
    if($result)
        while($row = mysql_fetch_assoc($result)){
            $treeid[] = $row["id"];
            $treename[] = $row["menu"];
            $treeurl[] = $row["url"];
            $treepid[] = $row["p_id"];
            $treelevel[] = 0;
        }
    $count = count($treeid);
    for($i=0; $i<$count-1; $i++){
        $g = $i;
        for($j=1; $j<$count; $j++)
            if($treepid[$j] == $treeid[$i]){
                $jid = $treeid[$j];
                $jpid = $treepid[$j];
                $jname = $treename[$j];
                $jurl = $treeurl[$j];
                $jlevel = $treelevel[$i]+1;
                $k = $j;
                while ($k>$g+1){
                    $treeid[$k] = $treeid[$k-1];
                    $treepid[$k] = $treepid[$k-1];
                    $treename[$k] = $treename[$k-1];
                    $treeurl[$k] = $treeurl[$k-1];
                    $treelevel[$k] = $treelevel[$k-1];
                    $k = $k - 1;
                }
                $treeid[$g+1] = $jid;
                $treepid[$g+1] = $jpid;
                $treename[$g+1] = $jname;
                $treeurl[$g+1] = $jurl;
                $treelevel[$g+1] = $jlevel;
                $g++;
            }
    }
    ?>
    <nav class="header__nav">
        <button class="header__nav--btn">
            <span class="header__nav--btn-line"></span>
        </button>
        <button class="header__nav--btn-menu">
            Меню
        </button>
        <ul class="header__nav--menu">
            <?php
            for($i=0; $i<$count; $i++){
            ?>
            <li class="header__nav--menu__point">
                <a <?php if($treeurl[$i]==$urls[0] || $treeurl[$i]=='main' && $url['target_type']=='main'){ ?>class="act-m header__nav--menu__point--link" <?php } ?>href="<?=(substr($treeurl[$i],0,4)=='http'?$treeurl[$i].'" target="_blank':($treeid[$i]==2?$cur_city[0]:'').'/'.($treeurl[$i]!='main'?$treeurl[$i].'/':''))?>"><?=$treename[$i]?></a>
                    <?php
                        if(isset($treelevel[$i+1]) && $treelevel[$i+1] > $treelevel[$i]){
                    ?>
                    <ul class="header__nav--menu__point--popup">
                    <?php
                         }
                         if(isset($treelevel[$i+1]) && $treelevel[$i+1] == $treelevel[$i]){
                          ?>
                          <li class="header__nav--menu__point--popup__point">
                          <?php
                      }
                      if(isset($treelevel[$i+1]) && $treelevel[$i+1] < $treelevel[$i]){
                          ?>
                          </li>
                          <?php
                          for($m = 1; $m <= $treelevel[$i] - (isset($treelevel[$i+1])?$treelevel[$i+1]:0); $m++){
                        ?>
                        </ul>
            </li>
                <?php
            }
            }
            }
            ?>
        </ul>
    </nav>
    <?php } ?>
</header>