<?php
/*
Template Name: Направления подготовки кафедры СКС
*/

get_header();
?>

<div class="container">
  <div class="specialties-container">
    <p class="specialties-container__title">
      <?php the_title(); ?>
    </p>
    <div class="specialties-container-links">
      <a href="/o-napravlenii-podgotovki-10-05-03-informaczionnaya-bezopasnost/"
        class="specialties-container-links__link">
        <p>
          10.05.03 Информационная безопасность автоматизированных систем,
          специализация «Безопасность открытых информационных систем»
        </p>

        <img src="<?php the_field('100503') ?>" alt="" />
      </a>
    </div>

    <div class="specialties-container-links">
      <a href="/o-napravlenii-podgotovki-09-03-01-informatika-i-vychislitelnaya-tehnika-profil-iskusstvennyj-intellekt-v-promyshlennosti/"
        class="specialties-container-links__link">
        <p>
          09.03.01 Информатика и вычислительная техника, профиль
          «Искусственный интеллект в промышленности»
        </p>

        <img src="<?php the_field('090301') ?>" alt="" />
      </a>
    </div>

    <div class="specialties-container-links">
      <a href="/o-programme-podgotovki-magistrov-09-04-01-informatika-i-vychislitelnaya-tehnika-profil-iskusstvennyj-intellekt-i-czifrovye-dvojniki-predpriyatij/"
        class="specialties-container-links__link">
        <p>
          09.04.01 Информатика и вычислительная техника, профиль
          «Искусственный интеллект и цифровые двойники предприятий»
        </p>

        <img src="<?php the_field('090401') ?>" alt="" />
      </a>
    </div>
  </div>
</div>

<?php get_footer(); ?>