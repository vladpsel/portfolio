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
          <nav-buttons
          @call-filter="getFilteredPosts"
          >
          </nav-buttons>
        </div>
        <div class="flex f-right">
          <portfolio-cases
            :posts="filteredPost"
          >
          </portfolio-cases>
          <a href="<?php echo $lang::normalize(APP_LANG); ?>" class="btn btn-arr">
              <span><?php echo $content['home_btn_title']; ?></span>
              <svg width="7" height="8" viewBox="0 0 7 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6 3.4641C6.66667 3.849 6.66667 4.81125 6 5.19615L1.5 7.79423C0.833334 8.17913 -3.3649e-08 7.69801 0 6.92821L2.27131e-07 1.73205C2.6078e-07 0.962253 0.833334 0.481126 1.5 0.866027L6 3.4641Z"/>
              </svg>
          </a>
        </div>
      </div>
    </section>
</main>
<?php $this->getTemplatePart('user/layout/footer', $content); ?>
