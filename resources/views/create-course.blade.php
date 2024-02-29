@extends('layouts.app')
    <body class="antialiased">
<form action="" method="POST" class="max-w-md mx-auto mt-8 p-4 bg-white shadow-md rounded-md">
    @csrf
    <div class="mb-4">
        <label for="codigo_curso" class="block text-sm font-medium text-gray-600">Código del Curso (Sence?)</label>
        <input type="text" name="codigo_curso" placeholder="Introduce el código del curso" class="mt-1 p-2 w-full border rounded-md">
    </div>

    <div class="mb-4">
        <label for="nombre_curso" class="block text-sm font-medium text-gray-600">Nombre del Curso</label>
        <input type="text" name="nombre_curso" placeholder="Introduce el nombre del curso" class="mt-1 p-2 w-full border rounded-md">
    </div>

    <div class="mb-4">
        <label for="cantidad_modulos" class="block text-sm font-medium text-gray-600">Cantidad de Módulos</label>
        <input type="number" name="cantidad_modulos" id="cantidad_modulos" placeholder="Introduce la cantidad de módulos" min="1" required class="mt-1 p-2 w-full border rounded-md">
    </div>

    <div id="modulos-container">
        <!-- Espacio para agregar información de módulos dinámicamente -->
    </div>

    <button type="submit" class="mt-4 bg-blue-500 text-white font-bold py-2 px-4 rounded-md hover:bg-blue-700">Crear Curso</button>
</form>

</body>
</html>


<script>
// Función para agregar campos de módulos y lecciones dinámicamente
function agregarModuloInput(numeroModulo) {
    const container = document.getElementById('modulos-container');
    const div = document.createElement('div');

    div.innerHTML = `
        <div>
            <label for="titulo_modulo_${numeroModulo}" class="block text-sm font-medium text-gray-600">Título del Módulo ${numeroModulo}</label><br>
            <input type="text" name="titulo_modulo_${numeroModulo}" placeholder="Introduce el título del módulo ${numeroModulo}" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div>
            <label for="informacion_modulo_${numeroModulo}" class="block text-sm font-medium text-gray-600">Información del Módulo ${numeroModulo}</label><br>
            <input type="text" name="informacion_modulo_${numeroModulo}" placeholder="Introduce la información del módulo ${numeroModulo}" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div id="lecciones-container_${numeroModulo}">
            <!-- Espacio para agregar información de lecciones dinámicamente -->
        </div>

        <button type="button" onclick="agregarLeccionInput(${numeroModulo})"
            class="mt-2 bg-green-500 text-white font-bold py-2 px-4 rounded-md hover:bg-green-700 focus:outline-none focus:shadow-outline-green active:bg-green-800">
            Agregar Lección
        </button>

        <button type="button" onclick="agregarEvaluacionInput(${numeroModulo})"
            class="mt-2 bg-yellow-500 text-white font-bold py-2 px-4 rounded-md hover:bg-yellow-700 focus:outline-none focus:shadow-outline-yellow active:bg-yellow-800">
            Agregar Evaluación
        </button>
    `;

    container.appendChild(div);
}


    function agregarEvaluacionInput(numeroModulo) {
    const container = document.getElementById(`lecciones-container_${numeroModulo}`);
    const div = document.createElement('div');
    const numeroEvaluacion = container.children.length + 1;

    div.innerHTML = `
        <div>
            <label for="evaluacion_${numeroModulo}_${numeroEvaluacion}">Evaluación ${numeroEvaluacion} - Mod ${numeroModulo}</label><br>
            <input type="text" name="evaluacion_${numeroModulo}_${numeroEvaluacion}" placeholder="Introduce la información de la evaluación ${numeroEvaluacion}" class="mt-1 p-2 w-full border rounded-md>
        </div>

        <div>
            <label for="archivo_evaluacion_${numeroModulo}_${numeroEvaluacion}" class="block text-sm font-medium text-gray-600">Subir Archivo</label>
            <input type="file" name="archivo_evaluacion_${numeroModulo}_${numeroEvaluacion}" accept=".pdf, .doc, .docx" class="mt-1 p-2 w-full border rounded-md">
        </div>
    `;

    container.appendChild(div);
}





// Función para agregar campos de lecciones dinámicamente
function agregarLeccionInput(numeroModulo) {
    const container = document.getElementById(`lecciones-container_${numeroModulo}`);
    const div = document.createElement('div');
    const numeroLeccion = container.children.length + 1;

    div.innerHTML = `
        <div>
            <label for="titulo_leccion_${numeroModulo}_${numeroLeccion}" class="block text-sm font-medium text-gray-600">Título de la Lección ${numeroLeccion} - Mod ${numeroModulo}</label><br>
            <input type="text" name="titulo_leccion_${numeroModulo}_${numeroLeccion}" placeholder="Introduce el título de la lección ${numeroLeccion}" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div>
            <label for="informacion_leccion_${numeroModulo}_${numeroLeccion}" class="block text-sm font-medium text-gray-600">Información de la Lección ${numeroLeccion} - Mod ${numeroModulo}</label><br>
            <input type="text" name="informacion_leccion_${numeroModulo}_${numeroLeccion}" placeholder="Introduce la información de la lección ${numeroLeccion}" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div>
            <button type="button" onclick="agregarRecursoInput(${numeroModulo}, ${numeroLeccion})"
                class="mt-2 bg-purple-500 text-white font-bold py-2 px-4 rounded-md hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple active:bg-purple-800">
                Agregar Recurso
            </button>
        </div>

        <div id="recursos-container_${numeroModulo}_${numeroLeccion}">
            <!-- Espacio para agregar información de recursos dinámicamente -->
        </div>
    `;

    container.appendChild(div);
}


// Función para agregar campos de recursos dinámicamente
function agregarRecursoInput(numeroModulo, numeroLeccion) {
    const container = document.getElementById(`recursos-container_${numeroModulo}_${numeroLeccion}`);
    const div = document.createElement('div');
    const numeroRecurso = container.children.length + 1;

    div.innerHTML = `
        <div>
            <label for="recurso_${numeroModulo}_${numeroLeccion}_${numeroRecurso}" class="block text-sm font-medium text-gray-600">Recurso ${numeroRecurso} - Lección ${numeroLeccion} - Mod ${numeroModulo}</label><br>
            <input type="file" name="recurso_${numeroModulo}_${numeroLeccion}_${numeroRecurso}" accept=".pdf, .doc, .docx" class="mt-1 p-2 w-full border rounded-md">
        </div>
    `;

    container.appendChild(div);
}


    // Obtener el input de cantidad de módulos
    const cantidadModulosInput = document.getElementById('cantidad_modulos');

    // Escuchar cambios en la cantidad de módulos
    cantidadModulosInput.addEventListener('input', () => {
        const cantidadModulos = parseInt(cantidadModulosInput.value);

        // Limpiar container antes de agregar nuevos campos
        document.getElementById('modulos-container').innerHTML = '';

        // Agregar campos de módulos según la cantidad ingresada
        for (let i = 1; i <= cantidadModulos; i++) {
            agregarModuloInput(i);
        }
    });
</script>
