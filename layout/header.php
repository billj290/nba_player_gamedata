<nav class="navbar mb-2" style="background-color:#68be8d">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">首頁</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?do=player_list">球員比較</a>
        </li>
        <?php
        if (isset($_SESSION['login'])){
          echo "<li class='nav-item'>";
          echo  "<a class='nav-link' href='back.php?do=team_pic'>球隊圖片編輯</a>";
          echo  "<a class='nav-link' href='back.php?do=player_list'>球員編輯</a>";
          echo  "<a class='nav-link' href='back.php?do=survey'>投票編輯</a>";
          echo "</li>";
        }
        // print_r($_SESSION['login']);
        ?>
        <li class="nav-item">
          <a class="nav-link" href="index.php?do=login">登入</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">登出</a>
        </li>

      </ul>

    </div>
  </div>
</nav>