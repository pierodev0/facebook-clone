<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Bootsrap icons -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css"
        integrity="sha512-oAvZuuYVzkcTc2dH5z1ZJup5OmSQ000qlfRvuoTTiyTBjwX1faoyearj8KdMq0LgsBTHMrRuMek7s+CxF8yE+w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <script>
            tailwind.config = {
              theme: {
                extend: {
                  colors: {
                    clifford: '#da373d',
                  },
                  brightness: {
                    25: '.25',
                    175: '1.75',
                  }
                }
              }
            }
          </script>
</head>

<body>
    <!-- Top bar -->
    @auth
    <header class="h-[56px] w-full flex items-center justify-between  py-1.5 px-2 sticky top-0 bg-white shadow-lg">

        <div class="flex gap-2 h-full">
            <a href="{{ route('dashboard') }}" class="h-full">
                <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 48 48">
                    <path fill="#039be5" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z"></path>
                    <path fill="#fff"
                        d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z">
                    </path>
                </svg>
            </a>
            <div class="bg-gray-200 w-72 overflow-hidden py-2 px-4 rounded-full flex gap-2" x-data="{open:false}">
                <label for="" class="text-gray-600 transition ease-out flex items-center" :class="{'hidden':open}"><i
                        class="bi bi-search"></i></label>
                <input type="input"
                    class="border-none placeholder:text-gray-500 pr-10  focus:outline-none block w-full text-gray-900 border bg-gray-200 "
                    placeholder="Busca en facebook" @click="open=true">
            </div>
        </div>

        <div class="lg:flex h-full hidden absolute left-[50%] translate-x-[-50%]">
            <a href="#" class="text-gray-500 rounded-md transition ease-in hover:bg-gray-100 px-10 h-full flex items-center">
                <svg fill="currentColor" viewBox="0 0 24 24" width="25px" height="25px"
                    class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 xxk0z11 xvy4d1p">
                    <path
                        d="M8.99 23H7.93c-1.354 0-2.471 0-3.355-.119-.928-.125-1.747-.396-2.403-1.053-.656-.656-.928-1.475-1.053-2.403C1 18.541 1 17.425 1 16.07v-4.3c0-1.738-.002-2.947.528-4.006.53-1.06 1.497-1.784 2.888-2.826L6.65 3.263c1.114-.835 2.02-1.515 2.815-1.977C10.294.803 11.092.5 12 .5c.908 0 1.707.303 2.537.786.795.462 1.7 1.142 2.815 1.977l2.232 1.675c1.391 1.042 2.359 1.766 2.888 2.826.53 1.059.53 2.268.528 4.006v4.3c0 1.355 0 2.471-.119 3.355-.124.928-.396 1.747-1.052 2.403-.657.657-1.476.928-2.404 1.053-.884.119-2 .119-3.354.119H8.99zM7.8 4.9l-2 1.5C4.15 7.638 3.61 8.074 3.317 8.658 3.025 9.242 3 9.937 3 12v4c0 1.442.002 2.424.101 3.159.095.706.262 1.033.485 1.255.223.223.55.39 1.256.485.734.099 1.716.1 3.158.1V14.5a2.5 2.5 0 0 1 2.5-2.5h3a2.5 2.5 0 0 1 2.5 2.5V21c1.443 0 2.424-.002 3.159-.101.706-.095 1.033-.262 1.255-.485.223-.222.39-.55.485-1.256.099-.734.101-1.716.101-3.158v-4c0-2.063-.025-2.758-.317-3.342-.291-.584-.832-1.02-2.483-2.258l-2-1.5c-1.174-.881-1.987-1.489-2.67-1.886C12.87 2.63 12.425 2.5 12 2.5c-.425 0-.87.13-1.53.514-.682.397-1.495 1.005-2.67 1.886zM14 21v-6.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5V21h4z">
                    </path>
                </svg>
            </a>
            <a class="text-gray-500 rounded-md transition ease-in hover:bg-gray-100 px-10 h-full flex items-center">
                <svg fill="currentColor" viewBox="0 0 24 24" width="25px" height="25px"
                    class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 xxk0z11 xvy4d1p">
                    <path d="M10.996 8.132A1 1 0 0 0 9.5 9v4a1 1 0 0 0 1.496.868l3.5-2a1 1 0 0 0 0-1.736l-3.5-2z">
                    </path>
                    <path
                        d="M14.573 2H9.427c-1.824 0-3.293 0-4.45.155-1.2.162-2.21.507-3.013 1.31C1.162 4.266.817 5.277.655 6.477.5 7.634.5 9.103.5 10.927v.146c0 1.824 0 3.293.155 4.45.162 1.2.507 2.21 1.31 3.012.802.803 1.813 1.148 3.013 1.31C6.134 20 7.603 20 9.427 20h5.146c1.824 0 3.293 0 4.45-.155 1.2-.162 2.21-.507 3.012-1.31.803-.802 1.148-1.813 1.31-3.013.155-1.156.155-2.625.155-4.449v-.146c0-1.824 0-3.293-.155-4.45-.162-1.2-.507-2.21-1.31-3.013-.802-.802-1.813-1.147-3.013-1.309C17.866 2 16.397 2 14.573 2zM3.38 4.879c.369-.37.887-.61 1.865-.741C6.251 4.002 7.586 4 9.5 4h5c1.914 0 3.249.002 4.256.138.978.131 1.496.372 1.865.74.37.37.61.888.742 1.866.135 1.007.137 2.342.137 4.256 0 1.914-.002 3.249-.137 4.256-.132.978-.373 1.496-.742 1.865-.369.37-.887.61-1.865.742-1.007.135-2.342.137-4.256.137h-5c-1.914 0-3.249-.002-4.256-.137-.978-.132-1.496-.373-1.865-.742-.37-.369-.61-.887-.741-1.865C2.502 14.249 2.5 12.914 2.5 11c0-1.914.002-3.249.138-4.256.131-.978.372-1.496.74-1.865zM8 21.5a1 1 0 1 0 0 2h8a1 1 0 1 0 0-2H8z">
                    </path>
                </svg>
            </a>
            <a class="text-gray-500 rounded-md transition ease-in hover:bg-gray-100 px-10 h-full flex items-center">
                <svg fill="currentColor" viewBox="0 0 24 24" width="25px" height="25px"
                    class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 xxk0z11 xvy4d1p">
                    <path
                        d="M1.588 3.227A3.125 3.125 0 0 1 4.58 1h14.84c1.38 0 2.597.905 2.993 2.227l.816 2.719a6.47 6.47 0 0 1 .272 1.854A5.183 5.183 0 0 1 22 11.455v4.615c0 1.355 0 2.471-.119 3.355-.125.928-.396 1.747-1.053 2.403-.656.657-1.475.928-2.403 1.053-.884.12-2 .119-3.354.119H8.929c-1.354 0-2.47 0-3.354-.119-.928-.125-1.747-.396-2.403-1.053-.657-.656-.929-1.475-1.053-2.403-.12-.884-.119-2-.119-3.354V11.5l.001-.045A5.184 5.184 0 0 1 .5 7.8c0-.628.092-1.252.272-1.854l.816-2.719zM10 21h4v-3.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5V21zm6-.002c.918-.005 1.608-.025 2.159-.099.706-.095 1.033-.262 1.255-.485.223-.222.39-.55.485-1.255.099-.735.101-1.716.101-3.159v-3.284a5.195 5.195 0 0 1-1.7.284 5.18 5.18 0 0 1-3.15-1.062A5.18 5.18 0 0 1 12 13a5.18 5.18 0 0 1-3.15-1.062A5.18 5.18 0 0 1 5.7 13a5.2 5.2 0 0 1-1.7-.284V16c0 1.442.002 2.424.1 3.159.096.706.263 1.033.486 1.255.222.223.55.39 1.255.485.551.074 1.24.094 2.159.1V17.5a2.5 2.5 0 0 1 2.5-2.5h3a2.5 2.5 0 0 1 2.5 2.5v3.498zM4.581 3c-.497 0-.935.326-1.078.802l-.815 2.72A4.45 4.45 0 0 0 2.5 7.8a3.2 3.2 0 0 0 5.6 2.117 1 1 0 0 1 1.5 0A3.19 3.19 0 0 0 12 11a3.19 3.19 0 0 0 2.4-1.083 1 1 0 0 1 1.5 0A3.2 3.2 0 0 0 21.5 7.8c0-.434-.063-.865-.188-1.28l-.816-2.72A1.125 1.125 0 0 0 19.42 3H4.58z">
                    </path>
                </svg>
            </a>
            <a class="text-gray-500 rounded-md transition ease-in hover:bg-gray-100 px-10 h-full flex items-center">
                <svg fill="currentColor" viewBox="0 0 24 24" width="25px" height="25px"
                class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 xxk0z11 xvy4d1p">
                <path d="M12 6a4 4 0 1 0 0 8 4 4 0 0 0 0-8zm-2 4a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"></path>
                <path
                    d="M.5 12C.5 5.649 5.649.5 12 .5S23.5 5.649 23.5 12 18.351 23.5 12 23.5.5 18.351.5 12zm2.21-2a9.537 9.537 0 0 0 0 3.993l.3.007A2 2 0 0 0 3 10h-.29zm.663-1.983a4 4 0 0 1 0 7.966 9.523 9.523 0 0 0 1.948 2.773A5.002 5.002 0 0 1 10 15.523h4a5.002 5.002 0 0 1 4.679 3.233 9.523 9.523 0 0 0 1.948-2.773 4 4 0 0 1 0-7.966A9.501 9.501 0 0 0 12 2.5a9.501 9.501 0 0 0-8.627 5.517zM21.5 12a9.55 9.55 0 0 0-.212-2.007l-.265.007H21a2 2 0 0 0-.01 4l.3-.007c.138-.643.21-1.31.21-1.993zM12 21.5a9.455 9.455 0 0 0 4.97-1.402A3 3 0 0 0 14 17.523h-4a3 3 0 0 0-2.97 2.575A9.456 9.456 0 0 0 12 21.5z">
                </path>
            </svg>
            </a>
            <a class="text-gray-500 rounded-md transition ease-in hover:bg-gray-100 px-10 h-full flex items-center">
                <svg fill="currentColor" viewBox="0 0 24 24" width="25px" height="25px"
                class="x1lliihq x1k90msu x2h7rmj x1qfuztq xcza8v6 xxk0z11 xvy4d1p">
                <path
                    d="M8 8a1 1 0 0 1 1 1v2h2a1 1 0 1 1 0 2H9v2a1 1 0 1 1-2 0v-2H5a1 1 0 1 1 0-2h2V9a1 1 0 0 1 1-1zm8 2a1.5 1.5 0 1 0 3 0 1.5 1.5 0 0 0-3 0zm-2 4a1.5 1.5 0 1 0 3 0 1.5 1.5 0 0 0-3 0z">
                </path>
                <path
                    d="M.5 11a7 7 0 0 1 7-7h9a7 7 0 0 1 7 7v2a7 7 0 0 1-7 7h-9a7 7 0 0 1-7-7v-2zm7-5a5 5 0 0 0-5 5v2a5 5 0 0 0 5 5h9a5 5 0 0 0 5-5v-2a5 5 0 0 0-5-5h-9z">
                </path>
            </svg>
            </a>
        </div>

        <div class="relative" x-data="{open:false}" @click.outside="open=false">
            <figure @click="open=!open">
                <img src="{{ asset('assets/perfil.webp') }}" alt="" class=" active:brightness-90 object-cover w-[40px] aspect-square bg-sky-300 rounded-full hover:bg-sky-500 cursor-pointer">
            </figure>

            <div class="absolute right-0 z-10 mt-1 bg-white w-80 origin-top-right rounded-md p-3 shadow-2xl opacity-0 transition duration-75 ease-in" :class="{'!opacity-100':open}">
               <div class="mb-3 p-1 shadow-2xl cursor-pointer">
                <a href="{{ route('posts.index',auth()->user()) }}" class="flex gap-2  items-center  hover:bg-gray-100 p-2 rounded-md">
                    <figure >
                        <img src="{{ asset('assets/perfil.webp') }}" alt="" class="hover:brightness-90 object-cover w-[40px] aspect-square bg-sky-300 rounded-full hover:bg-sky-500 cursor-pointer">
                    </figure>
                    <p class="font-semibold">{{ auth()->user()->fullname()}}</p>
                </a>
               </div>

               <a href="" class="flex items-center gap-2 px-3 py-2 hover:bg-gray-100 rounded-sm">
                <span class="bg-gray-200 w-10 grid place-content-center aspect-square rounded-full"><i class="bi bi-gear-fill"></i></span>
                <p class="font-semibold text-sm">Configuracion y privacidad</p>
               </a>

               <a @click.prevent="logout"
               class="flex items-center gap-2 px-3 py-2 hover:bg-gray-100 rounded-sm cursor-pointer">
                <span class="bg-gray-200 w-10 grid place-content-center aspect-square rounded-full"><i data-visualcompletion="css-img" class="x1b0d499 xep6ejk" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yx/r/V5DQqvdBvFv.png&quot;); background-position: 0px -478px; background-size: 26px 972px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i></span>
                <p class="font-semibold text-sm">Cerrar Sesion</p>
               </a>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            </div>
        </div>


    </header><!-- Top bar -->
    @endauth

    @guest
    <header class="h-[56px] w-full flex items-center justify-between  py-1.5 px-2 sticky top-0 bg-white shadow-lg">
        <div class="flex gap-2 h-full items-center">
            <a href="{{ route('dashboard') }}" class="h-full">
                <svg class="h-full w-full" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 48 48">
                    <path fill="#039be5" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z"></path>
                    <path fill="#fff"
                        d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z">
                    </path>
                </svg>
            </a>
            <h1 class="text-2xl font-bold text-blue-800">Facebbok</h1>
        </div>
        <div class="flex gap-2">
            <a href="{{ route('welcome') }}" class="font-semibold text-blue-700 hover:underline">Crear cuenta</a>
            <a href="{{ route('welcome') }}" class="font-semibold text-blue-700 hover:underline">Iniciar Sesion</a>
        </div>
    </header>
    @endguest

    <main class="bg-gray-100 h-screen w-full" >
        {{ $slot }}
    </main>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
   <script>
    function logout() {
        document.getElementById('logout-form').submit();
        }
    </script>

</body>

</html>
