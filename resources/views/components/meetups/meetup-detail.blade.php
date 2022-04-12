<x-layout>
    <x-header/>
    <x-container class="max-w-3xl">
        <x-card>
            <div>
                <img
                    class="rounded-t w-full object-cover"
                    src={{ $meetup->image }}
                        alt={{$meetup->title}}>
            </div>
            <div class="p-5 text-center space-y-3 mb-5">
                <h1 class="text-3xl text-main">{{ $meetup->title }}</h1>
                <p class="italic text-xl text-sm">{{ $meetup->address }}</p>
                <p class="w-1/2 m-auto text-main border border-main p-5 rounded">{{ $meetup->description }}</p>
            </div>
        </x-card>
    </x-container>
</x-layout>
