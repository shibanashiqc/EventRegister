<div>


    <div class="min-h-screen bg-purple-400 flex justify-center items-center">
        <div class="absolute w-60 h-60 rounded-xl bg-purple-300 -top-5 -left-16 z-0 transform rotate-45 hidden md:block">
        </div>
        <div class="absolute w-48 h-48 rounded-xl bg-purple-300 -bottom-6 -right-10 transform rotate-12 hidden md:block">
        </div>
        <div class="py-12 px-12 bg-white rounded-2xl shadow-xl z-20">
            <div>
                <h1 class="text-3xl font-bold text-center mb-4 cursor-pointer">Register Now 👋</h1>
                <p class="w-80 text-center text-sm mb-8 font-semibold text-gray-700 tracking-wide cursor-pointer">Create an
                    account to enjoy all the services without any ads for free!</p>
            </div>
            <div class="space-y-4">
                <input wire:model="name" type="text" placeholder="Name" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                @error('name')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
                <input wire:model="email" type="email" placeholder="Email Addres" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                @error('email')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
                <input wire:model="age" type="age" placeholder="Age" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                @error('age')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
                <textarea wire:model="address" name="" id="" cols="30" rows="3" placeholder="Address" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none"></textarea>
                @error('address')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
                <input wire:model="phone" type="number" placeholder="Phone Number" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                @error('phone')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
                <input wire:model="instagram" type="text" placeholder="Instagram Link" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                @error('instagram')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
                <input wire:model="facebook" type="text" placeholder="Facebook Link" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                @error('facebook')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
              </div>
                <div class="text-center mt-6">
                    <button wire:click="register" class="py-3 w-64 text-xl text-white bg-purple-400 rounded-2xl">  <i wire:loading wire:target="register" class="fa fa-spinner fa-spin" style="font-size:20px"></i> &nbsp; Register</button>
                </div>
            </div>
            <div class="w-40 h-40 absolute bg-purple-300 rounded-full top-0 right-12 hidden md:block"></div>
            <div
                class="w-20 h-40 absolute bg-purple-300 rounded-full bottom-20 left-10 transform rotate-45 hidden md:block">
            </div>
        </div>



</div>
