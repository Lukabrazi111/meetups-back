<main class="w-1/2 m-auto pb-5">
    <x-container>
        @foreach($meetups as $meetup)
            <x-card class="mb-5">
                <div class="w-full h-80 overflow-hidden">
                    <img
                        class="object-cover rounded-t-2xl w-full h-full"
                        src={{ $meetup->image }}
                            alt={{ $meetup->title }}>
                </div>

                <div class="text-center space-y-4 py-4">
                    <h1 class="font-bold text-gray-700">{{ $meetup->title }}</h1>
                    <p class="italic">{{ $meetup->address }}</p>

                    <button type="button"
                            class="px-4 py-2 border border-main rounded transition-colors hover:text-white hover:bg-main">
                        Show Details
                    </button>
                </div>
            </x-card>
        @endforeach
    </x-container>
</main>
