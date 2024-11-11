
function controlTag(e) {
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8) return true; 
    else if (tecla==0||tecla==9)  return true;
    patron =/[0-9\s]/;
    n = String.fromCharCode(tecla);
    return patron.test(n); 
}

function testText(txtString){
    var stringText = new RegExp(/^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/);
    if(stringText.test(txtString)){
        return true;
    }else{
        return false;
    }
}

function testEntero(intCant){
    var intCantidad = new RegExp(/^([0-9])*$/);
    if(intCantidad.test(intCant)){
        return true;
    }else{
        return false;
    }
}

function fntEmailValidate(email){
    var stringEmail = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})$/);
    if (stringEmail.test(email) == false){
        return false;
    }else{
        return true;
    }
}

function fntValidText(){
	let validText = document.querySelectorAll(".validText");
    validText.forEach(function(validText) {
        validText.addEventListener('keyup', function(){
			let inputValue = this.value;
			if(!testText(inputValue)){
				this.classList.add('is-invalid');
			}else{
				this.classList.remove('is-invalid');
			}				
		});
	});
}

function fntValidNumber(){
	let validNumber = document.querySelectorAll(".validNumber");
    validNumber.forEach(function(validNumber) {
        validNumber.addEventListener('keyup', function(){
			let inputValue = this.value;
			if(!testEntero(inputValue)){
				this.classList.add('is-invalid');
			}else{
				this.classList.remove('is-invalid');
			}				
		});
	});
}

function fntValidEmail(){
	let validEmail = document.querySelectorAll(".validEmail");
    validEmail.forEach(function(validEmail) {
        validEmail.addEventListener('keyup', function(){
			let inputValue = this.value;
			if(!fntEmailValidate(inputValue)){
				this.classList.add('is-invalid');
			}else{
				this.classList.remove('is-invalid');
			}				
		});
	});
}

window.addEventListener('load', function() {
	fntValidText();
	fntValidEmail(); 
	fntValidNumber();
	if(document.querySelectorAll("#btncambioTienda")){
		let btnCambio = document.querySelectorAll("#btncambioTienda");
		btnCambio.forEach(function(element) {
			element.onclick = function(e){
				e.preventDefault();
				let codnew = element.getAttribute("codtienda");
				let request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
			    let ajaxUrl = base_url+'/Dashboard/cambiarTienda/'+codnew;
			    divLoading.style.display = "flex";
			    request.open("GET",ajaxUrl,true);
			    request.send();
			    request.onreadystatechange = function(){
			        if(request.readyState == 4 && request.status == 200){
			            let objData = JSON.parse(request.responseText);
			            if(objData.status){
			            	location.href = base_url+"/dashboard";
			            }else{
			                swal("Error", objData.msg , "error");
			            }
			            divLoading.style.display = "none";
            			return false;
			        }
			    }
			}
		});
	}


}, false);

let divLoading = document.querySelector("#divLoading");

function is_json(str) {
    try {
        JSON.parse(str);
    } catch (e) {
        return false;
    }
    return true;
}

function MostrarAyuda(){
	let request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    let ajaxUrl = base_url+'/Dashboard/modalHelp';
    request.open("GET",ajaxUrl,true);
    request.send();
    request.onreadystatechange = function(){
        if(request.readyState == 4 && request.status == 200){
            let objData = JSON.parse(request.responseText);
            if(objData.status){
            	document.querySelector("#divmodalAyuda").innerHTML = objData.html
            	$("#modalFormayuda").modal("show");
            }
        }
    }    
}

function abrirNuevoTab(url) {
    var win = window.open(url, '_blank');
    win.focus();
}

function validate(dateString){   
    date = new Date(dateString).toJSON().slice(0,10);
    if (disableDates.indexOf(date) > -1) {
        return false;
    }
    return true;
};

// document.oncontextmenu = function(){return false}

// $(document).keydown(function (event) {
//     if (event.keyCode == 123) { // Prevent F12
//         return false;
//     } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I        
//         return false;
//     } else if (event.ctrlKey && event.keyCode == 85) { // Prevent Ctrl+Shift+I        
//         return false;
//     }
// });