<?php
$page_title = 'Contact & Get Involved — Cerviva Ghana Foundation';
$page_description = 'Partner with Cerviva Ghana Foundation, sponsor a screening drive, volunteer, or reach our team in Accra.';
$current_page = 'contact';
include 'header.php';
?>

<main id="main-content">
    <section class="hero" style="padding:56px 0 44px;">
        <div class="wrap">
            <div
                style="width:76px;height:76px;border-radius:16px;background:var(--mint-1);border:1px solid var(--line);display:flex;align-items:center;justify-content:center;margin-bottom:20px;">
                <svg viewBox="0 0 120 120" width="44" height="44" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M60 100S22 76 22 48a20 20 0 0138-9 20 20 0 0138 9c0 28-38 52-38 52z" stroke="#1E7D74"
                        stroke-width="5" stroke-linejoin="round" />
                    <path d="M40 92c-10-14-8-24 4-30" stroke="#123F3A" stroke-width="4" stroke-linecap="round" />
                </svg>
            </div>
            <div class="ribbon-tag"><span class="dot"></span> Get involved</div>
            <h1 style="max-width:20ch;">Help us reach more women, faster.</h1>
            <p class="lead" style="max-width:56ch;">Whether you want to partner with us, sponsor a screening drive, or
                bring Cerviva to speak at your organization; start here.</p>
        </div>
    </section>

    <section class="section tinted" style="padding-top:0;">
        <div class="wrap" style="margin-top: 3rem;">
            <div class="programs">
                <div class="program">
                    <div style="margin-bottom:6px;"><svg viewBox="0 0 120 120" width="34" height="34" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="18" y="46" width="84" height="54" rx="6" stroke="#1E7D74" stroke-width="5" />
                            <path d="M44 46v-10a8 8 0 018-8h16a8 8 0 018 8v10" stroke="#1E7D74" stroke-width="5" />
                            <line x1="18" y1="70" x2="102" y2="70" stroke="#123F3A" stroke-width="5" />
                            <line x1="52" y1="70" x2="52" y2="84" stroke="#123F3A" stroke-width="5"
                                stroke-linecap="round" />
                            <line x1="68" y1="70" x2="68" y2="84" stroke="#123F3A" stroke-width="5"
                                stroke-linecap="round" />
                        </svg></div>
                    <div class="num">01</div>
                    <h3>Corporate partnership</h3>
                    <p>Sponsor a community screening drive or host a corporate education tour for your staff.</p>
                </div>
                <div class="program">
                    <div style="margin-bottom:6px;"><svg viewBox="0 0 120 120" width="34" height="34" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M60 100S22 76 22 48a20 20 0 0138-9 20 20 0 0138 9c0 28-38 52-38 52z"
                                stroke="#1E7D74" stroke-width="5" stroke-linejoin="round" />
                            <path d="M40 92c-10-14-8-24 4-30" stroke="#123F3A" stroke-width="4"
                                stroke-linecap="round" />
                        </svg></div>
                    <div class="num">02</div>
                    <h3>Volunteer</h3>
                    <p>Support community engagements and public seminars on the ground.</p>
                </div>
                <div class="program">
                    <div style="margin-bottom:6px;"><svg viewBox="0 0 120 120" width="34" height="34" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 52v16l72 22V32L18 52z" stroke="#1E7D74" stroke-width="5"
                                stroke-linejoin="round" />
                            <path d="M90 38a22 22 0 010 44" stroke="#123F3A" stroke-width="5" stroke-linecap="round" />
                            <path d="M28 68l7 26" stroke="#1E7D74" stroke-width="5" stroke-linecap="round" />
                        </svg></div>
                    <div class="num">03</div>
                    <h3>Invite us to speak</h3>
                    <p>Bring a Cerviva-led session on cervical cancer awareness to your school, church, workplace or
                        association.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section" style="padding-top:56px;">
        <div class="wrap contact-layout">

            <form action="send_mail.php" method="POST" class="contact-form-box">
                <div class="form-row">
                    <div>
                        <label style="display:block;font-size:0.85rem;color:#3C5A54;margin-bottom:6px;">Full
                            name</label>
                        <input required type="text" name="full_name"
                            style="width:100%;padding:11px 12px;border:1px solid var(--line);border-radius:8px;background:#fff;font-family:inherit;font-size:0.95rem;color:var(--teal-ink);">
                    </div>
                    <div>
                        <label style="display:block;font-size:0.85rem;color:#3C5A54;margin-bottom:6px;">Organization
                            (optional)</label>
                        <input type="text" name="organization"
                            style="width:100%;padding:11px 12px;border:1px solid var(--line);border-radius:8px;background:#fff;font-family:inherit;font-size:0.95rem;color:var(--teal-ink);">
                    </div>
                </div>
                <div style="margin-bottom:16px;">
                    <label style="display:block;font-size:0.85rem;color:#3C5A54;margin-bottom:6px;">Email</label>
                    <input required type="email" name="email"
                        style="width:100%;padding:11px 12px;border:1px solid var(--line);border-radius:8px;background:#fff;font-family:inherit;font-size:0.95rem;color:var(--teal-ink);">
                </div>
                <div style="margin-bottom:16px;">
                    <label style="display:block;font-size:0.85rem;color:#3C5A54;margin-bottom:6px;">I'm interested
                        in</label>
                    <select name="interest"
                        style="width:100%;padding:11px 12px;border:1px solid var(--line);border-radius:8px;background:#fff;font-family:inherit;font-size:0.95rem;color:var(--teal-ink);">
                        <option>Corporate partnership</option>
                        <option>Volunteering</option>
                        <option>Inviting Cerviva to speak</option>
                        <option>General question</option>
                    </select>
                </div>
                <div style="margin-bottom:20px;">
                    <label style="display:block;font-size:0.85rem;color:#3C5A54;margin-bottom:6px;">Message</label>
                    <textarea rows="5" required name="message"
                        style="width:100%;padding:11px 12px;border:1px solid var(--line);border-radius:8px;background:#fff;font-family:inherit;font-size:0.95rem;color:var(--teal-ink);resize:vertical;"></textarea>
                </div>
                <button type="submit" class="btn" style="width:100%;justify-content:center;">Send message</button>
                <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
                    <p style="margin:14px 0 0;font-size:0.88rem;color:var(--teal-deep);">Thank you! Your message has been
                        sent successfully.</p>
                <?php elseif (isset($_GET['status']) && $_GET['status'] == 'error'): ?>
                    <p style="margin:14px 0 0;font-size:0.88rem;color:var(--red-deep);">Sorry, there was an error sending
                        your message. Please try again later.</p>
                <?php endif; ?>
            </form>

            <div>
                <div
                    style="background:var(--mint-1);border:1px solid var(--line);border-radius:14px;padding:26px;margin-bottom:20px;">
                    <div style="font-size:0.82rem;font-weight:700;color:var(--teal);margin-bottom:14px;">Reach us
                        directly</div>
                    <div style="font-size:0.95rem;color:var(--teal-ink);margin-bottom:10px;">Email <a
                            href="mailto:cervivaghanafoundation@inhealthmedicalsolutions.com"
                            style="color:var(--teal-deep);">cervivaghanafoundation@inhealthmedicalsolutions.com</a>
                    </div>
                    <div style="font-size:0.95rem;color:var(--teal-ink);margin-bottom:10px;">Instagram <a
                            href="https://instagram.com/cervicarefoundationghana" target="_blank" rel="noopener"
                            style="color:var(--teal-deep);">@cervicarefoundationghana</a></div>
                    <div style="font-size:0.95rem;color:var(--teal-ink);">Location Accra, Ghana</div>
                </div>
                <p style="color:#5A756E;font-size:0.9rem;line-height:1.6;">Looking for our parent organization? <a
                        href="https://inhealthmedicalsolutions.com" style="color:var(--teal-deep);" target="_blank"
                        rel="noopener">Visit
                        Inhealth Medical Solutions →</a></p>
            </div>
        </div>
    </section>
</main>

<?php
include 'footer.php';
?>