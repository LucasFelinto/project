<script>
  let email = '';
  let telefone = '';
  let nome = '';

  async function onSubmit(event) {
    event.preventDefault();

    const data = new FormData();
    data.append('email', email);
    data.append('nome', nome);
    data.append('telefone', telefone);

    try {
      const result = await fetch('http://localhost:8000/', {
        // URL do servidor PHP
        method: 'POST',
        body: data,
      });
      const body = await result.text();
      console.log(body);
    } catch (e) {
      console.log('error', e);
    }
  }

  function inputChange(event) {
    email = event.target.value;
  }
  function inputChangeSenha(event) {
    telefone = event.target.value;
  }
  function inputChangeNome(event) {
    nome = event.target.value;
  }
</script>

<main>
  <form on:submit={onSubmit}>
    <input
      type="text"
      placeholder="e-mail"
      value={email}
      on:input={inputChange}
    />
    <input
      type="number"
      placeholder="telefone"
      value={telefone}
      on:input={inputChangeSenha}
    />
    <input
      type="text"
      placeholder="nome"
      value={nome}
      on:input={inputChangeNome}
    />
    <input type="submit" value="enviar" />
  </form>

  {email}
</main>

<style>
</style>
