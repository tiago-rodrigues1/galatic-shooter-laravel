<form 
    class="bc-opaco d-flex flex-column w-100 rounded"
    method="POST"
    action="/player/new"
>
    @csrf
    <p class="w-100 m-0 p-4 bc-yellow rounded-top text-center txt-black title-font">Cadastro</p>
    <div class="vstack p-4 pb-0">
        <label class="mb-2 txt-white fw-bold" for="nome">Nome</label>
        <input type="text" class="p-2 txt-white bc-opaco border-white rounded-2" type="text" id="nome" name="nome" required >
    </div>
    <div class="vstack p-4 pb-0">
        <label class="mb-2 txt-white fw-bold" for="email">Email</label>
        <input type="text" class="p-2 txt-white bc-opaco border-white rounded-2" type="text" id="email" name="email" required >
    </div>
    <div class="vstack p-4">
        <label class="mb-2 txt-white fw-bold" for="password">password</label>
        <input type="password" class="p-2 txt-white bc-opaco border-white rounded-2" type="text" id="password" name="password" required minlength="8">
        <p class="mt-4 txt-white text-center">Já está cadastrado? <a class="txt-yellow" href="#" id="signin-link">Acesse sua conta</a></p>
    </div>
    <button type="submit" class="w-100 btn p-4 bc-yellow border-0 txt-black rounded-bottom fw-bold">Cadastrar</button>
</form>