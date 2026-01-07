<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="scroll-behavior: smooth;">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', '716 Sports Management') }}</title>
            @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="bg-white">
            {{-- Header / Navigation --}}
            <header class="relative z-50" x-data="{ closeMobileMenu() { const dialog = document.getElementById('mobile-menu'); if (dialog) dialog.close(); } }">
                <nav aria-label="Global" class="bg-white border-b-6 border-[#1b4896] flex items-center justify-between p-6 lg:justify-center lg:px-8">
                    <div class="flex lg:hidden">
                        <button type="button" command="show-modal" commandfor="mobile-menu" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Open main menu</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        </button>
                    </div>
                    <div class="hidden lg:flex lg:items-center lg:gap-x-8">
                        <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">716 Sports Management</span>
                        <img src="{{ asset('images/logo-removebg-preview.png') }}" alt="" class="h-24 w-auto" />
                        </a>
                        <div class="flex gap-x-12">
                            <a href="#" class="text-base font-semibold text-gray-800">Home</a>
                            <a href="#our-team" class="text-base font-semibold text-gray-800">About Us</a>
                            <a href="#testimonials" class="text-base font-semibold text-gray-800">Testimonials</a>
                            <a href="#contact" class="text-base font-semibold text-gray-800">Contact Us</a>
                        </div>
                    </div>
                    <div class="flex lg:hidden">
                        <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">716 Sports Management</span>
                        <img src="{{ asset('images/logo-removebg-preview.png') }}" alt="" class="h-24 w-auto" />
                        </a>
                    </div>
                </nav>
                <el-dialog>
                    <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
                        <div tabindex="0" class="fixed inset-0 focus:outline-none">
                            <el-dialog-panel class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                                <div class="flex items-center justify-between">
                                    <a href="#" class="-m-1.5 p-1.5">
                                        <span class="sr-only">716 Sports Management</span>
                                        <img src="{{ asset('images/logo.jpeg') }}" alt="" class="h-16 w-auto" />
                                    </a>
                                    <button type="button" command="close" commandfor="mobile-menu" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                                        <span class="sr-only">Close menu</span>
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                                        <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="mt-6 flow-root">
                                    <div class="-my-6 divide-y divide-gray-500/10">
                                        <div class="space-y-2 py-6">
                                        <a href="#" @click.prevent="closeMobileMenu(); setTimeout(() => window.scrollTo({top: 0, behavior: 'smooth'}), 150)" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Home</a>
                                        <a href="#our-team" @click.prevent="closeMobileMenu(); setTimeout(() => document.getElementById('our-team').scrollIntoView({behavior: 'smooth'}), 150)" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">About Us</a>
                                        <a href="#testimonials" @click.prevent="closeMobileMenu(); setTimeout(() => document.getElementById('testimonials').scrollIntoView({behavior: 'smooth'}), 150)" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Testimonials</a>
                                        <a href="#contact" @click.prevent="closeMobileMenu(); setTimeout(() => document.getElementById('contact').scrollIntoView({behavior: 'smooth'}), 150)" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Contact Us</a>
                                        </div>
                                    </div>
                                </div>
                            </el-dialog-panel>
                        </div>
                    </dialog>
                </el-dialog>
        </header>

            {{-- Hero Section --}}
            <div class="relative isolate px-6 py-16 sm:py-24 lg:py-36 lg:px-8" style="background-image: url('{{ asset('images/hockey-hero.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <div class="absolute inset-0 bg-black/50"></div>
                <div class="relative mx-auto max-w-2xl">
                <div class="text-center">
                    <h1 class="text-5xl font-semibold tracking-tight text-balance text-white sm:text-7xl">Professional Hockey Agency</h1>
                    <div class="mx-auto mt-4 w-24 h-1 bg-[#1b4896]"></div>
                    <p class="mt-8 text-lg font-medium text-pretty text-gray-100 sm:text-xl/8">Dedicated to advancing the careers of professional hockey players through expert guidance, strategic contract negotiations, and comprehensive career management.</p>
                    <div class="mt-10 flex items-center justify-center">
                    <a href="#contact" class="rounded-md bg-[#1b4896] px-6 py-3.5 text-base font-semibold text-white shadow-xs hover:bg-[#153d7a] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#1b4896]">Contact Us</a>
                    </div>
                </div>
                </div>
            </div>

            {{-- Our Team Section --}}
            <div id="our-team" class="bg-[#2f2e2e] py-24 sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="text-center">
                        <h2 class="text-4xl font-semibold tracking-tight text-pretty text-white sm:text-5xl">Our team</h2>
                        <div class="mx-auto mt-4 w-24 h-1 bg-[#1b4896]"></div>
                    </div>
                    <ul role="list" class="mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                        <li>
                            <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="" class="aspect-3/2 w-full rounded-2xl object-cover outline-1 -outline-offset-1 outline-white/10" />
                            <h3 class="mt-6 text-lg/8 font-semibold tracking-tight text-white">Lindsay Walton</h3>
                            <p class="text-base/7 text-gray-400">President</p>
                            <ul role="list" class="mt-6 flex gap-x-6">
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-gray-200">
                                        <span class="sr-only">X</span>
                                        <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="size-5">
                                            <path d="M11.4678 8.77491L17.2961 2H15.915L10.8543 7.88256L6.81232 2H2.15039L8.26263 10.8955L2.15039 18H3.53159L8.87581 11.7878L13.1444 18H17.8063L11.4675 8.77491H11.4678ZM9.57608 10.9738L8.95678 10.0881L4.02925 3.03974H6.15068L10.1273 8.72795L10.7466 9.61374L15.9156 17.0075H13.7942L9.57608 10.9742V10.9738Z" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-gray-200">
                                        <span class="sr-only">Email</span>
                                        <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="size-5">
                                            <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                            <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:" class="text-gray-400 hover:text-gray-200">
                                        <span class="sr-only">Phone</span>
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                    </svg>
                                </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="" class="aspect-3/2 w-full rounded-2xl object-cover outline-1 -outline-offset-1 outline-white/10" />
                            <h3 class="mt-6 text-lg/8 font-semibold tracking-tight text-white">Courtney Henry</h3>
                            <p class="text-base/7 text-gray-400">Client Manager</p>
                            <ul role="list" class="mt-6 flex gap-x-6">
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-gray-200">
                                        <span class="sr-only">Email</span>
                                        <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="size-5">
                                            <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                            <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                    </svg>
                                </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="" class="aspect-3/2 w-full rounded-2xl object-cover outline-1 -outline-offset-1 outline-white/10" />
                            <h3 class="mt-6 text-lg/8 font-semibold tracking-tight text-white">Tom Cook</h3>
                            <p class="text-base/7 text-gray-400">Mental Wellness Coach</p>
                            <ul role="list" class="mt-6 flex gap-x-6">
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-gray-200">
                                        <span class="sr-only">X</span>
                                        <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="size-5">
                                            <path d="M11.4678 8.77491L17.2961 2H15.915L10.8543 7.88256L6.81232 2H2.15039L8.26263 10.8955L2.15039 18H3.53159L8.87581 11.7878L13.1444 18H17.8063L11.4675 8.77491H11.4678ZM9.57608 10.9738L8.95678 10.0881L4.02925 3.03974H6.15068L10.1273 8.72795L10.7466 9.61374L15.9156 17.0075H13.7942L9.57608 10.9742V10.9738Z" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-400 hover:text-gray-200">
                                        <span class="sr-only">Email</span>
                                        <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="size-5">
                                            <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z" />
                                            <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Testimonials Section --}}
            <div id="testimonials" class="relative isolate bg-white py-24 sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="text-center">
                        <h2 class="text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl">Testimonials</h2>
                        <div class="mx-auto mt-4 w-24 h-1 bg-[#1b4896]"></div>
                    </div>
                    <div class="mx-auto mt-16 flow-root max-w-2xl sm:mt-20 lg:mx-0 lg:max-w-none" x-data="{ showMore: false }">
                        <div class="-mt-8 sm:-mx-4 sm:columns-2 sm:text-[0] lg:columns-3">
                            <div class="pt-8 sm:inline-block sm:w-full sm:px-4">
                                <figure class="rounded-2xl bg-gray-50 p-8 text-sm/6">
                                    <blockquote class="text-gray-900">
                                        <p>"Laborum quis quam. Dolorum et ut quod quia. Voluptas numquam delectus nihil. Aut enim doloremque et ipsam."</p>
                                    </blockquote>
                                    <figcaption class="mt-6 text-sm text-gray-600">
                                        — Leslie Alexander
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="pt-8 sm:inline-block sm:w-full sm:px-4">
                                <figure class="rounded-2xl bg-gray-50 p-8 text-sm/6">
                                    <blockquote class="text-gray-900">
                                        <p>"Anim sit consequat culpa commodo eu do nisi commodo ut aute aliqua. Laborum esse duis tempor consectetur officia mollit fugiat. Exercitation qui elit minim minim quis fugiat ex."</p>
                                    </blockquote>
                                    <figcaption class="mt-6 text-sm text-gray-600">
                                        — Michael Foster
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="pt-8 sm:inline-block sm:w-full sm:px-4 sm:block" :class="{'hidden': !showMore}" x-cloak>
                                <figure class="rounded-2xl bg-gray-50 p-8 text-sm/6">
                                    <blockquote class="text-gray-900">
                                        <p>"Excepteur consectetur deserunt id incididunt veniam mollit officia sint qui aute duis sit cillum. Reprehenderit fugiat amet aliqua in commodo minim sunt laborum."</p>
                                    </blockquote>
                                    <figcaption class="mt-6 text-sm text-gray-600">
                                        — Lindsay Walton
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="pt-8 sm:inline-block sm:w-full sm:px-4 sm:block" :class="{'hidden': !showMore}" x-cloak>
                                <figure class="rounded-2xl bg-gray-50 p-8 text-sm/6">
                                    <blockquote class="text-gray-900">
                                        <p>"Distinctio facere aliquam est qui atque sint molestias ad. Fuga consequuntur asperiores voluptatum ipsum."</p>
                                    </blockquote>
                                    <figcaption class="mt-6 text-sm text-gray-600">
                                        — Courtney Henry
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="pt-8 sm:inline-block sm:w-full sm:px-4 sm:block" :class="{'hidden': !showMore}" x-cloak>
                                <figure class="rounded-2xl bg-gray-50 p-8 text-sm/6">
                                    <blockquote class="text-gray-900">
                                        <p>"Voluptas quos itaque ipsam in voluptatem est. Iste eos blanditiis repudiandae. Earum deserunt enim molestiae ipsum perferendis."</p>
                                    </blockquote>
                                    <figcaption class="mt-6 text-sm text-gray-600">
                                        — Whitney Francis
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="pt-8 sm:inline-block sm:w-full sm:px-4 sm:block" :class="{'hidden': !showMore}" x-cloak>
                                <figure class="rounded-2xl bg-gray-50 p-8 text-sm/6">
                                    <blockquote class="text-gray-900">
                                        <p>"Aliquid dolore praesentium ratione. Cumque ea officia repellendus laboriosam. Vitae quod id explicabo non sunt."</p>
                                    </blockquote>
                                    <figcaption class="mt-6 text-sm text-gray-600">
                                        — Leonard Krasner
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="mt-8 flex justify-center sm:hidden">
                            <button @click="showMore = !showMore" class="rounded-md bg-[#1b4896] px-4 py-2 text-sm font-semibold text-white hover:bg-[#153d7a] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#1b4896]">
                                <span x-show="!showMore">Show More</span>
                                <span x-show="showMore">Show Less</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Our Partners Section --}}
            <div class="bg-[#2f2e2e] py-24 sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="text-center">
                        <h2 class="text-4xl font-semibold tracking-tight text-pretty text-white sm:text-5xl">Our partners</h2>
                        <div class="mx-auto mt-4 w-24 h-1 bg-[#1b4896]"></div>
                    </div>
                    <div class="mx-auto mt-20 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                        <img width="158" height="48" src="https://tailwindcss.com/plus-assets/img/logos/158x48/transistor-logo-white.svg" alt="Transistor" class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" />

                        <img width="158" height="48" src="https://tailwindcss.com/plus-assets/img/logos/158x48/reform-logo-white.svg" alt="Reform" class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" />

                        <img width="158" height="48" src="https://tailwindcss.com/plus-assets/img/logos/158x48/tuple-logo-white.svg" alt="Tuple" class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" />

                        <img width="158" height="48" src="https://tailwindcss.com/plus-assets/img/logos/158x48/savvycal-logo-white.svg" alt="SavvyCal" class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1" />

                        <img width="158" height="48" src="https://tailwindcss.com/plus-assets/img/logos/158x48/statamic-logo-white.svg" alt="Statamic" class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1" />
                    </div>
                </div>
            </div>

            {{-- Contact Form Section --}}
            <div id="contact" class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
                <div class="mx-auto max-w-2xl text-center">
                    <h2 class="text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl">Contact Us</h2>
                    <div class="mx-auto mt-4 w-24 h-1 bg-[#1b4896]"></div>
                </div>
                <form action="#" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
                    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                        <div>
                            <label for="first-name" class="block text-sm/6 font-semibold text-gray-900">First name</label>
                            <div class="mt-2.5">
                                <input id="first-name" type="text" name="first-name" autocomplete="given-name" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-[#1b4896]" />
                            </div>
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm/6 font-semibold text-gray-900">Last name</label>
                            <div class="mt-2.5">
                                <input id="last-name" type="text" name="last-name" autocomplete="family-name" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-[#1b4896]" />
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="email" class="block text-sm/6 font-semibold text-gray-900">Email</label>
                            <div class="mt-2.5">
                                <input id="email" type="email" name="email" autocomplete="email" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-[#1b4896]" />
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="phone-number" class="block text-sm/6 font-semibold text-gray-900">Phone number</label>
                            <div class="mt-2.5">
                                <div class="flex rounded-md bg-white outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-[#1b4896]">
                                    <div class="grid shrink-0 grid-cols-1 focus-within:relative">
                                        <select id="country" name="country" autocomplete="country" aria-label="Country" class="col-start-1 row-start-1 w-full appearance-none rounded-md py-2 pr-7 pl-3.5 text-base text-gray-500 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-[#1b4896] sm:text-sm/6">
                                            <option>US</option>
                                            <option>CA</option>
                                            <option>EU</option>
                                        </select>
                                        <svg viewBox="0 0 16 16" fill="currentColor" data-slot="icon" aria-hidden="true" class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4">
                                            <path d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                    </svg>
                                    </div>
                                    <input id="phone-number" type="text" name="phone-number" placeholder="123-456-7890" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" />
                                </div>
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="message" class="block text-sm/6 font-semibold text-gray-900">Message</label>
                            <div class="mt-2.5">
                                <textarea id="message" name="message" rows="4" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-[#1b4896]"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10">
                        <button type="submit" class="block w-full rounded-md bg-[#1b4896] px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-[#153d7a] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#1b4896]">Let's talk</button>
                    </div>
                </form>
            </div>

            {{-- Footer --}}
            <footer class="bg-[#2f2e2e]">
                <div class="mx-auto max-w-7xl overflow-hidden px-6 py-20 sm:py-24 lg:px-8">
                    <nav aria-label="Footer" class="-mb-6 flex flex-wrap justify-center gap-x-12 gap-y-3 text-sm/6">
                        <a href="#" class="text-gray-400 hover:text-white">Home</a>
                        <a href="#our-team" class="text-gray-400 hover:text-white">About Us</a>
                        <a href="#testimonials" class="text-gray-400 hover:text-white">Testimonials</a>
                        <a href="#contact" class="text-gray-400 hover:text-white">Contact Us</a>
                    </nav>
                    <div class="mt-16 flex justify-center gap-x-10">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <span class="sr-only">Facebook</span>
                            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="size-6">
                                <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" fill-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <span class="sr-only">Instagram</span>
                            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="size-6">
                                <path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" fill-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <span class="sr-only">X</span>
                            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="size-6">
                                <path d="M13.6823 10.6218L20.2391 3H18.6854L12.9921 9.61788L8.44486 3H3.2002L10.0765 13.0074L3.2002 21H4.75404L10.7663 14.0113L15.5685 21H20.8131L13.6819 10.6218H13.6823ZM11.5541 13.0956L10.8574 12.0991L5.31391 4.16971H7.70053L12.1742 10.5689L12.8709 11.5655L18.6861 19.8835H16.2995L11.5541 13.096V13.0956Z" />
                    </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <span class="sr-only">YouTube</span>
                            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="size-6">
                                <path d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z" clip-rule="evenodd" fill-rule="evenodd" />
                    </svg>
                        </a>
                    </div>
                    <p class="mt-10 text-center text-sm/6 text-gray-400">&copy; 2026 716 Sports Management. All rights reserved.</p>
                </div>
            </footer>
        </div>
    </body>
</html>
