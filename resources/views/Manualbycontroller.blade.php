<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Laravel Form Filter Example</title>
</head>
<body>
    <h1>Laravel Form Filter Example</h1>

    <form method="GET" action="{{ route('filter.data') }}">
        <input type="text" name="search" id="searchBox" placeholder="Search..." value="{{ request()->search }}" />

        <select name="age" id="ageFilter">
            <option value="">All Ages</option>
            @for($i = 1; $i <= 50; $i++)
                <option value="{{ $i }}" {{ request()->age == $i ? 'selected' : '' }}>{{ $i }}</option>
            @endfor
        </select>

        <button type="submit">Submit</button>
    </form>

    <div id="dataContainer">
        @if(isset($data) && count($data) > 0)
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>City</th>
                    <th>Phone</th>
                </tr>
                @foreach($data as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['email'] }}</td>
                        <td>{{ $item['age'] }}</td>
                        <td>{{ $item['city'] }}</td>
                        <td>{{ $item['phone'] }}</td>
                    </tr>
                @endforeach
            </table>
        @else
            <p>No data available.</p>
        @endif
    </div>
</body>
</html>
