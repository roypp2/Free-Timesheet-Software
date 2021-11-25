<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Project 1</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="?">Home</a>
          </li>
          <?php if(isset($_SESSION["br__customer_id"])) { ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown01">
                <li><a class="dropdown-item" href="?page=br__customer_page&action=br__customer_myaccount">My account</a></li>
                <?php if($_SESSION["br__type"] == "ADMIN") { ?><li><a class="dropdown-item" href="?page=br__customer_page&action=report">All accounts</a></li><?php } ?>
              </ul>
            </li>           
            <?php } else { ?>
          <li class="nav-item">
            <a class="nav-link" href="?page=br__customer_page" tabindex="-1" aria-disabled="true">Signup</a>
          </li>
          <?php } ?>
        </ul>
          <?php if(isset($_SESSION["br__customer_id"])) { ?><button class="btn btn-outline-success" onClick="javascript: window.location='?page=br__customer_page&action=logout'; " type="submit">Logout</button><?php } ?>
      </div>
    </div>
  </nav>
</header>