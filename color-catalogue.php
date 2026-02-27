<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<style>
.color-catalogue-hero {
    background: linear-gradient(135deg, rgba(0, 51, 78, 0.94), rgba(12, 75, 142, 0.82)), url('assets/img/shape/hero9-bg-shape.png');
    background-size: cover;
    background-position: center;
    padding: 170px 0 95px;
}

.color-catalogue-hero h2,
.color-catalogue-hero p,
.color-catalogue-hero li,
.color-catalogue-hero a {
    color: #ffffff;
}

.color-catalogue-hero h2 {
    font-size: 50px;
    line-height: 1.12;
}

.color-catalogue-hero ul {
    list-style: none;
    display: flex;
    gap: 10px;
    margin: 0;
    padding: 0;
    align-items: center;
}

.shade-lab-section {
    background: #f6f9fc;
}

.family-tabs {
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 18px;
    border: 1px solid #cccccc;
    border-radius: 8px;
    overflow: hidden;
    background: #efefef;
}

.family-tab {
    border: none;
    border-right: 1px solid #cfcfcf;
    background: #efefef;
    color: #5a7088;
    padding: 12px 18px;
    font-size: 26px;
    font-weight: 500;
    line-height: 1;
    letter-spacing: 0.4px;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    transition: all 0.2s ease;
}

.family-tab:last-child {
    border-right: none;
}

.family-tab.active {
    background: #ffffff;
    color: #2b3f55;
}

.tab-dot {
    width: 14px;
    height: 14px;
    border-radius: 50%;
    display: inline-block;
    box-shadow: inset 0 0 0 1px rgba(0, 0, 0, 0.12);
}

.shade-lab-wrap {
    background: #ffffff;
    border: 1px solid #e1e9f1;
    border-radius: 24px;
    padding: 24px;
    box-shadow: 0 18px 40px rgba(0, 51, 78, 0.08);
}

.preview-panel {
    border: 1px solid #d9e5f0;
    border-radius: 18px;
    overflow: hidden;
    background: #ffffff;
    height: 100%;
}

.preview-canvas {
    position: relative;
    height: 520px;
    background: #eef3f8;
    transition: background-color 0.28s ease;
    overflow: hidden;
}

.preview-image {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    pointer-events: none;
    z-index: 2;
}

.preview-info {
    padding: 18px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 14px;
    border-top: 1px solid #e2ebf3;
}

.preview-info h4 {
    margin: 0;
    color: #0f2f48;
}

.preview-info p {
    margin: 0;
    color: #607488;
    font-size: 14px;
}

.preview-hex {
    border: 1px solid #d4e2ee;
    border-radius: 999px;
    padding: 8px 14px;
    background: #f3f8fc;
    font-weight: 700;
    color: #0f2f48;
}

.shade-panel {
    border: 1px solid #d9e5f0;
    border-radius: 18px;
    background: #ffffff;
    height: 100%;
    padding: 24px;
}

.shade-panel h3 {
    color: #00334e;
    margin-bottom: 8px;
}

.shade-panel p {
    color: #5e7388;
}

.shade-list {
    margin-top: 18px;
    display: grid;
    gap: 10px;
    max-height: 470px;
    overflow: auto;
    padding-right: 4px;
}

.shade-item {
    border: 1px solid #dfe9f2;
    border-radius: 12px;
    padding: 10px;
    background: #ffffff;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 10px;
    cursor: pointer;
    transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
}

.shade-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 24px rgba(12, 75, 142, 0.12);
}

.shade-item.active {
    border-color: #0c4b8e;
    box-shadow: 0 10px 22px rgba(12, 75, 142, 0.16);
}

.shade-item-left {
    display: flex;
    align-items: center;
    gap: 10px;
}

.swatch-dot {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    border: 1px solid rgba(0, 0, 0, 0.12);
    flex-shrink: 0;
}

.shade-name {
    font-size: 14px;
    font-weight: 700;
    color: #15334a;
    line-height: 1.2;
}

.shade-code {
    font-size: 12px;
    color: #62778b;
}

@media (max-width: 991px) {
    .color-catalogue-hero {
        padding: 145px 0 88px;
    }

    .color-catalogue-hero h2 {
        font-size: 36px;
    }

    .preview-canvas {
        height: 360px;
    }

    .shade-list {
        max-height: 340px;
    }

    .family-tab {
        font-size: 16px;
        padding: 11px 14px;
    }
}

@media (max-width: 575px) {
    .preview-info {
        flex-direction: column;
        align-items: flex-start;
    }

    .family-tabs {
        border-radius: 12px;
    }

    .family-tab {
        font-size: 14px;
        padding: 10px 12px;
    }
}
</style>

<div class="color-catalogue-hero">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <h2>Wall Paint Color Catalogue</h2>
                <div class="space14"></div>
                <!-- <p>Upar base color select karo, right side uske shades dekho, aur left bedroom wall par live preview check karo.</p> -->
                <div class="space16"></div>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><img src="assets/img/about/aboutuss-inr-hero-icon.svg" alt="separator"></li>
                    <li><a href="#">Color Catalogue</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="shade-lab-section sp1">
    <div class="container">
        <div class="family-tabs" id="familyTabs">
            <button class="family-tab active" type="button" data-family="red"><span class="tab-dot" style="background:#e7332a;"></span><span>REDS</span></button>
            <button class="family-tab" type="button" data-family="orange"><span class="tab-dot" style="background:#f4a100;"></span><span>ORANGES</span></button>
            <button class="family-tab" type="button" data-family="yellow"><span class="tab-dot" style="background:#f3e300;"></span><span>YELLOWS</span></button>
            <button class="family-tab" type="button" data-family="green"><span class="tab-dot" style="background:#2f8f00;"></span><span>GREENS</span></button>
            <button class="family-tab" type="button" data-family="blue"><span class="tab-dot" style="background:#4c8ddd;"></span><span>BLUES</span></button>
        </div>

        <div class="shade-lab-wrap">
            <div class="row g-4 align-items-stretch">
                <div class="col-xl-8">
                    <div class="preview-panel">
                        <div class="preview-canvas">
                            <img class="preview-image" src="assets/img/logo/wall.png" alt="Room Preview">
                        </div>
                        <div class="preview-info">
                            <div>
                                <h4 id="selectedShadeName">Rose Clay</h4>
                                <p id="selectedShadeCode">Shade Code: OC-R101</p>
                            </div>
                            <span class="preview-hex" id="selectedShadeHex">#EF8A82</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="shade-panel">
                        <h3 id="familyTitle">Red Family Shades</h3>
                        <p id="familyDescription">Light se dark shades select karo aur wall effect compare karo.</p>
                        <div class="shade-list" id="shadeList"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
(function () {
    var families = {
        red: {
            title: 'Red Family Shades',
            description: 'Bold accent aur warm vibe ke liye red shades.',
            shades: [
                { name: 'Rose Clay', code: 'OC-R101', hex: '#EF8A82' },
                { name: 'Blush Brick', code: 'OC-R102', hex: '#E66C63' },
                { name: 'Coral Rust', code: 'OC-R103', hex: '#D8564C' },
                { name: 'Terracotta Red', code: 'OC-R104', hex: '#BE433B' },
                { name: 'Crimson Pottery', code: 'OC-R105', hex: '#983229' },
                { name: 'Deep Garnet', code: 'OC-R106', hex: '#6C211B' }
            ]
        },
        orange: {
            title: 'Orange Family Shades',
            description: 'Warm, energetic aur modern bedroom look ke liye orange shades.',
            shades: [
                { name: 'Sunset Apricot', code: 'OC-O101', hex: '#F8CFA4' },
                { name: 'Soft Tangerine', code: 'OC-O102', hex: '#F3BC89' },
                { name: 'Mandarin Glow', code: 'OC-O103', hex: '#EEA866' },
                { name: 'Peach Ember', code: 'OC-O104', hex: '#E9934D' },
                { name: 'Citrus Burn', code: 'OC-O105', hex: '#E47F36' },
                { name: 'Deep Terracotta', code: 'OC-O106', hex: '#6F2D13' }
            ]
        },
        yellow: {
            title: 'Yellow Family Shades',
            description: 'Cheerful aur bright interiors ke liye yellow tones.',
            shades: [
                { name: 'Butter Cream', code: 'OC-Y101', hex: '#F8EEB0' },
                { name: 'Sunbeam Tint', code: 'OC-Y102', hex: '#F5E27F' },
                { name: 'Golden Straw', code: 'OC-Y103', hex: '#EECF54' },
                { name: 'Honey Light', code: 'OC-Y104', hex: '#DEB73E' },
                { name: 'Ochre Glow', code: 'OC-Y105', hex: '#C7992A' },
                { name: 'Mustard Depth', code: 'OC-Y106', hex: '#8B651B' }
            ]
        },
        green: {
            title: 'Green Family Shades',
            description: 'Fresh natural feel ke liye soothing green tones.',
            shades: [
                { name: 'Mint Dust', code: 'OC-G301', hex: '#D7E8D2' },
                { name: 'Leaf Calm', code: 'OC-G302', hex: '#B7D1AE' },
                { name: 'Herbal Meadow', code: 'OC-G303', hex: '#94BE8A' },
                { name: 'Olive Soft', code: 'OC-G304', hex: '#6F9F63' },
                { name: 'Forest Rich', code: 'OC-G305', hex: '#477945' },
                { name: 'Pine Shadow', code: 'OC-G306', hex: '#2F5630' }
            ]
        },
        blue: {
            title: 'Blue Family Shades',
            description: 'Calm and premium look ke liye elegant blue range.',
            shades: [
                { name: 'Powder Sky', code: 'OC-B201', hex: '#BFD8F0' },
                { name: 'Cloud Blue', code: 'OC-B202', hex: '#94BFE3' },
                { name: 'Harbor Blue', code: 'OC-B203', hex: '#5E95CC' },
                { name: 'Marine Steel', code: 'OC-B204', hex: '#376EA7' },
                { name: 'Ocean Deep', code: 'OC-B205', hex: '#0C4B8E' },
                { name: 'Navy Crest', code: 'OC-B206', hex: '#12325E' }
            ]
        }
    };

    var familyTabs = document.querySelectorAll('.family-tab');
    var shadeList = document.getElementById('shadeList');
    var previewCanvas = document.querySelector('.preview-canvas');
    var shadeName = document.getElementById('selectedShadeName');
    var shadeCode = document.getElementById('selectedShadeCode');
    var shadeHex = document.getElementById('selectedShadeHex');
    var familyTitle = document.getElementById('familyTitle');
    var familyDescription = document.getElementById('familyDescription');

    if (!familyTabs.length || !shadeList || !previewCanvas || !shadeName || !shadeCode || !shadeHex || !familyTitle || !familyDescription ) {
        return;
    }

    function applyShade(button) {
        var hex = button.getAttribute('data-hex') || '#EF8A82';
        var name = button.getAttribute('data-name') || 'Selected Shade';
        var code = button.getAttribute('data-code') || 'OC-000';
        shadeName.textContent = name;
        shadeCode.textContent = 'Shade Code: ' + code;
        shadeHex.textContent = hex.toUpperCase();
        previewCanvas.style.backgroundColor = hex;

        var allShadeButtons = shadeList.querySelectorAll('.shade-item');
        allShadeButtons.forEach(function (item) {
            item.classList.remove('active');
        });
        button.classList.add('active');
    }

    function createShadeButton(shade, isFirst) {
        var button = document.createElement('button');
        button.type = 'button';
        button.className = 'shade-item' + (isFirst ? ' active' : '');
        button.setAttribute('data-name', shade.name);
        button.setAttribute('data-code', shade.code);
        button.setAttribute('data-hex', shade.hex);

        button.innerHTML =
            '<span class="shade-item-left">' +
            '<span class="swatch-dot" style="background:' + shade.hex + ';"></span>' +
            '<span><span class="shade-name">' + shade.name + '</span><br><span class="shade-code">' + shade.code + '</span></span>' +
            '</span>' +
            '<span class="shade-code">' + shade.hex + '</span>';

        button.addEventListener('click', function () {
            applyShade(button);
        });

        return button;
    }

    function renderFamily(familyKey) {
        var family = families[familyKey];
        if (!family) {
            return;
        }

        familyTitle.textContent = family.title;
        familyDescription.textContent = family.description;

        shadeList.innerHTML = '';
        family.shades.forEach(function (shade, index) {
            shadeList.appendChild(createShadeButton(shade, index === 0));
        });

        var first = shadeList.querySelector('.shade-item');
        if (first) {
            applyShade(first);
        }
    }

    familyTabs.forEach(function (tab) {
        tab.addEventListener('click', function () {
            familyTabs.forEach(function (t) {
                t.classList.remove('active');
            });
            tab.classList.add('active');
            renderFamily(tab.getAttribute('data-family'));
        });
    });

    renderFamily('red');
})();
</script>

<?php include 'footer.php'; ?>




