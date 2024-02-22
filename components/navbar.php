<?php
session_start();

function Navbar($path)
{
  if (isset($_SESSION["username"])) {
    return "
        <nav class='navbar fixed-top navbar-expand-lg navbar-light custom-gradient'>
          <div class='container'>
            <a class='navbar-brand' style='font-weight: bolder;' href='$path'>MENU</a>
  
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNavAltMarkup' aria-controls='navbarNavAltMarkup'  aria-expanded='false' aria-label='Toggle navigation'>
              <span class='navbar-toggler-icon'></span>
            </button>
        
            <div class='collapse navbar-collapse' id='navbarNavAltMarkup'>
              <div class='navbar-nav'>
                <a class='nav-item nav-link active'>Home <span class='sr-only'>(current)</span></a>
                <a class='nav-item nav-link' id='linkToOtherPage'  href='$path/page/showroam'>Showroam</a>
                <a class='nav-item nav-link' href='$path/page/biodata'>Biodata</a>
              </div>
            </div>
  
            <div class='d-flex'>
              <div>$_SESSION[username]</div>
              <a href='$path/page/auth/signout'>
                <button class='btn btn-primary'>
                  Logout
                </button>
              </a>
            </div>
          </div>
        </nav>
      ";
  } else {
    return "
        <nav class='navbar fixed-top navbar-expand-lg navbar-light custom-gradient'>
          <div class='container'>
            <a class='navbar-brand' style='font-weight: bolder;' href='$path'>MENU</a>
  
            <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNavAltMarkup' aria-controls='navbarNavAltMarkup'  aria-expanded='false' aria-label='Toggle navigation'>
              <span class='navbar-toggler-icon'></span>
            </button>
        
            <div class='collapse navbar-collapse' id='navbarNavAltMarkup'>
              <div class='navbar-nav'>
                <a class='nav-item nav-link active'>Home <span class='sr-only'>(current)</span></a>
                <a class='nav-item nav-link' id='linkToOtherPage'  href='$path/page/showroam'>Showroam</a>
                <a class='nav-item nav-link' href='$path/page/biodata'>Biodata</a>
              </div>
            </div>
  
            <div>
              <a href='$path/page/auth/login'>
                <button class='btn btn-primary'>
                  Login
                </button>
              </a>
            </div>
          </div>
        </nav>
      ";
  }
}

function Footer()
{
  return "
      <footer class='bg-dark text-white '>
        <div class='container'>
          <div class='row pt-3'>
            <div class='col text-center'>
              <p>Made By Muhammad Afif Rindyansyah</p>
            </div>
          </div>
        </div>
      </footer>
    ";
}
