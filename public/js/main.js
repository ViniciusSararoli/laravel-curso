var esqueci = document.querySelector('button[name=esqueci]');
					esqueci.onclick = function abrir() {
				esqueci = document.getElementById('recuperar').style.display = 'block';
    }
		var cancelar = document.querySelector('button.cancelar');
		cancelar.onclick = function(){
				cancelar = document.getElementById('recuperar').style.display = 'none';
		}
		var continuar = document.querySelector('button.continuar');
			continuar.onclick = function(){
				alert('E-mail enviado com sucesso!');
			}