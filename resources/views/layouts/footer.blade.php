    <!-- Footer -->
    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-4 footer-about wow fadeInUp">
                        <img class="logo-footer" src="/public/assets/img/logo.png" alt="logo-footer" data-at2x="assets/img/logo.png">
                        <p>
                            We are a young company always looking for new and creative ideas to help you with our products in your everyday work.
                        </p>
                        <p><a href="#">Aftab Team</a></p>
                    </div>
                    <div class="col-md-4 col-lg-4 offset-lg-1 footer-contact wow fadeInDown">
                        <h3>Contact</h3>
                        <p><i class="fas fa-map-marker-alt"></i>Tehran,iran</p>
                        <p><i class="fas fa-phone"></i> Phone: (0098) 021 11 22 333</p>
                        <p><i class="fas fa-envelope"></i> Email: <a href="mailto:aftab@gmail.com">aftab@gmail.com</a></p>
                        <p><i class="fab fa-skype"></i> Skype: your_id</p>
                    </div>
                    <div class="col-md-4 col-lg-3 footer-social wow fadeInUp">
                        <h3>Follow us</h3>
                        <p>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-pinterest"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 footer-copyright">
                        <p>Copyright © 2018 AFTAB International Public Limited. All rights reserved.</p>
                    </div>
                    <div class="col-md-7 footer-menu">
                        <nav class="navbar navbar-dark navbar-expand-md">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav ml-auto">
                                    @foreach($menus as $menu)
                                        <li class="nav-item">
                                            <a class="nav-link scroll-link" href="{{ route('showMenu', $menu->id) }}">{{ $menu->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>

