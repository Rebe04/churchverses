<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-center sm:pt-0">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="500px" height="500px" viewBox="0 0 1080 1080" enable-background="new 0 0 1080 1080" xml:space="preserve">
                        <g>
                            <g>
                                <path fill="#223462" d="M684.8,395.1L393.9,104.3c-12.7-12.7-33.3-12.7-46,0l-220,217.4c-12.7,12.7-12.7,33.3,0,46l62.9,62.9    l260.4,259.8l233.6-222C705,448.2,705,415.4,684.8,395.1z"/>
                                <path fill="#0593FE" d="M952.2,346.8L566.9,732.9c-20.2,20.2-53.1,20.2-73.3,0L275.6,514.8c20.2,20.2,53.1,20.2,73.3,0    l385.2-386.1c12.7-12.7,33.3-12.7,46,0l172,172C964.9,313.5,964.9,334.1,952.2,346.8z"/>
                                <path fill="#FFB92C" d="M490.6,264.7c8.8,8.8,17.5,16.9,25.4,23.8c10.4,9,11,24.9,1.3,34.6L361.2,479.2    c-23.5,23.5-61.6,23.5-85.2,0v0c-23.5-23.5-23.5-61.6,0-85.2l156.1-156.1c9.7-9.7,25.6-9.1,34.6,1.3    C473.7,247.2,481.7,255.8,490.6,264.7z"/>
                            </g>
                            <g>
                                <g>
                                    <path fill="#FFB92C" d="M25,906.3c0-27.4,21-46.6,49.7-46.6c17.5,0,31.2,6.4,40,17.8l-19,16.9c-5.2-6.6-11.5-10.4-19.5-10.4     c-12.5,0-20.9,8.7-20.9,22.3s8.4,22.3,20.9,22.3c8,0,14.3-3.8,19.5-10.4l19,16.9c-8.8,11.5-22.5,17.8-40,17.8     C46,952.9,25,933.7,25,906.3z"/>
                                    <path fill="#FFB92C" d="M211.2,861.7v89.2h-30.1V918h-27.8v32.9h-30.1v-89.2h30.1v31.6h27.8v-31.6H211.2z"/>
                                    <path fill="#FFB92C" d="M225,910.8v-49H255v48.1c0,13.6,5.2,18.7,13.6,18.7c8.4,0,13.6-5.1,13.6-18.7v-48.1h29.6v49     c0,26.8-16,42.2-43.4,42.2S225,937.5,225,910.8z"/>
                                    <path fill="#FFB92C" d="M363.8,928.5h-8.2v22.4h-30.1v-89.2h42.9c24.8,0,40.6,13,40.6,33.6c0,12.9-6.1,22.5-16.8,28l18.7,27.5     H379L363.8,928.5z M366.6,884.9h-11v20.9h11c8.3,0,12.2-3.9,12.2-10.4C378.9,888.8,374.9,884.9,366.6,884.9z"/>
                                    <path fill="#FFB92C" d="M416.9,906.3c0-27.4,21-46.6,49.7-46.6c17.5,0,31.2,6.4,40,17.8l-19,16.9c-5.2-6.6-11.5-10.4-19.5-10.4     c-12.5,0-20.9,8.7-20.9,22.3s8.4,22.3,20.9,22.3c8,0,14.3-3.8,19.5-10.4l19,16.9c-8.8,11.5-22.5,17.8-40,17.8     C438,952.9,416.9,933.7,416.9,906.3z"/>
                                    <path fill="#FFB92C" d="M603.2,861.7v89.2h-30.1V918h-27.8v32.9h-30.1v-89.2h30.1v31.6h27.8v-31.6H603.2z"/>
                                    <path fill="#223462" d="M713,861.7l-37.7,89.2h-29.6L608,861.7h32.4l21.3,52.1l21.8-52.1H713z"/>
                                    <path fill="#223462" d="M790.1,928.2v22.7h-74.1v-89.2h72.5v22.7h-42.9v10.4h37.7v21.7h-37.7v11.7H790.1z"/>
                                    <path fill="#223462" d="M839.9,928.5h-8.2v22.4h-30.1v-89.2h42.9c24.8,0,40.6,13,40.6,33.6c0,12.9-6.1,22.5-16.8,28l18.7,27.5     H855L839.9,928.5z M842.7,884.9h-11v20.9h11c8.3,0,12.2-3.9,12.2-10.4C854.9,888.8,850.9,884.9,842.7,884.9z"/>
                                    <path fill="#223462" d="M890.9,943.7l9.7-21.9c8.4,5,19.6,8.2,29.4,8.2c8.5,0,11.6-1.8,11.6-4.8c0-11.2-49.3-2.2-49.3-35.4     c0-16.6,13.9-30.1,41.5-30.1c12,0,24.3,2.5,33.6,7.8l-9,21.8c-8.8-4.5-17.1-6.6-24.8-6.6c-8.8,0-11.6,2.5-11.6,5.6     c0,10.7,49.3,1.8,49.3,34.6c0,16.3-13.9,30.1-41.5,30.1C914.9,952.9,899.9,949.2,890.9,943.7z"/>
                                    <path fill="#223462" d="M1054.4,928.2v22.7h-74.1v-89.2h72.5v22.7h-42.9v10.4h37.7v21.7h-37.7v11.7H1054.4z"/>
                                </g>
                            </g>
                        </g>
                        </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-blue dark:text-white">Gestiona</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-blue dark:text-gray-400 text-sm">
                                    Gestiona todos los versiculos creados y publicados, llevando una trasabilidad sobre tus publicaciones de versículos diarios
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-blue dark:text-white">Control</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-blue dark:text-gray-400 text-sm">
                                    No volverás a repetir un versículo, con nuestro sistema de busqueda y validación podrás dejar de preocuparte por buscar en una larga lista de versículos
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-blue dark:text-white">Colabora</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-blue dark:text-gray-400 text-sm">
                                    Tendrás una base de datos independiente para tu iglesia, donde podrás colaborar con el equipo de comunicaciones y alimentar la base de datos con usuarios independientes
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-blue dark:text-white">Flexibilidad</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-blue dark:text-gray-400 text-sm">
                                    Desde tu teléfono o pc tendrás acceso a la plataforma en tiempo real, gestionando tus publicaciones de versículos diarios desde donde quiera que estés.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-end">

                    <div class="ml-4 text-center text-sm text-verses-blue sm:text-right sm:ml-0">
                        Desarrollado con &#128150 por <a class="text-verses-blue-c hover:text-verses-blue-c-h" target="_blank" href="https://estebanbenitez.com">Esteban Benitez</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
