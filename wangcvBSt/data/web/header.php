<nav class="navbar navbar-expand-lg navbar-light bg-light no-padding">
  
  
  <!-- Image and text -->
<nav class="navbar navbar-light bg-light" style="background-color:white;">
  <a class="navbar-brand" href="index.php">
    <img src="image/logo.png" height="50" alt="简历logo">
  </a>
</nav>




  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">

<?php
function active_class($link)
{
    if($link==ltrim($_SERVER['SCRIPT_NAME'],'/')){
        return "active";
    }
}
?>

  <?php if( $is_login ): ?>
  <ul class="navbar-nav">
  <li class="nav-item <?=active_class('resume_list.php') ?>">
        <a class="nav-link" href="resume_list.php"><span class="menu_square"></span>我的简历</a>
      </li>
      <li class="nav-item <?=active_class('resume_list.php') ?>">
        <a class="nav-link" href="user_logout.php"><span class="menu_square"></span>退出</a>
      </li> 
    </ul>
        <?php else: ?>
    <ul class="navbar-nav">
    
      <li class="nav-item ">
        <a class="nav-link" href="user_reg.php"><span class="menu_square"></span>注册</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user_login.php"><span class="menu_square"></span>登入</a>
      </li>
   
    </ul>
    <?php endif; ?>
  </div>
</nav>