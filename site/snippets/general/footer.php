        <footer class="Footer / bg-prim-600 pt-64px pb-24px px-24px rounded-t-lg relative / dark:bg-neutrals-1000 dark:border-t-[0.4px] dark:border-neutrals-800 / sm:px-48px">
            <div class="Container / flex flex-col gap-40px">
                <div class="border-b border-prim-300 / dark:border-neutrals-600 / md:flex md:flex-row md:gap-[88px]">
                    <div class="Company / pb-40px">
                        <img src="../../../assets/img/Travel-logo-white.svg" class="Logo / w-[128px] mb-32px" alt="" loading="lazy" />

                        <div class="Socials / flex gap-20px items-center">
                            <i class="fa fa-instagram / text-neutrals-100 !text-20px !font-normal" aria-hidden="true"></i>
                            <i class="fa fa-facebook / text-neutrals-100 !text-20px !font-normal" aria-hidden="true"></i>
                            <i class="fa fa-twitter / text-neutrals-100 !text-20px !font-normal" aria-hidden="true"></i>
                        </div>
                    </div>

                    <a href="#" class="Top / absolute top-72px right-24px text-neutrals-100 flex gap-8px items-center font-headings text-20px / right-48px / md:top-64px">top<i class="fa fa-arrow-up / font-light" aria-hidden="true"></i></a>

                    <div class="Footer-Blocks / grid grid-cols-2 gap-32px pb-40px / md:flex md:gap-80px">
                        <div class="Block">
                            <h4 class="h h4 / mb-8px text-neutrals-100 leading-8">Sitemap</h4>

                            <div class="Links / flex flex-col gap-4px">
                                <a href="#" class="Link / block text-neutrals-200 text-16px font-paragraphs / dark:text-neutrals-300">Home</a>
                                <a href="#" class="Link / block text-neutrals-200 text-16px font-paragraphs / dark:text-neutrals-300">About us</a>
                                <a href="#" class="Link / block text-neutrals-200 text-16px font-paragraphs / dark:text-neutrals-300">Blog</a>
                                <a href="#" class="Link / block text-neutrals-200 text-16px font-paragraphs / dark:text-neutrals-300">Article</a>
                                <a href="#" class="Link / block text-neutrals-200 text-16px font-paragraphs / dark:text-neutrals-300">Contact</a>
                            </div>
                        </div>

                        <div class="Block /">
                            <h4 class="h h4 / mb-8px text-neutrals-100 leading-8">Solutions</h4>

                            <div class="Links / flex flex-col gap-4px">
                                <a href="#" class="Link / block text-neutrals-200 text-16px font-paragraphs / dark:text-neutrals-300">Travel agency</a>
                                <a href="#" class="Link / block text-neutrals-200 text-16px font-paragraphs / dark:text-neutrals-300">Travel now</a>
                                <a href="#" class="Link / block text-neutrals-200 text-16px font-paragraphs / dark:text-neutrals-300">Best places</a>
                                <a href="#" class="Link / block text-neutrals-200 text-16px font-paragraphs / dark:text-neutrals-300">Another item</a>
                            </div>
                        </div>

                        <div class="Block /">
                            <h4 class="h h4 / mb-8px text-neutrals-100 leading-8">Solutions</h4>

                            <div class="Links / flex flex-col gap-4px">
                                <a href="#" class="Link / block text-neutrals-200 text-16px font-paragraphs / dark:text-neutrals-300">Travel agency</a>
                                <a href="#" class="Link / block text-neutrals-200 text-16px font-paragraphs / dark:text-neutrals-300">Travel now</a>
                                <a href="#" class="Link / block text-neutrals-200 text-16px font-paragraphs / dark:text-neutrals-300">Best places</a>
                                <a href="#" class="Link / block text-neutrals-200 text-16px font-paragraphs / dark:text-neutrals-300">Another item</a>
                            </div>
                        </div>

                        <div class="Block">
                            <h4 class="h h4 / mb-8px text-neutrals-100 leading-8">Sitemap</h4>

                            <div class="Links / flex flex-col gap-4px">
                                <a href="#" class="Link / block text-neutrals-200 text-16px font-paragraphs / dark:text-neutrals-300">Home</a>
                                <a href="#" class="Link / block text-neutrals-200 text-16px font-paragraphs / dark:text-neutrals-300">About us</a>
                                <a href="#" class="Link / block text-neutrals-200 text-16px font-paragraphs / dark:text-neutrals-300">Blog</a>
                                <a href="#" class="Link / block text-neutrals-200 text-16px font-paragraphs / dark:text-neutrals-300">Article</a>
                                <a href="#" class="Link / block text-neutrals-200 text-16px font-paragraphs / dark:text-neutrals-300">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="Newsletter / flex flex-col gap-16px pb-40px border-b border-prim-300 / dark:border-neutrals-600 / md:flex-row md:justify-between">
                    <div class="Content / md:w-1/2">
                        <h4 class="h h4 / text-neutrals-100 leading-8">Subscribe to our newsletter</h4>
                        <p class="p / text-neutrals-200">Morbi sed pellentesque lectus. Nam varius risus metus, at pulvinar magna.</p>
                    </div>

                    <form class="Form / flex flex-col gap-8px / md:flex-row md:items-center">
                        <input type="text" class="Input / w-full py-8px px-16px bg-transparent text-neutrals-100 font-paragraphs border border-prim-200 rounded-lg placeholder-neutrals-200 text-16px / dark:border-neutrals-600" placeholder="Enter your email" />
                        <button type="submit" class="btn--primary btn--white md:w-auto" value="Subscribe">Subscribe</button>
                    </form>
                </div>

                <div class="Copyright / text-center text-neutrals-200 font-paragraphs text-16px mt-[-16px] / md:text-left">
                    ©2023 Present Online - All rights reserved.
                </div>
            </div>
        </footer>



        <!-- Scripts -->
        <?= js("assets/js/nav.js", ["defer" => true]) ?>
        <?= js("assets/js/dark-mode-toggle.js", ["defer" => true]) ?>
    </body>
</html>