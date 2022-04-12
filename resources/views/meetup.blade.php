<x-layout>
    <header class="py-6 bg-main mb-14">
        <x-container>
            <div class="flex justify-between items-center">
                <h1 class="text-3xl text-white font-bold">React Meetups</h1>
                <nav>
                    <ul>
                        <li>
                            <a href="/" class="mr-6 text-2xl text-secondary hover:text-white">All Meetups</a>
                            <a href="/new-meetup" class="text-2xl text-secondary hover:text-white">Add New Meetup</a>
                        </li>
                    </ul>
                </nav>
            </div>

        </x-container>
    </header>

    <x-meetups.meetups :meetups="$meetups"/>

    @if(session()->has('success'))
        <div
            class="fixed bottom-0 left-0 bg-green-600 px-6 transition-transform py-6 text-center font-semibold text-xl w-full text-white">
            {{ session()->get('success') }}
        </div>
    @endif

</x-layout>
