<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Tunas Indonesia Raya</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <div class="flex min-h-screen">

        <!-- SIDEBAR -->
        <div class="w-64 bg-slate-900 text-white flex flex-col">

            <!-- LOGO -->
            <div class="p-6 border-b border-slate-700">

                <h1 class="text-2xl font-bold">
                    HYBRID OFFICE
                </h1>

            </div>

            <!-- MENU -->
            <div class="flex-1 p-4">

                <ul class="space-y-2">

                    <li>
                        <a href="/dashboard"
                           class="block px-4 py-3 rounded-xl hover:bg-slate-700 transition">

                            Dashboard

                        </a>
                    </li>

                    <li>
                        <a href="/clients"
                           class="block px-4 py-3 rounded-xl hover:bg-slate-700 transition">

                            Clients

                        </a>
                    </li>

                    <li>
                        <a href="/documents"
                           class="block px-4 py-3 rounded-xl hover:bg-slate-700 transition">

                            Documents

                        </a>
                    </li>

                    <li>
                        <a href="#"
                           class="block px-4 py-3 rounded-xl hover:bg-slate-700 transition">

                            Virtual Office

                        </a>
                    </li>

                    <li>
                        <a href="#"
                           class="block px-4 py-3 rounded-xl hover:bg-slate-700 transition">

                            Reminder

                        </a>
                    </li>

                </ul>

            </div>

            <!-- LOGOUT -->
            <div class="p-4 border-t border-slate-700">

                <a href="/login"
                   class="block px-4 py-3 rounded-xl bg-red-500 hover:bg-red-600 text-center">

                    Logout

                </a>

            </div>

        </div>

        <!-- MAIN CONTENT -->
        <div class="flex-1 flex flex-col">

            <!-- NAVBAR -->
            <div class="bg-white shadow px-8 py-4 flex justify-between items-center">

                <h1 class="text-2xl font-semibold text-gray-700">
                    Document Management System
                </h1>

                <div class="flex items-center gap-4">

                    <input
                        type="text"
                        placeholder="Cari..."
                        class="border border-gray-300 rounded-xl px-4 py-2"
                    >

                    <div class="w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center">

                        A

                    </div>

                </div>

            </div>

            <!-- CONTENT -->
            <div class="p-8">

                @yield('content')

            </div>

        </div>

    </div>

</body>
</html>