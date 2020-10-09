<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="bg-gray-100 flex items-center jutify-center h-full">
<form action="/contact" method="POST" class="bg-white p-6 rounded shadow-md" style="width: 300px;">
    @csrf
    <div class="mb-5">
        <label for="email" class="block text-xs uppercase font-semibold mb-1">
            Email

        </label>
        <input type="text" name="email" id="email" class="border px-2 py-1 text-sm w-full">
        @error('email')
            <div class="text-red-500 text-md"> {{$message}}</div>
        @enderror

    </div>
    <button type="submit" class="bd-blue-500 py-2 text-white rounded-full text-sm w-full" style="background: black;">
        Email Me

    </button>
    @if(session('message'))
        <div text-green-500 text-md>
            {{session('message')}}
        </div>
    @endif
</form>



</body>
</html>
