<div>
    <h1 class="text-xl">Welcome back, {{ $user->name }}</h1>
    <div class="grid grid-cols-3 gap-3 mt-8">
        <div class="p-10 shadow-lg items-center text-center rounded-lg">
            <h1 class="text-bold text-2xl">
                Clients
            </h1>
            <p class="font-extrabold text-4xl">40</p>
        </div>

        <div class="p-10 shadow-lg items-center text-center rounded-lg">
            <h1 class="text-2xl">
                Invoices
            </h1>
            <p class="font-extrabold text-4xl">100</p>
        </div>

        <div class="p-10 shadow-lg items-center text-center rounded-lg ">
            <h1 class="text-bold text-2xl">
                Total Income
            </h1>
            <p class="font-extrabold text-4xl">200,000</p>
        </div>
    </div>

    <div class="grid grid-cols-2 gap-2 mt-4">
        <div class="shadow-md p-4">
            <h1 class="text-2xl font-semibold">Clients</h1>
            @php
                $Clients = []
            @endphp
            @forelse ($Clients as $client)
                
            @empty
                <p class="text-red-500 font-semibold p-4 my-4 bg-red-200 rounded-md">
                    No Clients has been added yet.
                </p>
            @endforelse
        </div>

        <div class="shadow-md p-4">
            <h1 class="text-2xl font-semibold">Invoices</h1>
            @php
                $Invoices = []
            @endphp
            @forelse ($Invoices as $Invoice)
                
            @empty
                <p class="text-red-500 font-semibold p-4 my-4 bg-red-200 rounded-md">
                    No Invoice has been added yet.
                </p>
            @endforelse
        </div>
    </div>
</div>
