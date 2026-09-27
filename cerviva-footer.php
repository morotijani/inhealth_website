<footer id="footer-contact">
  <div class="wrap">
    <div class="foot-grid">
      <div>
        <h4>Cerviva Ghana Foundation</h4>
        <p style="color:#9FC3BA;font-size:0.9rem;line-height:1.6;max-width:32ch;">Raising awareness, educating communities, and promoting cervical cancer prevention among women and girls in Ghana.</p>
      </div>
      <div>
        <h4>Explore</h4>
        <a href="https://claude.ai/artifact/URmaXB3TQR1JQSVBcSNgT9">About us</a>
        <a href="https://claude.ai/artifact/URmaXB3TQR1JQSVBcSNgT9#programs">Our work</a>
        <a href="https://claude.ai/artifact/4Xi7bRperkhzGjXcbidUCT">Get screened</a>
        <a href="https://claude.ai/artifact/6xBgx3SxNThCk8PKNywUnn">Get involved</a>
      </div>
      <div>
        <h4>Connect</h4>
        <a href="https://instagram.com/cervicarefoundationghana" target="_blank" rel="noopener">@cervicarefoundationghana</a>
        <a href="mailto:info@cerviva.org">info@cerviva.org</a>
        <a href="https://claude.ai/artifact/Aoy17dSfek9AndMbTbsPy4" target="_blank" rel="noopener">Part of Inhealth Medical Solutions</a>
      </div>
    </div>
    <div class="foot-bottom">
      <span>© 2026 Cerviva Ghana Foundation. All rights reserved.</span>
      <span>Contact details to be confirmed with client.</span>
    </div>
  </div>
</footer>

<script>
  const data = {
    "Greater Accra": [
      "Korle Bu Teaching Hospital — Reproductive Health Unit",
      "Ridge Hospital, Accra",
      "University Hospital, Legon",
      "La General Hospital — Reproductive Health Unit",
      "Airport Women's Hospital, Airport Residential Area",
      "Marie Stopes Ghana — Kokomlemle",
      "Bediako CHPS Compound",
      "Medicas Hospital — Madina (by appointment)",
      "Divine Grace Clinic & Maternity Home — Kaneshie",
      "Ga East Hospital — Kwabenya",
      "Shai Osu Doku Hospital, Dodowa",
      "37 Military Hospital",
      "Greater Accra Regional Hospital — Ridge",
      "Zenu Polyclinic",
      "Oyibi Health Center",
      "Katamanso Health Center",
      "Apollonia Health Center"
    ],
    "Ashanti": [
      "Komfo Anokye Teaching Hospital, Kumasi",
      "Kumasi South Hospital",
      "Bomso Hospital, Kumasi",
      "Marie Stopes — Santasi",
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

  function renderChips(active){
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

  function renderGrid(active){
    gridEl.innerHTML = '';
    regions.forEach(r => {
      if(active !== 'All' && active !== r) return;
      data[r].forEach(name => {
        const div = document.createElement('div');
        div.className = 'facility';
        div.innerHTML = '<span class="region">' + r + '</span>' + name;
        gridEl.appendChild(div);
      });
    });
  }

  try{
    renderChips('All');
    renderGrid('All');
  }catch(e){ console.error(e); }
</script>

</body>
</html>
