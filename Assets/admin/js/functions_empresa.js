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
                // {"data":"info_adicional2"},
                {"data":"options"}
            ],
            "responsive":"true",
            "bDestroy": true,
            "iDisplayLength": 10,
            "order":[[0,"asc"]]  
        });
    }
    if(document.querySelector("#formEmpresas")){
        var formPedidoTemp = document.querySelector("#formEmpresas");
        formPedidoTemp.onsubmit = function(e){
            e.preventDefault();
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl = base_url+'/empresa/setEmpresa'; 
            var formData = new FormData(formPedidoTemp);
            request.open("POST",ajaxUrl,true);
            request.send(formData);
            request.onreadystatechange = function(){
                console.log(request.responseText);
                if(request.readyState == 4 && request.status == 200){
                    console.log(request.responseText);
                    var objData = JSON.parse(request.responseText);
                    console.log(objData);
                    if(objData.status){      
                        swal(objData.MSG, "success");                  
                        // alert(objData.MSG);
                    }else{
                        swal(objData.MSG, "error");    
                        // alert(objData.MSG);
                    }     
                } 
            }
        }
    }
});