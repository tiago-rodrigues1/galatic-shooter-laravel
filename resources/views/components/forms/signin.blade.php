@if ($errors->has('invalid-credentials'))
    {{ $errors->first('invalid-credentials') }}
@endif

<form 
    class="bc-opaco d-flex flex-column w-100 rounded"
    method="POST"
    action="/session/new"
>
    @csrf

    <p class="w-100 m-0 p-4 bc-yellow rounded-top text-center txt-black title-font">Login</p>
    <div class="vstack p-4 pb-0">
        <label class="mb-2 txt-white fw-bold" for="signin-email">Email</label>
        <input type="text" class="p-2 txt-white bc-opaco border-white rounded-2" type="text" id="signin-email" name="email" required>
    </div>
    <div class="vstack p-4">
        <label class="mb-2 txt-white fw-bold" for="signin-password">password</label>
        <input type="password" class="p-2 txt-white bc-opaco border-white rounded-2" type="text" id="signin-password" name="password" required>
        <p class="mt-4 txt-white text-center">Não está cadastrado? <a class="txt-yellow" href="#" id="signup-link">Crie sua conta</a></p>
    </div>
    <button type="submit" class="w-100 btn p-4 bc-yellow border-0 txt-black rounded-bottom fw-bold">Entrar</button>
</form>