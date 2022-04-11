<x-layout>
    <header class="py-6 bg-main mb-14">
        <x-container>
            <div class="flex justify-between items-center">
                <h1 class="text-3xl text-white font-bold">React Meetups</h1>
                <nav>
                    <ul>
                        <li>
                            <a href="#" class="mr-6 text-2xl text-secondary hover:text-white">All Meetups</a>
                            <a href="#" class="text-2xl text-secondary hover:text-white">Add New Meetup</a>
                        </li>
                    </ul>
                </nav>
            </div>

        </x-container>
    </header>

    <x-meetups.meetups/>
</x-layout>
