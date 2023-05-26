<h1>Delete All Votes</h1>

<p>Are you sure you want to delete all votes? This action cannot be undone.</p>

<form action="{{ route('votes.destroyAll') }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Confirm Delete</button>
</form>