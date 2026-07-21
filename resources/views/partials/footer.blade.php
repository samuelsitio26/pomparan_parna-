<footer class="parna-footer">
    <div class="footer-container">
        <!-- Col 1: Brand -->
        <div class="footer-col">
            <div class="brand-logo" style="margin-bottom: 1rem;">
                <div class="brand-icon">
                    <i class="bi bi-shield-shaded"></i>
                </div>
                <div class="brand-text">
                    <h1 style="color: #FFFFFF;">PARNA</h1>
                    <p style="color: var(--parna-gold-light);">PARSADAAN POMPARAN NI RAJA NAI AMBATON</p>
                </div>
            </div>
            <p style="font-size: 0.82rem; color: #C2B3A3; line-height: 1.5; margin-bottom: 1.2rem;">
                Menyatukan Pomparan,<br>Melestarikan Warisan Leluhur.
            </p>
            <div style="display: flex; gap: 10px; font-size: 1.1rem;">
                <a href="#" style="color: #E2D5C7;"><i class="bi bi-facebook"></i></a>
                <a href="#" style="color: #E2D5C7;"><i class="bi bi-instagram"></i></a>
                <a href="#" style="color: #E2D5C7;"><i class="bi bi-youtube"></i></a>
                <a href="#" style="color: #E2D5C7;"><i class="bi bi-globe"></i></a>
            </div>
        </div>

        <!-- Col 2: Tautan Cepat -->
        <div class="footer-col">
            <h4>TAUTAN CEPAT</h4>
            <ul>
                <li><a href="{{ route('home') }}">Beranda</a></li>
                <li><a href="{{ route('tentang') }}">Tentang Parna</a></li>
                <li><a href="{{ route('marga') }}">Marga Parna</a></li>
                <li><a href="{{ route('tarombo') }}">Tarombo</a></li>
                <li><a href="{{ route('berita') }}">Berita & Kegiatan</a></li>
                <li><a href="#">Galeri</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </div>

        <!-- Col 3: Informasi -->
        <div class="footer-col">
            <h4>INFORMASI</h4>
            <ul>
                <li><a href="{{ route('tentang') }}">Sejarah Parna</a></li>
                <li><a href="#">Aturan Adat</a></li>
                <li><a href="#">Panduan Adat</a></li>
                <li><a href="#">Dokumen & Arsip</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
        </div>

        <!-- Col 4: Hubungi Kami -->
        <div class="footer-col">
            <h4>HUBUNGI KAMI</h4>
            <ul style="gap: 12px;">
                <li style="display: flex; align-items: center; gap: 8px; font-size: 0.84rem; color: #C2B3A3;">
                    <i class="bi bi-telephone-fill" style="color: var(--parna-gold);"></i> +62 812-3456-7890
                </li>
                <li style="display: flex; align-items: center; gap: 8px; font-size: 0.84rem; color: #C2B3A3;">
                    <i class="bi bi-envelope-fill" style="color: var(--parna-gold);"></i> info@parna.or.id
                </li>
                <li style="display: flex; align-items: center; gap: 8px; font-size: 0.84rem; color: #C2B3A3;">
                    <i class="bi bi-geo-alt-fill" style="color: var(--parna-gold);"></i> Sumatera Utara, Indonesia
                </li>
            </ul>
        </div>

        <!-- Col 5: Ikuti Kami -->
        <div class="footer-col">
            <h4>IKUTI KAMI</h4>
            <p style="font-size: 0.82rem; color: #C2B3A3; margin-bottom: 1rem; line-height: 1.4;">
                Dapatkan informasi terbaru seputar kegiatan dan berita Parna.
            </p>
            <div class="footer-newsletter-input">
                <input type="email" placeholder="Masukkan email Anda">
                <button type="button"><i class="bi bi-send-fill"></i></button>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; {{ date('Y') }} Parsadaan Pomparan Ni Raja Nai Ambaton (PARNA). Seluruh Hak Cipta Dilindungi.</p>
    </div>
</footer>
