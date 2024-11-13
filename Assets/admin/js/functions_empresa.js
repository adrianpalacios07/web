let tableEmpresas
document.addEventListener('DOMContentLoaded', function(){
    if(document.querySelector("#tableEmpresas")){
        tableEmpresas = $('#tableEmpresas').dataTable( {
            "aProcessing":true,
            "aServerSide":true,
            "language": {
                "url": " "+base_url+"/Assets/admin/js/Spanish.json"
            },
            "ajax":{
                "url": " "+base_url+"/empresa/listaEmpresas",        
                "dataSrc":""
            },
            "columns":[
                // {"data":"id"},
                {"data":"descripcion"},
                {"data":"info_adicional"},
                {"data":"info_adicional2"},
                {"data":"options"}
            ],
            "responsive":"true",
            "bDestroy": true,
            "iDisplayLength": 10,
            "order":[[0,"asc"]]  
        });
    }
    if(document.querySelector("#formEmpresa")){
        let formPaginas = document.querySelector("#formEmpresa");
        formPaginas.onsubmit = function(e) {
            e.preventDefault();
            let strTitulo = document.querySelector('#txtTitulo').value;
            let strContenido = document.querySelector('#txtInfo').value;
            let intStatus = document.querySelector('#txtInfo').value;
            if(strTitulo == '' || strContenido == '' || intStatus == '' ){
                swal("Atención", "Todos los campos son obligatorios." , "error");
                return false;
            }
            divLoading.style.display = "flex";
            tinyMCE.triggerSave();
            let request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            let ajaxUrl = base_url+'/Empresa/setEmpresa'; 
            let formData = new FormData(formPaginas);
            request.open("POST",ajaxUrl,true);
            request.send(formData);
            request.onreadystatechange = function(){
                if(request.readyState == 4 && request.status == 200){
                    let objData = JSON.parse(request.responseText);
                    if(objData.status){
                        swal("Sistema", objData.msg, "success");                   
                    }else{
                        swal("Error", objData.msg , "error");
                    }
                }
                divLoading.style.display = "none";
                return false;
            }
        }
    }

});