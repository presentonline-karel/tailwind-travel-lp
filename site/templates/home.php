<?php snippet("general/header") ?>

<div class="Container / bg-neutrals-100 h-full">

    <!-- Nav -->
    <?php snippet("general/nav") ?>



    <main class="Main / h-full">

        <!-- Hero section -->
        <div class="Hero / pt-32px pb-72px">
            <div class="Container / flex flex-col px-24px gap-40px / sm:px-48px">
                <div class="Content /">
                    <div id="Label-CTAs" class="Label-CTAs / flex items-center gap-4px mb-32px">
                        <a href="#" class="Prim-Label-Link / rounded-full bg-prim-100 py-8px px-12px border border-prim-200 font-semibold text-prim-600 text-16px leading-4 font-headings tracking-tighter">
                            what's new
                        </a>

                        <a href="#" class="Sec-Label-Link / bg-neutrals-100 py-8px px-12px font-semibold text-prim-600 text-16px leading-4 font-headings tracking-tighter">
                            find out more<i class="fa fa-chevron-right / !text-12px !ml-8px" aria-hidden="true"></i>
                        </a>
                    </div>

                    <header class="Header / mb-32px">
                        <h1 class="h1">Travel is the <span class="text-prim-600">#1 travel agency</span> in Europe.</h1>
                        <p class="p">Morbi sed pellentesque lectus. Nam varius risus metus, at pulvinar magna bibendum vitae. Aliquam auctor suscipit sem ut aliquet. Interdum et malesuada fames ac ante ipsum.</p>
                    </header>

                    <div class="CTAs / flex items-center gap-8px">
                        <a href="#" class="btn--primary">Last-minute deals</a>
                        <a href="#" class="btn--secondary">Our holidays<i class="fa fa-arrow-right / text-12px ml-8px" aria-hidden="true"></i></a>
                    </div>
                </div>

                <div class="Image-Container / p-8px w-full aspect-square bg-prim-100 border border-prim-200 rounded-2xl shadow-card">
                    <img src="../../assets/img/Travel-hero-img.webp" class="Image / aspect-square rounded-2xl object-cover" alt="Travel hero img" loading="lazy" />
                </div>
            </div>
        </div>



        <!-- Clients section -->
        <div class="Clients / section section--colored">
            <div class="Container / flex flex-col px-24px gap-40px">
                <div class="Content /">
                    <div class="Header / mb-24px">
                        <div class="section-label">our clients</div>
                        <h3 class="h3">These companies are counting on us day in, day out.</h3>
                        <p class="p">Morbi sed pellentesque lectus. Nam varius risus metus, at pulvinar magna bibendum vitae. Aliquam auctor suscipit sem ut aliquet.</p>
                    </div>

                    <div class="CTAs / flex items-center gap-8px">
                        <a href="#" class="btn--primary">More on them</a>
                        <a href="#" class="btn--secondary">Join them<i class="fa fa-arrow-right / text-12px ml-8px" aria-hidden="true"></i></a>
                    </div>
                </div>

                <div class="Logo-Cloud / grid grid-cols-2 gap-8px">
                    <?php for ($i = 0; $i < 6; $i++): ?>
                        <div class="Logo-Container / bg-prim-100 w-full flex justify-center rounded-lg border-[0.4px] border-neutrals-400 py-20px">
                            <img src="../../assets/img/Travel-logo.svg" class="Logo / w-[111px]" alt="Logo of brand" loading="lazy" />
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>



        <!-- Services section -->
        <div class="Services / section">
            <div class="Container / flex flex-col px-24px gap-40px">
                <div class="Content /">
                    <div class="section-label">our services</div>
                    <h2 class="h2">What solutions do we provide?</h2>
                    <p class="p">Morbi sed pellentesque lectus. Nam varius risus metus, at pulvinar magna bibendum vitae. Aliquam auctor suscipit sem ut aliquet.</p>
                </div>

                <div class="Services-Cards / flex flex-col gap-24px">
                    <div class="Card / p-24px rounded-2xl bg-prim-100">
                        <h4 class="h4">Travel now, and join them</h4>
                        <p class="p / pb-32px">Morbi sed pellentesque lectus. Nam varius risus metus, at pulvinar magna bibendum.</p>

                        <h2 class="h2 / !mb-0 !text-prim-600">250k</h2>
                    </div>

                    <div class="Card / p-24px rounded-2xl bg-prim-500">
                        <h4 class="h4 !text-neutrals-100">The travel business is absolutely booming</h4>
                        <p class="p / pb-32px !text-neutrals-100">Morbi sed pellentesque lectus. Nam varius risus metus, at pulvinar magna bibendum.</p>

                        <h2 class="h2 / !mb-0 !text-neutrals-100">$8.9 billion</h2>
                    </div>

                    <div class="Card / p-24px rounded-2xl bg-prim-100">
                        <h4 class="h4">How many people traveled with our solution</h4>
                        <p class="p / pb-32px">Morbi sed pellentesque lectus. Nam varius risus metus, at pulvinar magna bibendum. What do you mean.</p>

                        <h2 class="h2 / !mb-0 !text-prim-600">401,093</h2>
                    </div>
                </div>
            </div>
        </div>



        <!-- Faq section -->
        <div class="Faq / section section--colored">
            <div class="Container / px-24px">
                <h2 class="h2 / mb-40px">Frequently asked questions</h2>

                <div class="Faq-Items / mb-40px">
                    <?php for ($i = 0; $i < 4; $i++): ?>
                        <div class="Faq-Item / border-b border-neutrals-400 pb-16px">
                            <div class="Faq-Header / flex justify-between items-center gap-16px py-16px">
                                <h5 class="h5 /">What actions happen after booking</h5>
                                <i class="fa fa-minus" aria-hidden="true"></i>
                            </div>

                            <div class="Faq-Body">
                                <p class="p">Morbi sed pellentesque lectus. Nam varius risus metus, at pulvinar magna bibendum vitae. Aliquam auctor suscipit sem ut aliquet.</p>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>

                <div class="CTAs / flex justify-center items-center gap-8px">
                    <a href="#" class="btn--primary">Find all FAQs</a>
                </div>
            </div>
        </div>



        <!-- CTA section -->
        <div class="CTA / section">
            <div class="Container / flex flex-col gap-40px bg-prim-100 border border-prim-200 rounded-2xl shadow-card py-56px px-24px mx-24px">
                <div class="Image-Container / p-8px w-full aspect-square bg-prim-200 border border-prim-300 rounded-2xl shadow-card">
                    <img src="../../assets/img/Travel-cta-img.webp" class="Image / aspect-square rounded-2xl object-cover" alt="" loading="lazy" />
                </div>

                <div class="Content">
                    <div class="Header / mb-24px">
                        <div class="section-label">sign up</div>
                        <h3 class="h3">Sing up for your amazing holiday today!</h3>
                        <p class="p">Morbi sed pellentesque lectus. Nam varius risus metus, at pulvinar magna bibendum vitae. Aliquam auctor suscipit sem ut aliquet.</p>
                    </div>

                    <ul class="List / flex flex-col gap-4px mb-32px">
                        <?php for ($i = 0; $i < 4; $i++): ?>
                            <li class="List-Item / flex gap-8px items-center font-paragraphs text-neutrals-900 text-16px"><i class="fa fa-check-circle / text-prim-600" aria-hidden="true"></i>Competitive holidays</li>
                        <?php endfor; ?>
                    </ul>

                    <div class="CTAs / flex items-center gap-8px">
                        <a href="#" class="btn--primary">Sign up</a>
                        <a href="#" class="btn--secondary">More info<i class="fa fa-arrow-right / text-12px ml-8px" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>



<?php snippet("general/footer") ?>