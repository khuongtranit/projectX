<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h2>SweetAlert2</h2>

    <script>
        $(function(){
            @if (Session::has('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Great!',
                    text: '{{ Session::get("success") }}'
                })
            @endif
        });
        $(function(){
            @if (Session::has('info'))
                Swal.fire({
                    icon: 'info',
                    title: 'Information!',
                    text: '{{ Session::get("info") }}'
                })
            @endif
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>
</body>

</html>
