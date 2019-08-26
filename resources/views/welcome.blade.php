<!doctype html>
<html data-n-head-ssr lang="en" data-n-head="lang">
<head data-n-head="">
  <title data-n-head="true">Bitcrore Explorer</title>
  <meta data-n-head="true" charset="utf-8">
  <meta data-n-head="true" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta data-n-head="true" name="twitter:site" content="@Bitcrore">
  <meta data-n-head="true" property="og:type" content="website">
  <meta data-n-head="true" http-equiv="pragma" content="no-cache">
  <meta data-n-head="true" http-equiv="cache-control" content="no-cache">
  <meta data-n-head="true" http-equiv="expires" content="0">
  <meta data-n-head="true" data-hid="og:locale" property="og:locale" content="en">
  <meta data-n-head="true" data-hid="og:locale:alternate-ru" property="og:locale:alternate" content="ru">
  <meta data-n-head="true" data-hid="og:locale:alternate-zh" property="og:locale:alternate" content="zh">
  <meta data-n-head="true" data-hid="description" name="description"
    content="Look up bitcrore (bcr) blocks, transactions, addresses, smart contracts, balances and blockchain stats">
  <meta data-n-head="true" name="twitter:title" content="bitcrore Explorer — Bitcrore">
  <meta data-n-head="true" name="twitter:description"
    content="Look up bitcrore (bcr) blocks, transactions, addresses, smart contracts, balances and blockchain stats">
  <meta data-n-head="true" name="twitter:card" content="summary">
  <meta data-n-head="true" name="twitter:image" content="https://Bitcrore.com/images/twitter_card.png">
  <meta data-n-head="true" property="og:title" content="bitcrore Explorer — Bitcrore">
  <meta data-n-head="true" property="og:description"
    content="Look up bitcrore (bcr) blocks, transactions, addresses, smart contracts, balances and blockchain stats">
  <meta data-n-head="true" property="og:image" content="https://Bitcrore.com/images/twitter_card.png">
  <link href="https://fonts.googleapis.com/css?family=Abel|Josefin+Sans&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/b2e09515b1.js"></script>
  <link data-n-head="true" rel="icon" type="image/x-icon" href="https://Bitcrore.com/favicon.ico">
  <link data-n-head="true" rel="apple-touch-icon" href="https://Bitcrore.com/images/twitter_card.png">
  <link data-n-head="true" rel="dns-prefetch" href="https://api.Bitcrore.com/">
  <link data-n-head="true" rel="search" type="application/opensearchdescription+xml"
    href="https://Bitcrore.com/opensearch.xml" title="Bitcrore Search">
  <link data-n-head="true" rel="canonical" href="https://Bitcrore.com/bitcrore">
  <link data-n-head="true" data-hid="alternate-hreflang-en" rel="alternate" href="https://Bitcrore.com/bitcrore"
    hreflang="en">
  <link data-n-head="true" data-hid="alternate-hreflang-ru" rel="alternate" href="https://Bitcrore.com/ru/bitcrore"
    hreflang="ru">
  <link data-n-head="true" data-hid="alternate-hreflang-zh" rel="alternate" href="https://Bitcrore.com/zh/bitcrore"
    hreflang="zh">
  <link rel="preload" href="{{ asset('_nuxt/3e3af37b9a1a964a14cc.js') }}" as="script">
  <link rel="preload" href="{{ asset('_nuxt/ac793ebfee96b816fb05.js') }}" as="script">
  <link rel="preload" href="{{ asset('_nuxt/c673b4a7846eaabeeb8f.css') }}" as="style">
  <link rel="preload" href="{{ asset('_nuxt/ba94bd1e3b1509f76e4c.js') }}" as="script">
  <link rel="preload" href="{{ asset('_nuxt/fcad76309fa740d9be17.css') }}" as="style">
  <link rel="preload" href="{{ asset('_nuxt/1cb6e0ec03e038c600a2.js') }}" as="script">
  <link rel="preload" href="{{ asset('_nuxt/dcde7778d12e64dde40d.js') }}" as="script">
  <link rel="preload" href="{{ asset('_nuxt/f8298a2dfb30c5a2f7bd.css') }}" as="style">
  <link rel="preload" href="{{ asset('_nuxt/50a32ff2e41b676bf898.js') }}" as="script">
  <link rel="stylesheet" href="{{ asset('_nuxt/c673b4a7846eaabeeb8f.css') }}">
  <link rel="stylesheet" href="{{ asset('_nuxt/fcad76309fa740d9be17.css') }}">
  <link rel="stylesheet" href="{{ asset('_nuxt/f8298a2dfb30c5a2f7bd.css') }}">
  <style>*{font-family: 'Josefin Sans', sans-serif;}</style>
</head>
<body class="new-design landing-body" data-n-head="class">
    <div data-server-rendered="true" id="__nuxt">
        <!---->
        <div id="__layout">
            <div>
                <div style='background:#eee;'>
                    <div class="screen">
                        <div class="screen-wrap"><img src="{{ asset('images/new/logo.png') }}" class="landing__logo">
                            <form action="search" mbcrod="get">
                                <div class="landing__form">
                                    <div class="input-group"><input placeholder="Search hash, block, address ..." type="text" name="q" value="" class="landing__search form-control form-control-lg">
                                        <div tabindex="-1" role="dialog" aria-labelledby="read-qrcode-modal-label" aria-hidden="true" id="scan-qrcode-modal" class="modal fade">
                                            
                                        </div> <button type="submit" class="landing__search-btn btn" style="background: #3474c1;"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="landing__search-icon svg-inline--fa fa-search fa-w-16">
                                                <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                                            </svg></button>
                                    </div>
                                </div>
                            </form>
                            <p class="landing__text">Explore the Bitcrore ecosystem. Search for hash, transaction, address and meta data .</p>
                        </div>
                    </div>
                    <div class="landing__down"><a href="#explore-blockchains" class="landing__down-arrow"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-arrow-down fa-w-14"><path fill="currentColor" d="M413.1 222.5l22.2 22.2c9.4 9.4 9.4 24.6 0 33.9L241 473c-9.4 9.4-24.6 9.4-33.9 0L12.7 278.6c-9.4-9.4-9.4-24.6 0-33.9l22.2-22.2c9.5-9.5 25-9.3 34.3.4L184 343.4V56c0-13.3 10.7-24 24-24h32c13.3 0 24 10.7 24 24v287.4l114.8-120.5c9.3-9.8 24.8-10 34.3-.4z"></path></svg></a></div>
                    <div id="explore-blockchains" class="landing__down container-max">
                        <div class="row content__wrap">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
                                            <div class="content__logo hover">
                                              <img src="{{ asset('images/icon.png') }}" style="width: 100%; height: 100%; margin-top: 0; margin-left: 0;" class="content__logo--BCR"></div>
                                                <div class="hover"><h1 class="content__head-title">Bitcrore</h1>
                                                  
                                                </div> <span class="content__market-wrap"><span class="content__price item--green">$1.0</span></span>
                                                <div class="content__header--market"><span class="content__market">Market cap: <span place="mcap" class="item--grey">$185B</span></span> </div>
                                            </div>
                                        </div>
                                        <div class="row content--margin-bot">
                                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                                <div class="content__block"><a href="blocks"><i class="content__block__icon fas fa-cube"></i></a>
                                                    <div class="content__block__text"><a href="blocks">Blocks <span class="content__text--grey"><?php echo $blockchaininfo->blocks?></span></a></div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                                <div class="content__block"><a href="transactions"><i class="content__block__icon fas fa-battle-net"></i></a>
                                                    <div class="content__block__text"><a href="transactions">Transactions <span class="content__text--grey"><?php echo $txoutsetinfo->transactions?></span></a></div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                                <div class="content__block"><a href="outputs"><i class="content__block__icon fas fa-code-branch"></i></a>
                                                    <div class="content__block__text"><a href="outputs">Outputs <span class="content__text--grey"></span></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="content__divider"></div>
                                            </div>
                                        </div>
                                        <?php // var_dump($txoutsetinfo); echo "<br><br>"; var_dump($blockchaininfo); echo "<br><br>"; var_dump($networkhashps);?>
                                        <div class="row">
                                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4"><h4 class="content__title">Stats</h4>
                                                <div class="content__subtext"><a href="charts/circulation.html">Circulation:</a><span class="content__text--grey"><?php echo $txoutsetinfo->total_amount?> BCR</span></div>
                                                <div class="content__subtext"><a href="charts/difficulty.html">Difficulty:</a><span class="content__text--grey"><?php echo $blockchaininfo->difficulty?></span></div>
                                                <div class="content__subtext"><a href="block/590687.html">Latest block:</a><span class="content__text--grey">#<?php echo $blockchaininfo->blocks?></span></div>
                                            </div>
                                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4"><h4 class="content__title">24h stats</h4>
                                                <div class="content__subtext"><a href="blocksee44.html?q=time(2019-08-17%2020:36:13..2019-08-18%2020:36:13)#" class="content__link">Blocks:</a><span class="content__text--grey"><?php echo $txoutsetinfo->height ?></span></div>
                                                <div class="content__subtext"><a href="transactionsee44.html?q=time(2019-08-17%2020:36:13..2019-08-18%2020:36:13)#" class="content__link">Transactions:</a><span class="content__text--grey"><?php echo $txoutsetinfo->transactions?></span></div>
                                                <div class="content__subtext">Txs per second:<span class="content__text--grey"><?php echo (float)$txoutsetinfo->transactions/24?></span></div>
                                            </div>
                                            <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 mobile-hide"><h4 class="content__title">Mempool</h4>
                                                <div class="content__subtext">Recommended fee:<div class="item--grey">0.0000<?php echo rand(0.1,2)?> bcr per byte</div>
                                                </div>
                                                <div class="content__subtext"><a href="mempool/transactions.html" class="content__link">Transactions:</a><span class="content__text--grey"><?php echo (float)$txoutsetinfo->transactions?></span></div>
                                                <div class="content__subtext">Txs per second: <span class="content__text--grey"><?php echo (float)$txoutsetinfo->transactions/4?></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="content__table" style="box-shadow:none;">
                                        <div class="row">
                                            <div class="col-12 text-center"><h4 class="table__title bg--dark-grey">Latest blocks</h4>
                                                <div>
                                                    <div class="table-responsive">
                                                        <table class="table infinitable-table table-striped table-hover table-infinitable text-nowrap table-sm">
                                                            <thead>
                                                                <tr>
                                                                    <th class="c3-stripes"><span>Height</span></th>
                                                                    <th class=""><span>Hash</span></th>
                                                                    <th class="" style="text-align: right;"><span>Output <span class="small-number"></span></span></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $ii = (int)$blockchaininfo->blocks;
                                                                $ij = (int)$blockchaininfo->blocks-10;
                                                                for($i=$ii; $i > $ij; $i--){
                                                                    $time = time()-(60*$i);
                                                                    ?>
                                                                    <tr>
                                                                        <td class="text-info"><a href="/block/<?php echo $i ?>" class=""><?php echo $i ?></a></td>
                                                                        <td class="">
                                                                            <div title="" class="d-inline colored-hash accent" data-original-title="">0000<span class="block" style="color: rgb(18, 58, 151); background-color: rgb(18, 58, 151);">e88ce8</span><?php echo rand(10,100)?>...</div>
                                                                        </td>
                                                                        <td class="text-info" style="text-align: right;"> <a href="/block/<?php echo $i?>"> <span><span class="grey">View</span></span></a></td>
                                                                    </tr>
                                                                    <?php

                                                                }
                                                     
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <footer class="footer">
                    <div class="footer__wrap">
                        <div class="footer__divider"></div>
                        <div class="row"><span href="#" class="footer__link col-6 col-sm-6 col-md-8 col-lg-9 col-xl-9">© 2019
                            Bitcrore</span>
                        <div href="#" class="footer__night-theme col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                            <div class="footer__night-wrap">

                            </div>
                        </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <script src="{{ asset('_nuxt/3e3af37b9a1a964a14cc.js') }}" defer></script>
    <script src="{{ asset('_nuxt/dcde7778d12e64dde40d.js') }}" defer></script>
    <script src="{{ asset('_nuxt/50a32ff2e41b676bf898.js') }}" defer></script>
    <script src="{{ asset('_nuxt/ac793ebfee96b816fb05.js') }}" defer></script>
    <script src="{{ asset('_nuxt/ba94bd1e3b1509f76e4c.js') }}" defer></script>
    <script src="{{ asset('_nuxt/1cb6e0ec03e038c600a2.js') }}" defer></script>
</body>

</html>