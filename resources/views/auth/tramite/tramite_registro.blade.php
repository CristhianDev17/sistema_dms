<script src="../js/console_tramite.js?rev=<?php echo time();?>"></script>
<link rel="stylesheet" href="../plantilla/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">REGISTRO DE TRÁMITE</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
           
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="col-12">
        <div class="row">
            <div class="col-md-6">
                    <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title"><b>DATOS DEL REMITENTE</b></h3>
                    </div>
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 form-group">
                                <label for="" style="font-size:small;">Nº DNI</label>
                                <input type="text" class="form-control" id="txt_dni">
                            </div>
                            <div class="col-6 form-group">
                                <label for="" style="font-size:small;">NOMBRE</label>
                                <input type="text" class="form-control" id="txt_nom">
                            </div>
                            <div class="col-6 form-group">
                                <label for="" style="font-size:small;">APELLIDO PATERNO</label>
                                <input type="text" class="form-control" id="txt_apepat">
                            </div>
                            <div class="col-6 form-group">
                                <label for="" style="font-size:small;">APELLIDO MATERNO</label>
                                <input type="text" class="form-control" id="txt_apemat">
                            </div>
                            <div class="col-6 form-group">
                                <label for="" style="font-size:small;">CELULAR</label>
                                <input type="text" class="form-control" id="txt_celular">
                            </div>
                            <div class="col-6 form-group">
                                <label for="" style="font-size:small;">EMAIL</label>
                                <input type="text" class="form-control" id="txt_email">
                            </div>
                            <div class="col-12">
                                <label for="" style="font-size:small;">DIRECCIÓN</label>
                                <input type="text" class="form-control" id="txt_dire">
                            </div>     
                            <div class="col-12">
                                <label for="" style="font-size:small;">EN REPRESENTACIÓN</label>
                            </div> 
                            <div class="col-12 row">
                                    <!-- radio -->
                                    <div class="col-4 form-group clearfix">
                                        <div class="icheck-success d-inline">
                                            <input type="radio" 
                                            id="rad_presentacion1" name="r1" checked value="A NOMBRE PROPIO">
                                            <label for="rad_presentacion1" style="font-weight:normal;font-size:small">
                                            A NOMBRE PROPIO
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4 form-group clearfix">
                                        <div class="icheck-success d-inline">
                                            <input type="radio" 
                                            id="rad_presentacion2" name="r1" value="A OTRA PERSONA NATURAL">
                                            <label for="rad_presentacion2" style="font-weight:normal;font-size:small">
                                            A OTRA PERSONA NATURAL
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4 form-group clearfix">
                                        <div class="icheck-success d-inline">
                                            <input type="radio" 
                                            id="rad_presentacion3" name="r1" value="PERSONA JURÍDICA">
                                            <label for="rad_presentacion3" style="font-weight:normal;font-size:small">
                                            PERSONA JURÍDICA
                                            </label>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-12" id="div_juridico" style="display:none">
                                    <div class="row">
                                    <div class="col-4 form-group">
                                        <label for="" style="font-size:small;" >RUC</label>
                                        <input type="text" class="form-control" id="txt_ruc">
                                    </div>
                                    <div class="col-8 form-group">
                                        <label for="" style="font-size:small;" >RAZÓN SOCIAL</label>
                                        <input type="text" class="form-control" id="txt_razon">
                                    </div>
                                </div>
                            </div>
                        </div>                                     
                    </div>
                    <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
            </div>
            <div class="col-md-6">
                    <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"><b>DATOS DEL DOCUMENTO</b></h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 form-group">
                                <label for="" style="font-size:small;">PROCEDENCIA DEL DOCUMENTO</label>
                                <select class="js-example-basic-single" id="select_area_p" style="width:100%">
                                </select>
                            </div>
                            <div class="col-12 form-group">
                                <label for="" style="font-size:small;">ÁREA DE DESTINO</label>
                                <select class="js-example-basic-single" id="select_area_d" style="width:100%">
                                </select>
                            </div>
                            <div class="col-12 form-group">
                                <label for="" style="font-size:small;">TIPO DOCUMENTO</label>
                                <select class="js-example-basic-single" id="select_tipo" style="width:100%">
                                </select>
                            </div>
                            <div class="col-12 form-group">
                                <label for="" style="font-size:small;">Nº DOCUMENTO</label>
                                <input type="text" class="form-control" id="txt_ndocumento">
                            </div>
                            <div class="col-12 form-group">
                                <label for="" style="font-size:small;">ASUNTO DEL TRÁMITE</label>
                                <textarea  id="txt_asunto" rows="3" class="form-control" style="resize:none"></textarea>
                            </div>
                            <div class="col-8 form-group">
                                <label for="" style="font-size:small;">ADJUNTAR DOCUMENTO</label>
                                <input type="file" class="form-control" id="txt_archivo">
                            </div>
                            <div class="col-4 form-group">
                                <label for="" style="font-size:small;">Nº FOLIOS</label>
                                <input type="text" class="form-control" id="txt_folio">
                            </div>
                            <div class="col-12"><br>
                                <div class="form-group clearfix">
                                    <div class="icheck-success d-inline">
                                        <input type="checkbox" id="checkboxSuccess1" onclick="validar_informacion()">
                                        <label for="checkboxSuccess1" style="text-align-justify;">
                                            DECLARO BAJO PENALIDAD DE PERJURIO QUE TODA LA INFORMACIÓN PROPORCIONADA ES CORRECTA Y VERÍDICA
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12" style="text-align:center">
                                <button class="btn btn-success btn-lg" onclick="Registrar_Tramite()" id="btn_registro">REGISTRAR TRÁMITE</button>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
            </div>
        </div>
    </div>

    <script>
      $(document).ready(function() {
        $('.js-example-basic-single').select2();
        Cargar_Select_Area();
        Cargar_Select_Tipo();
        $("#rad_presentacion1").on('click',function(){
            document.getElementById('div_juridico').style.display="none";
        });
        $("#rad_presentacion2").on('click',function(){
            document.getElementById('div_juridico').style.display="none";
        });
        $("#rad_presentacion3").on('click',function(){
            document.getElementById('div_juridico').style.display="block";
        });
      } );

      validar_informacion();
      function validar_informacion(){

if(document.getElementById('checkboxSuccess1').checked==false){

   $("#btn_registro").addClass("disabled");
}else{
   $("#btn_registro").removeClass("disabled");
}
}

$('input[type="file"]').on('change', function(){
  var ext = $( this ).val().split('.').pop();
  console.log($( this ).val());
  if ($( this ).val() != '') {
  if(ext == "PDF" || ext == "pdf" || ext == "docx"|| ext == "DOCX"|| ext == "zip" || ext == "png" || ext == "PNG" || ext == "jpg" || ext == "JPG" || ext == "jpeg"  || ext == "JPEG" || ext == "rar" || ext == "xlsx"  || ext == "xls" ){
      if($(this)[0].files[0].size > 31457280){ //---- 30 MB 
      //if($(this)[0].files[0].size > 1048576){ // 1 MB
      //if($(this)[0].files[0].size > 10485760){ // ---> 10 MB
          Swal.fire("El archivo selecionado es demasiado pesado","<label style='color:#9B0000;'>seleccionar un archivo mas liviano</label>","warning");
          $("#txt_archivo").val("");
          return;
          //$("#btn_subir").prop("disabled",true);
      }else{
          //$("#btn_subir").attr("disabled",false);
      }
      $("#txtformato").val(ext);
      }
      else
      {
      $("#txt_archivo").val("");
      Swal.fire("Mensaje de Error","Extensión no permitida: " + ext,"","error");
      }
  }
});

    </script>
