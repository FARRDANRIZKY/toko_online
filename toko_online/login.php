<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    
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
        <div class="w-full bg-gray-100 rounded-lg shadow-lg sm:max-w-md">
            <div class="p-6 space-y-6">
                <h1 class="text-2xl font-bold text-black">
                    Sign in to Your Account
                </h1>
                <form class="space-y-6" action="proses_login.php" method="post">
                    <div>
                        <label for="username" class="block mb-2 text-sm font-medium text-black">Username</label>
                        <input type="text" name="username" id="username" class="w-full p-2.5 bg-white border border-gray-300 rounded-lg text-black focus:ring-primary-500 focus:border-primary-500" placeholder="Enter your username" required>
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-black">Password</label>
                        <input type="password" name="password" id="password" class="w-full p-2.5 bg-white border border-gray-300 rounded-lg text-black focus:ring-primary-500 focus:border-primary-500" placeholder="••••••••" required>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-primary-500">
                            </div>
                            <label for="remember" class="ml-2 text-sm font-medium text-black">Remember me</label>
                        </div>
                        <a href="#" class="text-sm font-medium text-black hover:underline">Forgot password?</a>
                    </div>
                    <button type="submit" name="login" class="w-full text-white bg-black hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition duration-300 ease-in-out">
                        Sign in
                    </button>
                    <p class="text-sm font-light text-black">
                        Don’t have an account? <a href="tambah_pelanggan.php" class="font-medium text-black hover:underline">Sign up</a>
                    </p>
                    <!-- Button for Login as Staff -->
                    <a href="login_petugas.php" class="w-full text-center block text-black bg-gray-200 hover:bg-gray-300 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 transition duration-300 ease-in-out">
                        Login sebagai Petugas
                    </a>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional Bootstrap JS (If needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
