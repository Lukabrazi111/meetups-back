<div class="w-1/2 m-auto">
    <x-card>
        <form action="#" method="post" class="flex flex-col px-4 py-3 space-y-2">
            <label for="title">Meetup Title</label>
            <input class="border border-main px-2 py-2 rounded outline-0" type="text" id="title">

            <label for="image">Meetup Image</label>
            <input class="border border-main px-2 py-2 rounded outline-0" type="url" id="image">

            <label for="address">Address</label>
            <input class="border border-main px-2 py-2 rounded outline-0" type="text" id="address">

            <label for="description">Description</label>
            <textarea class="border border-main px-2 py-2 rounded outline-0" type="text" id="description"
                      rows="5"></textarea>

            <div class="flex justify-end">
                <button class="bg-main px-4 rounded font-bold py-2 text-white outline-0" type="submit">Add Meetup
                </button>
            </div>
        </form>
    </x-card>
</div>
