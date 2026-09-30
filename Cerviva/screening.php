<?php
$page_title = 'Get Screened â€” Cerviva Ghana Foundation';
$page_description = 'Directory of verified cervical cancer screening centres across Ghana, screening age guidelines, and clinic referral support.';
$current_page = 'screening';
include 'header.php';
?>

<main id="main-content">
    <section class="hero" style="padding:56px 0 44px;">
        <div class="wrap">
            <div
                style="width:76px;height:76px;border-radius:16px;background:var(--mint-1);border:1px solid var(--line);display:flex;align-items:center;justify-content:center;margin-bottom:20px;">
                <svg viewBox="0 0 120 120" width="44" height="44" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M60 108s36-40 36-65a36 36 0 10-72 0c0 25 36 65 36 65z" stroke="#1E7D74" stroke-width="5"
                        stroke-linejoin="round" />
                    <circle cx="60" cy="43" r="13" stroke="#123F3A" stroke-width="5" />
                </svg>
            </div>
            <div class="ribbon-tag"><span class="dot"></span> Get Screened</div>
            <h1 style="max-width:20ch;">Find a screening centre near you.</h1>
            <p class="lead" style="max-width:56ch;">Cervical cancer screening is quick, widely available, and the single
                most
                effective way to catch changes before they become cancer. Use the list below to find a facility near
                you.</p>
            <div class="who-screened" style="margin-top:26px;">ðŸ©º <span><b>Who should be screened?</b> Women aged
                    25â€“65
                    years.</span></div>
        </div>
    </section>

    <section class="section" style="padding-top:0;padding-bottom:0;">
        <div class="wrap">
            <figure style="margin:0;border-radius:16px;overflow:hidden;border:1px solid var(--line);">
                <img src="media/img-2.jpg" alt="Accurate screening starts with reliable lab and diagnostic work.
" style="width:100%;height:420px;object-fit:cover;display:block;">
            </figure>
        </div>
    </section>

    <section class="section" style="padding-top:10px;">
        <div class="wrap">
            <div class="filters" id="filters"></div>
            <div class="facility-grid" id="facilityGrid"></div>
            <p class="facility-note">List compiled with the Medical Women Association of Ghana (MWAG), Lexta Ghana
                Limited and
                Jhpiego. This list is being expanded as more facilities are confirmed â€” if your region isn't listed
                yet, get
                in touch and we'll help you find the nearest option.</p>
        </div>
    </section>

    <section class="section tinted">
        <div class="wrap">
            <div class="section-head">
                <div class="kicker">What to expect</div>
                <h2>Screening is quick and routine</h2>
                <p>[Placeholder â€” client to confirm exact procedure details, appointment process, and what a screening
                    visit
                    involves, so we can replace this with accurate step-by-step guidance.]</p>
            </div>
            <div class="programs">
                <div class="program">
                    <div class="num">01</div>
                    <h3>Book ahead where needed</h3>
                    <p>Some facilities listed require an appointment â€” check before you go, or contact us and we'll
                        help
                        confirm.</p>
                </div>
                <div class="program">
                    <div class="num">02</div>
                    <h3>The screening itself</h3>
                    <p>A short, routine procedure carried out by a trained provider at the facility.</p>
                </div>
                <div class="program">
                    <div class="num">03</div>
                    <h3>Results &amp; follow-up</h3>
                    <p>Your provider will walk you through your results and any next steps, including where to go for
                        further care
                        if needed.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    const data = {
        "Greater Accra": [
            "Korle Bu Teaching Hospital â€” Reproductive Health Unit",
            "Ridge Hospital, Accra",
            "University Hospital, Legon",
            "La General Hospital â€” Reproductive Health Unit",
            "Airport Women's Hospital, Airport Residential Area",
            "Marie Stopes Ghana â€” Kokomlemle",
            "Bediako CHPS Compound",
            "Medicas Hospital â€” Madina (by appointment)",
            "Divine Grace Clinic & Maternity Home â€” Kaneshie",
            "Ga East Hospital â€” Kwabenya",
            "Shai Osu Doku Hospital, Dodowa",
            "37 Military Hospital",
            "Greater Accra Regional Hospital â€” Ridge",
            "Zenu Polyclinic",
            "Oyibi Health Center",
            "Katamanso Health Center",
            "Apollonia Health Center"
        ],
        "Ashanti": [
            "Komfo Anokye Teaching Hospital, Kumasi",
            "Kumasi South Hospital",
            "Bomso Hospital, Kumasi",
            "Marie Stopes â€” Santasi",
            "Peaceland Clinic, South Suntreso",
            "Signer Care, Asokwa",
            "Peace and Love Hospital, Oduom",
            "Bekwai Municipal Hospital"
        ],
        "Eastern": [
            "St. Dominic Hospital, Akwatia",
            "St. Martin de Porres Hospital, Agomanya",
            "Akim Achiase Health Centre",
            "Asiakwa Health Centre",
            "Larteh Health Centre"
        ],
        "Western": [
            "Effia Nkwanta Regional Hospital, Sekondi",
            "Holy Child Catholic Hospital, Fijai",
            "Takoradi Family Health Specialist Hospital, Anaji",
            "Asankrangwa Catholic Hospital"
        ],
        "Bono & Bono East": [
            "Holy Family Hospital, Berekum",
            "Holy Family Hospital, Techiman"
        ],
        "Oti": [
            "Worawora Government Hospital",
            "St. Joseph Hospital, Nkwanta"
        ],
        "Volta": [
            "Catholic Hospital, Battor",
            "St. Anthony's Hospital, Dzodze",
            "Juapong Health Centre",
            "St. Anne's Polyclinic, Tagadzi",
            "Larteh Health Centre"
        ],
        "Central": [
            "Cape Coast Teaching Hospital",
            "PPAG Clinic, Abura (Cape Coast)",
            "Our Lady of Grace Hospital, Breman Asikuma"
        ],
        "Northern": [
            "Tamale Teaching Hospital",
            "Marie Stopes Centre, Tamale",
            "SOS Children's Village Clinic, Tamale"
        ],
        "Upper East": [
            "War Memorial Hospital, Navrongo",
            "Afrikids Medical Centre, Bolgatanga"
        ],
        "Upper West": [
            "Wa Urban Health Centre",
            "Nadowli District Hospital",
            "St. Joseph's Hospital, Jirapa",
            "St. Theresa's Hospital, Nandom",
            "Tumu District Hospital"
        ]
    };

    const filtersEl = document.getElementById('filters');
    const gridEl = document.getElementById('facilityGrid');
    const regions = Object.keys(data);

    function renderChips(active) {
        filtersEl.innerHTML = '';
        const all = document.createElement('button');
        all.className = 'chip' + (active === 'All' ? ' active' : '');
        all.textContent = 'All regions';
        all.onclick = () => { renderChips('All'); renderGrid('All'); };
        filtersEl.appendChild(all);
        regions.forEach(r => {
            const c = document.createElement('button');
            c.className = 'chip' + (active === r ? ' active' : '');
            c.textContent = r;
            c.onclick = () => { renderChips(r); renderGrid(r); };
            filtersEl.appendChild(c);
        });
    }

    function renderGrid(active) {
        gridEl.innerHTML = '';
        regions.forEach(r => {
            if (active !== 'All' && active !== r) return;
            data[r].forEach(name => {
                const div = document.createElement('div');
                div.className = 'facility';
                div.innerHTML = '<span class="region">' + r + '</span>' + name;
                gridEl.appendChild(div);
            });
        });
    }

    try {
        renderChips('All');
        renderGrid('All');
    } catch (e) { console.error(e); }
</script>

<?php
include 'footer.php';
?>