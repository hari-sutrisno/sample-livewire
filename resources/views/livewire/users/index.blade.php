<div>
    <table class="table">
        <thead>
            <tr>
                <td class="row">#</td>
                <td>Name</td>
                <td>Email</td>
                <td>Joined</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr wire:key="{{ $user->id }}">
                    <td class="row">{{ $loop->index + $users->firstItem() }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('d F, Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <x-pagination :items="$users" />
</div>
