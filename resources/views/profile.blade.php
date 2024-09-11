<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    @vite('resources/css/app.css')
</head>
<body class="flex justify-center items-center min-h-screen bg-gray-100">

    <div class="bg-white p-6 rounded-lg shadow-md text-center w-1/4">
        <div class="flex justify-center mb-4">
            <div class="w-24 h-24 rounded-full bg-gray-300 flex items-center justify-center">
                <svg class="w-12 h-12 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4a4 4 0 110 8 4 4 0 010-8zM6.5 20a9 9 0 0111 0m-11 0a9 9 0 01-11 0" />
                </svg>
            </div>
        </div>

        <div class="space-y-2">
            <div class="bg-[#eeeeee] text-gray-700 font-semibold text-xl">{{ $nama }}</div>
            <div class="bg-[#eeeeee] text-gray-600">{{ $kelas }}</div>
            <div class="bg-[#eeeeee] text-gray-600">{{ $npm }}</div>
        </div>
    </div>

</body>
</html>
