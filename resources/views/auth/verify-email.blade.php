{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Your verification link already send to your email</h2>
</body>
</html> --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Email</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
<div class="bg-white rounded-lg shadow-lg p-6 w-80 text-center">
    <h1 class="text-2xl font-semibold mb-4">Verifikasi Email</h1>
    <p class="text-gray-700 mb-6">Your verification link has already been sent to your email.</p>
    
    <form action="/email/verification-notification" method="POST">
        @csrf
    <button class="bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600 transition duration-200" onclick="resendVerification()">
        Resend Verification
    </button>
</form>
</div>
</body>
</html>
<script>
    function resendVerification() {
        alert("Verification link has been resent to your email!");
    }
</script>