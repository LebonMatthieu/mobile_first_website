<?php include('app/include/header.php'); ?>
<div class="container">
  <h1 class="main-title">Home Page</h1>

  <div id="col" class="hidden-xs">
    <div class="col-left">
        <img src="" alt="Image 1" />
    </div>
    <div class="col-right">
      <div class="content">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
          ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
          culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
  </div>

  <div class="project-list">
    <?php
      for($i = 1; $i < 11; $i++ )
      {
        ?>
        <div class="project-card p-<?php echo $i;?>">
          <img src="http://lorempicsum.com/futurama/350/200/2" alt="image-<?php echo $i; ?>"/>
          <div class="project-title">
            <h2>Project <?php echo $i;?></h2>
          </div>
          <div class="project-subtitle">
            <h3>Subtitle Project <?php echo $i;?></h3>
          </div>
        </div>
        <?php
      }
    ?>
    <div class="clear"></div>
  </div>

</div>
<?php include('app/include/footer.php'); ?>
