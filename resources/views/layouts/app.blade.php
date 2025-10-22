<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SIAKampus')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #1e40af;
            --secondary: #3b82f6;
        }

        .auth-page {
            background: linear-gradient(rgba(30, 58, 138, 0.8), rgba(59, 130, 246, 0.8)),
                        url('https://th.bing.com/th/id/OIP.0x6oWW0-yfM8oIuDM41xGgHaDm?w=330&h=170&c=7&r=0&o=7&cb=12&dpr=1.3&pid=1.7&rm=3');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
        }

        .dashboard-page {
            background: linear-gradient(135deg, #1e3a8a, #3b82f6);
            min-height: 100vh;
        }

        .auth-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .auth-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            border: none;
            animation: fadeInUp 0.6s ease-out;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* STYLE UNTUK DASHBOARD */
        .main-wrapper {
            display: flex;
            min-height: calc(100vh - 120px);
        }

        .sidebar {
            width: 280px;
            background: rgba(255,255,255,0.95);
            padding: 25px 20px;
            display: flex;
            flex-direction: column;
            min-height: 100vh;  
            height: 100vh;      
            position: sticky;   
            top: 0;

        }

        .content-area {
            flex: 1;
            background: #f8fafc;
            padding: 30px;
        }

        .card-hover {
            transition: all 0.3s ease;
            border: none;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
        }
    </style>
</head>
<body class="@yield('body-class', 'dashboard-page')">

    @if(!in_array(Route::currentRouteName(), ['home', 'login']))
        <x-navbar />
    @endif

    @if(in_array(Route::currentRouteName(), ['home', 'login']))
        @yield('content')
    @else

        <div class="main-wrapper">
            <x-sidebar />
            <main class="content-area">
                @yield('content')
            </main>
        </div>
        @include('components.footer')
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
