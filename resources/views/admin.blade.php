
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Government Services</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #ffffff;
            color: #26352b;
        }

        .layout {
            display: flex;
            min-height: 100vh;
        }

        /* LEFT SIDEBAR */
        .sidebar {
            width: 250px;
            min-height: 100vh;
            background: #103d29;
            color: white;
            padding: 30px 20px;
            flex-shrink: 0;
        }

        .brand {
            font-size: 21px;
            font-weight: bold;
            margin-bottom: 45px;
            line-height: 1.5;
        }

        .sidebar h4 {
            color: #a9c7b5;
            font-size: 12px;
            text-transform: uppercase;
            margin: 25px 12px 12px;
            letter-spacing: 1px;
        }

        .sidebar a {
            display: block;
            padding: 13px 14px;
            color: #e4eee7;
            text-decoration: none;
            border-radius: 7px;
            margin-bottom: 7px;
            font-size: 14px;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: #246343;
            color: white;
        }

        /* RIGHT WORKING AREA */
        .content {
            flex: 1;
            min-width: 0;
            padding: 35px 40px;
            background: #ffffff;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            padding-bottom: 25px;
            border-bottom: 1px solid #e8eee9;
            margin-bottom: 30px;
        }

        .topbar h1 {
            font-size: 26px;
            margin: 0 0 7px;
            color: #183c2a;
        }

        .topbar p {
            color: #7a867e;
            margin: 0;
            font-size: 14px;
        }

        .admin-label {
            background: #edf5ef;
            color: #176b3a;
            padding: 10px 16px;
            border-radius: 7px;
            font-size: 13px;
            font-weight: bold;
        }

        h2 {
            font-size: 20px;
            margin-bottom: 20px;
            color: #243c2e;
        }

        /* MESSAGES */
        .success {
            background: #e7f5eb;
            color: #17652e;
            padding: 13px;
            border-radius: 7px;
            margin-bottom: 20px;
        }

        /* STATISTICS */
        .stats {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 18px;
            margin-bottom: 35px;
        }

        .card {
            background: #ffffff;
            border: 1px solid #e7eee9;
            border-radius: 10px;
            padding: 22px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.04);
        }

        .card p {
            color: #758078;
            font-size: 14px;
            margin: 0 0 15px;
        }

        .number {
            color: #145c32;
            font-size: 34px;
            font-weight: bold;
        }

        .card:nth-child(2) {
            border-top: 4px solid #e4a33b;
        }

        .card:nth-child(3) {
            border-top: 4px solid #4789c8;
        }

        .card:nth-child(4) {
            border-top: 4px solid #27965c;
        }

        .card:nth-child(1) {
            border-top: 4px solid #145c32;
        }

        /* REQUEST TABLE */
        .table-box {
            background: #ffffff;
            border: 1px solid #e8eee9;
            border-radius: 10px;
            padding: 24px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.03);
        }

        .table-box h2 {
            margin-top: 0;
        }

        .table-scroll {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 950px;
        }

        th, td {
            padding: 15px 12px;
            border-bottom: 1px solid #edf0ed;
            text-align: left;
            font-size: 13px;
            vertical-align: top;
        }

        th {
            background: #f5f8f5;
            color: #385343;
            font-size: 12px;
            text-transform: uppercase;
        }

        td {
            color: #4d5b51;
        }

        select {
            padding: 9px;
            border: 1px solid #d9e2db;
            border-radius: 5px;
            background: white;
        }

        button {
            padding: 10px 13px;
            background: #176b3a;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 5px;
        }

        button:hover {
            background: #104d2b;
        }

        .empty {
            text-align: center;
            color: #7a867e;
            padding: 30px;
        }

        footer {
            margin-top: 35px;
            text-align: center;
            color: #8a948d;
            font-size: 13px;
        }

        /* RESPONSIVE */
        @media (max-width: 1000px) {
            .stats {
                grid-template-columns: repeat(2, 1fr);
            }

            .content {
                padding: 25px 20px;
            }
        }

        @media (max-width: 650px) {
            .layout {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                min-height: auto;
                padding: 20px;
            }

            .brand {
                margin-bottom: 15px;
            }

            .sidebar h4 {
                margin-top: 15px;
            }

            .content {
                padding: 22px 15px;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .topbar {
                align-items: flex-start;
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

<div class="layout">

    <aside class="sidebar">

        <div class="brand">
            🇰🇪 Government<br>
            Services
        </div>

        <h4>Main Menu</h4>

        <a href="{{ route('admin.dashboard') }}" class="active">
            ▦ Dashboard
        </a>

        <a href="{{ route('home') }}">
            ⌂ Home Page
        </a>

        <a href="{{ route('track') }}">
            ◷ Track Requests
        </a>

        <h4>Account</h4>

        <a href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            ⇥ Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
            @csrf
        </form>

    </aside>

    <main class="content">

        <div class="topbar">
            <div>
                <h1>Admin Dashboard</h1>
                <p>Government Service Request Management System</p>
            </div>

            <div class="admin-label">
                Administrator
            </div>
        </div>

        <h2>Request Overview</h2>

        @if (session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="success">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <section class="stats">

            <div class="card">
                <p>Total Requests</p>
                <div class="number">{{ $totalRequests }}</div>
            </div>

            <div class="card">
                <p>Pending</p>
                <div class="number">{{ $pendingRequests }}</div>
            </div>

            <div class="card">
                <p>In Progress</p>
                <div class="number">{{ $inProgressRequests }}</div>
            </div>

            <div class="card">
                <p>Resolved</p>
                <div class="number">{{ $resolvedRequests }}</div>
            </div>

        </section>

        <section class="table-box">

            <h2>All Service Requests</h2>

            @if ($requests->isEmpty())

                <p class="empty">
                    No service requests have been submitted yet.
                </p>

            @else

                <div class="table-scroll">

                    <table>
                        <thead>
                            <tr>
                                <th>Tracking No.</th>
                                <th>Citizen</th>
                                <th>Phone</th>
                                <th>Service</th>
                                <th>Location</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Update Status</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($requests as $serviceRequest)

                                <tr>
                                    <td>{{ $serviceRequest->id }}</td>

                                    <td>{{ $serviceRequest->full_name }}</td>

                                    <td>{{ $serviceRequest->phone }}</td>

                                    <td>{{ $serviceRequest->service }}</td>

                                    <td>{{ $serviceRequest->location }}</td>

                                    <td>{{ $serviceRequest->description }}</td>

                                    <td>{{ $serviceRequest->status }}</td>

                                    <td>

                                        <form method="POST"
                                            action="{{ url('/admin/requests/' . $serviceRequest->id . '/status') }}">

                                            @csrf

                                            <select name="status" required>

                                                <option value="Pending"
                                                    {{ $serviceRequest->status === 'Pending' ? 'selected' : '' }}>
                                                    Pending
                                                </option>

                                                <option value="In Progress"
                                                    {{ $serviceRequest->status === 'In Progress' ? 'selected' : '' }}>
                                                    In Progress
                                                </option>

                                                <option value="Resolved"
                                                    {{ $serviceRequest->status === 'Resolved' ? 'selected' : '' }}>
                                                    Resolved
                                                </option>

                                            </select>

                                            <button type="submit">
                                                Update
                                            </button>

                                        </form>

                                    </td>
                                </tr>

                            @endforeach

                        </tbody>
                    </table>

                </div>

            @endif

        </section>

        <footer>
            Government Service Request Management System © 2026
        </footer>

    </main>

</div>

</body>
</html>
