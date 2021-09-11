    <!-- FOOTER -->
    <footer class="mt-5">

        <?php
        if (has_nav_menu('footer-menu')) {
            wp_nav_menu(array('theme_location' => 'footer-menu'));
        }
        ?>
        <div class="container">
            <div class="row mt-2">
                <div class="col-md-4 footer-column">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <span class="footer-title">Product</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Product 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Product 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Plans & Prices</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Frequently asked questions</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 footer-column">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <span class="footer-title">Company</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Job postings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">News and articles</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 footer-column">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <span class="footer-title">Contact & Support</span>
                        </li>
                        <li class="nav-item">
                            <span class="nav-link"><i class="fas fa-phone"></i>+47 45 80 80 80</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-comments"></i>Live chat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-envelope"></i>Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-star"></i>Give feedback</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="text-center"><i class="fas fa-ellipsis-h"></i></div>

            <div class="row text-center">
                <div class="col-md-4 box">
                    <span class="copyright quick-links">Copyright &copy; <a href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a>
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                    </span>
                </div>
                <div class="col-md-4 box">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 box">
                    <ul class="list-inline quick-links">
                        <li class="list-inline-item">
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- START OF BOOSTRAP -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>

    <script src="https://use.fontawesome.com/f99787660b.js"></script>
    <!--! ENF OF BOOSTRAP -->

    <!-- *EDIT THE SCRIPTS* -->
    <!-- <script src="<?php bloginfo('script_url') ?>"></script> -->
    </body>