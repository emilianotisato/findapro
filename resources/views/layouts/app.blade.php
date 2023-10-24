
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    
</head>
<body class="bg-gray-100">
    <div>
        <header class="flex justify-between p-4 bg-grey-100 shadow-sm mb-4">
        <div class="text-2xl" >Findapro</div>
        <nav>
        <a href="/admin/providers/new" class="font-medium  text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Log In -</a>
        <a href="/admin/providers/new" class="font-medium  text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900"> Create Account</a>
    </nav>
        </header>



        <main>
            @yield('content')
        </main>
        <footer class="bg-grey-200 mt-4">
            <div>Pie de pagina</div>
        </footer>
    </div>
</body>
</html>