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
    content="Look up Bitcrore (BCR) blocks, transactions, addresses, balances and blockchain stats">
  <meta data-n-head="true" name="twitter:title" content="bitcrore Explorer — Bitcrore">
  <meta data-n-head="true" name="twitter:description"
    content="Look up Bitcrore (BCR) blocks, transactions, addresses, balances and blockchain stats">
  <meta data-n-head="true" name="twitter:card" content="summary">
  <meta data-n-head="true" name="twitter:image" content="https://Bitcrore.com/images/twitter_card.png">
  <meta data-n-head="true" property="og:title" content="bitcrore Explorer — Bitcrore">
  <meta data-n-head="true" property="og:description"
    content="Look up Bitcrore (BCR) blocks, transactions, addresses, balances and blockchain stats">
  <meta data-n-head="true" property="og:image" content="https://Bitcrore.com/images/twitter_card.png">
  <link href="https://fonts.googleapis.com/css?family=Abel|Josefin+Sans&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/b2e09515b1.js"></script>
  <link data-n-head="true" rel="icon" type="image/x-icon" href="https://Bitcrore.com/favicon.ico">
  <link data-n-head="true" rel="apple-touch-icon" href="https://Bitcrore.com/images/twitter_card.png">
  <link data-n-head="true" rel="dns-prefetch" href="https://api.Bitcrore.com/">
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
  <style>*{font-family: 'Abel', sans-serif; font-family: 'Josefin Sans', sans-serif;}</style>
</head>
<body class="new-design inner-body" data-n-head="class">
  <div data-server-rendered="true" id="__nuxt">
    <!---->
    <div id="__layout">
      <div>
        <div> 
          <div class="navbar--light-grey">
            <nav class="navbar navbar-expand-lg navbar--container-max"><a href="/"
                class="nuxt-link-active"><img src="{{ asset('images/logosm.png') }}" class="navbar__logo"></a>
              <div class="hover__mobile p-4"></div>
              <div>
                <div tabindex="1" class="control" style="top: 31px;">
                  <span class="icon-search">
                    <svg aria-hidden="true" focusable="false"
                      data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 512 512" class="svg-inline--fa fa-search fa-w-16">
                      <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"
                        class=""></path>
                    </svg>
                  </span>
                </div>
                <span class="icon-close" style="z-index:0;"><svg aria-hidden="true" focusable="false" data-prefix="fas"
                    data-icon="times-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                    class="svg-inline--fa fa-times-circle fa-w-16">
                    <path fill="currentColor"
                      d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z">
                    </path>
                  </svg>
                </span>
                <div class="form form-control form-control-lg">

                </div>
              </div>
              <div class="collapse navbar-collapse">
                <form action="/search" mbcrod="get" class="navbar__form-search middle-hide">
                  <div class="input-group"><input id="search-in-blockchains"
                      placeholder="Search by address, hash or block" type="text" name="q"
                      class="navbar__search form-control form-control-lg"> <button type="submit"
                      class="navbar__search-btn btn" style="background: #236db7;"><svg aria-hidden="true"
                        focusable="false" data-prefix="fas" data-icon="search" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                        class="landing__search-icon svg-inline--fa fa-search fa-w-16">
                        <path fill="currentColor"
                          d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                        </path>
                      </svg></button></div>
                </form>
              </div>
            </nav>
          </div>
          <div class="container-max">
            <div class="row content__wrap">

              <ol class="breadcrumb bm">
                <li><a href="/">Home</a></li><span style="margin-left: 15px; margin-right: 15px;"> |
                </span>
                <li><?php echo @$_GET['q']?></li>
              </ol>
              <div class="col-12 col-md-12 col-lg-12">
                <div class="content">
                  <h4 class="content__title">Technical details</h4>
                  <div class="flex-block--between">
                      <ul class="block__ul click-to-see-more col-12">
                          <li class="block__item">
                              <span>Input count </span>
                              <span>
                                <a href="/" class=""><?php echo count($getaddressdeltas)?></a>
                              </span>
                          </li>
                          <?php 
                          $index = 0;
                          $bindex = 0;
                          $height = 0;
                          if(isset($getaddressdeltas)){
                            foreach ($getaddressdeltas as $key => $value) {
                              $index+=$value['index'];
                              $bindex+=$value['blockindex'];
                              $height+= $value['height'];
                            }
                          }
                          ?>
                          <li class="block__item"><span>Index</span><span><?php echo $index?></span></li>
                          <li class="block__item"><span>Block Index</span><span><?php echo $bindex?></span></li>
                          <li class="block__item"><span>Height</span><span><?php echo $height?></span></li>
                      </ul>
                  </div>
                  <div class="flex-block--between mt-2">

                  </div>
                  <div class="mobile--mt-8"></div>
                </div>
              </div>

              <div class="col-12">
                <div class="content">
                  <h4 class="content__title">Transaction Details</h4>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <table class="table infinitable-table table-striped table-hover table-infinitable text-nowrap table-sm">
                          <thead>
                            <tr>
                              <th class=""><span>Address</span></th>
                              <th class=""><span>Unspent Amount</span></th>
                              <th class=""><span>TxID</span></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            if(isset($getaddressdeltas)){
                              foreach ($getaddressdeltas as $key => $value) {
                                ?>
                                <tr>
                                  <td class="text-info"><a href="/address/<?php echo (string)$value['address']?>"><?php echo (string)$value['address']?></a></td>
                                  <td><?php echo (int)$value['satoshis']/100000000?></td>
                                  <td class="text-info"><a href="/hash/<?php echo (string)$value['txid']?>"><?php echo (string)$value['txid']?></a></td>
                                </tr>
                                <?php
                              }
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
        <footer class="footer">
          <div class="footer__wrap">
            <div class="footer__divider"></div>
            <div class="row"><span href="{{ asset('#" class="footer__link col-6 col-sm-6 col-md-8 col-lg-9 col-xl-9">© 2019
                Bitcrore</span>
              <div href="{{ asset('#" class="footer__night-theme col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                <div class="footer__night-wrap">

                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>
  <script src="{{ asset('https://Bitcrore.com/_nuxt/3e3af37b9a1a964a14cc.js" defer></script>
  <script src="{{ asset('https://Bitcrore.com/_nuxt/dcde7778d12e64dde40d.js" defer></script>
  <script src="{{ asset('https://Bitcrore.com/_nuxt/ac793ebfee96b816fb05.js" defer></script>
  <script src="{{ asset('https://Bitcrore.com/_nuxt/ba94bd1e3b1509f76e4c.js" defer></script>
  <script src="{{ asset('https://Bitcrore.com/_nuxt/1cb6e0ec03e038c600a2.js" defer></script>
</body>

</html>