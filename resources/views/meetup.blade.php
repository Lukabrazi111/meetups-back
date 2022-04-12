<x-layout>
    <x-header/>

    <x-meetups.meetups :meetups="$meetups"/>

    @if(session()->has('success'))
        <div
            class="fixed bottom-0 left-0 bg-green-600 px-6 transition-transform py-6 text-center font-semibold text-xl w-full text-white">
            {{ session()->get('success') }}
        </div>
    @endif

</x-layout>
