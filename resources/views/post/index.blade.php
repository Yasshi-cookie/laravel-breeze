<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Posts') }}
        </h2>
    </x-slot>
    {{-- 投稿カード --}}
    <section
        class="container mt-16 flex flex-col items-center gap-6 px-8 md:px-14 lg:px-24"
    >
        <h2 class="title-with-overline lg:self-start">投稿一覧</h2>
        <div>
            @foreach ($posts as $post)
                <div
                    class="post-card flex flex-col items-start gap-3 rounded border border-gray-100 bg-white p-4"
                >
                    <div class="post-header text-xl font-bold">
                        {{ $post['title'] }}
                    </div>
                    <div class="post-body">{{ $post['content'] }}</div>
                    <div class="post-footer flex w-full flex-row">
                        <div class="author-name">
                            {{ $post['author']['name'] }}
                        </div>
                        <div class="posted-date ml-auto">
                            {{ $post['created_at'] }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</x-app-layout>
