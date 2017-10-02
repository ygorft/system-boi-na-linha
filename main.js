document.getElementById('formulario').addEventListener('submit',cadastraMercadoria);

function cadastraMercadoria(e) {
  var codigoMercadoria = document.getElementById('codigoMercadoria').value;
  var tipoMercadoria = document.getElementById('tipoMercadoria').value;
  var nomeMercadoria = document.getElementById('nomeMercadoria').value;
  var quantidadeMercadoria = document.getElementById('quantidadeMercadoria').value;
  var precoMercadoria = document.getElementById('precoMercadoria').value;
  var tipoNegocio = document.getElementById('tipoNegocio').value;

  if (!codigoMercadoria || !tipoMercadoria || !nomeMercadoria || !quantidadeMercadoria || !precoMercadoria || !tipoNegocio ) {
    alert("Certifique-se de que todos os campos foram preenchidos!");
    return false;
  }

  mercadoria = {
    codigo: codigoMercadoria,
    tipoM: tipoMercadoria,
    nome: nomeMercadoria,
    quantidade: quantidadeMercadoria,
    preco: precoMercadoria,
    tipoN: tipoNegocio
  }



  if(localStorage.getItem('sistema2') === null){
    var mercadorias = [];
    mercadorias.push(mercadoria);
    localStorage.setItem('sistema2', JSON.stringify(mercadorias));
  }
  else {
    var mercadorias = JSON.parse(localStorage.getItem('sistema2'));
    mercadorias.push(mercadoria);
    localStorage.setItem('sistema2', JSON.stringify(mercadorias));
  }
  document.getElementById('formulario').reset();
  mostraMercadorias();
  e.preventDefault();
}

function mostraMercadorias(){
  var mercadorias = JSON.parse(localStorage.getItem('sistema2'));
  var mercadoriasResultado = document.getElementById('resultados');

  mercadoriasResultado.innerHTML = '';

  for(var i = 0; i < mercadorias.length; i++) {
    var codigo = mercadorias[i].codigo;
    var tipoM = mercadorias[i].tipoM;
    var nome = mercadorias[i].nome;
    var quantidade = mercadorias[i].quantidade;
    var preco = mercadorias[i].preco;
    var tipoN = mercadorias[i].tipoN;

    mercadoriasResultado.innerHTML += '<tr><td>' + codigo +
                                '</td><td>' + tipoM +
                                '</td><td>' + nome +
                                '</td><td>' + quantidade +
                                '</td><td>' + preco +
                                '</td><td>' + tipoN +
                                '</tr>';
  }
}
