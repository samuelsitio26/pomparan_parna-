@extends('layouts.app')

@section('title', 'Kontak Kami – Parsadaan Pomparan Ni Raja Nai Ambaton')

@section('content')
<!-- Subpage Banner Hero -->
<section class="subpage-banner">
    <div class="subpage-banner-content">
        <h2>KONTAK KAMI</h2>
        <p class="tagline">Kami siap terhubung dengan Pomparan Parna di seluruh dunia.</p>
        <p class="desc">
            Sampaikan pertanyaan, saran, atau informasi melalui kontak di bawah ini.
        </p>
    </div>
</section>

<!-- Main Container Layout -->
<div class="layout-container">
    <div class="grid-2-col-equal">
        <!-- LEFT COLUMN: HUBUNGI KAMI -->
        <div>
            <h3 class="section-header-title">
                <i class="bi bi-people-fill" style="color: var(--parna-gold);"></i> HUBUNGI KAMI
            </h3>

            <!-- 4 Grid Cards Contact -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1rem;">
                <!-- Card 1: Alamat -->
                <div class="sidebar-card" style="margin: 0; padding: 1.2rem; display: flex; gap: 12px; align-items: flex-start;">
                    <div style="width: 42px; height: 42px; background: var(--parna-maroon); color: #FFFFFF; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; flex-shrink: 0;">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <div>
                        <h5 style="font-size: 0.85rem; font-weight: 700; color: var(--parna-maroon); margin-bottom: 4px; text-transform: uppercase;">ALAMAT SEKRETARIAT</h5>
                        <p style="font-size: 0.78rem; color: var(--parna-text-muted); line-height: 1.4; margin: 0;">
                            Sekretariat Parsadaan Parna<br>
                            Jl. Sisingamangaraja No. 12<br>
                            Balige, Kabupaten Toba<br>
                            Sumatera Utara 22312<br>
                            Indonesia
                        </p>
                    </div>
                </div>

                <!-- Card 2: Telepon -->
                <div class="sidebar-card" style="margin: 0; padding: 1.2rem; display: flex; gap: 12px; align-items: flex-start;">
                    <div style="width: 42px; height: 42px; background: var(--parna-maroon); color: #FFFFFF; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; flex-shrink: 0;">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div>
                        <h5 style="font-size: 0.85rem; font-weight: 700; color: var(--parna-maroon); margin-bottom: 4px; text-transform: uppercase;">TELEPON / WHATSAPP</h5>
                        <p style="font-size: 0.82rem; font-weight: 700; color: var(--parna-text-main); margin-bottom: 2px;">
                            +62 812-3456-7890
                        </p>
                        <p style="font-size: 0.75rem; color: var(--parna-text-muted); margin: 0;">
                            (WhatsApp)<br>
                            Senin - Jumat<br>
                            08.00 - 17.00 WIB
                        </p>
                    </div>
                </div>

                <!-- Card 3: Email -->
                <div class="sidebar-card" style="margin: 0; padding: 1.2rem; display: flex; gap: 12px; align-items: flex-start;">
                    <div style="width: 42px; height: 42px; background: var(--parna-maroon); color: #FFFFFF; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; flex-shrink: 0;">
                        <i class="bi bi-envelope-fill"></i>
                    </div>
                    <div>
                        <h5 style="font-size: 0.85rem; font-weight: 700; color: var(--parna-maroon); margin-bottom: 4px; text-transform: uppercase;">EMAIL</h5>
                        <p style="font-size: 0.78rem; color: var(--parna-text-main); margin-bottom: 2px;">
                            info@parna.or.id<br>
                            sekretariat@parna.or.id
                        </p>
                        <p style="font-size: 0.72rem; color: var(--parna-text-muted); margin: 0;">
                            Kami akan merespon secepat mungkin.
                        </p>
                    </div>
                </div>

                <!-- Card 4: Website -->
                <div class="sidebar-card" style="margin: 0; padding: 1.2rem; display: flex; gap: 12px; align-items: flex-start;">
                    <div style="width: 42px; height: 42px; background: var(--parna-maroon); color: #FFFFFF; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; flex-shrink: 0;">
                        <i class="bi bi-globe"></i>
                    </div>
                    <div>
                        <h5 style="font-size: 0.85rem; font-weight: 700; color: var(--parna-maroon); margin-bottom: 4px; text-transform: uppercase;">WEBSITE</h5>
                        <p style="font-size: 0.82rem; font-weight: 700; color: var(--parna-maroon); margin-bottom: 2px;">
                            www.parna.or.id
                        </p>
                        <p style="font-size: 0.72rem; color: var(--parna-text-muted); margin: 0;">
                            Temukan informasi terbaru seputar Parsadaan Parna di website resmi kami.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 5: Jam Operasional -->
            <div class="sidebar-card" style="padding: 1.2rem; display: flex; gap: 12px; align-items: flex-start;">
                <div style="width: 42px; height: 42px; background: var(--parna-maroon); color: #FFFFFF; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; flex-shrink: 0;">
                    <i class="bi bi-clock-fill"></i>
                </div>
                <div>
                    <h5 style="font-size: 0.85rem; font-weight: 700; color: var(--parna-maroon); margin-bottom: 4px; text-transform: uppercase;">JAM OPERASIONAL SEKRETARIAT</h5>
                    <p style="font-size: 0.78rem; color: var(--parna-text-main); margin-bottom: 2px;">
                        Senin - Jumat : 08.00 - 17.00 WIB<br>
                        Sabtu - Minggu : Tutup
                    </p>
                    <p style="font-size: 0.72rem; color: var(--parna-text-muted); margin: 0;">
                        *Hari libur nasional sekretariat tutup.
                    </p>
                </div>
            </div>
        </div>

        <!-- RIGHT COLUMN: KIRIM PESAN FORM -->
        <div>
            <h3 class="section-header-title">
                <i class="bi bi-envelope-paper-fill" style="color: var(--parna-gold);"></i> KIRIM PESAN
            </h3>

            <div class="sidebar-card" style="padding: 1.8rem;">
                <p style="font-size: 0.84rem; color: var(--parna-text-muted); margin-bottom: 1.5rem;">
                    Isi formulir di bawah ini dan tim kami akan segera menghubungi Anda.
                </p>

                @if(session('success'))
                    <div style="background-color: #E8F5E9; border: 1px solid #A5D6A7; color: #2E7D32; padding: 10px 14px; border-radius: 8px; font-size: 0.85rem; margin-bottom: 1rem;">
                        <i class="bi bi-check-circle-fill"></i> {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('kontak.send') }}" method="POST">
                    @csrf
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1rem;">
                        <div>
                            <label style="font-size: 0.8rem; font-weight: 700; color: var(--parna-text-main); display: block; margin-bottom: 4px;">Nama Lengkap *</label>
                            <input type="text" name="name" required placeholder="Masukkan nama lengkap Anda" style="width: 100%; padding: 10px 14px; border: 1px solid var(--parna-border); border-radius: 8px; font-size: 0.88rem; outline: none; background: #FAF9F6;">
                        </div>
                        <div>
                            <label style="font-size: 0.8rem; font-weight: 700; color: var(--parna-text-main); display: block; margin-bottom: 4px;">Email *</label>
                            <input type="email" name="email" required placeholder="Masukkan email Anda" style="width: 100%; padding: 10px 14px; border: 1px solid var(--parna-border); border-radius: 8px; font-size: 0.88rem; outline: none; background: #FAF9F6;">
                        </div>
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1rem;">
                        <div>
                            <label style="font-size: 0.8rem; font-weight: 700; color: var(--parna-text-main); display: block; margin-bottom: 4px;">Nomor Telepon</label>
                            <input type="text" name="phone" placeholder="Masukkan nomor telepon" style="width: 100%; padding: 10px 14px; border: 1px solid var(--parna-border); border-radius: 8px; font-size: 0.88rem; outline: none; background: #FAF9F6;">
                        </div>
                        <div>
                            <label style="font-size: 0.8rem; font-weight: 700; color: var(--parna-text-main); display: block; margin-bottom: 4px;">Subjek *</label>
                            <select name="subject" required style="width: 100%; padding: 10px 14px; border: 1px solid var(--parna-border); border-radius: 8px; font-size: 0.88rem; outline: none; background: #FAF9F6; cursor: pointer;">
                                <option value="">Pilih Subjek</option>
                                <option value="Informasi Tarombo">Informasi Tarombo & Silsilah</option>
                                <option value="Pendataan Marga">Pendataan Marga Parna</option>
                                <option value="Kegiatan & Adat">Kegiatan & Acara Adat</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>

                    <div style="margin-bottom: 1.5rem;">
                        <label style="font-size: 0.8rem; font-weight: 700; color: var(--parna-text-main); display: block; margin-bottom: 4px;">Pesan *</label>
                        <textarea name="message" rows="4" required placeholder="Tulis pesan Anda di sini..." style="width: 100%; padding: 10px 14px; border: 1px solid var(--parna-border); border-radius: 8px; font-size: 0.88rem; outline: none; background: #FAF9F6; resize: vertical;"></textarea>
                    </div>

                    <button type="submit" class="btn-primary-maroon" style="padding: 10px 24px; border-radius: 8px;">
                        <i class="bi bi-send-fill"></i> KIRIM PESAN
                    </button>
                </form>

                <!-- Information Notice Box -->
                <div class="notice-box" style="margin-top: 1.5rem; margin-bottom: 0; background-color: #FAF6F0; border-left-color: var(--parna-gold);">
                    <div class="notice-icon" style="background-color: var(--parna-gold);">
                        <i class="bi bi-info-circle-fill"></i>
                    </div>
                    <div class="notice-content">
                        <h5 style="font-size: 0.85rem; font-weight: 700; color: var(--parna-maroon); margin-bottom: 2px;">INFORMASI</h5>
                        <p style="font-size: 0.78rem; color: var(--parna-text-muted); margin: 0; line-height: 1.35;">
                            Untuk informasi terkait tarombo, marga, atau kegiatan adat, silakan pilih subjek yang sesuai agar pesan Anda diteruskan ke bagian yang tepat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
