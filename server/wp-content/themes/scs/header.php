<!DOCTYPE html>
<html lang="en">

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
          <a href="/posts.html">Блог</a>
        </li>
        <li class="nav-item">
          <a href="#">Студенту</a>
        </li>
        <li class="nav-item">
          <a href="/entrant.html">Абитуриенту</a>
        </li>
        <li class="nav-item">
          <a href="/graduates.html">Выпускники</a>
        </li>
        <li class="nav-item">
          <a href="/teachers.html">Преподаватели</a>
        </li>
        <li class="nav-item">
          <a href="/about.html">О кафедре</a>
        </li>
        <li class="nav-item">
          <a href="#">Вход</a>
        </li>
        <li class="nav-item">
          <form>
            <input class="search-input" type="text" placeholder="Поиск...">
            <button type="submit"></button>
          </form>
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