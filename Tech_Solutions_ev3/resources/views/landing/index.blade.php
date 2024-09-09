<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="text-center">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">Trabajo pulento</h1>
        <a href="{{Route('usuarios.login')}}" class="text-white bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded shadow-md transition duration-300 ease-in-out">
            Inicio de sesión
        </a>
    </div>
</body>
</html>