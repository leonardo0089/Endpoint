
$(function()
{
    validate()
    csrf()
    load(0, 5, '/api/admin/clientes')
    
})

function carrMais()
{
    var initial = $('tbody tr').length;

    load(initial,10, '/api/admin/clientes');
}

function load(init, max, url)
{
  let dados = {init: init, max: max}


  $.getJSON(url, dados, function(data)
  {
    if(data[0].length > 0)
    {
      document.getElementById('carr').style.display = "flex"
      for(i = 0 ; i < data[0].length; i++)
      {
        $('tbody').append(
          '<tr>'
          +
          '<th scope="row">'+data[0][i].id+'</th>'
          +
          '<td>'+data[0][i].nome+'</td>'
          +
          '<td>'+data[0][i].email+'</td>'
          +'</tr>')
          var initial = $('tbody tr').length;
          if(data[1] == initial){ document.getElementById('carr').style.display = "none"}  
        }
    }else
    {
      document.getElementById('carr').style.display = "none"
    }
  })
}


function mascara(t, mask)
  {
      const i = t.value.length
      const saida = mask.substring(1,0)
      const texto = mask.substring(i)
      if(texto.substring(0,1) != saida)
      {
          t.value += texto.substring(0,1)
      }
  }


function validate()
{
    'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
}
