<div class="w-1/2 m-auto">
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-white">
  <body class="h-full">
  ```
-->
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            {{-- <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company"
                class="mx-auto h-10 w-auto" /> --}}
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Create new user!</h2>
        </div>

        @if (session()->has('message'))
            <div class="p-4 mt-4 text-xs text-green-700 rounded-base bg-green-400/20 rounded-2xl" role="alert">
                {{ session('message') }}
            </div>
        @endif


        <div class="mt-4">
            <form wire:submit.prevent="createNewUser" action="#" method="POST" class="space-y-2">

                <div>
                    <label for="name" class="block text-sm/6 font-medium text-gray-900">Name</label>
                    <div class="mt-2">
                        <input wire:model='name' id="name" type="name" name="name" required
                            autocomplete="name" placeholder="Masukkan nama anda!" autofocus
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                    </div>
                    @error('name')
                        <p class="text-xs mt-1 text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input wire:model='email' id="email" type="email" name="email" autocomplete="email"
                            placeholder="example@example.com"
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                    </div>
                    @error('email')
                        <p class="text-xs mt-1 text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                    </div>
                    <div class="mt-2">
                        <input wire:model='password' id="password" type="password" name="password" required
                            autocomplete="current-password" placeholder="Password anda"
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                    </div>
                    @error('password')
                        <p class="text-xs mt-1 text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <button wire:click.prevent="createNewUser"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
                        in</button>
                </div>
            </form>
        </div>
    </div>


    <hr class="border my-5">
    <h2 class="text-2xl  font-semibold  mb-2">Users List</h2>
    <ul class="list-disc">
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
</div>
