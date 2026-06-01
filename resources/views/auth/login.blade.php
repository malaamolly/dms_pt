<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login DMS</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <div class="min-h-screen flex">

        <!-- LEFT -->
        <div class="w-1/2 bg-white flex items-center justify-center">

            <div class="width : 400px">

                <h1 class="text-4xl font-bold mb-2">
                    PT. TUNAS INDONESIA RAYA
                </h1>

                <p class="text-gray-500 mb-10">
                    Masuk untuk mengakses sistem
                </p>

                <form action="/login" method="POST">

                    @csrf

                    <!-- Username -->
                    <div class="mb-5">

                        <label class="block mb-2 font-medium">
                            Username
                        </label>

                        <input
                            type="Username"
                            name="Username"
                            placeholder="Enter your username"
                            class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        >

                    </div>

                    <!-- PASSWORD -->
                    <div class="mb-5">

                        <label class="block mb-2 font-medium">
                            Password
                        </label>

                        <input
                            type="password"
                            name="password"
                            placeholder="********"
                            class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        >

                    </div>

                    <!-- BUTTON -->
                    <button
                        type="submit"
                        class="w-full bg-blue-700 hover:bg-blue-800 text-white py-3 rounded-xl font-semibold transition"
                    >

                        Masuk

                    </button>

                </form>

            </div>

        </div>

        <!-- RIGHT -->
        <div class="w-1/2 bg-blue-950"></div>

    </div>

</body>
</html>