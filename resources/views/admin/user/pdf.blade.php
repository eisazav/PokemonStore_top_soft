<div >
    <div>
        <h2>Manage Users</h2>
    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Total</th>
                    <th scope="col">Created at</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $user)
                <tr>
                    <td>{{ $user->getId() }}</td>
                    <td>{{ $user->getName() }}</td>
                    <td>{{ $user->getEmail() }}</td>
                    <td>{{ $user->getRole() }}</td>
                    <td>{{ $user->getTotal() }}</td>
                    <td>{{ $user->getCreatedAt() }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>