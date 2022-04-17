<h2>Adicionar novo pet:</h2>

<form action="/pets" method="post">
    @csrf
    <div>
        <div>
            <label for="name">Nome: </label>
            <br/>
            <input id="name" name="name" type="text" /> 
        </div>

        <br/>

        <div>
            <label for="color">Cor: </label>
            <br/>
            <input id="color" name="color" type="text" />
        </div>
        
        <br/>

        <div>
            <label for="specie">Especie: </label>
            <br/>
            <select id="specie" name="specie">
                <option value="gato">GATO</option>
                <option value="cachorro">CACHORRO</option>
                <option value="zebra">ZEBRA</option>
                <option value="dragao-de-komodo">DRAGÃO DE KOMODO</option>
                <option value="cobra">COBRA</option>
                <option value="coelho">COELHO</option>
                <option value="camaleão">CAMALEÃO</option>
                <option value="cavalo">CAVALO</option>
                <option value="aves">AVES</option>
                <option value="camelo">CAMELO</option>
                <option value="pokemon">POKEMON</option>
            </select>
        </div>
        
        <br/>

        <div>
            <label for="size">Size: </label>
            <br/>
            <select name="size" id="size">
                <option value="xs">XS</option>
                <option value="sm">SM</option>
                <option value="m">M</option>
                <option value="l">L</option>
                <option value="xl">XL</option>
            </select>
        </div>
    </div>
    
    

    <br/>
    <button type="submit">
        Cadastrar
    </button>
</form>

<a href="/pets">Voltar</a>
