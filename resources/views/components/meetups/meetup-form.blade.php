<div class="w-1/2 m-auto">
    <x-card>
        <form action="#" method="post" class="flex flex-col px-4 py-3 space-y-2">
            @csrf

            <label for="title">Meetup Title</label>
            <input class="border border-main px-2 py-2 rounded outline-0" type="text" id="title" name="title">
            @error('title')
            <small class="text-red-500">{{ $message }}</small>
            @enderror

            <label for="image">Meetup Image</label>
            <input class="border border-main px-2 py-2 rounded outline-0" type="url" id="image" name="image">
            @error('image')
            <small class="text-red-500">{{ $message }}</small>
            @enderror

            <label for="address">Address</label>
            <input class="border border-main px-2 py-2 rounded outline-0" type="text" id="address" name="address">
            @error('address')
            <small class="text-red-500">{{ $message }}</small>
            @enderror

            <label for="description">Description</label>
            <textarea class="border border-main px-2 py-2 rounded outline-0" type="text" id="description"
                      rows="5" name="description"></textarea>
            @error('description')
            <small class="text-red-500">{{ $message }}</small>
            @enderror

            <div class="flex justify-end">
                <button class="bg-main px-4 rounded font-bold py-2 text-white outline-0" type="submit">Add Meetup
                </button>
            </div>
        </form>
    </x-card>
</div>
