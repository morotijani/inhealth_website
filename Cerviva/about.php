<?php
$page_title = 'About Us â€” Cerviva Ghana Foundation';
$page_description = 'Learn about Cerviva Ghana Foundation, our history, clinical partners, leadership, and public health impact across Ghana.';
$current_page = 'about';
$page['author_image'] = "media/caryn-agyeman-prempeh.jpg";
$page['author'] = "Dr. Caryn Agyeman Prempeh";
include 'header.php';
?>

<main id="main-content">
    <section class="hero" style="padding:56px 0 48px;">
        <div class="wrap">
            <div
                style="width:76px;height:76px;border-radius:16px;background:var(--mint-1);border:1px solid var(--line);display:flex;align-items:center;justify-content:center;margin-bottom:20px;">
                <svg viewBox="0 0 120 120" width="44" height="44" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M60 100S22 76 22 48a20 20 0 0138-9 20 20 0 0138 9c0 28-38 52-38 52z" stroke="#1E7D74"
                        stroke-width="5" stroke-linejoin="round" />
                    <path d="M40 92c-10-14-8-24 4-30" stroke="#123F3A" stroke-width="4" stroke-linecap="round" />
                </svg>
            </div>
            <div class="ribbon-tag"><span class="dot"></span> About us</div>
            <h1 style="max-width:20ch;">"Awareness, education and access" built for Ghana's communities.</h1>
            <p class="lead" style="max-width:56ch;">Cerviva Ghana Foundation exists to make sure no woman misses a
                preventable
                diagnosis simply because she didn't know, or couldn't reach, the right care.</p>
        </div>
    </section>

    <section class="mv">
        <div class="mv-panel mission">
            <div class="kicker">Our Mission</div>
            <h2>Why we exist</h2>
            <p>To empower women and communities with knowledge, advocate for accessible preventive care, and foster
                partnerships to reduce the burden of cervical cancer in Ghana.</p>
        </div>
        <div class="mv-panel vision">
            <div class="kicker">Our Vision</div>
            <h2>Where we're headed</h2>
            <p>A future where every woman in Ghana is protected from cervical cancer through education, early detection,
                and
                equitable access to preventive care.</p>
        </div>
    </section>

    <section class="section">
        <div class="wrap">
            <div class="section-head">
                <div class="kicker">Leadership</div>
                <h2>Led by a physician who has spent her career in this work</h2>
            </div>
            <div class="founder">
                <div class="founder-photo">
                    <?php
                    if (!empty($page['author_image'])) {
                        echo '<img src="' . htmlspecialchars($page['author_image']) . '" alt="' . htmlspecialchars($page['author']) . '" style="width:100%;height:100%;object-fit:cover;border-radius:16px;">';
                    } else {
                        echo '<span style="font-size:10px;letter-spacing:6px;color:#5A756E;">PROFILE PHOTO</span>';
                    }
                    ?>
                </div>
                <div>
                    <blockquote>"Cervical cancer is preventable â€” but only if women know where to go, and can actually
                        get
                        there."</blockquote>
                    <div class="name">Dr. Caryn Agyeman Prempeh</div>
                    <div class="role">Founder &amp; Lead, Cerviva Ghana Foundation Â· Public Health Physician &amp;
                        Healthcare
                        Leader Â· also known as Ohemaa Afia Kobi Prempeh</div>
                    <p style="margin-top:16px;color:#3C5A54;font-size:0.96rem;line-height:1.65;max-width:56ch;">
                        Dr. Prempeh founded Cerviva Ghana Foundation to close the gap between what's medically possible
                        and what
                        women actually experience â€” bringing screening, education and early detection to communities
                        across the
                        country, in line with Sustainable Development Goal 3's call for universal access to reproductive
                        and sexual
                        healthcare.
                    </p>
                    <p style="margin-top:10px;color:#5A756E;font-size:0.86rem;">[Placeholder â€” send fuller bio
                        details,
                        credentials and a photo and we'll build this out properly.]</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section tinted" id="programs">
        <div class="wrap">
            <div class="section-head">
                <div class="kicker">Our Work</div>
                <h2>How we reach women and communities</h2>
                <p>Awareness only works when it meets people where they are â€” in their communities, workplaces and
                    public
                    forums.</p>
            </div>
            <div class="programs">
                <div class="program">
                    <div style="margin-bottom:6px;"><svg viewBox="0 0 120 120" width="34" height="34" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="38" cy="40" r="14" stroke="#1E7D74" stroke-width="5" />
                            <circle cx="82" cy="40" r="14" stroke="#123F3A" stroke-width="5" />
                            <path d="M14 98c0-19 12-32 24-32s24 13 24 32" stroke="#1E7D74" stroke-width="5"
                                stroke-linecap="round" />
                            <path d="M58 98c0-19 12-32 24-32s24 13 24 32" stroke="#123F3A" stroke-width="5"
                                stroke-linecap="round" />
                        </svg></div>
                    <div class="num">01</div>
                    <h3>Community engagements</h3>
                    <p>On-the-ground sessions in towns and neighbourhoods, bringing screening information directly to
                        women who
                        may not otherwise access it.</p>
                </div>
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
                    <div class="num">02</div>
                    <h3>Corporate education tours</h3>
                    <p>Workplace sessions that give employers a practical way to support their staff's reproductive
                        health.</p>
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
                    <h3>Public seminars</h3>
                    <p>Open seminars aimed at empowering young women and educating the wider public on cervical cancer
                        and HPV.
                    </p>
                </div>
            </div>
            <p style="margin-top:22px;color:#5A756E;font-size:0.88rem;">[Placeholder â€” photos and recaps from past
                community
                engagements, corporate tours and seminars will make this section far more convincing once you share
                them.]</p>
        </div>
    </section>

    <section class="section">
        <div class="wrap">
            <div class="involve">
                <div>
                    <h2>Want to bring Cerviva to your community or organization?</h2>
                    <p>We run community engagements, corporate education tours and public seminars across Ghana.</p>
                </div>
                <div class="involve-ctas">
                    <a class="btn light" href="contact.php">Get in touch</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
include 'footer.php';
?>