<div class="mt-10 max-w-lg mx-auto shadow-lg p-10">

    @if (session()->has('message'))
        <div class="mt-4 text-center text-green-500">
            {{ session('message') }}
        </div>
    @endif
    <h1 class="text-center text-2xl text-blue-700 font-bold my-4">Invoice Generator</h1>
    <form wire:submit.prevent="submit">
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
            <input type="email" wire:model="email" id="email" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@domain.com" required />
        </div>
        <div class="mb-5">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your password</label>
            <input type="password" wire:model="password" id="password" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            <span wire:loading.remove>Login</span>
            <span wire:loading>Login...</span>
        </button>

        <div>
            @if($errors->any())
                <div class="text-red-500">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </div>
        
    </form>      
</div>