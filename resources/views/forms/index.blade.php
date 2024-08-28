<x-layout>
    <x-slot:title>Forms</x-slot:title>
    <div class="grid-body">
        @foreach ($forms as $form)
            <div class="grid-div">
                <p class="form-name">{{$form->name}}</p>
                <a href="/forms/{{$form->id}}">View</a>
            </div>
        @endforeach
    </div>
</x-layout>