<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Petugas</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            500: '#000000' // Hitam
                        },
                        gray: {
                            900: '#1f2937' // Abu-abu tua
                        }
                    },
                }
            }
        }
    </script>
</head>
<body class="bg-gray-900 min-h-screen flex items-center justify-center">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto">
        <div class="w-full bg-gray-100 rounded-xl shadow-xl sm:max-w-md">
            <div class="p-6 space-y-6">
                <h1 class="text-3xl font-bold leading-tight tracking-tight text-black">
                    Login Petugas
                </h1>
                <form class="space-y-6" action="proses_login_petugas.php" method="post">
                    <div>
                        <label for="username" class="block mb-2 text-sm font-medium text-black">Username Petugas</label>
                        <input type="text" name="username" id="username" class="w-full p-3 bg-white border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-black" placeholder="Masukkan username" required>
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-black">Password</label>
                        <input type="password" name="password" id="password" class="w-full p-3 bg-white border border-gray-300 rounded-lg text-black focus:ring-2 focus:ring-black" placeholder="••••••••" required>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-2 focus:ring-black">
                            </div>
                            <label for="remember" class="ml-2 text-sm font-medium text-black">Ingat saya</label>
                        </div>
                    </div>
                    <button type="submit" name="login_petugas" class="w-full text-white bg-black hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition duration-300 ease-in-out">
                        Login sebagai Petugas
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional Bootstrap JS (If needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
