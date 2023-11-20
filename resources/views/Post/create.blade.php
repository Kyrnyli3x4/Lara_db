<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Добавление постов') }}
            </h2>
            <a href="{{route('Post.index')}}" class="px-2 py-2 bg-blue-500 text-white font-medium rounded-sm">{{ __('Вернуться назад') }}</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-splade-form action="{{ route('Post.store') }}">
                        <x-splade-input name="PostName" label="Заголовок поста" placeholder="php - лучший язык программирования "/>
                        <x-splade-input class="py-7" name="PostSubname" label="Описание поста" placeholder="А так же другие шутки и анекдоты о мире IT"/>
                        <x-splade-input class="py-7" name="PostBackground" label="Фон поста" />
                        <x-splade-textarea class="py-1" name="PostContent" label="Контент поста" placeholder="Это история началась с того когда я начал кодить на php"/>
                        <x-splade-submit class="mt-4 bg-violet-700 text-white" label="Сохранить" />
                    </x-splade-form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
