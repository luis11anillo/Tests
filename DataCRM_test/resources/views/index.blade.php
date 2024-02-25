<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {!! SEO::generate() !!}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Con esta guía completa de gestión comercial descubre claves, estrategias y técnicas para impulsar tus ventas y alcanzar el éxito empresarial.">  
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">

        <div class="flex flex-col sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter selection:bg-red-500 selection:text-white">
            <!-- Navbar -->
            <nav class="bg-gradient-to-r from-[#41C3AC] to-[#3D69AA] text-white flex justify-between items-center w-full px-6 lg:px-64 fixed top-0 z-10">
                <a href="https://www.datacrm.com/">
                    <picture>
                        <img src="https://www.datacrm.com/front/images/Logodata_Horizontalblanco180x58.png" alt="DataCRM" class="py-1">
                    </picture>
                </a>
                <ul class="hidden lg:flex space-x-4 mr-20">
                    <li><a href="https://www.datacrm.com/">
                        <svg xmlns="http://www.w3.org/2000/svg" height="20" width="22.5" viewBox="0 0 576 512"><path fill="#ffffff" d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
                    </a></li>
                    <li><a href="https://www.datacrm.com/software-crm/" class="font-bold">Software CRM</a></li>
                    <li><a href="https://www.datacrm.com/precios/" class="font-bold">Planes</a></li>
                    <li><a href="https://www.datacrm.com/contactenos/" class="font-bold">Cont&aacute;ctanos</a></li>
                    <li><a href="https://www.datacrm.com/" class="bg-white rounded-full py-1 px-2 text-[#FF884D] hover:text-[#41C3AC] font-bold">Prueba Gratis</a></li>
                    <li><a href="https://www.datacrm.com/iniciar-sesion/" class="flex items-center font-bold px-2  rounded-full hover:bg-[#41C3AC] hover:bg-opacity-50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-1" height="15" width="16" viewBox="0 0 448 512"><path fill="#ffffff" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                        Acceder
                    </a></li>
                </ul>

                <!-- hamburguesa -->
                <div class="lg:hidden">
                    <button id="menu-toggle" class="text-white focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 448 512">
                            <path fill="#ffffff" d="M0 448h448v-64H0zm0-128h448v-64H0zm0-128h448V128H0z"/>
                        </svg>
                    </button>
                </div>
            </nav>

            <!-- Main content -->
            <main class="flex-grow lg:p-8 w-8/12 justify-center mt-16 sm:pt-8">
                <div class="flex justify-between pb-4 items-center">
                    <picture>
                        <img src="https://www.datacrm.com/front/images/blog2/logo-blog.webp" alt="Blog DataCRM: Tácticas y estrategias para tu empresa" class="lg:h-5 sm:h-3">
                    </picture>
                    <div class="flex items-center"> 
                        @include('components.select_category')
                        @include('components.input_search')
                    </div>
                </div>

                <hr class="border-gray-400">

                <div class="lg:flex pt-4 md:flex">
                    <div class="w-2/3 px-8 ">
                        {{-- Main_content --}}
                        @include('components.main_content')
                    </div>

                    <div class="w-1/3">
                        {{-- Side var --}}
                        <div class="bg-white px-8 py-12 rounded-lg shadow-2xl shadow-gray-500/20 flex flex-col">
                           <h2 class="text-center font-bold text-2xl pb-4">Conoce m&aacute;s sobre nuestro contenido</h2>
                           <hr class="border-gray-400">
                           <ul class="pt-4">
                                <li class="flex justify-between items-center hover:bg-[#41C3AC] hover:bg-opacity-60 rounded-md py-2 pl-2 pr-4"><a href="https://www.datacrm.com/blog/category/software-crm/" class="font-bold text-gray-600">Sofware CRM</a><svg xmlns="http://www.w3.org/2000/svg" height="14" width="8.75" viewBox="0 0 320 512"><path fill="#4b5563" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"/></svg></li>
                                <li class="flex justify-between items-center hover:bg-[#41C3AC] hover:bg-opacity-60 rounded-md py-2 pl-2 pr-4"><a href="https://www.datacrm.com/blog/category/ventas/" class="font-bold text-gray-600">Ventas</a><svg xmlns="http://www.w3.org/2000/svg" height="14" width="8.75" viewBox="0 0 320 512"><path fill="#4b5563" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"/></svg></li>
                                <li class="flex justify-between items-center hover:bg-[#41C3AC] hover:bg-opacity-60 rounded-md py-2 pl-2 pr-4"><a href="https://www.datacrm.com/blog/category/datacrm/" class="font-bold text-gray-600">DataCRM</a><svg xmlns="http://www.w3.org/2000/svg" height="14" width="8.75" viewBox="0 0 320 512"><path fill="#4b5563" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"/></svg></li>
                                <li class="flex justify-between items-center hover:bg-[#41C3AC] hover:bg-opacity-60 rounded-md py-2 pl-2 pr-4"><a href="https://www.datacrm.com/blog/category/marketing/" class="font-bold text-gray-600">Marketing</a><svg xmlns="http://www.w3.org/2000/svg" height="14" width="8.75" viewBox="0 0 320 512"><path fill="#4b5563" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"/></svg></li>
                                <li class="flex justify-between items-center hover:bg-[#41C3AC] hover:bg-opacity-60 rounded-md py-2 pl-2 pr-4"><a href="https://www.datacrm.com/blog/category/servicio-al-cliente/" class="font-bold text-gray-600">Servicio al Cliente</a><svg xmlns="http://www.w3.org/2000/svg" height="14" width="8.75" viewBox="0 0 320 512"><path fill="#4b5563" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"/></svg></li>
                           </ul>
                        </div>
                    </div>
                </div>

                {{-- Boxes --}}
                <div class="py-14">
                    <p class="text-center text-2xl font-bold pb-4 text-[#41C3AC]">Tambi&eacute;n te puede gustar este contenido</p>
                    <div class="flex space-x-4 justify-center">
                        @include('components.content_box')
                    </div>
                </div>
            </main>

            <!-- Footer -->
            <footer class="bg-gradient-to-r from-[#41C3AC] to-[#3D69AA] text-white py-4 px-6 text-center lg:w-full">
                <div class="lg:w-8/12 mx-auto mt-8">
                    <div class="flex flex-wrap pb-6">
                        <ul class="w-1/6 text-left">
                            <picture>
                                <img src="https://www.datacrm.com/front/images/Logodata_Horizontalblanco180x58.png" alt="DataCRM" class="h-11 mb-4">
                            </picture>
                            <li><a href="https://www.datacrm.com/" class="hover:underline">Nosotros</a></li>
                            <li><a href="https://www.datacrm.com/" class="hover:underline">Cont&aacute;ctanos</a></li>
                            <li><a href="https://www.datacrm.com/" class="hover:underline">Partners</a></li>
                        </ul>
                        <ul class="w-1/6 text-left">
                            <p class="font-bold text-xl pt-2 pb-6">Producto</p>
                            <li><a href="https://www.datacrm.com/" class="hover:underline">CRM por sector</a></li>
                            <li><a href="https://www.datacrm.com/" class="hover:underline">Planes</a></li>
                            <li><a href="https://www.datacrm.com/" class="hover:underline">Funciones</a></li>
                            <li><a href="https://www.datacrm.com/" class="hover:underline">Cotizaciones</a></li>
                            <li><a href="https://www.datacrm.com/" class="hover:underline">CRM M&oacute;vil</a></li>
                            <li><a href="https://www.datacrm.com/" class="hover:underline">API DataCRM</a></li>
                        </ul>
                        <ul class="w-1/6 text-left">
                            <p class="font-bold text-xl pt-2 pb-6">Pa&iacute;ses</p>
                            <li><a href="https://www.datacrm.com/" class="hover:underline">CRM Colombia</a></li>
                            <li><a href="https://www.datacrm.com/" class="hover:underline">CRM México</a></li>
                            <li><a href="https://www.datacrm.com/" class="hover:underline">CRM Chile</a></li>
                            <li><a href="https://www.datacrm.com/" class="hover:underline">CRM Costa Rica</a></li>
                            <li><a href="https://www.datacrm.com/" class="hover:underline">CRM Ecuador</a></li>
                            <li><a href="https://www.datacrm.com/" class="hover:underline">CRM Panam&aacute;</a></li>
                            <li><a href="https://www.datacrm.com/" class="hover:underline">CRM Per&uacute;</a></li>
                            <li><a href="https://www.datacrm.com/" class="hover:underline">CRM Espa&ntilde;a</a></li>
                        </ul>
                        <ul class="w-1/6 text-left">
                            <p class="font-bold text-xl pt-2 pb-6">Capac&iacute;tate</p>
                            <li><a href="https://www.datacrm.com/" class="hover:underline">Centro de Ayuda</a></li>
                            <li><a href="https://www.datacrm.com/" class="hover:underline">U. DataCRM</a></li>
                            <li><a href="https://www.datacrm.com/" class="hover:underline">Blog</a></li>
                        </ul>
                        <div class="w-2/6">
                            <p class="font-bold text-xl">Apps Disponibles</p>
                            @include('components.download_buttons')
                        </div>
                    </div>
                    <hr class="border-t-2 border-white">
                    <div class="flex pt-12 items-center space-x-7 justify-center">
                        <picture>
                            <img src="https://www.datacrm.com/front/images/Logodata_Horizontalblanco180x58.png" alt="DataCRM" class="h-11">
                        </picture>
                        <p> DataCRM Soluciones S.A.S/ 
                            <a href="https://www.datacrm.com/" class="hover:underline">Pol&iacute;tica de Protecci&oacute;n de Datos</a> /
                            <a href="https://www.datacrm.com/" class="hover:underline">Términos y Condiciones</a> /
                            <a href="https://www.datacrm.com/" class="hover:underline">ANS</a>
                        </p>
                        <div class="flex space-x-3 pl-8">
                            <a href="https://www.datacrm.com/">
                                <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28" viewBox="0 0 448 512"><path fill="#ffffff" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64h98.2V334.2H109.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H255V480H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"/></svg>
                            </a>
                            <a href="https://www.datacrm.com/">
                                <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28" viewBox="0 0 448 512"><path fill="#ffffff" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                            </a>
                            <a href="https://www.datacrm.com/">
                                <svg xmlns="http://www.w3.org/2000/svg" height="28" width="28" viewBox="0 0 448 512"><path fill="#ffffff" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg>
                            </a>
                            <a href="https://www.datacrm.com/">
                                <svg xmlns="http://www.w3.org/2000/svg" height="32" width="36" viewBox="0 0 576 512"><path fill="#ffffff" d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    
    </body>
</html>
