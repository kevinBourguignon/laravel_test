<h1>Hello World</h1>

@foreach ($lessons as $lesson)
    <h3><a href="{{ route('lesson.view', ['lesson' => $lesson->slug] ) }}">{{ $lesson->title }}</a></h3>
    <p>{{ $lesson->description }}</p>
    <hr>
@endforeach
