<x-layout>
    <x-slot:title>Edit Subject</x-slot:title>
    <div class="form-div">
        <form method="POST" action="/subjects/edit/{{$subject->id}}" id="update-form">
            @csrf
            @method('PATCH')
            <label for="name">Subject name:</label><br>
            <input type="text" id="name" name="name" value="{{$subject->name}}" required><br>
            <div class="button-div">
            <button class="submit-button" type="submit" form="update-form">Update</button>
            <button class="delete-button" type="submit" form="delete-form">Delete</button>
            </div>
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li class="error-list">{{$error}}</li>
                    @endforeach
                </ul>
            @endif
        </form>
        <form method="POST" action="/subjects/edit/{{$subject->id}}" id="delete-form">
                @csrf
                @method('DELETE')
        </form>
    </div>
</x-layout>