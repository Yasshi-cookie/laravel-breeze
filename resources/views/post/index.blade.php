<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>
    {{-- 投稿カード --}}
    <section class="container mt-16 flex flex-col gap-6 items-center px-8 md:px-14 lg:px-24">
        <h2 class="title-with-overline lg:self-start">投稿一覧</h2>
        <div>
            @foreach ($posts as $post)
                <div class="post-card flex flex-col items-start gap-3 bg-white border border-gray-100 rounded p-4">
                    <div class="post-header font-bold text-xl">{{$post['title']}}</div>
                    <div class="post-body">{{$post['content']}}</div>
                    <div class="post-footer flex flex-row w-full">
                        <div class="author-name">{{$post['author']['name']}}</div>
                        <div class="posted-date ml-auto">{{$post['created_at']}}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</x-app-layout>
