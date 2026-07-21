<!-- Bootstrap 5 Footer -->
<footer class="parna-footer bg-dark text-white pt-5 pb-4 mt-5 border-top border-warning border-4">
    <div class="container-xxl">
        <div class="row g-4">
            <div class="col-12 col-md-4">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <div class="rounded-3 d-flex align-items-center justify-content-center text-warning" style="width: 44px; height: 44px; background-color: var(--parna-maroon);">
                        <i class="bi bi-shield-shaded fs-4"></i>
                    </div>
                    <h3 class="h4 mb-0 fw-bold text-warning" style="font-family: var(--font-heading);">PARNA</h3>
                </div>
                <p class="text-light-50 small mb-3">
                    Parsadaan Pomparan Ni Raja Nai Ambaton (PARNA) — Wadah persatuan adat, melestarikan silsilah tarombo leluhur Raja Nai Ambaton untuk seluruh generasi.
                </p>
                <div class="d-flex gap-2">
                    <a href="#" class="btn btn-outline-light btn-sm rounded-circle" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="btn btn-outline-light btn-sm rounded-circle" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                    <a href="#" class="btn btn-outline-light btn-sm rounded-circle" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                </div>
            </div>

            <div class="col-6 col-md-2">
                <h5 class="fw-bold text-warning mb-3">Navigasi</h5>
                <ul class="list-unstyled small d-flex flex-column gap-2 mb-0">
                    <li><a href="{{ route('home') }}" class="text-white-50 text-decoration-none">Beranda</a></li>
                    <li><a href="{{ route('tarombo') }}" class="text-white-50 text-decoration-none">Tarombo Silsilah</a></li>
                    <li><a href="{{ route('marga') }}" class="text-white-50 text-decoration-none">Daftar Marga</a></li>
                    <li><a href="{{ route('berita') }}" class="text-white-50 text-decoration-none">Berita & Kegiatan</a></li>
                    <li><a href="{{ route('tentang') }}" class="text-white-50 text-decoration-none">Tentang Parna</a></li>
                </ul>
            </div>

            <div class="col-6 col-md-3">
                <h5 class="fw-bold text-warning mb-3">Tautan Cepat</h5>
                <ul class="list-unstyled small d-flex flex-column gap-2 mb-0">
                    <li><a href="{{ route('marga') }}" class="text-white-50 text-decoration-none"><i class="bi bi-chevron-right me-1"></i> Cari Marga Parna</a></li>
                    <li><a href="{{ route('tarombo') }}" class="text-white-50 text-decoration-none"><i class="bi bi-chevron-right me-1"></i> Pohon Silsilah Digital</a></li>
                    <li><a href="{{ route('tentang') }}" class="text-white-50 text-decoration-none"><i class="bi bi-chevron-right me-1"></i> Sejarah Raja Nai Ambaton</a></li>
                </ul>
            </div>

            <div class="col-12 col-md-3">
                <h5 class="fw-bold text-warning mb-3">Kontak Adat</h5>
                <p class="small text-white-50 mb-2"><i class="bi bi-geo-alt-fill text-warning me-2"></i> Samosir & Medan, Sumatera Utara</p>
                <p class="small text-white-50 mb-2"><i class="bi bi-envelope-fill text-warning me-2"></i> sekretariat@parna.or.id</p>
                <p class="small text-white-50 mb-0"><i class="bi bi-telephone-fill text-warning me-2"></i> +62 812-3456-7890</p>
            </div>
        </div>

        <div class="border-top border-secondary mt-4 pt-3 text-center small text-white-50">
            <p class="mb-0">&copy; {{ date('Y') }} Parsadaan Pomparan Ni Raja Nai Ambaton (PARNA). Seluruh Hak Cipta Dilindungi.</p>
        </div>
    </div>
</footer>
