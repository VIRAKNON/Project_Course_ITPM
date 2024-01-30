<?php
include '../resources/views/root/header.blade.php';
include '../app/Connection/connection.php';
?>
<link rel="stylesheet" href="{{ asset('css/test.css') }}">
</head>

<body>
    <span class="h3">Construction Materials testing Page</span>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011-04-25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td>$170,750</td>
            </tr>
        </tbody>
    </table>
    <?php
        include "../resources/views/root/dataTable.blade.php"
    ?>
</body>
</html>
