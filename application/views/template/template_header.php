<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="icon" href="<?php echo base_url('assets/')?>img/favicon.png" type="image/png" />
    <title>Arsi Atma</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/')?>css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/')?>css/flaticon.css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/')?>css/themify-icons.css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/')?>vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/')?>vendors/nice-select/css/nice-select.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />
    <!-- main css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/')?>css/style.css" />
</head>

<body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
    <div class="main_menu">
        <div class="search_input" id="search_input_box">
        <div class="container">
            <form class="d-flex justify-content-between" method="" action="">
            <input type="text" class="form-control"id="search_input" placeholder="Search Here"
            />
            <button type="submit" class="btn"></button>
            <span class="ti-close" id="close_search" title="Close Search"></span>
            </form>
          </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="index.html"
              ><h2>Arsitektur Atma Jaya</h2></a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="<?php echo site_url('Home')?>">HOME</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">HIMA &nbsp;</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Deskripsi</a></li>
                    <li><a class="dropdown-item" href="#">Informasi</a></li>
                    <li><a class="dropdown-item" href="#">Organisasi &nbsp;<i class="fas fa-caret-down" style="color:black;"></i></a>
                      <ul class="submenu dropdown-menu">
                          <li><a class="dropdown-item" href="">PH+CP</a></li>
                          <li><a class="dropdown-item" href="">BIRO <i class="fas fa-caret-down"></i></a>
                            <ul class="submenu dropdown-menu">
                              <li><a class="dropdown-item" href="">BIRO 1</a></li>
                              <li><a class="dropdown-item" href="">BIRO 2</a></li>
                              <li><a class="dropdown-item" href="">BIRO 3</a></li>
                              <li><a class="dropdown-item" href="">BIRO 4</a></li>
                              <li><a class="dropdown-item" href="">BIRO 5</a></li>
                              <li><a class="dropdown-item" href="">BIRO 6</a></li>
                              <li><a class="dropdown-item" href="">BIRO 7</a></li>
                              <li><a class="dropdown-item" href="">BIRO 9</a></li>
                              <li><a class="dropdown-item" href="">BIRO 10</a></li>
                              <li><a class="dropdown-item" href="">BIRO 11</a></li>
                              <li><a class="dropdown-item" href="">BIRO 12</a></li>
                            </ul>
                          </li>
                        </li>
                      </ul>
                    </li>
                  </ul>
              </li>
                <li class="nav-item submenu dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >UNIVERSITAS</a
                  >
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="single-blog.html"
                        >Blog Details</a
                      >
                    </li>
                  </ul>
                </li>
                <li class="nav-item submenu dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >FAKULTAS</a
                  >
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="single-blog.html"
                        >Blog Details</a
                      >
                    </li>
                  </ul>
                </li>
                <li class="nav-item submenu dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >PAMIY</a
                  >
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="single-blog.html"
                        >Blog Details</a
                      >
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">UMUM</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">PORTOFOLIO</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">LOGIN</a>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>

