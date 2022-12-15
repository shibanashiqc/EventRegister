<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <!-- Styles -->
        @livewireStyles

        <link rel="preconnect" href="https://rsms.me/">
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <style>
            :root { font-family: 'Inter', sans-serif; }
        @supports (font-variation-settings: normal) {
          :root { font-family: 'Inter var', sans-serif; }
        }
        </style>
    </head>
    <body>
        <livewire:register />
        @livewireScripts
        <script>
            window.addEventListener('swal:modal', event => {
                swal({
                  title: event.detail.message,
                  text: event.detail.text,
                  icon: event.detail.type,
                });
            });
            window.addEventListener('swal:confirm', event => {
                swal({
                  title: event.detail.message,
                  text: event.detail.text,
                  icon: event.detail.type,
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                    window.livewire.emit('remove');
                  }
                });
            });
             </script>
    </body>
</html>
