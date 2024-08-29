<x-layout>
    <x-slot:title>Forms</x-slot:title>
    <div class="grid-body">
        @foreach ($forms as $form)
            <div class="grid-div">
                <p class="form-name">{{$form->name}}</p>
                @can('view-info')
                <a href="/forms/{{$form->id}}">View</a>
                @endcan
            </div>
        @endforeach
    </div>
    @can('crud-actions')
    <div class="crud-field">
            <a class="crud-add" href="forms/create">Add</a>
    </div>
    @endcan
</x-layout>