<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ジムテンプレート1 | ホーム</title>
  <?php get_header(); ?>
</head>

<body class="animsition">
  <div class="superwrapper">
    <?php get_template_part('includes/c-header'); ?>     
    <!-- /.header -->
    <main id="main-contents">
      <section class="top-view">
        <div class="hero bg">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img class="hero-img view-sp" src="<?php echo get_template_directory_uri(); ?>/images/home/top_2@sp.jpg" />
                <img class="hero-img view-pc" src="<?php echo get_template_directory_uri(); ?>/images/home/top_2@pc.jpg" />
              </div>
              <div class="swiper-slide">
                <img class="hero-img view-sp" src="<?php echo get_template_directory_uri(); ?>/images/home/top_1@sp.jpg" />
                <img class="hero-img view-pc" src="<?php echo get_template_directory_uri(); ?>/images/home/top_1@pc.jpg" />
              </div>
              <div class="swiper-slide">
                <img class="hero-img view-sp" src="<?php echo get_template_directory_uri(); ?>/images/home/top_3@sp.jpg" />
                <img class="hero-img view-pc" src="<?php echo get_template_directory_uri(); ?>/images/home/top_3@pc.jpg" />
              </div>
            </div>
          </div>
          <div class="hero__text">
            <h2 class="clip-js skew">毎日でも<br>通いたくなる場所<br>
              RivRoundGym</h2>
          </div>
          <div class="scrolldown">
            <span>scroll</span>
          </div>
        </div>
      </section>
      <!-- /.top-view -->
      <section class="p-about">
        <div class="c-container">
          <h2 class="p-title clip-js left">
            <span class="en">CONCEPT</span>
            <span class="ja">RivRoundについて</span>
          </h2>
          <div class="p-about__container">
            <div class="p-about__img">
              <ul>
                <li><img class="parallax-img" src="<?php echo get_template_directory_uri(); ?>/images/home/run_1.jpg" alt=""></li>
                <li><img class="parallax-img" src="<?php echo get_template_directory_uri(); ?>/images/home/shoulder_1.jpg" alt=""></li>
              </ul>
            </div>
            <div class="p-about__txt appear up">
              <div class="p-about__desc item">
                <h3 class="c-txt-md">誰もが憧れる身体づくりを</h3>
                <p class="c-txt-sm">
                  一瞬だけではない長い人生を
                  健康的に、そして魅力的に生き抜く本質を見据えた
                  誠実なカラダづくり。<br>
                  美しいプロポーションは、心とカラダの健康があってこそ。<br>そして、一度手に入れた理想のカラダを
                  リバウンドせずに持続させること<br>このシンプルな原点と真剣に向き合うことから生まれたのが
                  RivRoundジムです。
                </p>
              </div>
              <div class="more-btn item">
                <a href=" <?php echo esc_url( home_url('/about')); ?>" class="more-btn__link slide-bg animsition-link">
                  <span class="c-txt-sm">View More</span>
                  <span class="bg"></span></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.p-about -->
      <section class="p-aicatch">
        <div class="p-aicatch__wrap">
          <div class="p-aicatch__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/sholder@pc.jpg" alt="">
          </div>
          <div class="c-container">
            <div class="p-aicatch__desc">
              <p class="c-txt-sm">もうジム選びで後悔してほしくない<br>そんな想いからRivRoundは誕生しました。</p>
            </div>
          </div>
        </div>
      </section>
      <!-- /.p-staff -->
      <section class="p-method">
        <div class="p-method__wrap">
          <div class="p-method__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/sholder_3.jpg" alt="">
          </div>
          <div class="c-container">
            <h2 class="p-title clip-js left">
              <span class="en">METHOD</span>
              <span class="ja">トレーニングメソッド</span>
            </h2>
            <div class="p-method__wrap">
              <div class="p-method__txt appear up">
                <div class="p-method__desc item">
                  <p class="c-txt-sm">お客様ひとりひとりのレベルや目的、体質に合わせたパーソナルトレーニングプログラムを、マンツーマン体制で、運動未経験者からトレーニング経験者まで丁寧にサポートします。
                  </p>
                </div>
                <div class="more-btn">
                  <a href=" <?php echo esc_url( home_url('/method')); ?>" class="more-btn__link slide-bg animsition-link">
                    <span class="c-txt-sm">View More</span>
                    <span class="bg"></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.p-method -->
      <section class="p-staff">
        <div class="p-staff__wrap">
          <div class="p-staff__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/stomach_1.jpg" alt="">
          </div>
          <div class="c-container">
            <h2 class="p-title clip-js left">
              <span class="en">TRAINERS</span>
              <span class="ja">トレーナー紹介</span>
            </h2>
            <div class="p-staff__wrap">
              <div class="p-staff__txt appear up">
                <div class="p-staff__desc item">
                  <p class="c-txt-sm">
                    RivRoundのスタッフは経験豊富な一流トレーニングです。トレーニング技術はもちろんの事食事のご提案からお客様ひとりひとりに寄り添ったトレーニングを丁寧にサポート致します。
                  </p>
                </div>
                <div class="more-btn">
                  <a href=" <?php echo esc_url( home_url('/trainers')); ?>" class="more-btn__link slide-bg animsition-link">
                    <span class="c-txt-sm">View More</span>
                    <span class="bg"></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.p-staff -->
      <section class="p-price">
        <div class="p-price__flex">
          <div class="p-price__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/counseling_1@pc.jpg" alt="">
          </div>
          <div class="c-container">
            <h2 class="p-title clip-js left">
              <span class="en">PRICE</span>
              <span class="ja">料金案内</span>
            </h2>
            <div class="p-price__wrap">
              <div class="p-price__desc">
                <p class="c-txt-sm">月8回(週2回目安)のトレーニングです。</p>
              </div>
              <dl class="p-price__detail">
                <dt class="p-price__detail_ttl">体験・見学<span>EXPERIENCE TOUR</span></dt>
                <dd class="p-price__detail_cont price-tit"><span class="yen">¥</span>0</dd>
              </dl>
              <dl class="p-price__detail">
                <dt class="p-price__detail_ttl">入会費<span>MEMBERSHIP FEE</span></dt>
                <dd class="p-price__detail_cont price-tit"><span class="yen">¥</span>44,000<span class="tax">(税込)</span>
                </dd>
              </dl>
              <dl class="p-price__detail">
                <dt class="p-price__detail_ttl">月会費<span>MONTHLY FEE</span></dt>
                <dd class="p-price__detail_cont price-tit"><span class="yen">¥</span>20,900<span class="tax">(税込)</span>
                </dd>
              </dl>
              <div class="more-btn">
                <a href="/contact/contact.html" class="more-btn__link slide-bg animsition-link">
                  <span class="c-txt-sm">無料体験・見学</span>
                  <span class="bg"></span></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.p-price -->
      <section class="p-access">
        <div class="c-container">
          <h2 class="p-title clip-js left">
            <span class="en">ACCESS</span>
            <span class="ja">店舗案内</span>
          </h2>
          <div class="p-access__wrap">
            <div class="p-access__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home/machine_1.jpg" alt="">
            </div>
            <div class="p-access__txt appear up">
              <div class="p-access__desc">
                <p class="c-txt-sm">住所:福岡県福岡市博多区3-27-25-9F</p>
                <a href="tel:092-686-7954" class="tel">
                  <span class="c-txt-sm">電話番号:0120-123-456</span>
                </a>
                <p class="c-txt-sm">定休日:水曜日</p>
                <p class="c-txt-sm">平日:9:00~20:00</p>
                <p class="c-txt-sm">土日祝:9:00~19:00</p>
              </div>
              <div class="p-access__map item">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13294.424791215797!2d130.40662633372042!3d33.58957259174761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354191942250e0dd%3A0x7a79d2c5edd8fafe!2zUml2Um91bmQg5qCq5byP5Lya56S-!5e0!3m2!1sja!2sjp!4v1634181349900!5m2!1sja!2sjp"
                  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
              <div class="more-btn">
                <a target="_blank" href="https://goo.gl/maps/dtVSzDV7JT8DrTzo6"
                  class="more-btn__link slide-bg animsition-link">
                  <span class="c-txt-sm">Google Map</span>
                  <span class="bg"></span></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.p-access -->
      <section class="p-instagram">
        <div class="c-container">
          <h2 class="p-title clip-js left">
            <span class="en">INSTAGRAM</span>
            <span class="ja">インスタグラム</span>
          </h2>
          <div class="p-instagram__img">
            <a href="https://www.instagram.com/?hl=ja"><img src="<?php echo get_template_directory_uri(); ?>/images/home/run_1.jpg" alt=""></a>
            <a href="https://www.instagram.com/?hl=ja"><img src="<?php echo get_template_directory_uri(); ?>/images/home/shoulder_1.jpg" alt=""></a>
            <a href="https://www.instagram.com/?hl=ja"><img src="<?php echo get_template_directory_uri(); ?>/images/home/machine_1.jpg" alt=""></a>
          </div>
          <div class="p-instagram__desc">
            <p class="c-txt-sm">インスタグラムはお客様のビフォーアフター等をアップしてますので是非一度ご覧下さい。</p>
          </div>
          <div class="more-btn">
            <a target="_blank" href="https://www.instagram.com/?hl=ja" class="more-btn__link slide-bg animsition-link">
              <span class="c-txt-sm">Follow Us</span>
              <span class="bg"></span></a>
          </div>
        </div>
      </section>
      <!-- /.p-instagram -->
      <section class="p-voices">
        <div class="c-container">
          <h2 class="p-title clip-js left">
            <span class="en">VOICES</span>
            <span class="ja">お客様の声</span>
          </h2>
          <ul>
            <li id="voice01" class="p-voices__item">
              <div class="p-voices__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/icon-woman.png" alt="">
              </div>
              <div class="p-voices__desc">
                <p class="name c-txt-sm">R.O様 / 32才 主婦女性</p>
                <p class="tit c-txt-sm">10年くらい前に戻った感じがします。<br></p>
                <p class="desc c-txt-sm">
                  入会の目的はダイエットでしたが、体重減と体脂肪低下に加えて、何よりの成果だと思うのは、「運動の習慣化」です。1回60分の筋トレと、その後、30分の有酸素運動が、週2回、自分の生活に完全に組み込めるようになりました。<br>
                </p>
              </div>
            </li>
            <li id="voice02" class="p-voices__item">
              <div class="p-voices__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/icon-men.png" alt="">
              </div>
              <div class="p-voices__desc">
                <p class="name c-txt-sm">A.I様 / 32才 会社員男性</p>
                <p class="tit c-txt-sm">運動を習慣化できました！<br></p>
                <p class="desc c-txt-sm">体重が3～4kg落ち、何より体型が変化しました。体が引き締まり、筋力がアップ。見た目が全く変わり、 10年くらい前に戻った感じがします。
                  トレーニングの成果を実感しています。<br></p>
              </div>
            </li>
          </ul>
          <div class="more-btn">
            <a href="/faq/faq.html" class="more-btn__link slide-bg animsition-link">
              <span class="c-txt-sm">よくあるご質問へ</span>
              <span class="bg"></span></a>
          </div>
        </div>
      </section>
      <!-- /.p-voices -->
      <section class="p-news">
        <div class="c-container appear up">
          <h2 class="p-title clip-js left">
            <span class="en">news</span>
            <span class="ja">お知らせ</span>
          </h2>
          <ul class="p-news__list item">
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
              <li class="p-news__item">
                <a class="animsition-link" href="<?php the_permalink() ;?>">
                  <span><?php the_post_thumbnail(); ?></span>
                  <span class="p-news__date"><?php the_date(); ?></span>
                  <p class="p-news__content"><?php the_title(); ?></p>
                </a>
              </li>
            <?php endwhile; ?>
            <?php endif; ?>
          </ul>
          <div class="readmore item">
            <a class="animsition-link" href=" <?php echo esc_url( home_url('/news')); ?>">
              <span>お知らせ一覧</span></a>
          </div>
        </div>
      </section>
      <!-- /.p-news -->
    </main>
    <!-- /#main-contents -->
    <?php get_footer(); ?>
    <!-- /.footer -->
    <!-- /.mobile-menu -->
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/pace.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/swiper.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll-btn.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/hero-slider.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/simpleParallax.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/parallax.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/text-animation.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/main.js"></script>
</body>

</html>