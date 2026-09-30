<?php
$page_title = 'Contact Us — Inhealth Medical Solutions';
$page_description = 'Get in touch with Inhealth Medical Solutions for facility advisory, equipment procurement, test kits, or training programmes.';
$current_page = 'contact';
include 'header.php';
?>

<main id="main-content">
    <section class="hero" style="padding:56px 0 48px;">
        <div class="wrap">
            <div
                style="width:76px;height:76px;border-radius:16px;background:var(--green-pale);border:1px solid var(--line);display:flex;align-items:center;justify-content:center;margin-bottom:20px;">
                <svg viewBox="0 0 120 120" width="44" height="44" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 52v16l72 22V32L18 52z" stroke="#0A5B3D" stroke-width="5" stroke-linejoin="round" />
                    <path d="M90 38a22 22 0 010 44" stroke="#9E1F1F" stroke-width="5" stroke-linecap="round" />
                    <path d="M28 68l7 26" stroke="#0A5B3D" stroke-width="5" stroke-linecap="round" />
                </svg>
            </div>
            <div class="hero-eyebrow">Get in touch</div>
            <h1 style="max-width:18ch;">Tell us what you're working on.</h1>
            <p class="lead" style="max-width:56ch;">Whether it's a facility setup, a procurement question, or a training
                programme — send us the details and we'll route it to the right person.</p>
        </div>
    </section>

    <section class="section" style="padding-top:0;">
        <div class="wrap contact-layout">

            <form action="send_mail.php" method="POST"
                style="border:1px solid var(--line);background:var(--paper-2);padding:32px;">
                <div class="form-row">
                    <div>
                        <label style="display:block;font-size:0.85rem;color:var(--ink-soft);margin-bottom:6px;">Full
                            name</label>
                        <input required type="text" name="full_name"
                            style="width:100%;padding:11px 12px;border:1px solid var(--line);background:#fff;font-family:inherit;font-size:0.95rem;color:var(--ink);">
                    </div>
                    <div>
                        <label
                            style="display:block;font-size:0.85rem;color:var(--ink-soft);margin-bottom:6px;">Organization</label>
                        <input type="text" name="organization"
                            style="width:100%;padding:11px 12px;border:1px solid var(--line);background:#fff;font-family:inherit;font-size:0.95rem;color:var(--ink);">
                    </div>
                </div>
                <div style="margin-bottom:16px;">
                    <label
                        style="display:block;font-size:0.85rem;color:var(--ink-soft);margin-bottom:6px;">Email</label>
                    <input required type="email" name="email"
                        style="width:100%;padding:11px 12px;border:1px solid var(--line);background:#fff;font-family:inherit;font-size:0.95rem;color:var(--ink);">
                </div>
                <div style="margin-bottom:16px;">
                    <label style="display:block;font-size:0.85rem;color:var(--ink-soft);margin-bottom:6px;">Which
                        service are you interested in?</label>
                    <select name="service"
                        style="width:100%;padding:11px 12px;border:1px solid var(--line);background:#fff;font-family:inherit;font-size:0.95rem;color:var(--ink);">
                        <option>Medical &amp; Public Health Consultancy</option>
                        <option>Medical Equipment</option>
                        <option>Test Kits</option>
                        <option>Medical Training</option>
                        <option>Something else</option>
                    </select>
                </div>
                <div style="margin-bottom:20px;">
                    <label
                        style="display:block;font-size:0.85rem;color:var(--ink-soft);margin-bottom:6px;">Message</label>
                    <textarea rows="5" required name="message"
                        style="width:100%;padding:11px 12px;border:1px solid var(--line);background:#fff;font-family:inherit;font-size:0.95rem;color:var(--ink);resize:vertical;"></textarea>
                </div>
                <button type="submit" class="btn" style="width:100%;justify-content:center;">Send message</button>
                <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
                    <p style="margin:14px 0 0;font-size:0.88rem;color:var(--green-deep);">Thank you! Your message has been
                        sent successfully.</p>
                <?php elseif (isset($_GET['status']) && $_GET['status'] == 'error'): ?>
                    <p style="margin:14px 0 0;font-size:0.88rem;color:var(--red-deep);">Sorry, there was an error sending
                        your message. Please try again later.</p>
                <?php endif; ?>
            </form>

            <div>
                <div class="letter-block" style="margin-bottom:20px;">
                    <div class="label">Reach us directly</div>
                    <ul>
                        <li>Email <span class="n"><a href="mailto:info@inhealthmedicalsolutions.com"
                                    style="color:var(--red-deep);">info@inhealthmedicalsolutions.com</a></span></li>
                        <li>Phone <span class="n">+233 (0) 000 000 0000</span></li>
                        <li>Location <span class="n">Accra, Ghana</span></li>
                        <li>Hours <span class="n">Mon–Fri, 8:00–17:00</span></li>
                    </ul>
                </div>
                <div
                    style="border:1px solid var(--line);height:220px;background:var(--paper-2);display:flex;align-items:center;justify-content:center;color:var(--ink-soft);font-size:0.9rem;">
                    Map — to be added once office address is confirmed
                </div>
                <p style="margin-top:16px;color:var(--ink-soft);font-size:0.9rem;line-height:1.6;">Looking for the
                    Cerviva Ghana Foundation instead? <a
                        href="https://cervivaghanafoundation.inhealthmedicalsolutions.com"
                        style="color:var(--red-deep);" target="_blank" rel="noopener">Visit their site →</a></p>
            </div>
        </div>
    </section>
</main>

<?php
include 'footer.php';
?>