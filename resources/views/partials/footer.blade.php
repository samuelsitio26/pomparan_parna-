<footer class="parna-footer">
    <div class="footer-container">
        <!-- Col 1: Brand & Bio -->
        <div class="footer-col footer-col-brand">
            <div class="brand-logo" style="margin-bottom: 0.8rem;">
                <div class="brand-logo-wrapper">
                    <img src="{{ asset('images/logo.png') }}" alt="PARNA Logo" class="brand-logo-img-footer" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="brand-icon-fallback" style="display: none;">
                        <i class="bi bi-shield-shaded"></i>
                    </div>
                </div>
                <div class="brand-text">
                    <h1 style="color: #FFFFFF; font-size: 1.25rem;">PARNA</h1>
                    <p style="color: #E8D4A8; font-size: 0.6rem;">PARSADAAN POMPARAN NI RAJA NAI AMBATON</p>
                </div>
            </div>
            <p class="footer-bio-text">
                Bersatu dalam adat, berpegang pada tarombo, melestarikan warisan leluhur untuk generasi masa depan.
            </p>
        </div>

        <!-- Col 2: Tautan Cepat -->
        <div class="footer-col">
            <h4>TAUTAN CEPAT</h4>
            <div class="footer-quick-links">
                <ul>
                    <li><a href="{{ route('tentang') }}">Tentang Parna</a></li>
                    <li><a href="{{ route('tarombo') }}">Tarombo</a></li>
                    <li><a href="{{ route('marga') }}">Marga Parna</a></li>
                </ul>
                <ul>
                    <li><a href="{{ route('berita') }}">Berita & Kegiatan</a></li>
                    <li><a href="{{ route('galeri') }}">Galeri</a></li>
                    <li><a href="{{ route('kontak') }}">Kontak</a></li>
                </ul>
            </div>
        </div>

        <!-- Col 3: Hubungi Kami -->
        <div class="footer-col">
            <h4>HUBUNGI KAMI</h4>
            <ul class="footer-contact-list">
                <li><i class="bi bi-telephone-fill"></i> +62 812-3456-7890</li>
                <li><i class="bi bi-envelope-fill"></i> info@parna.or.id</li>
                <li><i class="bi bi-geo-alt-fill"></i> Sumatera Utara, Indonesia</li>
            </ul>
        </div>

        <!-- Col 4: Ikuti Kami -->
        <div class="footer-col">
            <h4>IKUTI KAMI</h4>
            <div class="footer-social-icons">
                <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" aria-label="Youtube"><i class="bi bi-youtube"></i></a>
            </div>
        </div>
    </div>
</footer>
