@extends('layouts.app')

@section('title', 'Tarombo Parna – Pomparan Raja Nai Ambaton')

@section('content')
    <!-- Left Sidebar: News & Events -->
    @include('partials.sidebar-left')

    <!-- Center Section: Interactive Tree -->
    @include('partials.tree-view')

    <!-- Right Sidebar: Marga Grid -->
    @include('partials.sidebar-right')
@endsection

@section('scripts')
<script>
// ╔══════════════════════════════════════════════════════╗
//  FAMILY TREE DATA & COORDS
// ╚══════════════════════════════════════════════════════╝
const ROOT = {
    name: "Raja Nai\nAmbaton",
    x: 0, y: 130,
    isRoot: true,
    children: [
        {
            name: "Simbolon", x: -110, y: 40,
            children: [
                { 
                    name: "Sitanggang", x: -180, y: 65,
                    children: [{ name: "Sonbofot", x: -240, y: 95 }, { name: "Memutan", x: -230, y: 45 }]
                },
                { 
                    name: "Siteanggang", x: -160, y: 0,
                    children: [{ name: "Serols", x: -210, y: 15 }, { name: "Serugh", x: -215, y: -25 }]
                },
                { 
                    name: "Shelisgang", x: -190, y: -55,
                    children: [{ name: "Sianopang", x: -240, y: -45 }, { name: "Munthe", x: -235, y: -90 }]
                },
            ]
        },
        {
            name: "Sitio", x: -65, y: -35,
            children: [
                { 
                    name: "Goobotar", x: -105, y: -95,
                    children: [{ name: "SortZUBit", x: -150, y: -110 }, { name: "SINTING", x: -120, y: -145 }]
                },
                { 
                    name: "Tembu", x: -75, y: -145,
                    children: [{ name: "Marlite", x: -105, y: -185 }, { name: "Tarigas", x: -60, y: -195 }]
                },
                { 
                    name: "Silaen", x: -20, y: -180,
                    children: [{ name: "Sumbayak", x: -20, y: -230 }]
                },
            ]
        },
        {
            name: "Saragi", x: -20, y: -90,
            children: [
                { 
                    name: "Sarbus", x: 25, y: -175,
                    children: [{ name: "Siarbas", x: 20, y: -225 }, { name: "Tardis", x: 65, y: -215 }]
                },
                { 
                    name: "Gontos", x: 80, y: -140,
                    children: [{ name: "Sandolan", x: 110, y: -180 }, { name: "Gomoleno", x: 135, y: -140 }]
                },
                { 
                    name: "Siembos", x: 110, y: -90,
                    children: [{ name: "Themin", x: 155, y: -110 }, { name: "Sianola", x: 170, y: -75 }]
                },
            ]
        },
        {
            name: "Ginting", x: 25, y: -90,
            children: [
                { 
                    name: "Contone", x: 180, y: -50,
                    children: [{ name: "Uptan", x: 230, y: -75 }, { name: "Bitugangi", x: 245, y: -35 }]
                },
                { 
                    name: "Sinagang", x: 150, y: 5,
                    children: [{ name: "Sinagong", x: 210, y: 15 }, { name: "Sipora", x: 215, y: -15 }]
                },
                { 
                    name: "Soantas", x: 180, y: 60,
                    children: [{ name: "Neltes", x: 240, y: 55 }, { name: "Gortap", x: 235, y: 100 }]
                },
            ]
        },
        {
            name: "Goring", x: 75, y: -35,
            children: [
                { name: "Seantas", x: 120, y: -15, children: [{ name: "Qaeme", x: 170, y: -5 }, { name: "Saoore", x: 155, y: -45 }] },
                { name: "Siompu", x: 110, y: 35, children: [{ name: "Lobu", x: 160, y: 45 }, { name: "Dolok", x: 145, y: 80 }] }
            ]
        },
        {
            name: "Sihite", x: 120, y: 40,
            children: [
                { name: "Parna\nDigital", x: 175, y: 80, children: [{ name: "Minoux", x: 220, y: 115 }] },
                { name: "Sibuea", x: 160, y: 125, children: [{ name: "Purba", x: 205, y: 155 }, { name: "Damanik", x: 170, y: 175 }] }
            ]
        }
    ]
};

// ╔══════════════════════════════════════════════════════╗
//  CANVAS & RENDER SYSTEM
// ╚══════════════════════════════════════════════════════╝
const canvas = document.getElementById('treeCanvas');
const ctx    = canvas.getContext('2d');

let scale = 1.0;
let panX  = 0;
let panY  = 0;
let isDragging = false;
let lastMX = 0, lastMY = 0;
let allNodes = [];

// Load the custom Batak wood carved tree image
const treeImage = new Image();
treeImage.src = '/images/batak_tree.png';
treeImage.onload = () => {
    drawTree();
};

// Pan & drag support
canvas.addEventListener('mousedown', e => {
    isDragging = true;
    lastMX = e.clientX;
    lastMY = e.clientY;
});
window.addEventListener('mousemove', e => {
    if (!isDragging) {
        checkHover(e);
        return;
    }
    panX += e.clientX - lastMX;
    panY += e.clientY - lastMY;
    lastMX = e.clientX;
    lastMY = e.clientY;
    drawTree();
});
window.addEventListener('mouseup', () => { isDragging = false; });

canvas.addEventListener('wheel', e => {
    e.preventDefault();
    const factor = e.deltaY < 0 ? 1.15 : 0.85;
    scale = Math.max(0.4, Math.min(2.5, scale * factor));
    drawTree();
}, { passive: false });

// Helper to convert tree coordinates to screen coordinates
const wx = v => canvas.width  / 2 + (v + panX) * scale;
const wy = v => canvas.height / 2 + (v + panY) * scale;

// Recursively flatten node tree
function flatten(node, parent = null, depth = 0) {
    node._depth = depth;
    node._parent = parent;
    allNodes.push(node);
    if (node.children) {
        node.children.forEach(c => flatten(c, node, depth + 1));
    }
}

// ╔══════════════════════════════════════════════════════╗
//  DRAW BRANCHES & NODES
// ╚══════════════════════════════════════════════════════╝
function drawBranch(n1, n2, depth) {
    const x1 = wx(n1.x), y1 = wy(n1.y);
    const x2 = wx(n2.x), y2 = wy(n2.y);
    
    // Curved wood branch tracing path
    const cpx = (x1 + x2) / 2 + (y2 - y1) * 0.15;
    const cpy = (y1 + y2) / 2 - (x2 - x1) * 0.15;
    
    const grad = ctx.createLinearGradient(x1, y1, x2, y2);
    grad.addColorStop(0, '#5a3412');
    grad.addColorStop(1, '#8b5a2b');
    
    ctx.beginPath();
    ctx.moveTo(x1, y1);
    ctx.quadraticCurveTo(cpx, cpy, x2, y2);
    ctx.strokeStyle = grad;
    ctx.lineWidth = Math.max(1, (7 - depth * 1.5)) * scale;
    ctx.lineCap = 'round';
    ctx.shadowBlur = 3 * scale;
    ctx.shadowColor = 'rgba(0,0,0,0.3)';
    ctx.stroke();
    ctx.shadowBlur = 0;
}

function drawAllBranches(node) {
    if (node.children) {
        node.children.forEach(c => {
            drawBranch(node, c, node._depth || 0);
            drawAllBranches(c);
        });
    }
}

function drawSingleNode(node) {
    const x = wx(node.x), y = wy(node.y);
    const s = scale;
    
    ctx.save();
    
    if (node.isRoot) {
        // Grand centerpiece shield medallion
        const r = 40 * s;
        const outerGrad = ctx.createRadialGradient(x, y, 0, x, y, r);
        outerGrad.addColorStop(0, '#f9e076');
        outerGrad.addColorStop(0.4, '#c9a227');
        outerGrad.addColorStop(0.8, '#806010');
        outerGrad.addColorStop(1, '#4a3205');
        
        ctx.beginPath();
        ctx.arc(x, y, r + 8 * s, 0, Math.PI * 2);
        ctx.fillStyle = 'rgba(201,162,39,0.18)';
        ctx.fill();
        
        ctx.beginPath();
        ctx.arc(x, y, r, 0, Math.PI * 2);
        ctx.fillStyle = outerGrad;
        ctx.fill();
        ctx.strokeStyle = '#e8c84a';
        ctx.lineWidth = 3 * s;
        ctx.stroke();
        
        ctx.fillStyle = '#fff8e0';
        ctx.textAlign = 'center';
        ctx.textBaseline = 'middle';
        const lines = node.name.split('\n');
        const fs = Math.max(6, 10 * s);
        ctx.font = `bold ${fs}px 'Cinzel', serif`;
        lines.forEach((l, i) => {
            ctx.fillText(l, x, y + (i - (lines.length - 1) / 2) * (fs + 3));
        });
    } else {
        // Standard descendant capsule badge (wood plank look)
        const w = 68 * s, h = 26 * s;
        const rx = x - w / 2, ry = y - h / 2;
        const radius = 5 * s;
        
        const highlight = node._highlighted;
        const badgeGrad = ctx.createLinearGradient(rx, ry, rx, ry + h);
        if (highlight) {
            badgeGrad.addColorStop(0, '#ffe885');
            badgeGrad.addColorStop(1, '#c9a227');
        } else {
            badgeGrad.addColorStop(0, '#d9b359');
            badgeGrad.addColorStop(0.5, '#ab792b');
            badgeGrad.addColorStop(1, '#7d5213');
        }
        
        // Shadow
        ctx.shadowBlur = 5 * s;
        ctx.shadowColor = 'rgba(0,0,0,0.3)';
        
        ctx.beginPath();
        ctx.roundRect(rx, ry, w, h, radius);
        ctx.fillStyle = badgeGrad;
        ctx.fill();
        
        ctx.strokeStyle = highlight ? '#fff' : '#e8c84a';
        ctx.lineWidth = (highlight ? 2.5 : 1.2) * s;
        ctx.stroke();
        ctx.shadowBlur = 0;
        
        // Text
        const lines = node.name.split('\n');
        const fs = Math.max(5, 8 * s);
        ctx.font = `bold ${fs}px 'Inter', sans-serif`;
        ctx.fillStyle = highlight ? '#2b0002' : '#fff8e0';
        ctx.textAlign = 'center';
        ctx.textBaseline = 'middle';
        lines.forEach((l, i) => {
            ctx.fillText(l, x, y + (i - (lines.length - 1) / 2) * (fs + 2));
        });
    }
    ctx.restore();
}

function drawAllNodes(node) {
    drawSingleNode(node);
    if (node.children) {
        node.children.forEach(c => drawAllNodes(c));
    }
}

// ╔══════════════════════════════════════════════════════╗
//  MAIN DRAW LOOP
// ╚══════════════════════════════════════════════════════╝
function drawTree() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    
    // Background gradient
    const bg = ctx.createLinearGradient(0, 0, 0, canvas.height);
    bg.addColorStop(0, '#fbf3e3');
    bg.addColorStop(1, '#eadebe');
    ctx.fillStyle = bg;
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    
    // Drawing tree background carving image
    if (treeImage.complete) {
        // Image center is offset so it sits beautifully in coordinates
        const imgW = 750;
        const imgH = 750;
        ctx.save();
        ctx.globalAlpha = 0.85;
        ctx.drawImage(treeImage, wx(-imgW/2), wy(-imgH/2 + 20), imgW * scale, imgH * scale);
        ctx.restore();
    }
    
    // Draw connections then badges
    drawAllBranches(ROOT);
    drawAllNodes(ROOT);
}

// ╔══════════════════════════════════════════════════════╗
//  ZOOM CONTROLS
// ╚══════════════════════════════════════════════════════╝
function zoomIn() {
    scale = Math.min(2.5, scale * 1.2);
    drawTree();
}
function zoomOut() {
    scale = Math.max(0.4, scale * 0.8);
    drawTree();
}

// ╔══════════════════════════════════════════════════════╗
//  SEARCH & HIGHLIGHT
// ╚══════════════════════════════════════════════════════╝
document.getElementById('searchInput').addEventListener('input', function() {
    const q = this.value.trim().toLowerCase();
    allNodes.forEach(n => {
        n._highlighted = q.length > 0 && n.name.toLowerCase().includes(q);
    });
    drawTree();
});

function doSearch() {
    const q = document.getElementById('searchInput').value.trim().toLowerCase();
    if (!q) return;
    const found = allNodes.find(n => !n.isRoot && n.name.toLowerCase().includes(q));
    if (found) {
        panX = -found.x;
        panY = -found.y;
        scale = 1.6;
        allNodes.forEach(n => {
            n._highlighted = n.name.toLowerCase().includes(q);
        });
        drawTree();
    }
}

// ╔══════════════════════════════════════════════════════╗
//  HOVER TOOLTIP
// ╚══════════════════════════════════════════════════════╝
const tooltip = document.getElementById('tooltip');

function checkHover(e) {
    const rect = canvas.getBoundingClientRect();
    const mx   = e.clientX - rect.left;
    const my   = e.clientY - rect.top;
    let hit    = null;
    
    for (const n of allNodes) {
        const nx = wx(n.x), ny = wy(n.y);
        const hw = (n.isRoot ? 40 : 34) * scale;
        const hh = (n.isRoot ? 40 : 13) * scale;
        if (mx >= nx - hw && mx <= nx + hw && my >= ny - hh && my <= ny + hh) {
            hit = n;
            break;
        }
    }
    
    if (hit) {
        tooltip.style.display = 'block';
        tooltip.style.left = (e.clientX + 15) + 'px';
        tooltip.style.top  = (e.clientY - 12) + 'px';
        tooltip.innerHTML = `<strong>${hit.name.replace('\n', ' ')}</strong><br><span style="font-size:0.6rem;opacity:0.8;">Klik marga untuk melompat</span>`;
    } else {
        tooltip.style.display = 'none';
    }
}

// ╔══════════════════════════════════════════════════════╗
//  FILTER TOGGLE
// ╚══════════════════════════════════════════════════════╝
function toggleFilter(el) {
    el.classList.toggle('active');
}

// ╔══════════════════════════════════════════════════════╗
//  MARGA SHIELDS INITIALIZATION (RIGHT SIDEBAR)
// ╚══════════════════════════════════════════════════════╝
const MARGAS = [
    { name: "Simbolon", c1: "#6b1010", c2: "#8b2020", icon: "Sm" },
    { name: "Sitio",    c1: "#5a3010", c2: "#7a4520", icon: "St" },
    { name: "Saragi",   c1: "#6b1010", c2: "#922020", icon: "Sr" },
    { name: "Ginting",  c1: "#4a2a10", c2: "#7a4520", icon: "Gt" },
    { name: "Goring",   c1: "#6b1010", c2: "#8b2020", icon: "Gr" },
    { name: "Sihite",   c1: "#3a1a08", c2: "#6a3a18", icon: "Sh" },
    { name: "Saragi",   c1: "#5a1010", c2: "#8a2020", icon: "Sr" },
    { name: "Ginting",  c1: "#4a2810", c2: "#7a4820", icon: "Gt" },
];

const grid = document.getElementById('margaGrid');
MARGAS.forEach((m, idx) => {
    const gradId = `sg${idx}`;
    const item   = document.createElement('div');
    item.className = 'marga-item';
    item.title     = `Marga ${m.name}`;
    item.innerHTML = `
        <div class="shield-wrap">
            <svg viewBox="0 0 80 90" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <linearGradient id="${gradId}" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="${m.c1}"/>
                        <stop offset="100%" stop-color="${m.c2}"/>
                    </linearGradient>
                    <filter id="shShadow${idx}" x="-20%" y="-20%" width="140%" height="140%">
                        <feDropShadow dx="0" dy="3" stdDeviation="3" flood-color="rgba(0,0,0,0.35)"/>
                    </filter>
                </defs>
                <path d="M40 5 L75 18 L75 52 Q75 76 40 88 Q5 76 5 52 L5 18 Z"
                      fill="url(#${gradId})"
                      stroke="#c9a227" stroke-width="2"
                      filter="url(#shShadow${idx})"/>
                <path d="M40 14 L68 25 L68 52 Q68 70 40 80 Q12 70 12 52 L12 25 Z"
                      fill="none" stroke="rgba(201,162,39,0.35)" stroke-width="1"/>
                <text x="40" y="44" text-anchor="middle" dominant-baseline="middle"
                      fill="rgba(245,230,200,0.6)" font-family="Cinzel, serif"
                      font-size="14" font-weight="700">${m.icon}</text>
            </svg>
        </div>
        <div class="marga-label">${m.name}</div>
    `;
    
    // Jump focus to node on click
    item.addEventListener('click', () => {
        const found = allNodes.find(n => n.name.toLowerCase() === m.name.toLowerCase());
        if (found) {
            panX = -found.x;
            panY = -found.y;
            scale = 1.6;
            allNodes.forEach(n => {
                n._highlighted = n.name.toLowerCase() === m.name.toLowerCase();
            });
            drawTree();
        }
    });
    grid.appendChild(item);
});

// ╔══════════════════════════════════════════════════════╗
//  INITIALIZATION
// ╚══════════════════════════════════════════════════════╝
function init() {
    canvas.width  = canvas.parentElement.clientWidth;
    canvas.height = canvas.parentElement.clientHeight || 520;
    flatten(ROOT);
    drawTree();
}

window.addEventListener('resize', () => {
    canvas.width  = canvas.parentElement.clientWidth;
    canvas.height = canvas.parentElement.clientHeight || 520;
    drawTree();
});

init();
</script>
@endsection
