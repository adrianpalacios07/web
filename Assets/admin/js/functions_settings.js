let tablePaginas
document.addEventListener('DOMContentLoaded', function(){
    if(document.querySelector("#formServicios")){
        let formServicios = document.querySelector("#formServicios");
        formServicios.onsubmit = function(e) {
            e.preventDefault();
            divLoading.style.display = "flex";
            tinyMCE.triggerSave();
            let request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            let ajaxUrl = base_url+'/Settings/setServicio'; 
            let formData = new FormData(formServicios);
            request.open("POST",ajaxUrl,true);
            request.send(formData);
            request.onreadystatechange = function(){
                if(request.readyState == 4 && request.status == 200){
                    console.log(request.responseText)
                    let objData = JSON.parse(request.responseText);
                    if(objData.status){
                        swal("sistema", objData.msg ,"success");                        
                    }else{
                        swal("Error", objData.msg , "error");
                    }
                }
                divLoading.style.display = "none";
                return false;
            }
        }
    }

    if(document.querySelector("#cbxShowPrecios")){
        let cbxShowPrecios = document.querySelector("#cbxShowPrecios")
        cbxShowPrecios.onchange = function(e){
            e.preventDefault()
            if(cbxShowPrecios.checked){
                document.querySelector("#txtMostrarPrice").setAttribute("disabled","true")
                document.querySelector("#txtMostrarPrice").removeAttribute("required")
            }else{
                document.querySelector("#txtMostrarPrice").removeAttribute("disabled")
                document.querySelector("#txtMostrarPrice").setAttribute("required","true")
            }
        }
    }

    // adrian
    if(document.querySelector("#addBanner1")){
        let formServicios = document.querySelector("#addBanner1");
        formServicios.onsubmit = function(e) {
            e.preventDefault();
            divLoading.style.display = "flex";
            tinyMCE.triggerSave();
            let request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            let ajaxUrl = base_url+'/settings/insertBanner'; 
            let formData = new FormData(formServicios);
            request.open("POST",ajaxUrl,true);
            request.send(formData);
            request.onreadystatechange = function(){
                if(request.readyState == 4 && request.status == 200){
                    console.log(request.responseText)
                    let objData = JSON.parse(request.responseText);
                    if(objData.status){
                        alert('si');
                        swal("sistema", objData.msg ,"success");                        
                    }else{
                        alert('NO');
                        swal("Error", objData.msg , "error");
                    }
                }
                divLoading.style.display = "none";
                return false;
            }
        }
    }
    if(document.querySelector("#editInformacion")){
        let formServicios = document.querySelector("#editInformacion");
        formServicios.onsubmit = function(e) {
            e.preventDefault();
            divLoading.style.display = "flex";
            tinyMCE.triggerSave();
            let request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            let ajaxUrl = base_url+'/settings/updateInfo'; 
            let formData = new FormData(formServicios);
            request.open("POST",ajaxUrl,true);
            request.send(formData);
            request.onreadystatechange = function(){
                if(request.readyState == 4 && request.status == 200){
                    console.log(request.responseText)
                    let objData = JSON.parse(request.responseText);
                    if(objData.status){
                        // alert('si');
                        swal("Good job!", "You clicked the button!", "success");                    
                    }else{
                        // alert('NO');
                        swal("Error", objData.msg , "error");
                    }
                }
                divLoading.style.display = "none";
                return false;
            }
        }
    }
    if(document.querySelector("#tableBanner")){
        tablePaginas = $('#tableBanner').dataTable( {
            "aProcessing":true,
            "aServerSide":true,
            "language": {
                "url": " "+base_url+"/Assets/admin/js/Spanish.json"
            },
            "ajax":{
                "url": " "+base_url+"/settings/listaBanner",        
                "dataSrc":""
            },
            "columns":[
                {"data":"id"},
                {"data":"images",
                    "render": function (data) {
                        return "<img src='"+base_url+"/Assets/images/"+data+"' width=90'>";
                    }
                },
                {"data":"frase"},
                {"data":"options"}
            ],
            "responsive":"true",
            "bDestroy": true,
            searching: false,
            info: false,
            ordering: false,
            paging: false,

            "iDisplayLength": 10,
            "order":[[0,"asc"]]  
        });
    }
    if(document.querySelector("#foto")){
        let foto = document.querySelector("#foto");
        foto.onchange = function(e) {
            let uploadFoto = document.querySelector("#foto").value;
            let fileimg = document.querySelector("#foto").files;
            let nav = window.URL || window.webkitURL;
            let contactAlert = document.querySelector('#form_alert');
            if(uploadFoto !=''){
                let type = fileimg[0].type;
                let name = fileimg[0].name;
                if(type != 'image/jpeg' && type != 'image/jpg' && type != 'image/png'){
                    contactAlert.innerHTML = '<p class="errorArchivo">El archivo no es válido.</p>';
                    if(document.querySelector('#img')){
                        document.querySelector('#img').remove();
                    }
                    document.querySelector('.delPhoto').classList.add("notBlock");
                    foto.value="";
                    return false;
                }else{  
                        contactAlert.innerHTML='';
                        if(document.querySelector('#img')){
                            document.querySelector('#img').remove();
                        }
                        document.querySelector('.delPhoto').classList.remove("notBlock");
                        let objeto_url = nav.createObjectURL(this.files[0]);
                        document.querySelector('.prevPhoto div').innerHTML = "<img id='img' src="+objeto_url+">";
                    }
            }else{
                alert("No selecciono foto");
                if(document.querySelector('#img')){
                    document.querySelector('#img').remove();
                }
            }
        }
    }

    if(document.querySelector(".delPhoto")){
        let delPhoto = document.querySelector(".delPhoto");
        delPhoto.onclick = function(e) {
            if(document.querySelector("#foto_remove")){
                document.querySelector("#foto_remove").value= 1;
            }
            removePhoto();
        }
    }
    
});

function ftnEditar(cod) {
    var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    var ajaxUrl = base_url+'/settings/getIdBanner/'+cod; 
    request.open("GET",ajaxUrl,true);
    request.send();
    request.onreadystatechange = function(){
        if(request.readyState != 4) return;
        if(request.status == 200){
            console.log(request.responseText);
            var objData = JSON.parse(request.responseText);
            if(objData.status){
                let objBanner = objData.data;
                document.querySelector('#txtid').value = objBanner.id;
                document.querySelector('#txtfrase').value = objBanner.frase;
                document.querySelector('#images').src = objBanner.url_imagen;
                $('#exampleModal').modal('show');
            }
        }else{
            swal("Atención","Error en el proceso", "error");
        }
        return false;
    }
}
function ftnAgregar(){
    $('#addModalSettings').modal('show');
}


// ------------
tinymce.init({
    selector: '#txtTerminos',
    width: "100%",
    height: 350,    
    statubar: true,
    plugins: [
        "advlist autolink link image lists charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
        "save table contextmenu directionality emoticons template paste textcolor"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
});