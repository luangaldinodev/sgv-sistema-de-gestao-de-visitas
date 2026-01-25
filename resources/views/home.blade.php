<div>
    <h1>{{ auth()->user()->name }}</h1>
    <h1>home</h1>
    <form action="logout" method="post">
        @csrf
        <input type="submit" value="Logout">
    </form>
</div>
