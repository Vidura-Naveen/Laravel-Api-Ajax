<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Laravel AJAX Search with Age Filter Example</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <h1>Laravel AJAX Search with Age Filter Example</h1>

    <input type="text" id="searchBox" placeholder="Search..." />
    <select id="ageFilter">
        <option value="">All Ages</option>
        @for($i = 1; $i <= 50; $i++)
            <option value="{{ $i }}">{{ $i }}</option>
        @endfor
    </select>
    <button id="fetchData">Fetch Data 1</button>
    <button id="fetchDataTwo">Fetch Data 2</button>

    <div id="dataContainer">
        <!-- Table will be displayed here -->
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            let originalData = [];

            function createTable(data) {
                let table = '<table border="1"><tr><th>ID</th><th>Name</th><th>Email</th><th>Age</th><th>City</th><th>Phone</th></tr>';
                data.forEach(function(item) {
                    table += `<tr>
                        <td>${item.id}</td>
                        <td>${item.name}</td>
                        <td>${item.email}</td>
                        <td>${item.age}</td>
                        <td>${item.city}</td>
                        <td>${item.phone}</td>
                    </tr>`;
                });
                table += '</table>';
                return table;
            }

            function filterData(searchTerm, selectedAge) {
                let filteredData = originalData.filter(function(item) {
                    let matchesSearch = item.name.toLowerCase().includes(searchTerm.toLowerCase()) ||
                                        item.email.toLowerCase().includes(searchTerm.toLowerCase()) ||
                                        item.phone.includes(searchTerm) ||
                                        item.city.toLowerCase().includes(searchTerm.toLowerCase());

                    let matchesAge = selectedAge === "" || item.age == selectedAge;

                    return matchesSearch && matchesAge;
                });
                $('#dataContainer').html(createTable(filteredData));
            }

            $('#searchBox, #ageFilter').on('input change', function() {
                let searchTerm = $('#searchBox').val();
                let selectedAge = $('#ageFilter').val();
                filterData(searchTerm, selectedAge);
            });

            $('#fetchData').click(function() {
                $.ajax({
                    url: '{{ route("get.data") }}',
                    type: 'GET',
                    success: function(response) {
                        originalData = response;
                        $('#dataContainer').html(createTable(response));
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });

            $('#fetchDataTwo').click(function() {
                $.ajax({
                    url: '{{ route("get.data.two") }}',
                    type: 'GET',
                    success: function(response) {
                        originalData = response;
                        $('#dataContainer').html(createTable(response));
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>
</body>
</html>
