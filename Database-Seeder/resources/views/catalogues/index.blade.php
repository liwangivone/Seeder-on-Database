<!DOCTYPE html>
<html>
<head>
    <title>Library Catalogues</title>
</head>
<body>
    <h1>Library Catalogues</h1>
    <form method="GET" action="{{ route('catalogues.index') }}">
        <label for="type">Category:</label>
        <select name="type" id="type">
            <option value="all">All</option>
            <option value="book">Books</option>
            <option value="cd">CDs</option>
            <option value="newspaper">Newspapers</option>
            <option value="fyp">Final Year Projects</option>
        </select>
        <label for="sort">Sort:</label>
        <select name="sort" id="sort">
            <option value="asc">Ascending</option>
            <option value="desc">Descending</option>
        </select>
        <button type="submit">Filter</button>
    </form>
    <ul>
        @foreach ($catalogues as $item)
            <li>{{ $item->title }}</li>
        @endforeach
    </ul>
</body>
</html>
