<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" media="print" onload="this.media='all'">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script async src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <title>home</title>
</head>
<body class="h-full">

<div class="min-h-full">
  <x-nav-bar/>

  <x-Header nama="{{ $nama }}"/>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      {{ $slot }}
    </div>
  </main>
</div>

</body>
</html>