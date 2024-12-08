<nav>
    <ul class="flex space-x-4">
        <li><a href="/" class="text-black hover:underline">Inici</a></li><br>
        <li><a href="/equips" class="text-black hover:underline">Llista d'Equips </a></li><br>
        <li><a href="{{ route('estadis.index') }}" class="text-black hover:underline">Llistat d'Estadis</a></li>
        <li><a href="/jugadors" class="text-black hover:underline">Llistat de Jugadores</a></li>
        <li><a href="/partits" class="text-black hover:underline">Llistat de Partits Last test</a></li>
        <li><a href="{{ route('estadis.create') }}" class="text-black hover:underline">Crear Estadi</a></li>
    </ul>
</nav>