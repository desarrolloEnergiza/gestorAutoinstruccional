@section('content')

    <div class="container mx-auto my-8">
        @dd($cursos) <!-- Agrega esto -->
        @foreach ($cursos as $curso)
            <!-- Resto del código -->
        @endforeach
    </div>

    <div class="container mx-auto my-8">

        @foreach ($cursos as $curso)

            <div class="bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none p-6 mb-4 cursor-pointer">

                <div class="flex items-center justify-between" onclick="toggleInfo('{{ $curso['_id'] }}')">

                    <div>

                        <h2 class="font-semibold text-xl text-gray-900 dark:text-white mb-2">{{ $curso['titulo'] }}</h2>

                        <p class="text-md text-gray-600 dark:text-gray-400">

                            Módulos: {{ count($curso['modulos']) }} |

                            Lecciones: {{ collect($curso['modulos'])->sum(fn($modulo) => count($modulo['lecciones'])) }}

                        </p>

                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"

                        class="w-6 h-6 text-gray-500"></svg>

                </div>
            </div> <!-- Cierra el div del curso -->

        @endforeach
    </div>

    <script>
        function toggleInfo(cursoId) {
            const cursoInfo = document.getElementById(cursoId + '-info');
            cursoInfo.classList.toggle('hidden');
        }
    </script>

@endsection
