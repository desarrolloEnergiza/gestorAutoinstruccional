<!-- resources/views/crear_curso.blade.php o como desees nombrarlo -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<form action="{{ route('crear-curso') }}" method="POST" class="max-w-lg mx-auto mt-6">
    @csrf

        <!-- Campos del curso -->
        <div class="mb-4">
            <label for="titulo" class="block text-sm font-medium text-gray-700">Título del Curso:</label>
            <input type="text" name="titulo" required
                   class="mt-1 p-2 border border-gray-300 rounded w-full">
        </div>

        <div class="mb-4">
            <label for="subtitulo" class="block text-sm font-medium text-gray-700">Subtítulo del Curso:</label>
            <input type="text" name="subtitulo" required
                   class="mt-1 p-2 border border-gray-300 rounded w-full">
        </div>

        <div class="mb-4">
            <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción del Curso:</label>
            <textarea name="descripcion" required
                      class="mt-1 p-2 border border-gray-300 rounded w-full"></textarea>
        </div>

    <!-- Campos del módulo -->
    <div class="mb-4">
        <label for="modulo_titulo" class="block text-sm font-medium text-gray-700">Título del Módulo:</label>
        <input type="text" name="modulo_titulo" required
               class="mt-1 p-2 border border-gray-300 rounded w-full">
    </div>
    
    <div class="mb-4">
        <label for="modulo_subtitulo" class="block text-sm font-medium text-gray-700">Subtítulo del Módulo:</label>
        <input type="text" name="modulo_subtitulo" required
               class="mt-1 p-2 border border-gray-300 rounded w-full">
    </div>
    
    <div class="mb-4">
        <label for="modulo_numero" class="block text-sm font-medium text-gray-700">Número del Módulo:</label>
        <input type="text" name="modulo_numero" required
               class="mt-1 p-2 border border-gray-300 rounded w-full">
    </div>
    
    <div class="mb-4">
        <label for="modulo_descripcion" class="block text-sm font-medium text-gray-700">Descripción del Módulo:</label>
        <textarea name="modulo_descripcion" required
                  class="mt-1 p-2 border border-gray-300 rounded w-full"></textarea>
    </div>
    
    <div class="mb-4">
        <label for="modulo_descripcion2" class="block text-sm font-medium text-gray-700">Descripción adicional del Módulo:</label>
        <textarea name="modulo_descripcion2" required
                  class="mt-1 p-2 border border-gray-300 rounded w-full"></textarea>
    </div>
    

    <div class="max-w-lg mx-auto mt-6">

        <!-- Campos de la presentación -->
        <div class="mb-4">
            <label for="presentacion_nombre" class="block text-sm font-medium text-gray-700">Nombre de la Presentación:</label>
            <input type="text" name="presentacion_nombre" required
                   class="mt-1 p-2 border border-gray-300 rounded w-full">
        </div>
    
        <div class="mb-4">
            <label for="presentacion_ruta1" class="block text-sm font-medium text-gray-700">Ruta de la Presentación 1:</label>
            <input type="text" name="presentacion_ruta1" required
                   class="mt-1 p-2 border border-gray-300 rounded w-full">
        </div>
    
        <div class="mb-4">
            <label for="presentacion_ruta2" class="block text-sm font-medium text-gray-700">Ruta de la Presentación 2:</label>
            <input type="text" name="presentacion_ruta2" required
                   class="mt-1 p-2 border border-gray-300 rounded w-full">
        </div>
    
        <!-- Campos de la lección -->
        <div class="mb-4">
            <label for="leccion_titulo" class="block text-sm font-medium text-gray-700">Título de la Lección:</label>
            <input type="text" name="leccion_titulo" required
                   class="mt-1 p-2 border border-gray-300 rounded w-full">
        </div>
    
        <div class="mb-4">
            <label for="leccion_numero" class="block text-sm font-medium text-gray-700">Número de la Lección:</label>
            <input type="text" name="leccion_numero" required
                   class="mt-1 p-2 border border-gray-300 rounded w-full">
        </div>
    
        <div class="mb-4">
            <label for="leccion_subtitulo" class="block text-sm font-medium text-gray-700">Subtítulo de la Lección:</label>
            <input type="text" name="leccion_subtitulo" required
                   class="mt-1 p-2 border border-gray-300 rounded w-full">
        </div>
    
        <!-- Campos del video de la lección -->
        <div class="mb-4">
            <label for="video_nombre" class="block text-sm font-medium text-gray-700">Nombre del Video:</label>
            <input type="text" name="video_nombre" required
                   class="mt-1 p-2 border border-gray-300 rounded w-full">
        </div>
    
        <div class="mb-4">
            <label for="video_descripcion" class="block text-sm font-medium text-gray-700">Descripción del Video:</label>
            <textarea name="video_descripcion" required
                      class="mt-1 p-2 border border-gray-300 rounded w-full"></textarea>
        </div>
    
        <div class="mb-4">
            <label for="video_ruta" class="block text-sm font-medium text-gray-700">Ruta del Video:</label>
            <input type="text" name="video_ruta" required
                   class="mt-1 p-2 border border-gray-300 rounded w-full">
        </div>
    
        <!-- Campos del texto de la lección -->
        <div class="mb-4">
            <label for="texto_titulo" class="block text-sm font-medium text-gray-700">Título del Texto:</label>
            <input type="text" name="texto_titulo" required
                   class="mt-1 p-2 border border-gray-300 rounded w-full">
        </div>
    
        <div class="mb-4">
            <label for="texto_descripcion" class="block text-sm font-medium text-gray-700">Descripción del Texto:</label>
            <textarea name="texto_descripcion" required
                      class="mt-1 p-2 border border-gray-300 rounded w-full"></textarea>
        </div>
    
        <div class="mb-4">
            <label for="texto_ruta" class="block text-sm font-medium text-gray-700">Ruta del Texto:</label>
            <input type="text" name="texto_ruta" required
                   class="mt-1 p-2 border border-gray-300 rounded w-full">
        </div>
    
        <button type="submit" class="mt-4 bg-blue-500 text-white py-2 px-4 rounded">Crear Curso</button>
    </div>
    
</form>
