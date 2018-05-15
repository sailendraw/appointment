@if (count($errors) > 0)
    <div class="alert alert-danger">
        There were some problems with your input.<br><br>
        <ul>
            @foreach (array_unique($errors->all()) as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
