<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <a class="btn btn-warning mb-3" href="{{ route('lecturer.index') }}" role="button">Back</a>

    {{-- lecturer --}}
    <h6> Data Lecturer </h6>
    <ul class="list-group mb-3">
        <li class="list-group-item">Name: {{ $lecturer->name }}</li>
        <li class="list-group-item">
            Created At: {{ $lecturer->created_at->format('d F Y H:i:s') }}
        </li>
        <li class="list-group-item">
            Last Update: {{ $lecturer->updated_at->diffForHumans() }}
        </li>
    </ul>



</x-app>
