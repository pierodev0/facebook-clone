<x-app>
    {{-- Perfil --}}
   <div class="bg-white">
       <div class=" flex flex-col items-center lg:items-start max-w-[1095px] mx-auto">
           <figure class="w-full h-52 lg:h-[400px] bg-black">
                <img src="" alt="">
            </figure>
            <div class="flex w-full flex-col lg:flex-row lg:justify-between lg:px-10">
                <div class="-mt-[90px] flex flex-col lg:flex-row items-center">
                    <figure class="p-1 rounded-full bg-white object-cover overflow-hidden">
                        <img src="{{ asset('assets/perfil.webp') }}" alt="Imagen del perfil" class="rounded-full  w-[180px] h-[180px] ">
                    </figure>
                    <div class="lg:mt-20 lg:ml-10">
                        <h1 class="text-3xl font-bold">{{ $user->fullname() }}</h1>
                        <p class="text-sm text-gray-500 font-semibold text-center">100 amigos</p>
                    </div>
                </div>
                @auth
                <div class="flex flex-col lg:flex-row items-center gap-2 py-10">
                    <div>
                        <button class="bg-blue-600 text-white py-2 px-3 rounded-md font-semibold hover:bg-blue-700 transition duration-75 ease-in"><i class="bi bi-plus"></i>
                            Agregar historia</button>
                            <button class="bg-gray-300 text-black py-2 px-3 rounded-md font-semibold hover:bg-[#cacaca] transition duration-75 ease-in"><i class="bi bi-pencil-fill"></i>
                                Editar perfil</button>
                    </div>
                </div>
                @endauth
            </div>
       </div>

   </div>
   {{-- Muro --}}
   <div class="grid lg:grid-cols-7 py-3 px-2 lg:px-10 gap-3 max-w-[1095px] mx-auto auto-rows-fr">
        <div class="lg:col-span-3 bg-white shadow-lg rounded-md px-3 py-2 flex flex-col gap-2">
            <h3 class="text-xl font-bold">Detalles</h3>
                <p class="text-sm text-center">La vida no tiene sentido, pero vale la pena vivir, siempre que reconozcas que no tiene sentido. 🎲</p>
                @auth
                <button class="bg-gray-200 w-full text-black text-sm py-2 px-3 rounded-md font-semibold hover:bg-gray-300 transition duration-75 ease-in">Editar presentacion</button>
                @endauth
        </div>
        <div class="lg:col-span-4 bg-white shadow-lg rounded-md h-fit">
            <div class="flex gap-2 px-2 py-3">
                <figure>
                    <img src="{{ asset('assets/perfil.webp') }}" alt="" class=" active:brightness-90 object-cover w-[40px] aspect-square bg-sky-300 rounded-full hover:bg-sky-500 cursor-pointer">
                </figure>
                <input type="text" placeholder="¿Que estas pensando?" class="bg-gray-200 w-full hover:brightness-95 outline-none rounded-full py-1 px-3 placeholder:text-gray-500">
            </div>
        </div>
    </div>

    {{-- Modal - Publicacion --}}
    {{-- <div class="overlay absolute top-0 left-0 h-screen w-screen bg-white opacity-50 z-10 ">
    </div>

    <div class="absolute z-20 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[432px] py-3 px-4 bg-white shadow-xl rounded-lg">
        <div class="mb-4">
            <h3 class="text-xl font-bold text-center">Crear publicacion</h3>
            <button x-on:click="alert('Hello World!')">asdsad</button>
        </div>
        <div  type="text" contenteditable="true" class="w-full h-full min-h-[120px] text-xl outline-none">¿Que estas pensando?</div>
    </div> --}}
</x-app>
