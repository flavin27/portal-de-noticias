@include('components.head')

    <h1 class="text-5xl font-extrabold text-center">Lista de Notícias</h1>

    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-4 m-12">
        @foreach ($noticias as $noticia)
            <div class="bg-gray-800 border border-gray-200 rounded-lg shadow-xl relative">
                <div class="p-5 ">
                    <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $noticia->titulo}}</h5>
                    <h6 class="mb-2 text-l font-semibold tracking-tight text-gray-900 dark:text-white">{{  $noticia->username}}</h6>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 break-all ">{{$noticia->conteudo}}</p>
                    <div class="absolute bottom-0 right-0 mb-5 mr-5"> <!-- Posicionamento absoluto dos botões no canto inferior direito do card -->
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Editar
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </a>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                            Remover
                            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
    


</body>
</html>