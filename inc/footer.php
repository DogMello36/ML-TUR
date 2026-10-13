<hr>
		</main> <!-- /container -->

	<footer class="site-footer">

        <div class="footer-top-strip"></div>

        <div class="footer-main container">

            <div class="footer-logo">
                <a href="index.php">
                    <img class="topbar-logo" src="<?php echo BASEURL; ?>img\image-Photoroom.png" alt="MLTur">
                </a>
            </div>

            <div class="footer-divider"></div>

            <div class="footer-contact">
                <p><i class="fa-solid fa-phone"></i> (15) 99606-5186 <i class="fab fa-whatsapp footer-whatsapp"></i></p>
                <p><i class="fas fa-envelope"></i> mlturviagenseturismo@gmail.com</p>
                <p><i class="fas fa-map-marker-alt"></i> Sorocaba - SP</p>
            </div>

            <div class="footer-divider"></div>

            <div class="footer-social">
                <a href="https://www.instagram.com/mltur_viagenseturismo/" target="_blank" rel="noopener" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            </div>

            <div class="footer-divider"></div>

            <div class="footer-tagline">
                <p>Viaje.<br>Viva.<br><span>Compartilhe.</span></p>
            </div>

        </div>

        <hr class="footer-hr">

        <div class="footer-bottom container">
            <p>© <?php echo date('Y'); ?> MLTur. Todos os direitos reservados.</p>
        </div>

    </footer>

	
</body>

 <script>
        (function () {
            var btn = document.getElementById('mobileMenuBtn');
            var dropdown = document.getElementById('mobileMenuDropdown');

            if (!btn || !dropdown) return;

            btn.addEventListener('click', function (e) {
                e.stopPropagation();
                var isOpen = dropdown.classList.toggle('show');
                btn.setAttribute('aria-expanded', isOpen);
            });

            document.addEventListener('click', function (e) {
                if (!dropdown.contains(e.target) && !btn.contains(e.target)) {
                    dropdown.classList.remove('show');
                    btn.setAttribute('aria-expanded', 'false');
                }
            });
        })();
    </script>

<script src="<?php echo BASEURL; ?>js/all.js"></script>
<script src="<?php echo BASEURL; ?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo BASEURL; ?>js/jquery-3.6.0.min.js"></script>
</html>