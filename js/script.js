function validar() {
  var nome = formulario.nome;
  var telefone = formulario.telefone;
  var email = formulario.email;
  

  if (nome.value == "") {
    alert("Nome não informado");
    nome.focus();
    return;
  }
  if (email.value == "") {
    alert("E-mail não informado ou inválido");
    email.focus();
    return;
  }
  if (telefone.value == "") {
    alert("Telefone não informado");
    telefone.focus();
    return;
  }
  else {
    alert("Formulário enviado!");
  }
}