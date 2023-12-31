<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SCS</title>

  <?php wp_head();
  ?>
</head>

<body>
  <header class="header">
    <nav class="navbar">
      <a href="/" class="nav-logo">
        <img src=" <?php the_field('icon_logo', 63) ?> ">
        <?php the_field('nav-logo-title', 63); ?>
      </a>
      <ul class="nav-menu">
        <li class="nav-item">
          <a href="/posts">Блог</a>
        </li>
        <li class="nav-item">
          <a href="#">Студенту</a>
        </li>
        <li class="nav-item">
          <a href="/abiturientu/">Абитуриенту</a>
        </li>
        <li class="nav-item">
          <a href="/vypuskniki-kafedry-sks">Выпускники</a>
        </li>
        <li class="nav-item">
          <a href="/prepodavateli-kafedry-sks/">Преподаватели</a>
        </li>
        <li class="nav-item">
          <a href="/o-kafedre/">О кафедре</a>
        </li>
      </ul>
      <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
    </nav>
  </header>

  <div class="wrapper">