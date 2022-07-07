@csrf
<p style="text-align:center;">
<input type="text" name="name" placeholder="Nome:"value="{{old('name')}}">
<br>
<input type="text" name="email" placeholder="Email:"value="{{old('email')}}">
<br>
<input type="text" name="username" placeholder="Nome de Usuario:"value="{{old('username')}}">
<br>
<input type="text" name="password" placeholder="Senha:">
<br>
<input type="text" name="cpf" placeholder="CPF:">
<br>
<input type="text" name="age" placeholder="Idade:"value="{{old('age')}}">
<br>
<br>
<button type="submit" class="btn btn-primary">Enviar</button>
</p>
