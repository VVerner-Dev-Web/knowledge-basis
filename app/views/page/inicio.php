<?php defined('ABSPATH') || exit('No direct script access allowed');?>
<!-- Pesquisa e categorias -->
 <div class="hero is-fullheight is-default is-bold">
    <!--Squares-->
    <div class="square is-light square-1"></div>
    <div class="square is-light square-2"></div>
    <div class="square is-primary square-3"></div>
    <div class="square is-primary square-4"></div>
    <div class="square is-primary square-5"></div>
    <div class="square is-primary square-6"></div>
    <div class="square is-light square-7"></div>

    <div class="hero-body">
      <div class="container">
        <div x-data="initSearchInput()" class="search-hero-form has-text-centered">
          <h1 class="title is-1 is-bold">Pesquisar Conteúdos</h1>
          <div class="field">
            <div class="control has-icon">
              <input x-on:keyup="searchData($event)" id="search" type="text" class="input is-rounded"
                placeholder="Pesquisar por conteúdo...">
              <div class="form-icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                  role="img" class="iconify iconify--feather" width="1em" height="1em"
                  preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" data-icon="feather:search">
                  <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    <circle cx="11" cy="11" r="8"></circle>
                    <path d="m21 21l-4.35-4.35"></path>
                  </g>
                </svg>
              </div>
              <button class="form-button">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                  role="img" class="iconify iconify--feather" width="1em" height="1em"
                  preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" data-icon="feather:arrow-right">
                  <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" d="M5 12h14m-7-7l7 7l-7 7"></path>
                </svg>
              </button>
              <div id="search-results" class="search-results has-slimscroll"></div>
            </div>
          </div>
          <h3 class="title is-6 is-thin has-text-centered">
            Ou <strong>Navegue</strong> pelas categorias
          </h3>
        </div>

        <div class="category-boxes align-center">
          <a href="#" class="category-box">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
              role="img" class="iconify iconify--ph" width="1em" height="1em" preserveAspectRatio="xMidYMid meet"
              viewBox="0 0 256 256" data-icon="ph:book-open-thin">
              <path fill="currentColor"
                d="M224 52h-64a36 36 0 0 0-32 19.5A36 36 0 0 0 96 52H32a12 12 0 0 0-12 12v128a12 12 0 0 0 12 12h64a28.1 28.1 0 0 1 28 28a4 4 0 0 0 8 0a28.1 28.1 0 0 1 28-28h64a12 12 0 0 0 12-12V64a12 12 0 0 0-12-12ZM96 196H32a4 4 0 0 1-4-4V64a4 4 0 0 1 4-4h64a28.1 28.1 0 0 1 28 28v121.4A35.8 35.8 0 0 0 96 196Zm132-4a4 4 0 0 1-4 4h-64a35.8 35.8 0 0 0-28 13.4V88a28.1 28.1 0 0 1 28-28h64a4 4 0 0 1 4 4Z">
              </path>
            </svg>
            <h3 class="title is-5 is-leading">Guia para<br> Usuários</h3>
            <p class="paragraph">
                Satis est ad hoc responsum. Quorum sine causa fieri nihil putandum est.
            </p>
          </a>
          <a href="#" class="category-box">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
              role="img" class="iconify iconify--ph" width="1em" height="1em" preserveAspectRatio="xMidYMid meet"
              viewBox="0 0 256 256" data-icon="ph:gear-thin">
              <path fill="currentColor"
                d="M128 76a52 52 0 1 0 52 52a52 52 0 0 0-52-52Zm0 96a44 44 0 1 1 44-44a44 44 0 0 1-44 44Zm103.6-19.2l-15.7-20.9c.1-2.6 0-5.9 0-7.7l15.7-21a4.2 4.2 0 0 0 .7-3.4a106.4 106.4 0 0 0-10.6-25.6a4.2 4.2 0 0 0-2.9-1.9l-25.9-3.7a71.4 71.4 0 0 0-5.5-5.5l-3.7-25.9a4.2 4.2 0 0 0-1.9-2.9a109.1 109.1 0 0 0-25.5-10.6a4.4 4.4 0 0 0-3.5.7l-20.9 15.7q-3.9-.1-7.8 0l-20.9-15.7a4.2 4.2 0 0 0-3.4-.7a106.4 106.4 0 0 0-25.6 10.6a4.2 4.2 0 0 0-1.9 2.9l-3.7 25.9a71.4 71.4 0 0 0-5.5 5.5l-25.9 3.7a4.2 4.2 0 0 0-2.9 1.9a108.1 108.1 0 0 0-10.6 25.6a4.2 4.2 0 0 0 .7 3.4l15.7 20.9c-.1 2.6 0 5.9 0 7.7l-15.7 21a4.2 4.2 0 0 0-.7 3.4a110.6 110.6 0 0 0 10.6 25.6a4.2 4.2 0 0 0 2.9 1.9l25.9 3.7a71.4 71.4 0 0 0 5.5 5.5l3.7 25.9a4.2 4.2 0 0 0 1.9 2.9a108.1 108.1 0 0 0 25.6 10.6h1a4.1 4.1 0 0 0 2.4-.8l20.9-15.7h7.8l20.9 15.7a4.2 4.2 0 0 0 3.4.7a106.4 106.4 0 0 0 25.6-10.6a4.2 4.2 0 0 0 1.9-2.9l3.7-25.9l5.5-5.5l25.9-3.7a4.2 4.2 0 0 0 2.9-1.9a108.1 108.1 0 0 0 10.6-25.6a4.2 4.2 0 0 0-.7-3.3Zm-15.9 23.3l-25.4 3.6a4.3 4.3 0 0 0-2.3 1.2c0 .1-4.6 4.9-7 7a3.8 3.8 0 0 0-1.3 2.4l-3.6 25.4A97.9 97.9 0 0 1 156 224l-20.5-15.4a3.9 3.9 0 0 0-2.6-.7h-9.8a3.9 3.9 0 0 0-2.6.7L100 224a97.9 97.9 0 0 1-20.1-8.3l-3.6-25.4a3.8 3.8 0 0 0-1.3-2.4a74.9 74.9 0 0 1-6.9-6.9a3.8 3.8 0 0 0-2.4-1.3l-25.4-3.6A97.9 97.9 0 0 1 32 156l15.4-20.5a4.4 4.4 0 0 0 .8-2.5c0-.1-.2-6.7-.1-9.9a3.9 3.9 0 0 0-.7-2.6L32 100a97.9 97.9 0 0 1 8.3-20.1l25.4-3.6a3.8 3.8 0 0 0 2.4-1.3a74.9 74.9 0 0 1 6.9-6.9a3.8 3.8 0 0 0 1.3-2.4l3.6-25.4A97.9 97.9 0 0 1 100 32l20.5 15.4a3.9 3.9 0 0 0 2.6.7c3.3-.1 6.5-.1 9.8 0a3.9 3.9 0 0 0 2.6-.7L156 32a97.9 97.9 0 0 1 20.1 8.3l3.6 25.4a3.8 3.8 0 0 0 1.3 2.4a74.9 74.9 0 0 1 6.9 6.9a3.8 3.8 0 0 0 2.4 1.3l25.4 3.6A97.9 97.9 0 0 1 224 100l-15.4 20.5a4.4 4.4 0 0 0-.8 2.5c0 .1.2 6.7.1 9.9a3.9 3.9 0 0 0 .7 2.6L224 156a97.9 97.9 0 0 1-8.3 20.1Z">
              </path>
            </svg>
            <h3 class="title is-5 is-leading">Guia para Desenvolvedores</h3>
            <p class="paragraph">
                Id enim natura desiderat. Nescio quo modo praetervolavit oratio. 
            </p>
          </a>
        </div>
      </div>
    </div>
    <div class="hero-foot">
      <h3 class="title is-6 is-thin has-text-centered">Respostas <strong>Rápidas</strong></h3>
    </div>
 </div>
<!-- Respostas Rápidas -->
 <div class="section">
    <div class="container">
      <div x-data="initAccordion()" class="quick-answers">
        <div class="quick-answer" :class="{
                        &#39;is-active&#39;: activeAccordion === &#39;accordion-1&#39;,
                        &#39;&#39;: activeAccordion != &#39;accordion-1&#39;
                    }">
          <div class="shape"></div>
          <div @click="toggleAccordion($event)" data-accordion="accordion-1" class="title-block">
            <h3>Lorem ipsum dolor sit amet</h3>
            <div class="accordion-button">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                role="img" class="iconify iconify--feather arrow" width="1em" height="1em"
                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" data-icon="feather:arrow-right">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M5 12h14m-7-7l7 7l-7 7"></path>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                role="img" class="iconify iconify--feather cross" width="1em" height="1em"
                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" data-icon="feather:x">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M18 6L6 18M6 6l12 12"></path>
              </svg>
            </div>
          </div>
          <div x-show.transition="activeAccordion === &#39;accordion-1&#39;" class="content-block"
            style="display: none;">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quid censes
              in Latino fore? Egone quaeris, inquit, quid sentiam? Sed haec
              omittamus; Prodest, inquit, mihi eo esse animo.
            </p>
            <p>
              Duo Reges: constructio interrete. Quod ea non occurrentia fingunt,
              vincunt Aristonem; Quis est tam dissimile homini. Age, inquies, ista
              parva sunt.
            </p>
          </div>
        </div>

        <div class="quick-answer" :class="{
                        &#39;is-active&#39;: activeAccordion === &#39;accordion-2&#39;,
                        &#39;&#39;: activeAccordion != &#39;accordion-2&#39;
                    }">
          <div class="shape"></div>
          <div @click="toggleAccordion($event)" data-accordion="accordion-2" class="title-block">
            <h3>Lorem ipsum dolor sit amet</h3>
            <div class="accordion-button">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                role="img" class="iconify iconify--feather arrow" width="1em" height="1em"
                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" data-icon="feather:arrow-right">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M5 12h14m-7-7l7 7l-7 7"></path>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                role="img" class="iconify iconify--feather cross" width="1em" height="1em"
                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" data-icon="feather:x">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M18 6L6 18M6 6l12 12"></path>
              </svg>
            </div>
          </div>
          <div x-show.transition="activeAccordion === &#39;accordion-2&#39;" class="content-block"
            style="display: none;">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quid censes
              in Latino fore? Egone quaeris, inquit, quid sentiam? Sed haec
              omittamus; Prodest, inquit, mihi eo esse animo.
            </p>
            <p>
              Duo Reges: constructio interrete. Quod ea non occurrentia fingunt,
              vincunt Aristonem; Quis est tam dissimile homini. Age, inquies, ista
              parva sunt.
            </p>
          </div>
        </div>

        <div class="quick-answer" :class="{
                        &#39;is-active&#39;: activeAccordion === &#39;accordion-3&#39;,
                        &#39;&#39;: activeAccordion != &#39;accordion-3&#39;
                    }">
          <div class="shape"></div>
          <div @click="toggleAccordion($event)" data-accordion="accordion-3" class="title-block">
            <h3>Lorem ipsum dolor sit amet</h3>
            <div class="accordion-button">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                role="img" class="iconify iconify--feather arrow" width="1em" height="1em"
                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" data-icon="feather:arrow-right">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M5 12h14m-7-7l7 7l-7 7"></path>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                role="img" class="iconify iconify--feather cross" width="1em" height="1em"
                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" data-icon="feather:x">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M18 6L6 18M6 6l12 12"></path>
              </svg>
            </div>
          </div>
          <div x-show.transition="activeAccordion === &#39;accordion-3&#39;" class="content-block"
            style="display: none;">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quid censes
              in Latino fore? Egone quaeris, inquit, quid sentiam? Sed haec
              omittamus; Prodest, inquit, mihi eo esse animo.
            </p>
            <p>
              Duo Reges: constructio interrete. Quod ea non occurrentia fingunt,
              vincunt Aristonem; Quis est tam dissimile homini. Age, inquies, ista
              parva sunt.
            </p>
          </div>
        </div>
      </div>
    </div>
 </div>
<!-- Conteúdos Populares -->
  <div class="section">
    <div class="container">
      <div class="mx-auto max-w-9 pb-6">
        <div class="side-section-title mb-6">
          <h2 class="title is-3 is-bold">Conteúdos Mais Recentes</h2>
          <p class="subtitle is-5">Veja alguns dos assuntos mais buscados</p>
        </div>

        <div class="columns is-multiline">

          <?php $topics = recentPosts(); 
                if ($topics->have_posts()) : 
                    while ($topics->have_posts()) :
                        $topics->the_post();
                        VVerner\Views::getInstance()->getComponent('recent-post'); ?>
                    <?php endwhile;?>
                <?php endif;?>
        </div>
      </div>
    </div>
  </div>
<!-- Perguntas Populares -->
  <div class="section is-grey">
    <div class="container">
      <div class="py-6 has-text-centered">
        <h2 class="title is-3 is-bold">Perguntas populares</h2>
        <h3 class="subtitle is-5">Peça ajuda às pessoas dentro da comunidade</h3>
      </div>
    </div>
  </div>
<!-- Slider com as perguntas -->

<!-- Estatísticas -->
<div class="section is-grey">
    <div class="container">
      <div class="app-stats">
        <h2 class="title is-3 is-bold has-text-centered">
          Estatísticas
        </h2>
        <div class="stat-blocks">
          <div class="stat-block">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
              role="img" class="iconify iconify--ph" width="1em" height="1em" preserveAspectRatio="xMidYMid meet"
              viewBox="0 0 256 256" data-icon="ph:messenger-logo-thin">
              <path fill="currentColor"
                d="M128 28a100 100 0 0 0-86.9 149.5l-9 31.6a12 12 0 0 0 14.8 14.8l31.6-9A100 100 0 1 0 128 28Zm0 192a91.3 91.3 0 0 1-47-12.9a4.6 4.6 0 0 0-2-.5h-1.1l-33.2 9.5a4 4 0 0 1-4.9-4.9l9.5-33.2a4.1 4.1 0 0 0-.4-3.1A92 92 0 1 1 128 220Zm50.8-110.8a3.9 3.9 0 0 1 0 5.6l-32 32a3.9 3.9 0 0 1-5.6 0L112 117.7l-29.2 29.1a4 4 0 0 1-5.6-5.6l32-32a3.9 3.9 0 0 1 5.6 0l29.2 29.1l29.2-29.1a3.9 3.9 0 0 1 5.6 0Z">
              </path>
            </svg>
            <div class="big-number"><?php echo TotalPosts();?></div>
            <p>Tópicos criados desde o lançamento</p>
          </div>

          <div class="stat-block">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
              role="img" class="iconify iconify--ph" width="1em" height="1em" preserveAspectRatio="xMidYMid meet"
              viewBox="0 0 256 256" data-icon="ph:question-thin">
              <path fill="currentColor"
                d="M128 28a100 100 0 1 0 100 100A100.2 100.2 0 0 0 128 28Zm0 192a92 92 0 1 1 92-92a92.1 92.1 0 0 1-92 92Zm8-40a8 8 0 1 1-8-8a8 8 0 0 1 8 8Zm24-72a32.1 32.1 0 0 1-28 31.8v4.2a4 4 0 0 1-8 0v-8a4 4 0 0 1 4-4a24 24 0 1 0-24-24a4 4 0 0 1-8 0a32 32 0 0 1 64 0Z">
              </path>
            </svg>
            <div class="big-number">78%</div>
            <p>Perguntas Resolvidados por membros da comunidade</p>
          </div>

          <div class="stat-block">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
              role="img" class="iconify iconify--ph" width="1em" height="1em" preserveAspectRatio="xMidYMid meet"
              viewBox="0 0 256 256" data-icon="ph:users-three-thin">
              <path fill="currentColor"
                d="M246.4 143.2a4.3 4.3 0 0 1-2.4.8a4.2 4.2 0 0 1-3.2-1.6A55.7 55.7 0 0 0 196 120a4 4 0 0 1 0-8a28 28 0 1 0-27.5-33.3a4 4 0 1 1-7.9-1.5a36 36 0 1 1 54.1 37.6a63 63 0 0 1 32.5 22.8a4 4 0 0 1-.8 5.6Zm-57.2 71a4.1 4.1 0 0 1-1.9 5.4a3.3 3.3 0 0 1-1.7.4a4 4 0 0 1-3.6-2.2a60 60 0 0 0-108 0a3.9 3.9 0 0 1-5.3 1.8a4.1 4.1 0 0 1-1.9-5.4a68.3 68.3 0 0 1 40.9-35.2a44 44 0 1 1 40.6 0a68.3 68.3 0 0 1 40.9 35.2ZM128 176a36 36 0 1 0-36-36a36 36 0 0 0 36 36Zm-68-64a28 28 0 1 1 27.5-33.3a4 4 0 1 0 7.9-1.5a36 36 0 1 0-54.1 37.6a63 63 0 0 0-32.5 22.8a4 4 0 0 0 .8 5.6a4.3 4.3 0 0 0 2.4.8a4.2 4.2 0 0 0 3.2-1.6A55.7 55.7 0 0 1 60 120a4 4 0 0 0 0-8Z">
              </path>
            </svg>
            <div class="big-number"><?php echo count_users()['total_users']; ?></div>
            <p>Os usuários que estão atualmente ativos</p>
          </div>
        </div>

        <div class="buttons is-centered pt-4">
          <a href="#" class="button create-account-button is-secondary raised">Crie uma conta</a>
        </div>

        <!-- <div class="has-text-centered">
          <p class="paragraph rem-90 mb-4">We help these great brands</p>
          <div class="brands">
            <img src="./Faqster_files/infinite.svg" alt="brand logo">
            <img src="./Faqster_files/kromo.svg" alt="brand logo">
            <img src="./Faqster_files/tribe.svg" alt="brand logo">
            <img src="./Faqster_files/grubspot.svg" alt="brand logo">
          </div>
        </div> -->
      </div>
    </div>
  </div>

  


  



 