<script>
  let email = '';

  async function onSubmit(event) {
    event.preventDefault();

    const data = new FormData();
    data.append('email', email);

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
</script>

<main>
  <form on:submit={onSubmit}>
    <input
      type="text"
      placeholder="e-mail"
      value={email}
      on:input={inputChange}
    />
    <input type="submit" value="enviar" />
  </form>

  {email}
</main>

<style>
</style>
