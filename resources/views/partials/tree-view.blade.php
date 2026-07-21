<!-- Tree View Partial -->
<main class="tree-wrap">
    <div class="tree-toolbar">
        <div class="filter-pill" onclick="toggleFilter(this)">
            <i class="bi bi-funnel-fill"></i> Filters <i class="bi bi-chevron-down"></i>
        </div>
        <div class="filter-pill" onclick="toggleFilter(this)">
            <i class="bi bi-sliders"></i> Urutkan <i class="bi bi-chevron-down"></i>
        </div>
        <div class="icon-btn" title="Tampilan List">
            <i class="bi bi-list-ul"></i>
        </div>
        <div class="icon-btn" title="Tambah Anggota">
            <i class="bi bi-person-plus-fill"></i>
        </div>
        <div class="tree-search">
            <input type="text" id="searchInput" placeholder="Cari Nama Anda atau Marga...">
            <button class="search-go" onclick="doSearch()">
                <i class="bi bi-search"></i>
            </button>
        </div>
    </div>

    <div class="canvas-container">
        <canvas id="treeCanvas"></canvas>
        <div class="zoom-ctrl">
            <div class="zoom-btn" onclick="zoomIn()" title="Zoom In">
                <i class="bi bi-plus-lg"></i>
            </div>
            <div class="zoom-btn" onclick="zoomOut()" title="Zoom Out">
                <i class="bi bi-dash-lg"></i>
            </div>
        </div>
    </div>

    <div class="tree-footer">
        <div class="tf-search-group">
            <div class="tf-search">
                <input type="text" placeholder="Tambah Anggota...">
                <button class="tf-btn"><i class="bi bi-plus-lg"></i></button>
                <button class="tf-btn tf-minus"><i class="bi bi-dash-lg"></i></button>
            </div>
            <div class="tf-search">
                <input type="text" placeholder="Cari Anggota...">
                <button class="tf-btn"><i class="bi bi-search"></i></button>
            </div>
        </div>
        <div class="gear-btn" title="Pengaturan">
            <i class="bi bi-gear-fill"></i>
        </div>
    </div>
</main>
