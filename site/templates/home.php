<?php snippet("general/header") ?>

<div class="Container / h-full">

    <!-- Nav -->
    <?php snippet("general/nav") ?>



    <main class="Main / h-full">

        <!-- Hero section -->
        <div class="Hero / pt-32px pb-72px bg-neutrals-100 / dark:bg-neutrals-1000 / lg:pb-[96px] lg:pt-48px / xl:pt-80px xl:pb-120px">
            <div class="Container / flex flex-col px-24px gap-40px / sm:px-48px / md:flex-row md:items-center / lg:px-[96px] lg:gap-80px / xl:px-0 xl:gap-[126px] xl:max-w-[1200px] xl:mx-auto">
                <div class="Content / md:w-1/2">
                    <div id="Label-CTAs" class="Label-CTAs / flex items-center gap-4px mb-32px / lg:mb-40px / xl:gap-16px">
                        <a href="#" class="Prim-Label-Link / rounded-full bg-prim-100 py-8px px-12px border border-prim-200 font-semibold text-prim-600 text-16px leading-4 font-headings tracking-tighter / dark:border-neutrals-800 dark:bg-neutrals-800 dark:text-neutrals-100 / xl:text-[18px] xl:leading-[18px] xl:px-16px xl:py-[10px]">
                            what's new
                        </a>

                        <a href="#" class="Sec-Label-Link / bg-transparent py-8px px-12px font-semibold text-prim-600 text-16px leading-4 font-headings tracking-tighter / dark:text-neutrals-100 / xl:text-[18px] xl:leading-[18px] xl:px-16px xl:py-[10px]">
                            find out more<i class="fa fa-chevron-right / !text-12px !ml-8px / dark:text-neutrals-100 / lg:text-prim-600 " aria-hidden="true"></i>
                        </a>
                    </div>

                    <header class="Header / mb-32px / lg:mb-40px">
                        <h1 class="h h1">Travel is the <span class="text-prim-600 / dark:text-neutrals-100">#1 travel agency</span> in Europe.</h1>
                        <p class="p">Morbi sed pellentesque lectus. Nam varius risus metus, at pulvinar magna bibendum vitae. Aliquam auctor suscipit sem ut aliquet. Interdum et malesuada fames ac ante ipsum.</p>
                    </header>

                    <div class="CTAs / flex items-center gap-8px / xl:gap-16px">
                        <a href="#" class="btn--primary">Last-minute deals</a>
                        <a href="#" class="btn--secondary">Our holidays<i class="fa fa-arrow-right / text-12px ml-8px text-prim-500 / dark:text-neutrals-100 / xl:!text-16px xl:!leading-[16px]" aria-hidden="true"></i></a>
                    </div>
                </div>

                <div class="Image-Container / p-8px w-full aspect-square bg-prim-100 border border-prim-200 rounded-2xl shadow-card / dark:bg-neutrals-800 dark:border-neutrals-800 / md:w-1/2 / xl:max-w-[588px]">
                    <img src="../../assets/img/Travel-hero-img.webp" class="Image / aspect-square rounded-2xl object-cover" alt="Travel hero img" loading="lazy" />
                </div>
            </div>
        </div>



        <!-- Clients section -->
        <div class="Clients / section section--colored">
            <div class="Container / flex flex-col px-24px gap-40px / sm:px-48px / md:flex-row / lg:px-[96px] lg:gap-80px / xl:px-0 xl:gap-[126px] xl:max-w-[1200px] xl:mx-auto">
                <div class="Content / md:w-1/2">
                    <div class="Header / mb-24px / xl:mb-40px">
                        <div class="section-label">our clients</div>
                        <h3 class="h h3 / xl:text-56px xl:mb-24px">These companies are counting on us day in, day out.</h3>
                        <p class="p">Morbi sed pellentesque lectus. Nam varius risus metus, at pulvinar magna bibendum vitae. Aliquam auctor suscipit sem ut aliquet.</p>
                    </div>

                    <div class="CTAs / flex items-center gap-8px / xl:gap-16px">
                        <a href="#" class="btn--primary">More on them</a>
                        <a href="#" class="btn--secondary">Join them<i class="fa fa-arrow-right / text-12px ml-8px / xl:!text-16px xl:!leading-[16px]" aria-hidden="true"></i></a>
                    </div>
                </div>

                <div class="Logo-Cloud / grid grid-cols-2 gap-8px row-auto / sm:grid-cols-3 / md:w-1/2 md:gap-16px md:grid-cols-2 / xl:max-w-[588px] xl:grid-cols-3 xl:h-min xl:relative xl:top-[42px]">
                    <?php for ($i = 0; $i < 6; $i++): ?>
                        <div class="Logo-Container / bg-prim-100 w-full flex justify-center rounded-lg border-[0.4px] border-neutrals-400 py-20px self-start h-auto / dark:bg-neutrals-800 dark:border-neutrals-800 / md:aspect-auto">
                            <img src="../../assets/img/Travel-logo.svg" class="Logo / w-[111px] / dark:hidden / md:w-[96px] / xl:w-[111px] xl:h-40px" alt="Logo of brand" loading="lazy" />
                            <img src="../../assets/img/Travel-logo-white.svg" class="Logo / w-[111px] hidden / dark:block / md:w-[96px] / xl:w-[111px] xl:h-40px" alt="Logo of brand" loading="lazy" />
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>



        <!-- Services section -->
        <div class="Services / section">
            <div class="Container / flex flex-col px-24px gap-40px / sm:px-48px / lg:px-[96px] lg:gap-[72px] / xl:px-0 xl:max-w-[1200px] xl:mx-auto xl:gap-[88px]">
                <div class="Content / md:max-w-[792px]">
                    <div class="section-label">our services</div>
                    <h2 class="h h2">What solutions do we provide?</h2>
                    <p class="p">Morbi sed pellentesque lectus. Nam varius risus metus, at pulvinar magna bibendum vitae. Aliquam auctor suscipit sem ut aliquet.</p>
                </div>

                <div class="Services-Cards / flex flex-col gap-24px / md:flex-row md:items-end">
                    <div class="Card / p-24px rounded-2xl bg-prim-100 / dark:bg-neutrals-800 / md:w-1/3 md:h-min / xl:p-32px">
                        <h4 class="h h4 / xl:text-32px">Travel now, and join them</h4>
                        <p class="p / pb-32px">Morbi sed pellentesque lectus. Nam varius risus metus, at pulvinar magna bibendum.</p>

                        <h2 class="h h2 / !mb-0 !text-prim-600 / xl:text-[48px] xl:leading-[56px]">250k</h2>
                    </div>

                    <div class="Card / p-24px rounded-2xl bg-prim-500 / dark:bg-neutrals-800 / md:w-1/3 md:h-min / xl:p-32px">
                        <h4 class="h h4 !text-neutrals-100 / xl:text-32px">Travel now, and you’ll get really happy man. I can promise this to you.</h4>
                        <p class="p / pb-32px !text-neutrals-100">Morbi sed pellentesque lectus. Nam varius risus metus, at pulvinar magna bibendum.</p>

                        <h2 class="h h2 / !mb-0 !text-neutrals-100 / xl:text-[48px] xl:leading-[56px]">$8.9 billion</h2>
                    </div>

                    <div class="Card / p-24px rounded-2xl bg-prim-100 / dark:bg-neutrals-800 / md:w-1/3 md:h-min / xl:p-32px">
                        <h4 class="h h4 / xl:text-32px">How many people traveled with our solution</h4>
                        <p class="p / pb-32px">Morbi sed pellentesque lectus. Nam varius risus metus, at pulvinar magna bibendum. What do you mean.</p>

                        <h2 class="h h2 / !mb-0 !text-prim-600 / xl:text-[48px] xl:leading-[56px]">401,093</h2>
                    </div>
                </div>
            </div>
        </div>



        <!-- Faq section -->
        <div class="Faq / section section--colored">
            <div class="Container / px-24px / sm:px-48px / md:max-w-[792px] md:mx-auto">
                <h2 class="h h2 / mb-40px / md:text-center">Frequently asked questions</h2>

                <div class="Faq-Items / mb-40px / md:max-w-[588px] md:mx-auto">
                    <?php for ($i = 0; $i < 4; $i++): ?>
                        <div class="Faq-Item / border-b border-neutrals-400 transition-all ease-in-out duration-300 / dark:border-neutrals-800">
                            <div class="Faq-Header / flex justify-between items-center gap-16px py-16px relative">
                                <h5 class="h h5 /">What actions happen after booking</h5>
                                <i class="fa fa-minus / Minus / opacity-0 text-neutrals-1000 absolute right-0 transition-all ease-in-out duration-300 / dark:text-neutrals-100" aria-hidden="true"></i>
                                <i class="fa fa-plus / Plus / text-neutrals-1000 absolute right-0 transition-all ease-in-out duration-300 / dark:text-neutrals-100" aria-hidden="true"></i>
                            </div>

                            <div class="Faq-Body / transition-all max-h-0 ease-in-out duration-300 overflow-hidden">
                                <p class="p / h-full opacity-0 transition-all ease-in-out duration-300">Morbi sed pellentesque lectus. Nam varius risus metus, at pulvinar magna bibendum vitae. Aliquam auctor suscipit sem ut aliquet.</p>
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
            <div class="Container / flex flex-col gap-40px bg-prim-100 border border-prim-200 rounded-2xl shadow-card py-56px px-24px mx-24px / dark:bg-neutrals-900 dark:border-neutrals-800 / sm:mx-48px / md:flex-row md:px-56px md:items-center">
                <div class="Image-Container / p-8px w-full aspect-square bg-prim-200 border border-prim-300 rounded-2xl shadow-card / dark:bg-neutrals-800 dark:border-neutrals-800 / md:h-min md:w-1/2">
                    <img src="../../assets/img/Travel-cta-img.webp" class="Image / aspect-square rounded-2xl object-cover" alt="" loading="lazy" />
                </div>

                <div class="Content / md:w-1/2">
                    <div class="Header / mb-24px">
                        <div class="section-label">sign up</div>
                        <h3 class="h h3">Sing up for your amazing holiday today!</h3>
                        <p class="p">Morbi sed pellentesque lectus. Nam varius risus metus, at pulvinar magna bibendum vitae. Aliquam auctor suscipit sem ut aliquet.</p>
                    </div>

                    <ul class="List / flex flex-col gap-4px mb-32px">
                        <?php for ($i = 0; $i < 4; $i++): ?>
                            <li class="List-Item / flex gap-8px items-center font-paragraphs text-neutrals-900 text-16px / dark:text-neutrals-300"><i class="fa fa-check-circle / text-prim-600 / dark:text-prim-300" aria-hidden="true"></i>Competitive holidays</li>
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



<!-- JS Scripts -->
<?= js("assets/js/faq-accordion.js", ["defer" => true]) ?>



<?php snippet("general/footer") ?>