<?php
$page_title = 'Cerviva Ghana Foundation — Cervical Cancer Awareness & Prevention';
include 'cerviva-header.php';
?>

<section class="hero" style="padding:56px 0 44px;">
  <div class="wrap">
    <div class="ribbon-tag"><span class="dot"></span> Get involved</div>
    <h1 style="max-width:20ch;">Help us reach more women, faster.</h1>
    <p class="lead" style="max-width:56ch;">Whether you want to partner with us, sponsor a screening drive, or bring Cerviva to speak at your organization — start here.</p>
  </div>
</section>

<section class="section tinted" style="padding-top:0;">
  <div class="wrap">
    <div class="programs">
      <div class="program">
        <div class="num">01</div>
        <h3>Corporate partnership</h3>
        <p>Sponsor a community screening drive or host a corporate education tour for your staff.</p>
      </div>
      <div class="program">
        <div class="num">02</div>
        <h3>Volunteer</h3>
        <p>Support community engagements and public seminars on the ground.</p>
      </div>
      <div class="program">
        <div class="num">03</div>
        <h3>Invite us to speak</h3>
        <p>Bring a Cerviva-led session on cervical cancer awareness to your school, church, workplace or association.</p>
      </div>
    </div>
  </div>
</section>

<section class="section" style="padding-top:56px;">
  <div class="wrap" style="display:grid;grid-template-columns:1.1fr 0.9fr;gap:56px;align-items:start;">

    <form style="border:1px solid var(--line);background:#fff;padding:32px;border-radius:14px;" onsubmit="event.preventDefault(); this.querySelector('.form-status').style.display='block';">
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:16px;">
        <div>
          <label style="display:block;font-size:0.85rem;color:#3C5A54;margin-bottom:6px;">Full name</label>
          <input required type="text" style="width:100%;padding:11px 12px;border:1px solid var(--line);border-radius:8px;background:#fff;font-family:inherit;font-size:0.95rem;color:var(--teal-ink);">
        </div>
        <div>
          <label style="display:block;font-size:0.85rem;color:#3C5A54;margin-bottom:6px;">Organization (optional)</label>
          <input type="text" style="width:100%;padding:11px 12px;border:1px solid var(--line);border-radius:8px;background:#fff;font-family:inherit;font-size:0.95rem;color:var(--teal-ink);">
        </div>
      </div>
      <div style="margin-bottom:16px;">
        <label style="display:block;font-size:0.85rem;color:#3C5A54;margin-bottom:6px;">Email</label>
        <input required type="email" style="width:100%;padding:11px 12px;border:1px solid var(--line);border-radius:8px;background:#fff;font-family:inherit;font-size:0.95rem;color:var(--teal-ink);">
      </div>
      <div style="margin-bottom:16px;">
        <label style="display:block;font-size:0.85rem;color:#3C5A54;margin-bottom:6px;">I'm interested in</label>
        <select style="width:100%;padding:11px 12px;border:1px solid var(--line);border-radius:8px;background:#fff;font-family:inherit;font-size:0.95rem;color:var(--teal-ink);">
          <option>Corporate partnership</option>
          <option>Volunteering</option>
          <option>Inviting Cerviva to speak</option>
          <option>General question</option>
        </select>
      </div>
      <div style="margin-bottom:20px;">
        <label style="display:block;font-size:0.85rem;color:#3C5A54;margin-bottom:6px;">Message</label>
        <textarea rows="5" required style="width:100%;padding:11px 12px;border:1px solid var(--line);border-radius:8px;background:#fff;font-family:inherit;font-size:0.95rem;color:var(--teal-ink);resize:vertical;"></textarea>
      </div>
      <button type="submit" class="btn" style="width:100%;justify-content:center;">Send message</button>
      <p class="form-status" style="display:none;margin:14px 0 0;font-size:0.88rem;color:var(--teal-deep);">Thanks — this form isn't wired to an inbox yet. Once you confirm a contact email or form service, we'll connect it so submissions actually arrive.</p>
    </form>

    <div>
      <div style="background:var(--mint-1);border:1px solid var(--line);border-radius:14px;padding:26px;margin-bottom:20px;">
        <div style="font-size:0.82rem;font-weight:700;color:var(--teal);margin-bottom:14px;">Reach us directly</div>
        <div style="font-size:0.95rem;color:var(--teal-ink);margin-bottom:10px;">Email <a href="mailto:info@cerviva.org" style="color:var(--teal-deep);">info@cerviva.org</a></div>
        <div style="font-size:0.95rem;color:var(--teal-ink);margin-bottom:10px;">Instagram <a href="https://instagram.com/cervicarefoundationghana" target="_blank" rel="noopener" style="color:var(--teal-deep);">@cervicarefoundationghana</a></div>
        <div style="font-size:0.95rem;color:var(--teal-ink);">Location Accra, Ghana</div>
      </div>
      <p style="color:#5A756E;font-size:0.9rem;line-height:1.6;">Looking for our parent organization? <a href="https://claude.ai/artifact/Aoy17dSfek9AndMbTbsPy4" style="color:var(--teal-deep);" target="_blank" rel="noopener">Visit Inhealth Medical Solutions →</a></p>
    </div>
  </div>
</section>

<?php include 'cerviva-footer.php'; ?>
