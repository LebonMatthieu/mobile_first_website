<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mobile First Project - Matthieu Lebon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="app/dist/css/app.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
  </head>
  <body>
    <header>
      <nav class="navbar">
          <div class="menu">
            <i class="fa fa-bars" aria-hidden="true"></i>
          </div>
          <div class="title">
            <span class="logo">Mon logo</span>
          </div>
          <div class="search">
            <i class="fa fa-search" aria-hidden="true"></i>
          </div>
      </nav>
      <div class="nav">
        <ul>
          <?php for ( $i = 1; $i < 5; $i++)
          {
            ?>
            <li><a href="#">Menu <?php echo $i; ?></a></li>
            <?php
          }
          ?>
        </ul>
      </div>
    </header>
