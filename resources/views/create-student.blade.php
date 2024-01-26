
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gestor Autoinstruccional</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
 <!-- Agrega el CDN de Tailwind CSS -->
 <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="antialiased">
        <form method="POST" action="">
            <!-- Token CSRF -->
            @csrf
        
            <div class="bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none p-6">
                <h2 class="font-semibold text-xl text-gray-900 dark:text-white mb-6">Crear Credenciales</h2>
        
                <!-- Nombre -->
                <div class="mb-4">
                    <label for="name" class="text-md text-gray-600">Nombre</label>
                    <input id="name" type="text" name="name" class="border-2 border-gray-300 p-2 w-full" required autofocus />
                </div>
        
                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="text-md text-gray-600">Email</label>
                    <input id="email" type="email" name="email" class="border-2 border-gray-300 p-2 w-full" required />
                </div>
        
                <!-- Contraseña -->
                <div class="mb-4">
                    <label for="password" class="text-md text-gray-600">Contraseña</label>
                    <input id="password" type="password" name="password" class="border-2 border-gray-300 p-2 w-full" required />
                </div>
        
                <!-- Confirmación de contraseña -->
                <div class="mb-4">
                    <label for="password_confirmation" class="text-md text-gray-600">Confirmar Contraseña</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" class="border-2 border-gray-300 p-2 w-full" required />
                </div>
        
                <!-- Opción de administrador -->
                <div class="mb-4">
                    <label for="is_admin" class="text-md text-gray-600">¿Es administrador?</label>
                    <input id="is_admin" type="checkbox" name="is_admin" value="1" />
                </div>
        
                <!-- Botón de enviar -->
                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Crear Usuario</button>
                </div>
            </div>
        </form>
        

</body>
</html>
