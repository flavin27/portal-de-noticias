@include('components.head')
    <h1>
        Listar Noticias
    </h1>
    @foreach ($noticias as $noticia)
    {{ $noticia->username }}
    @endforeach

</body>
</html>