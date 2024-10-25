<x-app :title="$category->name">
    <main class="container-wide two-cols space-y-8">

        <section>
            <h1 class="text-2xl font-bold mb-4">
                {{ $category->name }} <small class="text-gray-500">{{ trans_choice('tracks.count', $tracks->total()) }}</small>
            </h1>

            @if ($tracks->isEmpty())
            <div class="bg-gray-100 p-4 rounded">
                <p class="text-gray-700">Aucune contribution pour cette catégorie.</p>
            </div>
            @else
            <ol class="chart space-y-4">
                @foreach($tracks as $track)
                <li class="bg-white shadow rounded overflow-hidden">
                    <a href="{{ route('app.tracks.show', ['week' => $track->week->uri, 'track' => $track]) }}" class="flex items-center p-4 hover:bg-gray-50 transition duration-150 ease-in-out">
                        <span class="position mr-4 text-lg font-semibold">{{ $tracks->firstItem() + $loop->index }}.</span>
                        <img src="{{ $track->player_thumbnail_url }}" alt="" class="w-16 h-16 object-cover mr-4">
                        <div class="details flex-grow">
                            <h2 class="text-lg font-semibold truncate">{{ $track->artist }}</h2>
                            <h3 class="text-gray-600 truncate">{{ $track->title }}</h3>

                            <div class="metadata flex mt-2">
                                <div class="metadata-item flex items-center mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1">
                                        <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-sm">{{ $track->user->username }}</span>
                                </div>

                                <div class="metadata-item flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-1">
                                        <path d="M7.493 18.5c-.425 0-.82-.236-.975-.632A7.48 7.48 0 0 1 6 15.125c0-1.75.599-3.358 1.602-4.634.151-.192.373-.309.6-.397.473-.183.89-.514 1.212-.924a9.042 9.042 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75A.75.75 0 0 1 15 2a2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H14.23c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23h-.777ZM2.331 10.727a11.969 11.969 0 0 0-.831 4.398 12 12 0 0 0 .52 3.507C2.28 19.482 3.105 20 3.994 20H4.9c.445 0 .72-.498.523-.898a8.963 8.963 0 0 1-.924-3.977c0-1.708.476-3.305 1.302-4.666.245-.403-.028-.959-.5-.959H4.25c-.832 0-1.612.453-1.918 1.227Z" />
                                    </svg>
                                    <span class="text-sm">{{ trans_choice('tracks.likes', $track->likes_count) }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="ml-4">
                            <svg class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </div>
                    </a>
                </li>
                @endforeach
            </ol>

            <div class="mt-6">
                {{ $tracks->links('components.pagination') }}
            </div>
            @endif
        </section>

        <div>
            {{-- Espace réservé pour un contenu futur --}}
        </div>
    </main>
</x-app>
