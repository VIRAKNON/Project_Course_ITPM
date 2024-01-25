<?php
include '../resources/views/root/header.blade.php';
?>
<link rel="stylesheet" href="{{ asset('css/test.css') }}">
</head>

<body>
    <span class="h3">Construction Materials testing Page</span>
    {{-- <table>
        <thead>
            <tr>
                <th>asdfa</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <script>
        fetch('http://localhost/API/brand/get_brand.php')
            .then(result => result.json())
            .then(data => {
                let row = '';
                let No = 1;
                for (let i in data) {
                    row += `
                <tr>
                    <td>${No++}</td>
                    <td>${data[i]['id']}</td>
                    <td>${data[i]['b_name']}</td>
                    <td>${data[i]['b_namekh']}</td>
                    <td>${data[i]['category']}</td>
                    <td>${data[i]['categorykh']}</td>
                    <td>${data[i]['des']}</td>
                    <td>${data[i]['st']}</td>
                </tr>
                `;
                }
                document.querySelector('tbody').innerHTML = row;
            })
    </script> --}}
</body>

</html>
