<!doctype html>
<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css"
        integrity="sha512-oAvZuuYVzkcTc2dH5z1ZJup5OmSQ000qlfRvuoTTiyTBjwX1faoyearj8KdMq0LgsBTHMrRuMek7s+CxF8yE+w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body x-data="{ open: false }">

    <main class="bg-gray-100 h-screen p-10 lg:p-24 transition ease-in" x-bind:class="{ 'opacity-25': open }">
        <div class="flex flex-col gap-6 lg:max-w-[986px] lg:mx-auto lg:flex-row lg:justify-between lg:items-center">
            <section class="w-[396px] lg:w-full mx-auto flex flex-col gap-5 lg:-mt-16 lg:pr-32">
                <figure class="mx-auto lg:mx-0">
                    <img src="{{ asset('assets/logo-facebook.svg') }}" alt="logo facebook">
                </figure>
                <h1 class="text-[24px] lg:text-[28px] leading-7  text-center lg:text-left">Connect with friends and the
                    world around you on Facebook.</h1>
            </section>
            <section class="w-[396px] shrink-0 flex flex-col gap-6 mx-auto">
                <div class=" bg-white py-5 px-4 shadow-lg rounded-md flex flex-col gap-4">
                    @error('invalid_credentials')
                        <p class="bg-red-400 text-white text-center p-3 rounded">{{ $message }}</p>
                    @enderror
                    <form action="{{ route('login') }}" method="POST" class="flex flex-col gap-4">
                        @csrf
                        <input name="login_email" type="text" placeholder="Email or phone number" id="login_email"
                            class="border border-gray-300 py-4 px-3 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500" value="{{ old('login_email') }}">
                        @error('login_email')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                        <input name="login_password" type="password" placeholder="Password"
                            class="border border-gray-300 py-4 px-3 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-500">
                        <button type="submit" class="bg-blue-500 text-white text-xl py-3 rounded-md font-bold">Log
                            in</button>
                    </form>
                    <form action="#" class="flex flex-col gap-6 items-center">
                        <div class="flex flex-col gap-4">
                            <a class="text-blue-700 text-center hover:cursor-pointer hover:underline">Forgot
                                password?</a>
                            <div class="flex-grow border-t border-gray-200"></div>
                        </div>
                        <button @click.prevent="open = true" type="submit"
                            class="bg-green-500 text-white text-xl rounded-md px-4 py-3 hover:bg-green-600 transition ease-in">Create
                            a new account</button>
                    </form>
                </div>
                <p class="text-base text-center"><span class="font-bold">Create a Page</span> for a celebrity, brand or
                    business.</p>
            </section>
        </div>
    </main>
    <div x-data="{ errors: {} }">
        <form
            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[432px] py-3 px-4 bg-white border hidden"
            :class="{ '!block': open }" x-show="open" {{-- action="{{ route('register') }}" method="POST" --}} action="#" id="form-create"
            @submit.prevent="crearCuenta">
            @csrf
            <img src="{{ asset('assets/close.png') }}" alt="close button" class="absolute top-4 right-3 block w-5"
                @click="open=false">
            <h2 class="text-3xl font-semibold">Sign up</h2>
            <p class="text-gray-500">It’s quick and easy.</p>
            <div class="flex-grow border-t border-gray-300 my-3"></div>

            <div class="flex flex-col gap-2 mb-2" id="container-input-login">
                <div class="flex gap-2">
                    <div class="relative">
                        <input type="text" placeholder="First name" id="first_name" name="first_name"
                            class="border border-gray-300 py-2 px-3 rounded-md w-full focus:outline-none bg-gray-100">
                        <i class="bi bi-exclamation-circle-fill absolute bottom-2 right-2 text-red-700 hidden"></i>
                    </div>
                    <div class="relative">
                        <input type="text" placeholder="Last name" id="last_name" name="last_name"
                            class="border border-gray-300 py-2 px-3 rounded-md w-full focus:outline-none bg-gray-100">
                        <i class="bi bi-exclamation-circle-fill absolute bottom-2 right-2 text-red-700 hidden"></i>
                    </div>
                </div>
                <div class="relative">
                    <input type="text" placeholder="Mobile number or email" id="email_create" name="email_create"
                        class="border border-gray-300 py-2 px-3 rounded-md w-full focus:outline-none bg-gray-100">
                    <i class="bi bi-exclamation-circle-fill absolute bottom-2 right-2 text-red-700 hidden"></i>
                </div>
                <small x-show="errors.email" x-text="errors.email" class="text-red-500"></small>
                <div class="relative">
                    <input type="password" placeholder="New password" name="password_create" id="password_create"
                        class="border border-gray-300 py-2 px-3 rounded-md w-full focus:outline-none bg-gray-100">
                    <i class="bi bi-exclamation-circle-fill absolute bottom-2 right-2 text-red-700 hidden"></i>
                </div>
                <small x-show="errors.password" x-text="errors.password" class="text-red-500"></small>
            </div>

            <div class="flex flex-col gap-1 mb-2">
                <p class="text-gray-600 text-sm">Birthday</p>
                <div class="flex gap-3">
                    <select name="birthday_month" id="birthday_month"
                        class="p-1.5 border border-gray-300 rounded-sm flex-1">
                        <option value="1">Jan</option>
                        <option value="2">Feb</option>
                        <option value="3">Mar</option>
                        <option value="4">Apr</option>
                        <option value="5">May</option>
                        <option value="6">Jun</option>
                        <option value="7">Jul</option>
                        <option value="8">Aug</option>
                        <option value="9">Sep</option>
                        <option value="10">Oct</option>
                        <option value="11">Nov</option>
                        <option value="12">Dec</option>
                    </select>
                    <select name="birthday_day" id="birthday_day"
                        class="p-1.5 border border-gray-300 rounded-sm flex-1">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                    <select name="birthday_year" id="birthday_year"
                        class="p-1.5 border border-gray-300 rounded-sm flex-1">
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                    </select>
                </div>
            </div>

            <div class="flex flex-col gap-1 mb-5">
                <p class="text-gray-600 text-sm">Gender</p>
                <div class="flex gap-3">
                    <div class="flex items-center border border-gray-200 rounded py-2 px-2 flex-1">
                        <label for="gender_female" class="w-full mr-2 text-base  text-gray-900">Female</label>
                        <input id="gender_female" type="radio" value="" name="gender" class="w-4 h-4">
                    </div>
                    <div class="flex items-center border border-gray-200 rounded py-2 px-2 flex-1">
                        <label for="gender_male" class="w-full mr-2 text-base  text-gray-900">Male</label>
                        <input id="gender_male" type="radio" value="" name="gender" class="w-4 h-4">
                    </div>
                    <div class="flex items-center border border-gray-200 rounded py-2 px-2 flex-1">
                        <label for="gender_custom" class="w-full mr-2 text-base  text-gray-900">Custom</label>
                        <input id="gender_custom" type="radio" value="" name="gender" class="w-4 h-4">
                    </div>
                </div>
            </div>
            <button type="submit"
                class="bg-green-500 text-white text-xl rounded-md px-20 py-2 hover:bg-green-600 transition ease-in block mx-auto">Sign
                up</button>
        </form>
    </div>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="{{ asset('assets/index.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/ajax.js') }}"></script> --}}


</body>

</html>

<script>
    function crearCuenta() {
        const email = document.querySelector('#email_create').value;
        const password = document.querySelector('#password_create').value;
        const first_name = document.querySelector('#first_name').value;
        const last_name = document.querySelector('#last_name').value;

        fetch(`/register`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    email,
                    password,
                    first_name,
                    last_name,
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.errors.length !== 0) {
                    this.errors = data.errors;
                } else {
                    window.location.href = "/dashboard";
                }
            })
            .catch(error => console.error('Error:', error));
    }
</script>
