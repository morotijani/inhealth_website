<?php
$page_title = 'Inhealth Medical Solutions — Healthcare & Medical Consultancy';
include 'inhealth-header.php';
?>

<section class="hero" style="padding:56px 0 48px;">
  <div class="wrap">
    <div class="hero-eyebrow">Get in touch</div>
    <h1 style="max-width:18ch;">Tell us what you're working on.</h1>
    <p class="lead" style="max-width:56ch;">Whether it's a facility setup, a procurement question, or a training programme — send us the details and we'll route it to the right person.</p>
  </div>
</section>

<section class="section" style="padding-top:0;">
  <div class="wrap" style="display:grid;grid-template-columns:1.1fr 0.9fr;gap:56px;align-items:start;">

    <form style="border:1px solid var(--line);background:var(--paper-2);padding:32px;" onsubmit="event.preventDefault(); this.querySelector('.form-status').style.display='block';">
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:16px;">
        <div>
          <label style="display:block;font-size:0.85rem;color:var(--ink-soft);margin-bottom:6px;">Full name</label>
          <input required type="text" style="width:100%;padding:11px 12px;border:1px solid var(--line);background:#fff;font-family:inherit;font-size:0.95rem;color:var(--ink);">
        </div>
        <div>
          <label style="display:block;font-size:0.85rem;color:var(--ink-soft);margin-bottom:6px;">Organization</label>
          <input type="text" style="width:100%;padding:11px 12px;border:1px solid var(--line);background:#fff;font-family:inherit;font-size:0.95rem;color:var(--ink);">
        </div>
      </div>
      <div style="margin-bottom:16px;">
        <label style="display:block;font-size:0.85rem;color:var(--ink-soft);margin-bottom:6px;">Email</label>
        <input required type="email" style="width:100%;padding:11px 12px;border:1px solid var(--line);background:#fff;font-family:inherit;font-size:0.95rem;color:var(--ink);">
      </div>
      <div style="margin-bottom:16px;">
        <label style="display:block;font-size:0.85rem;color:var(--ink-soft);margin-bottom:6px;">Which service are you interested in?</label>
        <select style="width:100%;padding:11px 12px;border:1px solid var(--line);background:#fff;font-family:inherit;font-size:0.95rem;color:var(--ink);">
          <option>Medical &amp; Public Health Consultancy</option>
          <option>Medical Equipment</option>
          <option>Test Kits</option>
          <option>Medical Training</option>
          <option>Something else</option>
        </select>
      </div>
      <div style="margin-bottom:20px;">
        <label style="display:block;font-size:0.85rem;color:var(--ink-soft);margin-bottom:6px;">Message</label>
        <textarea rows="5" required style="width:100%;padding:11px 12px;border:1px solid var(--line);background:#fff;font-family:inherit;font-size:0.95rem;color:var(--ink);resize:vertical;"></textarea>
      </div>
      <button type="submit" class="btn" style="width:100%;justify-content:center;">Send message</button>
      <p class="form-status" style="display:none;margin:14px 0 0;font-size:0.88rem;color:var(--green-deep);">Thanks — this form isn't wired to an inbox yet. Once you confirm a contact email or form service, we'll connect it so submissions actually arrive.</p>
    </form>

    <div>
      <div class="letter-block" style="margin-bottom:20px;">
        <div class="label">Reach us directly</div>
        <ul>
          <li>Email <span class="n"><a href="mailto:info@inhealthmedical.com" style="color:var(--red-deep);">info@inhealthmedical.com</a></span></li>
          <li>Phone <span class="n">+233 (0) ___ ___ ___</span></li>
          <li>Location <span class="n">Accra, Ghana</span></li>
          <li>Hours <span class="n">Mon–Fri, 8:00–17:00</span></li>
        </ul>
      </div>
      <div style="border:1px solid var(--line);height:220px;background:var(--paper-2);display:flex;align-items:center;justify-content:center;color:var(--ink-soft);font-size:0.9rem;">
        Map — to be added once office address is confirmed
      </div>
      <p style="margin-top:16px;color:var(--ink-soft);font-size:0.9rem;line-height:1.6;">Looking for the Cerviva Ghana Foundation instead? <a href="https://claude.ai/artifact/HA8sCGHFd6ZnkuJucY54cm" style="color:var(--red-deep);" target="_blank" rel="noopener">Visit their site →</a></p>
    </div>
  </div>
</section>

<?php include 'inhealth-footer.php'; ?>
