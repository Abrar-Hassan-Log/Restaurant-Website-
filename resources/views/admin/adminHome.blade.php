<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.admincss')
    <style>
       .card-custom {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body>
    <div class="container-scroller">
        @include('admin.navbar')
        <div class="container py-4">
        <h2 class="mb-4">Dashboard</h2>
        <div class="row g-3">
            <div class="col-md-3">
                <div class="card card-custom p-3 text-center">
                    <h5>Total Users</h5>
                    <p class="fs-4">1,234</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-custom p-3 text-center">
                    <h5>Total Orders</h5>
                    <p class="fs-4">567</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-custom p-3 text-center">
                    <h5>Revenue</h5>
                    <p class="fs-4">$12,345</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-custom p-3 text-center">
                    <h5>Pending Issues</h5>
                    <p class="fs-4">23</p>
                </div>
            </div>
        </div>
        
        <div class="card mt-4 p-4 bg-dark">
    <h5 class="text-white">Monthly Sales</h5>
    <table class="table table-bordered table-dark mt-3">
        <thead>
            <tr>
                <th>Month</th>
                <th>Sales ($)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>January</td>
                <td>3000</td>
            </tr>
            <tr>
                <td>February</td>
                <td>4000</td>
            </tr>
            <tr>
                <td>March</td>
                <td>3200</td>
            </tr>
            <tr>
                <td>April</td>
                <td>5000</td>
            </tr>
            <tr>
                <td>May</td>
                <td>4500</td>
            </tr>
            <tr>
                <td>June</td>
                <td>6000</td>
            </tr>
        </tbody>
    </table>
</div>

    </div>
    </div>

    @include('admin.adminscript')
</body>
</html>
</x-app-layout>