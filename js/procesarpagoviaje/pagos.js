$( document ).ready(function() {
    $('#socio').change(function(){
          llenartabla()
    })
    
        $('#año').change(function(){
              llenartabla()
        })
        $('#socio').focus(function(){
            llenartabla()
      })
      
          $('#año').focus(function(){
                llenartabla()
          })
});

 
function llenartabla(){
$('#tabla').empty()
var ids = $('#socio').val();
var a = $('#año').val();
var estadopago;
var lineaimagen;
$.ajax({
    url: "../../procesos/pagoviajes/buscardatos.php",
    type: "GET",
    data: {"namesocio":ids, "año":a},
    dataType: "json",
    success: function (respuesta){
        
        $.each(respuesta, function (key, value){
            if(value.estado=='S'){
                estadopago="Sin Pagar"
                lineaimagen="<img src='../../img/dinero.png'  onclick='pagar("+ value.id_viaje + ")'></img>"
                
            }
            else{
                estadopago="Pago"
                lineaimagen="<img src='../../img/exito.png' >"
            }
            $('#tabla').append("<tr>"+ 
            
             "<td>"+ value.precio+"</td>"+ 
             "<td>"+ value.fecha+"</td>"+
             "<td>"+ value.añov+"</td>"+
             "<td>"+ value.hora_salida+"</td>"+
             "<td>"+ value.estado+"</td>"+
             "<td>"+ value.cant_asiento_vendido+"</td>"+
             "<td>"+ value.descripcion+"</td>"+
             "<td>"+ value.hasta+"</td>"+
             "<td>" + lineaimagen+ "</td>"+
            "</tr>")
        })
        }
    })
}
 function pagar(c){
    var q="update viajes SET ESTADO='P' where id_viaje="+ c
    $.ajax({
        url: "../../procesos/pagoviajes/pagar.php",
        type: "GET",
        data: {"q":q},
        dataType: "json",
        success: function (respuesta){
            
           if(respuesta=="1"){
            alert("pago realizado")
           }
           else
           {
            alert("error al pago")
           }
           llenartabla()
        }
 })
 }