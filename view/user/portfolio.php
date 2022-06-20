<?php
use Voopsc\Wild\Component\LangComponent;

$lang = new LangComponent();

$this->components->getHead();
?>
<?php $this->getTemplatePart('user/layout/header', $lang); ?>
<main>
    <section class="first-screen">
      <div id="vueApp" class="wrapper">
        <div class="full">
          <nav-buttons>
          </nav-buttons>
        </div>
        <div class="flex">
          <!-- <div class="tab-btn-panel flex f-between">
              <button type="button" name="button" class="tab-btn">Дизайнил</button>
              <button type="button" name="button" class="tab-btn">Верстал</button>
              <button type="button" name="button" class="tab-btn active">“Под ключ”</button>
              <button type="button" name="button" class="tab-btn">Бекэнд</button>
              <button type="button" name="button" class="tab-btn">На платформах собирал</button>
              <button type="button" name="button" class="tab-btn">Прочее</button>
          </div> -->

          <portfolio-cases :posts="posts">
          </portfolio-cases>



          <!-- <ul class="case-list list-two-items list full np mx-w mb-34">

            <li>
              <a href="#" class="content">
                <div class="img-wrp">
                  <img src="/upload/cases/thumb_1.jpg" alt="">
                </div>
              </a>
            </li>

          </ul> -->

        </div>
      </div>
    </section>
</main>
<?php $this->getTemplatePart('user/layout/footer', $content); ?>
