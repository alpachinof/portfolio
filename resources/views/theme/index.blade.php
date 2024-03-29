<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="bg-background bg-grid">
    @include('theme.sections.navbar')
    <div class="relative overflow-hidden">


        <main class="h-screen mt-16 mx-auto max-w-7xl px-4 sm:mt-24">
            <div class="text-center">
                <h1 class="text-4xl tracking-tight leading-relaxed font-black text-white sm:text-5xl md:text-6xl">
                    <span class="block ">Hi,I'm</span>
                    <span class="block text-primary">Mohammad</span>
                    <span
                        class="mx-auto block max-w-fit text-white animate-typing overflow-hidden whitespace-nowrap border-r-4 border-r-white pr-5">Software
                        Developer</span>
                </h1>

                <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-20">
                    <a href="#about">
                        <div
                            class="w-[35px] h-[64px] rounded-3xl border-4 border-gray-500 flex justify-center items-start p-2">
                            <div class="w-3 h-3 rounded-full bg-gray-500 mb-1 animate-bing">
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </main>


        <div class="flex h-full mb-24 items-center justify-center gap-x-10">
            <div
                class="group relative w-64 overflow-hidden rounded-[16px] bg-secondary p-[1px] transition-all duration-300 ease-in-out hover:bg-gradient-to-r hover:from-gray-500 hover:via-gray-700  hover:to-gray-900">
                <div
                    class="group-hover:animate-spin-slow invisible absolute -top-40 -bottom-40 left-10 right-10 bg-gradient-to-r from-transparent via-white/90 to-transparent group-hover:visible">
                </div>
                <div class="relative rounded-[15px] bg-secondary p-6">
                    <div class="space-y-4">
                        <img src="https://nuxt.com/assets/home/ux-fast-light.svg" alt="" />
                        <p class="text-lg font-semibold text-white">Web Development</p>
                        <p class="font-md text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
                            delectus temporibus </p>
                    </div>
                </div>
            </div>
            <div
                class="group relative w-64 overflow-hidden rounded-[16px] bg-secondary p-[1px] transition-all duration-300 ease-in-out hover:bg-gradient-to-r hover:from-gray-500 hover:via-gray-700  hover:to-gray-900">
                <div
                    class="group-hover:animate-spin-slow invisible absolute -top-40 -bottom-40 left-10 right-10 bg-gradient-to-r from-transparent via-white/90 to-transparent group-hover:visible">
                </div>
                <div class="relative rounded-[15px] bg-secondary p-6">
                    <div class="space-y-4">
                        <img src="https://nuxt.com/assets/home/ux-fast-light.svg" alt="" />
                        <p class="text-lg font-semibold text-white">Front-End Development</p>
                        <p class="font-md text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
                            delectus temporibus</p>
                    </div>
                </div>
            </div>
            <div
                class="group relative w-64 overflow-hidden rounded-[16px] bg-secondary p-[1px] transition-all duration-300 ease-in-out hover:bg-gradient-to-r hover:from-gray-500 hover:via-gray-700  hover:to-gray-900">
                <div
                    class="group-hover:animate-spin-slow invisible absolute -top-40 -bottom-40 left-10 right-10 bg-gradient-to-r from-transparent via-white/90 to-transparent group-hover:visible">
                </div>
                <div class="relative rounded-[15px] bg-secondary p-6">
                    <div class="space-y-4">
                        <img src="https://nuxt.com/assets/home/ux-fast-light.svg" alt="" />
                        <p class="text-lg font-semibold text-white">Back-End Development</p>
                        <p class="font-md text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
                            delectus temporibus</p>
                    </div>
                </div>
            </div>
            <div
                class="group relative w-64 overflow-hidden rounded-[16px] bg-secondary p-[1px] transition-all duration-300 ease-in-out hover:bg-gradient-to-r hover:from-gray-500 hover:via-gray-700  hover:to-gray-900">
                <div
                    class="group-hover:animate-spin-slow invisible absolute -top-40 -bottom-40 left-10 right-10 bg-gradient-to-r from-transparent via-white/90 to-transparent group-hover:visible">
                </div>
                <div class="relative rounded-[15px] bg-secondary p-6">
                    <div class="space-y-4">
                        <img src="https://nuxt.com/assets/home/ux-fast-light.svg" alt="" />
                        <p class="text-lg font-semibold text-white">UX & UI Design</p>
                        <p class="font-md text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam
                            delectus temporibus</p>
                    </div>
                </div>
            </div>
        </div>





        <div class="relative py-16 sm:py-16">
            <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:gap-24 lg:items-start">
                <div class="relative sm:py-16 lg:py-0">
                    <div aria-hidden="true" class="hidden sm:block lg:absolute lg:inset-y-0 lg:right-0 lg:w-screen">
                        <div class="absolute inset-y-0 right-1/2 w-full bg-[#1E1E1E] rounded-r-3xl lg:right-72"></div>
                        <svg class="absolute top-8 left-1/2 -ml-3 lg:-right-8 lg:left-auto lg:top-12" width="404"
                            height="392" fill="none" viewBox="0 0 404 392">
                            <defs>
                                <pattern id="02f20b47-fd69-4224-a62a-4c9de5c763f7" x="0" y="0" width="20"
                                    height="20" patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4" class="text-gray-200"
                                        fill="currentColor" />
                                </pattern>
                            </defs>
                            <rect width="404" height="392" fill="url(#02f20b47-fd69-4224-a62a-4c9de5c763f7)" />
                        </svg>
                    </div>
                    <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0 lg:max-w-none lg:py-20">
                        <!-- Testimonial card-->
                        <div class="relative pt-64 pb-10 rounded-2xl shadow-xl overflow-hidden">
                            <img class="absolute inset-0 h-full w-full object-cover"
                                src="https://images.unsplash.com/photo-1521510895919-46920266ddb3?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&fp-x=0.5&fp-y=0.6&fp-z=3&width=1440&height=1440&sat=-100"
                                alt="">
                            <div class="absolute inset-0 bg-primary mix-blend-multiply"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-primary via-primary opacity-90">
                            </div>
                            <div class="relative px-8">
                                <div>
                                    <img class="h-12"
                                        src="https://tailwindui.com/img/logos/workcation.svg?color=white"
                                        alt="Workcation">
                                </div>
                                <blockquote class="mt-8">
                                    <div class="relative text-lg font-medium text-white md:flex-grow">
                                        <svg class="absolute top-0 left-0 transform -translate-x-3 -translate-y-2 h-8 w-8 text-indigo-400"
                                            fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                            <path
                                                d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                                        </svg>
                                        <p class="relative">Tincidunt integer commodo, cursus etiam aliquam neque, et.
                                            Consectetur pretium in volutpat, diam. Montes, magna cursus nulla feugiat
                                            dignissim id lobortis amet.</p>
                                    </div>

                                    <footer class="mt-4">
                                        <p class="text-base font-semibold text-indigo-200">Sarah Williams, CEO at
                                            Workcation</p>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0">
                    <!-- Content area -->
                    <div class="pt-12 sm:pt-16 lg:pt-20">
                        <h2 class="text-3xl text-white font-extrabold tracking-tight sm:text-4xl">About Me</h2>
                        <div class="mt-6 text-gray-400 space-y-6">
                            <p class="text-lg">Sagittis scelerisque nulla cursus in enim consectetur quam. Dictum urna
                                sed consectetur neque tristique pellentesque. Blandit amet, sed aenean erat arcu morbi.
                                Cursus faucibus nunc nisl netus morbi vel porttitor vitae ut. Amet vitae fames senectus
                                vitae.</p>
                            <p class="text-base leading-7">Sollicitudin tristique eros erat odio sed vitae, consequat
                                turpis elementum. Lorem nibh vel, eget pretium arcu vitae. Eros eu viverra donec ut
                                volutpat donec laoreet quam urna. Sollicitudin tristique eros erat odio sed vitae,
                                consequat turpis elementum. Lorem nibh vel, eget pretium arcu vitae. Eros eu viverra
                                donec ut volutpat donec laoreet quam urna.</p>
                            <p class="text-base leading-7">Rhoncus nisl, libero egestas diam fermentum dui. At quis
                                tincidunt vel ultricies. Vulputate aliquet velit faucibus semper. Pellentesque in
                                venenatis vestibulum consectetur nibh id. In id ut tempus egestas. Enim sit aliquam nec,
                                a. Morbi enim fermentum lacus in. Viverra.</p>
                        </div>
                    </div>

                    <!-- Stats section -->
                    <div class="mt-10">
                        <dl class="grid grid-cols-2 gap-x-4 gap-y-8">
                            <div class="border-t-2 border-gray-100 pt-6">
                                <dt class="text-base font-medium text-gray-400">Founded</dt>
                                <dd class="text-3xl font-extrabold tracking-tight text-gray-300">2021</dd>
                            </div>

                            <div class="border-t-2 border-gray-100 pt-6">
                                <dt class="text-base font-medium text-gray-400">Employees</dt>
                                <dd class="text-3xl font-extrabold tracking-tight text-gray-300">5</dd>
                            </div>

                            <div class="border-t-2 border-gray-100 pt-6">
                                <dt class="text-base font-medium text-gray-400">Beta Users</dt>
                                <dd class="text-3xl font-extrabold tracking-tight text-gray-300">521</dd>
                            </div>

                            <div class="border-t-2 border-gray-100 pt-6">
                                <dt class="text-base font-medium text-gray-400">Raised</dt>
                                <dd class="text-3xl font-extrabold tracking-tight text-gray-300">$25M</dd>
                            </div>
                        </dl>
                        <div class="mt-10">
                            <a href="#" class="text-base font-medium text-primary"> Learn more about how
                                we're changing the world <span aria-hidden="true">&rarr;</span> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>









        <section>
            <div class="my-16 flex items-center justify-center space-x-4">
                <span
                    class="inline-flex shadow shadow-gray-800 items-center px-3 py-2 rounded-full text-sm font-medium bg-[#121120] text-gray-400">
                    <svg class="pt-1 fill-primary" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.9" filter="url(#filter0_d_203_1283)">
                            <path
                                d="M15.7083 0.364707C15.2919 -0.0979561 14.6106 -0.125197 14.1691 0.310315C13.4627 1.03156 12.8319 1.73923 12.2137 2.48772C11.5955 3.23621 10.99 3.9847 10.4097 4.77389C9.66538 5.78094 8.94624 6.8424 8.27761 7.91745L5.93108 4.88276C5.57784 4.43368 4.95965 4.32479 4.49289 4.65143C3.98831 5.00522 3.84951 5.74013 4.1775 6.27086C4.1775 6.27086 6.91511 10.7889 7.28096 11.3468C7.5711 11.7823 7.92434 12 8.40376 12C8.92103 12 9.28684 11.7822 9.61492 11.1971C9.65861 11.1167 9.70742 11.0265 9.7608 10.9279C10.3394 9.8593 11.4537 7.80121 12.3778 6.39334C12.8823 5.6176 13.4123 4.86921 13.9673 4.12072C14.5098 3.38591 15.1027 2.65101 15.6705 1.99783L15.6957 1.97058C16.0993 1.52158 16.0993 0.813911 15.7082 0.364831L15.7083 0.364707Z"
                                fill="url(#paint0_linear_203_1283)" />
                            <path
                                d="M15.7083 0.364707C15.2919 -0.0979561 14.6106 -0.125197 14.1691 0.310315C13.4627 1.03156 12.8319 1.73923 12.2137 2.48772C11.5955 3.23621 10.99 3.9847 10.4097 4.77389C9.66538 5.78094 8.94624 6.8424 8.27761 7.91745L5.93108 4.88276C5.57784 4.43368 4.95965 4.32479 4.49289 4.65143C3.98831 5.00522 3.84951 5.74013 4.1775 6.27086C4.1775 6.27086 6.91511 10.7889 7.28096 11.3468C7.5711 11.7823 7.92434 12 8.40376 12C8.92103 12 9.28684 11.7822 9.61492 11.1971C9.65861 11.1167 9.70742 11.0265 9.7608 10.9279C10.3394 9.8593 11.4537 7.80121 12.3778 6.39334C12.8823 5.6176 13.4123 4.86921 13.9673 4.12072C14.5098 3.38591 15.1027 2.65101 15.6705 1.99783L15.6957 1.97058C16.0993 1.52158 16.0993 0.813911 15.7082 0.364831L15.7083 0.364707Z"
                                stroke="url(#paint1_linear_203_1283)" />
                        </g>
                        <defs>
                            <filter id="filter0_d_203_1283" x="0" y="0" width="20" height="20"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix"
                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dy="4" />
                                <feGaussianBlur stdDeviation="2" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix"
                                    result="effect1_dropShadow_203_1283" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_203_1283"
                                    result="shape" />
                            </filter>
                            <linearGradient id="paint0_linear_203_1283" x1="-18" y1="6" x2="45.5"
                                y2="-4" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#B084FF" />
                                <stop offset="1" stop-color="#F38DFA" />
                            </linearGradient>
                            <linearGradient id="paint1_linear_203_1283" x1="13" y1="-1.78814e-07"
                                x2="10" y2="12" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#E5BBFF" stop-opacity="0" />
                                <stop offset="1" stop-color="#A88AC4" />
                            </linearGradient>
                        </defs>
                    </svg>
                    Design System
                </span>

                <span
                    class="inline-flex shadow shadow-gray-800 items-center px-3 py-2 rounded-full text-sm font-medium bg-[#121120] text-gray-400">
                    <svg class="pt-1 fill-primary" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.9" filter="url(#filter0_d_203_1283)">
                            <path
                                d="M15.7083 0.364707C15.2919 -0.0979561 14.6106 -0.125197 14.1691 0.310315C13.4627 1.03156 12.8319 1.73923 12.2137 2.48772C11.5955 3.23621 10.99 3.9847 10.4097 4.77389C9.66538 5.78094 8.94624 6.8424 8.27761 7.91745L5.93108 4.88276C5.57784 4.43368 4.95965 4.32479 4.49289 4.65143C3.98831 5.00522 3.84951 5.74013 4.1775 6.27086C4.1775 6.27086 6.91511 10.7889 7.28096 11.3468C7.5711 11.7823 7.92434 12 8.40376 12C8.92103 12 9.28684 11.7822 9.61492 11.1971C9.65861 11.1167 9.70742 11.0265 9.7608 10.9279C10.3394 9.8593 11.4537 7.80121 12.3778 6.39334C12.8823 5.6176 13.4123 4.86921 13.9673 4.12072C14.5098 3.38591 15.1027 2.65101 15.6705 1.99783L15.6957 1.97058C16.0993 1.52158 16.0993 0.813911 15.7082 0.364831L15.7083 0.364707Z"
                                fill="url(#paint0_linear_203_1283)" />
                            <path
                                d="M15.7083 0.364707C15.2919 -0.0979561 14.6106 -0.125197 14.1691 0.310315C13.4627 1.03156 12.8319 1.73923 12.2137 2.48772C11.5955 3.23621 10.99 3.9847 10.4097 4.77389C9.66538 5.78094 8.94624 6.8424 8.27761 7.91745L5.93108 4.88276C5.57784 4.43368 4.95965 4.32479 4.49289 4.65143C3.98831 5.00522 3.84951 5.74013 4.1775 6.27086C4.1775 6.27086 6.91511 10.7889 7.28096 11.3468C7.5711 11.7823 7.92434 12 8.40376 12C8.92103 12 9.28684 11.7822 9.61492 11.1971C9.65861 11.1167 9.70742 11.0265 9.7608 10.9279C10.3394 9.8593 11.4537 7.80121 12.3778 6.39334C12.8823 5.6176 13.4123 4.86921 13.9673 4.12072C14.5098 3.38591 15.1027 2.65101 15.6705 1.99783L15.6957 1.97058C16.0993 1.52158 16.0993 0.813911 15.7082 0.364831L15.7083 0.364707Z"
                                stroke="url(#paint1_linear_203_1283)" />
                        </g>
                        <defs>
                            <filter id="filter0_d_203_1283" x="0" y="0" width="20" height="20"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix"
                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dy="4" />
                                <feGaussianBlur stdDeviation="2" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix"
                                    result="effect1_dropShadow_203_1283" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_203_1283"
                                    result="shape" />
                            </filter>
                            <linearGradient id="paint0_linear_203_1283" x1="-18" y1="6" x2="45.5"
                                y2="-4" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#B084FF" />
                                <stop offset="1" stop-color="#F38DFA" />
                            </linearGradient>
                            <linearGradient id="paint1_linear_203_1283" x1="13" y1="-1.78814e-07"
                                x2="10" y2="12" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#E5BBFF" stop-opacity="0" />
                                <stop offset="1" stop-color="#A88AC4" />
                            </linearGradient>
                        </defs>
                    </svg>
                    Product
                </span>
                <span
                    class="inline-flex shadow shadow-gray-800 items-center px-3 py-2 rounded-full text-sm font-medium bg-[#121120] text-gray-400">
                    <svg class="pt-1 fill-primary" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.9" filter="url(#filter0_d_203_1283)">
                            <path
                                d="M15.7083 0.364707C15.2919 -0.0979561 14.6106 -0.125197 14.1691 0.310315C13.4627 1.03156 12.8319 1.73923 12.2137 2.48772C11.5955 3.23621 10.99 3.9847 10.4097 4.77389C9.66538 5.78094 8.94624 6.8424 8.27761 7.91745L5.93108 4.88276C5.57784 4.43368 4.95965 4.32479 4.49289 4.65143C3.98831 5.00522 3.84951 5.74013 4.1775 6.27086C4.1775 6.27086 6.91511 10.7889 7.28096 11.3468C7.5711 11.7823 7.92434 12 8.40376 12C8.92103 12 9.28684 11.7822 9.61492 11.1971C9.65861 11.1167 9.70742 11.0265 9.7608 10.9279C10.3394 9.8593 11.4537 7.80121 12.3778 6.39334C12.8823 5.6176 13.4123 4.86921 13.9673 4.12072C14.5098 3.38591 15.1027 2.65101 15.6705 1.99783L15.6957 1.97058C16.0993 1.52158 16.0993 0.813911 15.7082 0.364831L15.7083 0.364707Z"
                                fill="url(#paint0_linear_203_1283)" />
                            <path
                                d="M15.7083 0.364707C15.2919 -0.0979561 14.6106 -0.125197 14.1691 0.310315C13.4627 1.03156 12.8319 1.73923 12.2137 2.48772C11.5955 3.23621 10.99 3.9847 10.4097 4.77389C9.66538 5.78094 8.94624 6.8424 8.27761 7.91745L5.93108 4.88276C5.57784 4.43368 4.95965 4.32479 4.49289 4.65143C3.98831 5.00522 3.84951 5.74013 4.1775 6.27086C4.1775 6.27086 6.91511 10.7889 7.28096 11.3468C7.5711 11.7823 7.92434 12 8.40376 12C8.92103 12 9.28684 11.7822 9.61492 11.1971C9.65861 11.1167 9.70742 11.0265 9.7608 10.9279C10.3394 9.8593 11.4537 7.80121 12.3778 6.39334C12.8823 5.6176 13.4123 4.86921 13.9673 4.12072C14.5098 3.38591 15.1027 2.65101 15.6705 1.99783L15.6957 1.97058C16.0993 1.52158 16.0993 0.813911 15.7082 0.364831L15.7083 0.364707Z"
                                stroke="url(#paint1_linear_203_1283)" />
                        </g>
                        <defs>
                            <filter id="filter0_d_203_1283" x="0" y="0" width="20" height="20"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix"
                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dy="4" />
                                <feGaussianBlur stdDeviation="2" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix"
                                    result="effect1_dropShadow_203_1283" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_203_1283"
                                    result="shape" />
                            </filter>
                            <linearGradient id="paint0_linear_203_1283" x1="-18" y1="6" x2="45.5"
                                y2="-4" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#B084FF" />
                                <stop offset="1" stop-color="#F38DFA" />
                            </linearGradient>
                            <linearGradient id="paint1_linear_203_1283" x1="13" y1="-1.78814e-07"
                                x2="10" y2="12" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#E5BBFF" stop-opacity="0" />
                                <stop offset="1" stop-color="#A88AC4" />
                            </linearGradient>
                        </defs>
                    </svg>
                    Website
                </span>
                <span
                    class="inline-flex shadow shadow-gray-800 items-center px-3 py-2 rounded-full text-sm font-medium bg-[#121120] text-gray-400">
                    <svg class="pt-1 fill-primary" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.9" filter="url(#filter0_d_203_1283)">
                            <path
                                d="M15.7083 0.364707C15.2919 -0.0979561 14.6106 -0.125197 14.1691 0.310315C13.4627 1.03156 12.8319 1.73923 12.2137 2.48772C11.5955 3.23621 10.99 3.9847 10.4097 4.77389C9.66538 5.78094 8.94624 6.8424 8.27761 7.91745L5.93108 4.88276C5.57784 4.43368 4.95965 4.32479 4.49289 4.65143C3.98831 5.00522 3.84951 5.74013 4.1775 6.27086C4.1775 6.27086 6.91511 10.7889 7.28096 11.3468C7.5711 11.7823 7.92434 12 8.40376 12C8.92103 12 9.28684 11.7822 9.61492 11.1971C9.65861 11.1167 9.70742 11.0265 9.7608 10.9279C10.3394 9.8593 11.4537 7.80121 12.3778 6.39334C12.8823 5.6176 13.4123 4.86921 13.9673 4.12072C14.5098 3.38591 15.1027 2.65101 15.6705 1.99783L15.6957 1.97058C16.0993 1.52158 16.0993 0.813911 15.7082 0.364831L15.7083 0.364707Z"
                                fill="url(#paint0_linear_203_1283)" />
                            <path
                                d="M15.7083 0.364707C15.2919 -0.0979561 14.6106 -0.125197 14.1691 0.310315C13.4627 1.03156 12.8319 1.73923 12.2137 2.48772C11.5955 3.23621 10.99 3.9847 10.4097 4.77389C9.66538 5.78094 8.94624 6.8424 8.27761 7.91745L5.93108 4.88276C5.57784 4.43368 4.95965 4.32479 4.49289 4.65143C3.98831 5.00522 3.84951 5.74013 4.1775 6.27086C4.1775 6.27086 6.91511 10.7889 7.28096 11.3468C7.5711 11.7823 7.92434 12 8.40376 12C8.92103 12 9.28684 11.7822 9.61492 11.1971C9.65861 11.1167 9.70742 11.0265 9.7608 10.9279C10.3394 9.8593 11.4537 7.80121 12.3778 6.39334C12.8823 5.6176 13.4123 4.86921 13.9673 4.12072C14.5098 3.38591 15.1027 2.65101 15.6705 1.99783L15.6957 1.97058C16.0993 1.52158 16.0993 0.813911 15.7082 0.364831L15.7083 0.364707Z"
                                stroke="url(#paint1_linear_203_1283)" />
                        </g>
                        <defs>
                            <filter id="filter0_d_203_1283" x="0" y="0" width="20" height="20"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix"
                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dy="4" />
                                <feGaussianBlur stdDeviation="2" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix"
                                    result="effect1_dropShadow_203_1283" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_203_1283"
                                    result="shape" />
                            </filter>
                            <linearGradient id="paint0_linear_203_1283" x1="-18" y1="6" x2="45.5"
                                y2="-4" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#B084FF" />
                                <stop offset="1" stop-color="#F38DFA" />
                            </linearGradient>
                            <linearGradient id="paint1_linear_203_1283" x1="13" y1="-1.78814e-07"
                                x2="10" y2="12" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#E5BBFF" stop-opacity="0" />
                                <stop offset="1" stop-color="#A88AC4" />
                            </linearGradient>
                        </defs>
                    </svg>
                    Branding
                </span>
                <span
                    class="inline-flex shadow shadow-gray-800 items-center px-3 py-2 rounded-full text-sm font-medium bg-secondary text-gray-400">
                    <svg class="pt-1 fill-primary" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.9" filter="url(#filter0_d_203_1283)">
                            <path
                                d="M15.7083 0.364707C15.2919 -0.0979561 14.6106 -0.125197 14.1691 0.310315C13.4627 1.03156 12.8319 1.73923 12.2137 2.48772C11.5955 3.23621 10.99 3.9847 10.4097 4.77389C9.66538 5.78094 8.94624 6.8424 8.27761 7.91745L5.93108 4.88276C5.57784 4.43368 4.95965 4.32479 4.49289 4.65143C3.98831 5.00522 3.84951 5.74013 4.1775 6.27086C4.1775 6.27086 6.91511 10.7889 7.28096 11.3468C7.5711 11.7823 7.92434 12 8.40376 12C8.92103 12 9.28684 11.7822 9.61492 11.1971C9.65861 11.1167 9.70742 11.0265 9.7608 10.9279C10.3394 9.8593 11.4537 7.80121 12.3778 6.39334C12.8823 5.6176 13.4123 4.86921 13.9673 4.12072C14.5098 3.38591 15.1027 2.65101 15.6705 1.99783L15.6957 1.97058C16.0993 1.52158 16.0993 0.813911 15.7082 0.364831L15.7083 0.364707Z"
                                fill="url(#paint0_linear_203_1283)" />
                            <path
                                d="M15.7083 0.364707C15.2919 -0.0979561 14.6106 -0.125197 14.1691 0.310315C13.4627 1.03156 12.8319 1.73923 12.2137 2.48772C11.5955 3.23621 10.99 3.9847 10.4097 4.77389C9.66538 5.78094 8.94624 6.8424 8.27761 7.91745L5.93108 4.88276C5.57784 4.43368 4.95965 4.32479 4.49289 4.65143C3.98831 5.00522 3.84951 5.74013 4.1775 6.27086C4.1775 6.27086 6.91511 10.7889 7.28096 11.3468C7.5711 11.7823 7.92434 12 8.40376 12C8.92103 12 9.28684 11.7822 9.61492 11.1971C9.65861 11.1167 9.70742 11.0265 9.7608 10.9279C10.3394 9.8593 11.4537 7.80121 12.3778 6.39334C12.8823 5.6176 13.4123 4.86921 13.9673 4.12072C14.5098 3.38591 15.1027 2.65101 15.6705 1.99783L15.6957 1.97058C16.0993 1.52158 16.0993 0.813911 15.7082 0.364831L15.7083 0.364707Z"
                                stroke="url(#paint1_linear_203_1283)" />
                        </g>
                        <defs>
                            <filter id="filter0_d_203_1283" x="0" y="0" width="20" height="20"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix"
                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dy="4" />
                                <feGaussianBlur stdDeviation="2" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix"
                                    result="effect1_dropShadow_203_1283" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_203_1283"
                                    result="shape" />
                            </filter>
                            <linearGradient id="paint0_linear_203_1283" x1="-18" y1="6" x2="45.5"
                                y2="-4" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#B084FF" />
                                <stop offset="1" stop-color="#F38DFA" />
                            </linearGradient>
                            <linearGradient id="paint1_linear_203_1283" x1="13" y1="-1.78814e-07"
                                x2="10" y2="12" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#E5BBFF" stop-opacity="0" />
                                <stop offset="1" stop-color="#A88AC4" />
                            </linearGradient>
                        </defs>
                    </svg>
                    Logo Design
                </span>
            </div>
        </section>





        <section>
            <div class="container mx-auto flex items-center justify-center flex-wrap gap-8">
                <div class="w-80 h-full bg-secondary p-4 rounded-lg">
                    <div class="bg-white rounded-xl w-full h-64"></div>
                    <div class="flex items-center space-x-4 p-4">

                        <div class="flex flex-col gap-2">
                            <p class="text-white">Topo UI redesign</p>
                            <span class="text-gray-400">Sagittis scelerisque nulla cursus in enim consectetur quam.
                                Dictum rna sed consectetur neque.</span>
                            <div>
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-[#2E2E36] text-gray-400">
                                    nodejs </span>
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-[#2E2E36] text-gray-400">
                                    vuejs </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-80 h-full bg-secondary p-4 rounded-lg">
                    <div class="bg-white rounded-xl w-full h-64"></div>
                    <div class="flex items-center space-x-4 p-4">

                        <div class="flex flex-col gap-2">
                            <p class="text-white">Topo UI redesign</p>
                            <span class="text-gray-400">Sagittis scelerisque nulla cursus in enim consectetur quam.
                                Dictum rna sed consectetur neque.</span>
                            <div>
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-[#2E2E36] text-gray-400">
                                    nodejs </span>
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-[#2E2E36] text-gray-400">
                                    vuejs </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-80 h-full bg-secondary p-4 rounded-lg">
                    <div class="bg-white rounded-xl w-full h-64"></div>
                    <div class="flex items-center space-x-4 p-4">

                        <div class="flex flex-col gap-2">
                            <p class="text-white">Topo UI redesign</p>
                            <span class="text-gray-400">Sagittis scelerisque nulla cursus in enim consectetur quam.
                                Dictum rna sed consectetur neque.</span>
                            <div>
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-[#2E2E36] text-gray-400">
                                    nodejs </span>
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-[#2E2E36] text-gray-400">
                                    vuejs </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-80 h-full bg-secondary p-4 rounded-lg">
                    <div class="bg-white rounded-xl w-full h-64"></div>
                    <div class="flex items-center space-x-4 p-4">

                        <div class="flex flex-col gap-2">
                            <p class="text-white">Topo UI redesign</p>
                            <span class="text-gray-400">Sagittis scelerisque nulla cursus in enim consectetur quam.
                                Dictum rna sed consectetur neque.</span>
                            <div>
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-[#2E2E36] text-gray-400">
                                    nodejs </span>
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-[#2E2E36] text-gray-400">
                                    vuejs </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-80 h-full bg-secondary p-4 rounded-lg">
                    <div class="bg-white rounded-xl w-full h-64"></div>
                    <div class="flex items-center space-x-4 p-4">

                        <div class="flex flex-col gap-2">
                            <p class="text-white">Topo UI redesign</p>
                            <span class="text-gray-400">Sagittis scelerisque nulla cursus in enim consectetur quam.
                                Dictum rna sed consectetur neque.</span>
                            <div>
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-[#2E2E36] text-gray-400">
                                    nodejs </span>
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-[#2E2E36] text-gray-400">
                                    vuejs </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-80 h-full bg-secondary p-4 rounded-lg">
                    <div class="bg-white rounded-xl w-full h-64"></div>
                    <div class="flex items-center space-x-4 p-4">

                        <div class="flex flex-col gap-2">
                            <p class="text-white">Topo UI redesign</p>
                            <span class="text-gray-400">Sagittis scelerisque nulla cursus in enim consectetur quam.
                                Dictum rna sed consectetur neque.</span>
                            <div>
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-[#2E2E36] text-gray-400">
                                    nodejs </span>
                                <span
                                    class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-[#2E2E36] text-gray-400">
                                    vuejs </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <section>

            <div class="mt-48 flex flex-col items-center justify-center ">
                <h2 class="text-3xl text-white font-extrabold tracking-tight sm:text-4xl my-8">Technologies</h2>
                <p class="text-gray-500">I’ve had the opportunity to work across all kinds of product</p>

                <div x-data="{}" x-init="$nextTick(() => {
                    let ul = $refs.logos;
                    ul.insertAdjacentHTML('afterend', ul.outerHTML);
                    ul.nextSibling.setAttribute('aria-hidden', 'true');
                })"
                    class="w-full inline-flex flex-nowrap overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-128px),transparent_100%)]">
                    <ul x-ref="logos"
                        class="flex items-center justify-center md:justify-start [&_li]:mx-12 my-10 [&_img]:max-w-none animate-infinite-scroll">
                        <li>
                            <svg width="100px" height="60px" viewBox="0 0 195 60" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <!-- Generator: Sketch 46.2 (44496) - http://www.bohemiancoding.com/sketch -->
                                <title>express</title>
                                <desc>Created with Sketch.</desc>
                                <defs></defs>
                                <g class="stroke-gray-100" id="Page-1" stroke="none" stroke-width="1"
                                    fill="none" fill-rule="evenodd">
                                    <g id="Logos" transform="translate(-31.000000, -286.000000)" fill="#010101">
                                        <g id="express" transform="translate(31.000000, 286.000000)">
                                            <g id="Express-logo">
                                                <path
                                                    d="M1.44630851,46.7486381 L32.1766311,46.7486381 L32.1766311,48.0933852 L0.104373026,48.0933852 L0.104373026,0.0859143969 L31.908244,0.0859143969 L31.908244,1.43066148 L1.44630851,1.43066148 L1.44630851,22.408716 L30.0966311,22.408716 L30.0966311,23.753463 L1.44630851,23.753463 L1.44630851,46.7486381 Z M56.1217923,13.5333852 L57.7321149,13.5333852 L45.1179213,30.208249 L58.9398568,48.0933852 L57.2624375,48.0933852 L44.2456633,31.2168093 L31.2959858,48.0933852 L29.6856633,48.0933852 L43.440502,30.208249 L30.8934052,13.5333852 L32.6379213,13.5333852 L44.2456633,29.1996887 L56.1217923,13.5333852 Z M61.0785664,59.9271595 L59.7366309,59.9271595 L59.7366309,13.5333852 L61.0785664,13.5333852 L61.0785664,23.2155642 L61.2127599,23.2155642 C61.660074,21.6915099 62.3086697,20.2907457 63.1585664,19.0132296 C64.0084631,17.7357135 65.0149047,16.6263082 66.1779212,15.6849805 C67.3409378,14.7436529 68.6716772,14.0152555 70.1701793,13.4997665 C71.6686814,12.9842776 73.2901706,12.726537 75.0346954,12.726537 C77.3159972,12.726537 79.3624283,13.1747815 81.1740503,14.071284 C82.9856722,14.9677866 84.5288826,16.2228713 85.8037277,17.8365759 C87.0785728,19.4502804 88.0514663,21.3553198 88.7224374,23.551751 C89.3934085,25.7481822 89.728889,28.1462905 89.728889,30.7461479 C89.728889,33.1667047 89.4045911,35.4751641 88.7559858,37.6715953 C88.1073804,39.8680265 87.1680349,41.7954781 85.9379212,43.4540078 C84.7078076,45.1125375 83.1757799,46.4236528 81.3417922,47.387393 C79.5078045,48.3511332 77.40546,48.8329961 75.0346954,48.8329961 C71.3667201,48.8329961 68.3473955,47.8804765 65.9766309,45.9754086 C63.6058664,44.0703407 62.0179253,41.5489651 61.2127599,38.4112062 L61.0785664,38.4112062 L61.0785664,59.9271595 Z M75.0346954,47.5554864 C77.40546,47.5554864 79.4295258,47.0512113 81.1069535,46.0426459 C82.7843812,45.0340806 84.1598514,43.7341714 85.2334051,42.1428794 C86.3069589,40.5515874 87.1009294,38.7586092 87.6153406,36.7638911 C88.1297518,34.7691729 88.3869535,32.7632786 88.3869535,30.7461479 C88.3869535,28.5048915 88.1073864,26.386936 87.5482438,24.3922179 C86.9891012,22.3974998 86.1615826,20.6269338 85.0656632,19.0804669 C83.9697437,17.534 82.5830909,16.3125337 80.9056632,15.4160311 C79.2282354,14.5195286 77.2712658,14.071284 75.0346954,14.071284 C72.8428565,14.071284 70.8747042,14.5195286 69.1301793,15.4160311 C67.3856544,16.3125337 65.9207229,17.5227939 64.7353406,19.0468482 C63.5499583,20.5709026 62.6441609,22.3414685 62.0179212,24.3585992 C61.3916815,26.3757299 61.0785664,28.5048915 61.0785664,30.7461479 C61.0785664,36.1699882 62.3533924,40.3274564 64.9030825,43.218677 C67.4527727,46.1098977 70.8299432,47.5554864 75.0346954,47.5554864 Z M95.2224373,48.0933852 L93.8805018,48.0933852 L93.8805018,13.5333852 L95.2224373,13.5333852 L95.2224373,22.0725292 L95.3566308,22.0725292 C95.6697507,20.7726005 96.1617888,19.5511341 96.8327599,18.4080934 C97.503731,17.2650527 98.3983457,16.2677085 99.5166308,15.4160311 C100.634916,14.5643537 101.965655,13.8919869 103.508889,13.3989105 C105.052122,12.9058341 106.852535,12.6817118 108.910179,12.726537 L108.910179,14.071284 C106.539415,13.9368087 104.492984,14.261786 102.770824,15.0462257 C101.048665,15.8306654 99.6284644,16.9064523 98.5101792,18.2736187 C97.3918941,19.640785 96.5643754,21.2208471 96.0275986,23.0138521 C95.4908217,24.8068572 95.2224373,26.6446598 95.2224373,28.5273152 L95.2224373,48.0933852 Z M108.700502,31.0823346 C108.745233,33.4132412 109.0248,35.5760212 109.539211,37.5707393 C110.053623,39.5654574 110.847593,41.3024051 111.921147,42.7816342 C112.994701,44.2608634 114.381353,45.4262992 116.081147,46.2779767 C117.78094,47.1296541 119.86092,47.5554864 122.321147,47.5554864 C125.944391,47.5554864 128.952533,46.6029667 131.345663,44.6978988 C133.738793,42.7928309 135.22609,39.935272 135.807598,36.1251362 L137.149534,36.1251362 C136.657488,40.1593976 135.069547,43.2859033 132.385663,45.5047471 C129.701779,47.7235909 126.391704,48.8329961 122.45534,48.8329961 C119.771456,48.8778212 117.479006,48.4519889 115.577921,47.5554864 C113.676836,46.6589838 112.122443,45.392693 110.914695,43.7565759 C109.706947,42.1204587 108.812333,40.1930072 108.230824,37.9741634 C107.649316,35.7553196 107.358566,33.3684174 107.358566,30.8133852 C107.358566,27.9445771 107.783508,25.3895832 108.633405,23.1483268 C109.483302,20.9070705 110.60157,19.0132373 111.988244,17.4667704 C113.374917,15.9203036 114.985224,14.7436616 116.819211,13.9368093 C118.653199,13.1299571 120.53189,12.726537 122.45534,12.726537 C125.139225,12.726537 127.45404,13.2420182 129.399857,14.2729961 C131.345673,15.303974 132.933614,16.6711199 134.163728,18.3744747 C135.393841,20.0778295 136.288456,22.0276933 136.847598,24.2241245 C137.406741,26.4205557 137.641577,28.7066029 137.552115,31.0823346 L108.700502,31.0823346 Z M136.210179,29.7375875 C136.210179,27.6308066 135.919429,25.6249122 135.337921,23.7198444 C134.756413,21.8147765 133.895346,20.1450655 132.754695,18.7106615 C131.614044,17.2762574 130.193844,16.1444399 128.49405,15.3151751 C126.794257,14.4859103 124.826104,14.071284 122.589534,14.071284 C120.710815,14.071284 118.955134,14.4298797 117.322437,15.1470817 C115.689741,15.8642837 114.258357,16.9064523 113.028244,18.2736187 C111.79813,19.640785 110.802871,21.2880837 110.042437,23.2155642 C109.282003,25.1430447 108.834696,27.3170307 108.700502,29.7375875 L136.210179,29.7375875 Z M163.510179,23.753463 L164.852115,23.753463 C164.852115,19.8985021 163.733846,17.0969737 161.497276,15.3487938 C159.260705,13.6006138 156.219015,12.726537 152.372115,12.726537 C150.225007,12.726537 148.413412,12.9954837 146.937276,13.5333852 C145.461139,14.0712867 144.25341,14.7660658 143.31405,15.6177432 C142.37469,16.4694206 141.703729,17.4107341 141.301147,18.4417121 C140.898564,19.47269 140.697276,20.458828 140.697276,21.4001556 C140.697276,23.282811 141.032756,24.7844302 141.703727,25.9050584 C142.374699,27.0256865 143.425871,27.8997634 144.857276,28.5273152 C145.841367,28.9755664 146.959635,29.3789865 148.212115,29.7375875 C149.464594,30.0961886 150.918343,30.4771964 152.573405,30.8806226 C154.049541,31.2392236 155.50329,31.5978192 156.934695,31.9564202 C158.3661,32.3150212 159.629743,32.7968841 160.725663,33.4020233 C161.821582,34.0071626 162.716197,34.7803844 163.409534,35.7217121 C164.102871,36.6630397 164.449534,37.8957122 164.449534,39.4197665 C164.449534,40.8989957 164.102871,42.1540804 163.409534,43.1850584 C162.716197,44.2160363 161.832765,45.0564948 160.759211,45.7064591 C159.685658,46.3564235 158.48911,46.8270803 157.169534,47.1184436 C155.849957,47.4098069 154.563949,47.5554864 153.311469,47.5554864 C149.240911,47.5554864 146.120943,46.6477912 143.951469,44.8323735 C141.781996,43.0169559 140.697276,40.1593969 140.697276,36.2596109 L139.35534,36.2596109 C139.35534,40.6076482 140.529522,43.7901845 142.877921,45.8073152 C145.22632,47.8244459 148.704134,48.8329961 153.311469,48.8329961 C154.787606,48.8329961 156.274903,48.6649044 157.773405,48.328716 C159.271907,47.9925275 160.613829,47.4434279 161.799211,46.6814008 C162.984594,45.9193736 163.946304,44.9332356 164.684373,43.7229572 C165.422441,42.5126788 165.791469,41.0334718 165.791469,39.2852918 C165.791469,37.6267621 165.467172,36.2820285 164.818566,35.2510506 C164.169961,34.2200727 163.320077,33.368408 162.268889,32.6960311 C161.217701,32.0236542 160.032336,31.4969669 158.71276,31.1159533 C157.393183,30.7349397 156.062444,30.365138 154.720502,30.006537 C152.841783,29.5134606 151.197928,29.0876283 149.788889,28.7290272 C148.379849,28.3704262 147.071475,27.9445939 145.863727,27.4515175 C144.700711,26.9584411 143.772548,26.252456 143.079211,25.3335409 C142.385874,24.4146258 142.039211,23.1035105 142.039211,21.4001556 C142.039211,21.0863798 142.128673,20.5260741 142.307598,19.7192218 C142.486524,18.9123695 142.911466,18.0943232 143.582437,17.2650584 C144.253408,16.4357935 145.282215,15.69619 146.668889,15.0462257 C148.055562,14.3962613 149.956619,14.071284 152.372115,14.071284 C154.027177,14.071284 155.536839,14.2505819 156.901147,14.6091829 C158.265455,14.9677839 159.439636,15.5392957 160.423727,16.3237354 C161.407818,17.1081751 162.168241,18.1055192 162.705018,19.3157977 C163.241795,20.5260761 163.510179,22.0052831 163.510179,23.753463 Z M192.688889,23.753463 L194.030824,23.753463 C194.030824,19.8985021 192.912556,17.0969737 190.675985,15.3487938 C188.439415,13.6006138 185.397725,12.726537 181.550824,12.726537 C179.403717,12.726537 177.592122,12.9954837 176.115985,13.5333852 C174.639849,14.0712867 173.432119,14.7660658 172.49276,15.6177432 C171.5534,16.4694206 170.882439,17.4107341 170.479856,18.4417121 C170.077274,19.47269 169.875985,20.458828 169.875985,21.4001556 C169.875985,23.282811 170.211466,24.7844302 170.882437,25.9050584 C171.553408,27.0256865 172.60458,27.8997634 174.035985,28.5273152 C175.020076,28.9755664 176.138345,29.3789865 177.390824,29.7375875 C178.643303,30.0961886 180.097052,30.4771964 181.752114,30.8806226 C183.228251,31.2392236 184.682,31.5978192 186.113405,31.9564202 C187.54481,32.3150212 188.808453,32.7968841 189.904372,33.4020233 C191.000292,34.0071626 191.894907,34.7803844 192.588243,35.7217121 C193.28158,36.6630397 193.628243,37.8957122 193.628243,39.4197665 C193.628243,40.8989957 193.28158,42.1540804 192.588243,43.1850584 C191.894907,44.2160363 191.011475,45.0564948 189.937921,45.7064591 C188.864367,46.3564235 187.66782,46.8270803 186.348243,47.1184436 C185.028667,47.4098069 183.742658,47.5554864 182.490179,47.5554864 C178.419621,47.5554864 175.299652,46.6477912 173.130179,44.8323735 C170.960706,43.0169559 169.875985,40.1593969 169.875985,36.2596109 L168.53405,36.2596109 C168.53405,40.6076482 169.708232,43.7901845 172.056631,45.8073152 C174.405029,47.8244459 177.882844,48.8329961 182.490179,48.8329961 C183.966315,48.8329961 185.453612,48.6649044 186.952114,48.328716 C188.450617,47.9925275 189.792539,47.4434279 190.977921,46.6814008 C192.163303,45.9193736 193.125014,44.9332356 193.863082,43.7229572 C194.60115,42.5126788 194.970179,41.0334718 194.970179,39.2852918 C194.970179,37.6267621 194.645881,36.2820285 193.997276,35.2510506 C193.34867,34.2200727 192.498786,33.368408 191.447598,32.6960311 C190.39641,32.0236542 189.211046,31.4969669 187.891469,31.1159533 C186.571893,30.7349397 185.241153,30.365138 183.899211,30.006537 C182.020492,29.5134606 180.376638,29.0876283 178.967598,28.7290272 C177.558559,28.3704262 176.250185,27.9445939 175.042437,27.4515175 C173.87942,26.9584411 172.951258,26.252456 172.257921,25.3335409 C171.564584,24.4146258 171.217921,23.1035105 171.217921,21.4001556 C171.217921,21.0863798 171.307382,20.5260741 171.486308,19.7192218 C171.665234,18.9123695 172.090176,18.0943232 172.761147,17.2650584 C173.432118,16.4357935 174.460925,15.69619 175.847598,15.0462257 C177.234272,14.3962613 179.135328,14.071284 181.550824,14.071284 C183.205886,14.071284 184.715548,14.2505819 186.079856,14.6091829 C187.444164,14.9677839 188.618346,15.5392957 189.602437,16.3237354 C190.586528,17.1081751 191.34695,18.1055192 191.883727,19.3157977 C192.420504,20.5260761 192.688889,22.0052831 192.688889,23.753463 Z"
                                                    id="Express"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </li>
                        <li>
                            <img width="70" height="50" src="{{ asset('assets/img/git.svg') }}"
                                alt="html5" />
                        </li>
                        <li>
                            <img width="70" height="50" src="{{ asset('assets/img/github.svg') }}"
                                alt="html5" />
                        </li>
                        <li>
                            <img width="70" height="50" src="{{ asset('assets/img/html5.svg') }}"
                                alt="html5" />
                        </li>
                        <li>
                            <img width="70" height="50" src="{{ asset('assets/img/javascript.svg') }}"
                                alt="javascript" />
                        </li>
                        <li>
                            <img width="100" height="100" src="{{ asset('assets/img/nodejs.svg') }}"
                                alt="nodejs" />
                        </li>
                        <li>
                            <img width="100" height="50" src="{{ asset('assets/img/nuxt.svg') }}"
                                alt="Quora" />
                        </li>
                        <li>
                            <img width="70" height="50" src="{{ asset('assets/img/vue.svg') }}"
                                alt="Sass" />
                        </li>
                        <li>
                            <img width="70" height="50" src="{{ asset('assets/img/tailwindcss.svg') }}"
                                alt="Sass" />
                        </li>
                        <li>
                            <img width="70" height="50" src="{{ asset('assets/img/laravel.svg') }}"
                                alt="Sass" />
                        </li>
                        <li>
                            <img width="70" height="50" src="{{ asset('assets/img/mysql.svg') }}"
                                alt="Sass" />
                        </li>
                        <li>
                            <img width="70" height="50" src="{{ asset('assets/img/docker.svg') }}"
                                alt="Sass" />
                        </li>
                        <li>
                            <img width="70" height="50" src="{{ asset('assets/img/php.svg') }}"
                                alt="Sass" />
                        </li>
                    </ul>
                </div>



                <div x-data="{}" x-init="$nextTick(() => {
                    let ul = $refs.logos;
                    ul.insertAdjacentHTML('afterend', ul.outerHTML);
                    ul.nextSibling.setAttribute('aria-hidden', 'true');
                })"
                    class="w-full inline-flex flex-nowrap overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-128px),transparent_100%)]">
                    <ul x-ref="logos"
                        class="flex items-center justify-center md:justify-start [&_li]:mx-12 my-10 [&_img]:max-w-none animate-reverse-infinite-scroll">
                        <li>
                            <svg width="100px" height="60px" viewBox="0 0 195 60" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <!-- Generator: Sketch 46.2 (44496) - http://www.bohemiancoding.com/sketch -->
                                <title>express</title>
                                <desc>Created with Sketch.</desc>
                                <defs></defs>
                                <g class="stroke-gray-100" id="Page-1" stroke="none" stroke-width="1"
                                    fill="none" fill-rule="evenodd">
                                    <g id="Logos" transform="translate(-31.000000, -286.000000)" fill="#010101">
                                        <g id="express" transform="translate(31.000000, 286.000000)">
                                            <g id="Express-logo">
                                                <path
                                                    d="M1.44630851,46.7486381 L32.1766311,46.7486381 L32.1766311,48.0933852 L0.104373026,48.0933852 L0.104373026,0.0859143969 L31.908244,0.0859143969 L31.908244,1.43066148 L1.44630851,1.43066148 L1.44630851,22.408716 L30.0966311,22.408716 L30.0966311,23.753463 L1.44630851,23.753463 L1.44630851,46.7486381 Z M56.1217923,13.5333852 L57.7321149,13.5333852 L45.1179213,30.208249 L58.9398568,48.0933852 L57.2624375,48.0933852 L44.2456633,31.2168093 L31.2959858,48.0933852 L29.6856633,48.0933852 L43.440502,30.208249 L30.8934052,13.5333852 L32.6379213,13.5333852 L44.2456633,29.1996887 L56.1217923,13.5333852 Z M61.0785664,59.9271595 L59.7366309,59.9271595 L59.7366309,13.5333852 L61.0785664,13.5333852 L61.0785664,23.2155642 L61.2127599,23.2155642 C61.660074,21.6915099 62.3086697,20.2907457 63.1585664,19.0132296 C64.0084631,17.7357135 65.0149047,16.6263082 66.1779212,15.6849805 C67.3409378,14.7436529 68.6716772,14.0152555 70.1701793,13.4997665 C71.6686814,12.9842776 73.2901706,12.726537 75.0346954,12.726537 C77.3159972,12.726537 79.3624283,13.1747815 81.1740503,14.071284 C82.9856722,14.9677866 84.5288826,16.2228713 85.8037277,17.8365759 C87.0785728,19.4502804 88.0514663,21.3553198 88.7224374,23.551751 C89.3934085,25.7481822 89.728889,28.1462905 89.728889,30.7461479 C89.728889,33.1667047 89.4045911,35.4751641 88.7559858,37.6715953 C88.1073804,39.8680265 87.1680349,41.7954781 85.9379212,43.4540078 C84.7078076,45.1125375 83.1757799,46.4236528 81.3417922,47.387393 C79.5078045,48.3511332 77.40546,48.8329961 75.0346954,48.8329961 C71.3667201,48.8329961 68.3473955,47.8804765 65.9766309,45.9754086 C63.6058664,44.0703407 62.0179253,41.5489651 61.2127599,38.4112062 L61.0785664,38.4112062 L61.0785664,59.9271595 Z M75.0346954,47.5554864 C77.40546,47.5554864 79.4295258,47.0512113 81.1069535,46.0426459 C82.7843812,45.0340806 84.1598514,43.7341714 85.2334051,42.1428794 C86.3069589,40.5515874 87.1009294,38.7586092 87.6153406,36.7638911 C88.1297518,34.7691729 88.3869535,32.7632786 88.3869535,30.7461479 C88.3869535,28.5048915 88.1073864,26.386936 87.5482438,24.3922179 C86.9891012,22.3974998 86.1615826,20.6269338 85.0656632,19.0804669 C83.9697437,17.534 82.5830909,16.3125337 80.9056632,15.4160311 C79.2282354,14.5195286 77.2712658,14.071284 75.0346954,14.071284 C72.8428565,14.071284 70.8747042,14.5195286 69.1301793,15.4160311 C67.3856544,16.3125337 65.9207229,17.5227939 64.7353406,19.0468482 C63.5499583,20.5709026 62.6441609,22.3414685 62.0179212,24.3585992 C61.3916815,26.3757299 61.0785664,28.5048915 61.0785664,30.7461479 C61.0785664,36.1699882 62.3533924,40.3274564 64.9030825,43.218677 C67.4527727,46.1098977 70.8299432,47.5554864 75.0346954,47.5554864 Z M95.2224373,48.0933852 L93.8805018,48.0933852 L93.8805018,13.5333852 L95.2224373,13.5333852 L95.2224373,22.0725292 L95.3566308,22.0725292 C95.6697507,20.7726005 96.1617888,19.5511341 96.8327599,18.4080934 C97.503731,17.2650527 98.3983457,16.2677085 99.5166308,15.4160311 C100.634916,14.5643537 101.965655,13.8919869 103.508889,13.3989105 C105.052122,12.9058341 106.852535,12.6817118 108.910179,12.726537 L108.910179,14.071284 C106.539415,13.9368087 104.492984,14.261786 102.770824,15.0462257 C101.048665,15.8306654 99.6284644,16.9064523 98.5101792,18.2736187 C97.3918941,19.640785 96.5643754,21.2208471 96.0275986,23.0138521 C95.4908217,24.8068572 95.2224373,26.6446598 95.2224373,28.5273152 L95.2224373,48.0933852 Z M108.700502,31.0823346 C108.745233,33.4132412 109.0248,35.5760212 109.539211,37.5707393 C110.053623,39.5654574 110.847593,41.3024051 111.921147,42.7816342 C112.994701,44.2608634 114.381353,45.4262992 116.081147,46.2779767 C117.78094,47.1296541 119.86092,47.5554864 122.321147,47.5554864 C125.944391,47.5554864 128.952533,46.6029667 131.345663,44.6978988 C133.738793,42.7928309 135.22609,39.935272 135.807598,36.1251362 L137.149534,36.1251362 C136.657488,40.1593976 135.069547,43.2859033 132.385663,45.5047471 C129.701779,47.7235909 126.391704,48.8329961 122.45534,48.8329961 C119.771456,48.8778212 117.479006,48.4519889 115.577921,47.5554864 C113.676836,46.6589838 112.122443,45.392693 110.914695,43.7565759 C109.706947,42.1204587 108.812333,40.1930072 108.230824,37.9741634 C107.649316,35.7553196 107.358566,33.3684174 107.358566,30.8133852 C107.358566,27.9445771 107.783508,25.3895832 108.633405,23.1483268 C109.483302,20.9070705 110.60157,19.0132373 111.988244,17.4667704 C113.374917,15.9203036 114.985224,14.7436616 116.819211,13.9368093 C118.653199,13.1299571 120.53189,12.726537 122.45534,12.726537 C125.139225,12.726537 127.45404,13.2420182 129.399857,14.2729961 C131.345673,15.303974 132.933614,16.6711199 134.163728,18.3744747 C135.393841,20.0778295 136.288456,22.0276933 136.847598,24.2241245 C137.406741,26.4205557 137.641577,28.7066029 137.552115,31.0823346 L108.700502,31.0823346 Z M136.210179,29.7375875 C136.210179,27.6308066 135.919429,25.6249122 135.337921,23.7198444 C134.756413,21.8147765 133.895346,20.1450655 132.754695,18.7106615 C131.614044,17.2762574 130.193844,16.1444399 128.49405,15.3151751 C126.794257,14.4859103 124.826104,14.071284 122.589534,14.071284 C120.710815,14.071284 118.955134,14.4298797 117.322437,15.1470817 C115.689741,15.8642837 114.258357,16.9064523 113.028244,18.2736187 C111.79813,19.640785 110.802871,21.2880837 110.042437,23.2155642 C109.282003,25.1430447 108.834696,27.3170307 108.700502,29.7375875 L136.210179,29.7375875 Z M163.510179,23.753463 L164.852115,23.753463 C164.852115,19.8985021 163.733846,17.0969737 161.497276,15.3487938 C159.260705,13.6006138 156.219015,12.726537 152.372115,12.726537 C150.225007,12.726537 148.413412,12.9954837 146.937276,13.5333852 C145.461139,14.0712867 144.25341,14.7660658 143.31405,15.6177432 C142.37469,16.4694206 141.703729,17.4107341 141.301147,18.4417121 C140.898564,19.47269 140.697276,20.458828 140.697276,21.4001556 C140.697276,23.282811 141.032756,24.7844302 141.703727,25.9050584 C142.374699,27.0256865 143.425871,27.8997634 144.857276,28.5273152 C145.841367,28.9755664 146.959635,29.3789865 148.212115,29.7375875 C149.464594,30.0961886 150.918343,30.4771964 152.573405,30.8806226 C154.049541,31.2392236 155.50329,31.5978192 156.934695,31.9564202 C158.3661,32.3150212 159.629743,32.7968841 160.725663,33.4020233 C161.821582,34.0071626 162.716197,34.7803844 163.409534,35.7217121 C164.102871,36.6630397 164.449534,37.8957122 164.449534,39.4197665 C164.449534,40.8989957 164.102871,42.1540804 163.409534,43.1850584 C162.716197,44.2160363 161.832765,45.0564948 160.759211,45.7064591 C159.685658,46.3564235 158.48911,46.8270803 157.169534,47.1184436 C155.849957,47.4098069 154.563949,47.5554864 153.311469,47.5554864 C149.240911,47.5554864 146.120943,46.6477912 143.951469,44.8323735 C141.781996,43.0169559 140.697276,40.1593969 140.697276,36.2596109 L139.35534,36.2596109 C139.35534,40.6076482 140.529522,43.7901845 142.877921,45.8073152 C145.22632,47.8244459 148.704134,48.8329961 153.311469,48.8329961 C154.787606,48.8329961 156.274903,48.6649044 157.773405,48.328716 C159.271907,47.9925275 160.613829,47.4434279 161.799211,46.6814008 C162.984594,45.9193736 163.946304,44.9332356 164.684373,43.7229572 C165.422441,42.5126788 165.791469,41.0334718 165.791469,39.2852918 C165.791469,37.6267621 165.467172,36.2820285 164.818566,35.2510506 C164.169961,34.2200727 163.320077,33.368408 162.268889,32.6960311 C161.217701,32.0236542 160.032336,31.4969669 158.71276,31.1159533 C157.393183,30.7349397 156.062444,30.365138 154.720502,30.006537 C152.841783,29.5134606 151.197928,29.0876283 149.788889,28.7290272 C148.379849,28.3704262 147.071475,27.9445939 145.863727,27.4515175 C144.700711,26.9584411 143.772548,26.252456 143.079211,25.3335409 C142.385874,24.4146258 142.039211,23.1035105 142.039211,21.4001556 C142.039211,21.0863798 142.128673,20.5260741 142.307598,19.7192218 C142.486524,18.9123695 142.911466,18.0943232 143.582437,17.2650584 C144.253408,16.4357935 145.282215,15.69619 146.668889,15.0462257 C148.055562,14.3962613 149.956619,14.071284 152.372115,14.071284 C154.027177,14.071284 155.536839,14.2505819 156.901147,14.6091829 C158.265455,14.9677839 159.439636,15.5392957 160.423727,16.3237354 C161.407818,17.1081751 162.168241,18.1055192 162.705018,19.3157977 C163.241795,20.5260761 163.510179,22.0052831 163.510179,23.753463 Z M192.688889,23.753463 L194.030824,23.753463 C194.030824,19.8985021 192.912556,17.0969737 190.675985,15.3487938 C188.439415,13.6006138 185.397725,12.726537 181.550824,12.726537 C179.403717,12.726537 177.592122,12.9954837 176.115985,13.5333852 C174.639849,14.0712867 173.432119,14.7660658 172.49276,15.6177432 C171.5534,16.4694206 170.882439,17.4107341 170.479856,18.4417121 C170.077274,19.47269 169.875985,20.458828 169.875985,21.4001556 C169.875985,23.282811 170.211466,24.7844302 170.882437,25.9050584 C171.553408,27.0256865 172.60458,27.8997634 174.035985,28.5273152 C175.020076,28.9755664 176.138345,29.3789865 177.390824,29.7375875 C178.643303,30.0961886 180.097052,30.4771964 181.752114,30.8806226 C183.228251,31.2392236 184.682,31.5978192 186.113405,31.9564202 C187.54481,32.3150212 188.808453,32.7968841 189.904372,33.4020233 C191.000292,34.0071626 191.894907,34.7803844 192.588243,35.7217121 C193.28158,36.6630397 193.628243,37.8957122 193.628243,39.4197665 C193.628243,40.8989957 193.28158,42.1540804 192.588243,43.1850584 C191.894907,44.2160363 191.011475,45.0564948 189.937921,45.7064591 C188.864367,46.3564235 187.66782,46.8270803 186.348243,47.1184436 C185.028667,47.4098069 183.742658,47.5554864 182.490179,47.5554864 C178.419621,47.5554864 175.299652,46.6477912 173.130179,44.8323735 C170.960706,43.0169559 169.875985,40.1593969 169.875985,36.2596109 L168.53405,36.2596109 C168.53405,40.6076482 169.708232,43.7901845 172.056631,45.8073152 C174.405029,47.8244459 177.882844,48.8329961 182.490179,48.8329961 C183.966315,48.8329961 185.453612,48.6649044 186.952114,48.328716 C188.450617,47.9925275 189.792539,47.4434279 190.977921,46.6814008 C192.163303,45.9193736 193.125014,44.9332356 193.863082,43.7229572 C194.60115,42.5126788 194.970179,41.0334718 194.970179,39.2852918 C194.970179,37.6267621 194.645881,36.2820285 193.997276,35.2510506 C193.34867,34.2200727 192.498786,33.368408 191.447598,32.6960311 C190.39641,32.0236542 189.211046,31.4969669 187.891469,31.1159533 C186.571893,30.7349397 185.241153,30.365138 183.899211,30.006537 C182.020492,29.5134606 180.376638,29.0876283 178.967598,28.7290272 C177.558559,28.3704262 176.250185,27.9445939 175.042437,27.4515175 C173.87942,26.9584411 172.951258,26.252456 172.257921,25.3335409 C171.564584,24.4146258 171.217921,23.1035105 171.217921,21.4001556 C171.217921,21.0863798 171.307382,20.5260741 171.486308,19.7192218 C171.665234,18.9123695 172.090176,18.0943232 172.761147,17.2650584 C173.432118,16.4357935 174.460925,15.69619 175.847598,15.0462257 C177.234272,14.3962613 179.135328,14.071284 181.550824,14.071284 C183.205886,14.071284 184.715548,14.2505819 186.079856,14.6091829 C187.444164,14.9677839 188.618346,15.5392957 189.602437,16.3237354 C190.586528,17.1081751 191.34695,18.1055192 191.883727,19.3157977 C192.420504,20.5260761 192.688889,22.0052831 192.688889,23.753463 Z"
                                                    id="Express"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </li>
                        <li>
                            <img width="70" height="50" src="{{ asset('assets/img/git.svg') }}"
                                alt="html5" />
                        </li>
                        <li>
                            <img width="70" height="50" src="{{ asset('assets/img/github.svg') }}"
                                alt="html5" />
                        </li>
                        <li>
                            <img width="70" height="50" src="{{ asset('assets/img/html5.svg') }}"
                                alt="html5" />
                        </li>
                        <li>
                            <img width="70" height="50" src="{{ asset('assets/img/javascript.svg') }}"
                                alt="javascript" />
                        </li>
                        <li>
                            <img width="100" height="100" src="{{ asset('assets/img/nodejs.svg') }}"
                                alt="nodejs" />
                        </li>
                        <li>
                            <img width="100" height="50" src="{{ asset('assets/img/nuxt.svg') }}"
                                alt="Quora" />
                        </li>
                        <li>
                            <img width="70" height="50" src="{{ asset('assets/img/vue.svg') }}"
                                alt="Sass" />
                        </li>
                        <li>
                            <img width="70" height="50" src="{{ asset('assets/img/tailwindcss.svg') }}"
                                alt="Sass" />
                        </li>
                        <li>
                            <img width="70" height="50" src="{{ asset('assets/img/laravel.svg') }}"
                                alt="Sass" />
                        </li>
                        <li>
                            <img width="70" height="50" src="{{ asset('assets/img/mysql.svg') }}"
                                alt="Sass" />
                        </li>
                        <li>
                            <img width="70" height="50" src="{{ asset('assets/img/docker.svg') }}"
                                alt="Sass" />
                        </li>
                        <li>
                            <img width="70" height="50" src="{{ asset('assets/img/php.svg') }}"
                                alt="Sass" />
                        </li>
                    </ul>
                </div>
            </div>
        </section>



        <section>
            <div class="my-2 flex flex-col items-center justify-center ">
                <h2 class="text-left text-3xl text-white font-extrabold tracking-tight sm:text-4xl my-8">
                    Contact
                </h2>
                <div class="container px-16 w-full flex items-center justify-center gap-x-24">
                    <div class="flex flex-col gap-y-4 w-4/12 bg-secondary h-full px-8 py-10 rounded-lg">
                        <div class=" space-y-2">
                            <label class="text-gray-400" for="name">name</label>
                            <input name="name" class="w-full rounded-md h-10 bg-[#28282F]" type="text">
                        </div>
                        <div class="mt-4 space-y-2">
                            <label class="text-gray-400" for="name">email</label>
                            <input name="email" class="w-full rounded-md h-10 bg-[#28282F]" type="text">
                        </div>
                        <div class="mt-12 space-y-2">
                            <label class="text-gray-400" for="name">message</label>
                            <textarea rows="7" name="email" class="w-full rounded-md bg-[#28282F]"></textarea>
                        </div>
                        <button class="w-full rounded-md h-10 text-white bg-primary" type="button">Send</button>
                    </div>

                    <div class="w-5/12 space-y-6">
                        <div class="flex items-center justify-start p-6 gap-x-6 w-11/12 rounded-3xl h-24">
                            <div class="w-20 h-20 flex items-center justify-center rounded-2xl bg-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="text-primary w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>

                            </div>
                            <div class="flex flex-col">
                                <p class=" text-gray-400 font-bold">Email:</p>
                                <p class=" text-gray-400 text-sm">mamad@gmail.com</p>
                            </div>

                        </div>

                        <div class="flex items-center justify-start p-6 gap-x-6 w-11/12 rounded-3xl h-24">
                            <div class="w-20 h-20 flex items-center justify-center rounded-2xl bg-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="text-primary w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                </svg>


                            </div>
                            <div class="flex flex-col">
                                <p class=" text-gray-400 font-bold">Phone:</p>
                                <p class=" text-gray-400 text-sm">+98 9156640823</p>
                            </div>

                        </div>

                        <div class="flex items-center justify-start p-6 gap-x-6 w-11/12 rounded-3xl h-24">
                            <div class="w-20 h-20 flex items-center justify-center rounded-2xl bg-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="text-primary w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>


                            </div>
                            <div class="flex flex-col">
                                <p class=" text-gray-400 font-bold">Location:</p>
                                <p class=" text-gray-400 text-sm">Iran,South Khorasan,Birjand</p>
                            </div>

                        </div>


                        <div class="flex gap-x-6 p-6">
                            <div
                                class="group hover:bg-primary hover:cursor-pointer w-14 h-14 flex items-center justify-center rounded-full bg-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="group-hover:text-secondary text-primary w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                            </div>
                            <div
                                class="group hover:bg-primary hover:cursor-pointer w-14 h-14 flex items-center justify-center rounded-full bg-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="group-hover:text-secondary text-primary w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                            </div>
                            <div
                                class="group hover:bg-primary hover:cursor-pointer w-14 h-14 flex items-center justify-center rounded-full bg-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="group-hover:text-secondary text-primary w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                            </div>
                            <div
                                class="group hover:bg-primary hover:cursor-pointer w-14 h-14 flex items-center justify-center rounded-full bg-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="group-hover:text-secondary text-primary w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                            </div>
                        </div>

                    </div>

        </section>
    </div>
    @include('theme.sections.footer')
</body>

</html>
