<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between"></div>
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Посты') }}
            </h2>
            <a href="{{route('Vacancy.create')}}" class="px-2 py-2 bg-blue-500 text-white font-medium rounded-sm">Добавить вакансию</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-splade-table :for="$work">
                        @cell('action',$work)
                        <Link href="{{route('Vacancy.destroy',$work->id)}}" class="text-red-500" confirm="Внимание! Пост будет удален" confirm-text="Вы действительно хотите продолжить?" confirm-button = "Удалить" cancel-button="Отмена" method="DELETE" >Удалить</Link>
                        <Link href="{{route('Vacancy.edit',$work->id)}}" class="text-blue-500 ml-2 ">Изменить</Link>
                        @endcell
                    </x-splade-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
