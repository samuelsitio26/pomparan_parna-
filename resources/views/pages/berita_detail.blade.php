@extends('layouts.app')

@section('title', $berita->title . ' – Parsadaan Pomparan Ni Raja Nai Ambaton')

@section('content')
<!-- Subpage Banner Hero -->
<section class="subpage-banner py-4 bg-dark text-white text-center border-bottom border-warning border-4" style="background: linear-gradient(135deg, #4A1515 0%, #2A0808 100%);">
    <div class="container-xxl">
        <span class="badge bg-warning text-dark fw-bold px-3 py-1 rounded-pill mb-2">{{ $berita->category }}</span>
        <h2 class="h2 fw-bold text-white mb-1" style="font-family: var(--font-heading);">{{ $berita->title }}</h2>
        <p class="fs-6 text-light mb-0"><i class="bi bi-calendar3 me-1"></i> {{ optional($berita->event_date)->format('d F Y') }} @if($berita->location) | <i class="bi bi-geo-alt-fill me-1"></i> {{ $berita->location }} @endif</p>
    </div>
</section>

<div class="container-xxl my-5">
    <div class="row g-4">
        <div class="col-12 col-lg-8">
            <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white">
                <div class="lead fw-bold text-danger mb-4 pb-3 border-bottom fs-4">
                    {{ $berita->summary }}
                </div>
                <div class="article-content fs-5 leading-relaxed text-dark">
                    {!! nl2br(e($berita->content)) !!}
                </div>

                <div class="mt-5 pt-3 border-top">
                    <a href="{{ route('berita') }}" class="btn btn-outline-danger rounded-pill fw-bold px-4"><i class="bi bi-arrow-left me-1"></i> Kembali ke Daftar Berita</a>
                </div>
            </div>
        </div>

        <aside class="col-12 col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 p-4 bg-white mb-4">
                <h4 class="h5 fw-bold text-danger mb-3 border-bottom pb-2"><i class="bi bi-newspaper me-2"></i> Berita Lainnya</h4>
                <div class="d-flex flex-column gap-3">
                    @foreach($relatedBerita as $rel)
                        <div class="border-bottom pb-2">
                            <span class="badge bg-light text-secondary border mb-1" style="font-size:0.7rem;">{{ $rel->category }}</span>
                            <h5 class="h6 fw-bold mb-1">
                                <a href="{{ route('berita.detail', $rel->slug) }}" class="text-dark text-decoration-none hover-danger">{{ $rel->title }}</a>
                            </h5>
                            <small class="text-muted"><i class="bi bi-calendar3"></i> {{ optional($rel->event_date)->format('d M Y') }}</small>
                        </div>
                    @endforeach
                </div>
            </div>
        </aside>
    </div>
</div>
@endsection
