<?php include("view/admin/db.php"); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro del Personal</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="css/bootstrap.min.css">
  
    <link rel="stylesheet" href="css/font-awesome.min.css">
  
    <link rel="stylesheet" href="css/sweetalert.css">

    <link rel="stylesheet" href="css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">

    <link rel="stylesheet" href="css/responsive.bootstrap.min.css">

    <link rel="stylesheet" href="css/menu2.css">

  </head>
  <body>
<nav>
  <ul class="pager">
    <li class="previous"><a href="view/recursos/index.php"><span aria-hidden="true">&larr;</span> Regresar a Modulo</a></li>
  </ul>  

     <div class="row" >
      <ul class="col-xs-offset-4" >

        <li><a href="registro.php">| General  </a></li>
        <li><a href="registro-profecional.php">| Profecional  </a></li>
        <li><a href="registro-contrato.php">| Contrato  |</a></li>

      </ul>
      </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
      
        
         <div class="container" >
          <form id="formulario_registro">
           
            <fieldset>

              <legend class="center"><i class="fa fa-user"> Registro de Usuarios (Contrato)</i></legend>

          

              <?php

                $query = "SELECT id FROM usuarios";
                  $result_usuarios = mysqli_query($conn, $query);

                  if($result_usuarios->num_rows > 0){


                while($row = mysqli_fetch_array($result_usuarios)) {
                  $id = $row['id'];
                 }
               }
                ?>


              <label class="sr-only" for="user">Usuario</label>
              <div class="form-group">

                <label class="control-label col-sm-1" for="tipo"> Codigo: </label>
                 <div class="col-sm-2">                                
                  <input readonly type="text" class="form-control" name="user" placeholder="Usuario" value="MBR0<?php echo $id +1?>">
                 </div>
               
               <label class="control-label col-sm-1" for="tipo"> DNI:  </label>
                <div class="col-sm-2">                
                  <input type="text" class="form-control" name="user" placeholder="DNI" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "8">
                </div>  
             
              <br>
              <br>
              <br>

              <div class="form-group">

              <label class="control-label col-sm-1" for="tipo">Apellidos: </label>
          
                <div class="col-sm-2">
                  <input type="text" class="form-control" name="lastname" placeholder="Apellido">
                </div>
             

             <label class="control-label col-sm-1" for="tipo">Nombres: </label>
              
                <div class="col-sm-2">
                  <input type="text" class="form-control" name="name" placeholder="Nombre">
                </div>
             
            
              
              <label class="control-label col-sm-1" for="sex"> Sexo: </label>
                 <div class="col-sm-2">
                <select  class="form-control" name="sex">
                
                  <option value="Masculino">Masculino</option>                
                  <option value="Femenino">Femenino</option>

                </select>
              </div>  
            </div>

            <br>
            <br>

            <div class="form-group">
            <label class="control-label col-sm-2" for="name_afp">N° AFP: </label>
              
                <div class="col-sm-3">
                  <input type="text" class="form-control" name="name_afp" placeholder="N° AFP">
                </div>

            <label class="control-label col-sm-2" for="afp">Nombre/AFP: </label>
              
                <div class="col-sm-3">
                  <input type="text" class="form-control" name="afp" placeholder="Nombre de AFP">
                </div>
             </div>   

             <br>
             <br>

             <label class="control-label col-sm-2" for="seguro">N° Seguro Social: </label>
              <div class="col-sm-3">
                  <input type="text" class="form-control" name="seguro" placeholder="Nombre de Seguro">
              </div>

             <br>
             <br>
             <br>
             
              <label class="control-label col-sm-2" for="tipo">Fecha Nacimiento: </label>
              <div class="col-sm-3">               
                <input type="date"  value="1980-01-01" class="form-control" name="age" placeholder="Fecha de Nacimiento">
              </div>

             <br>
             <br>
             <br>

              <div class="form-group">
              <label class="control-label col-sm-1" for="country">País: </label>
              <div class="col-sm-2">                
                <select class="form-control" name="country" placeholder="País">
                  <option value="Peru">Perú</option>
                  <option value="Afganistán">Afganistán</option>
                  <option value="Albania">Albania</option>
                  <option value="Alemania">Alemania</option>
                  <option value="AD">Andorra</option>
                  <option value="AO">Angola</option>
                  <option value="AI">Anguilla</option>
                  <option value="AQ">Antártida</option>
                  <option value="AG">Antigua y Barbuda</option>
                  <option value="AN">Antillas Holandesas</option>
                  <option value="SA">Arabia Saudí</option>
                  <option value="DZ">Argelia</option>
                  <option value="AR">Argentina</option>
                  <option value="AM">Armenia</option>
                  <option value="AW">Aruba</option>
                  <option value="AU">Australia</option>
                  <option value="AT">Austria</option>
                  <option value="AZ">Azerbaiyán</option>
                  <option value="BS">Bahamas</option>
                  <option value="BH">Bahrein</option>
                  <option value="BD">Bangladesh</option>
                  <option value="BB">Barbados</option>
                  <option value="BE">Bélgica</option>
                  <option value="BZ">Belice</option>
                  <option value="BJ">Benin</option>
                  <option value="BM">Bermudas</option>
                  <option value="BY">Bielorrusia</option>
                  <option value="MM">Birmania</option>
                  <option value="BO">Bolivia</option>
                  <option value="BA">Bosnia y Herzegovina</option>
                  <option value="BW">Botswana</option>
                  <option value="BR">Brasil</option>
                  <option value="BN">Brunei</option>
                  <option value="BG">Bulgaria</option>
                  <option value="BF">Burkina Faso</option>
                  <option value="BI">Burundi</option>
                  <option value="BT">Bután</option>
                  <option value="CV">Cabo Verde</option>
                  <option value="KH">Camboya</option>
                  <option value="CM">Camerún</option>
                  <option value="CA">Canadá</option>
                  <option value="TD">Chad</option>
                  <option value="Chile">Chile</option>
                  <option value="CN">China</option>
                  <option value="CY">Chipre</option>
                  <option value="VA">Ciudad del Vaticano (Santa Sede)</option>
                  <option value="Colombia">Colombia</option>
                  <option value="KM">Comores</option>
                  <option value="CG">Congo</option>
                  <option value="CD">Congo, República Democrática del</option>
                  <option value="KR">Corea</option>
                  <option value="KP">Corea del Norte</option>
                  <option value="CI">Costa de Marfíl</option>
                  <option value="CR">Costa Rica</option>
                  <option value="HR">Croacia (Hrvatska)</option>
                  <option value="CU">Cuba</option>
                  <option value="DK">Dinamarca</option>
                  <option value="DJ">Djibouti</option>
                  <option value="DM">Dominica</option>
                  <option value="Ecuador">Ecuador</option>
                  <option value="EG">Egipto</option>
                  <option value="SV">El Salvador</option>
                  <option value="AE">Emiratos Árabes Unidos</option>
                  <option value="ER">Eritrea</option>
                  <option value="SI">Eslovenia</option>
                  <option value="España">España</option>
                  <option value="US">Estados Unidos</option>
                  <option value="EE">Estonia</option>
                  <option value="ET">Etiopía</option>
                  <option value="FJ">Fiji</option>
                  <option value="PH">Filipinas</option>
                  <option value="FI">Finlandia</option>
                  <option value="FR">Francia</option>
                  <option value="GA">Gabón</option>
                  <option value="GM">Gambia</option>
                  <option value="GE">Georgia</option>
                  <option value="GH">Ghana</option>
                  <option value="GI">Gibraltar</option>
                  <option value="GD">Granada</option>
                  <option value="GR">Grecia</option>
                  <option value="GL">Groenlandia</option>
                  <option value="GP">Guadalupe</option>
                  <option value="GU">Guam</option>
                  <option value="GT">Guatemala</option>
                  <option value="GY">Guayana</option>
                  <option value="GF">Guayana Francesa</option>
                  <option value="GN">Guinea</option>
                  <option value="GQ">Guinea Ecuatorial</option>
                  <option value="GW">Guinea-Bissau</option>
                  <option value="HT">Haití</option>
                  <option value="HN">Honduras</option>
                  <option value="HU">Hungría</option>
                  <option value="IN">India</option>
                  <option value="ID">Indonesia</option>
                  <option value="IQ">Irak</option>
                  <option value="IR">Irán</option>
                  <option value="IE">Irlanda</option>
                  <option value="BV">Isla Bouvet</option>
                  <option value="CX">Isla de Christmas</option>
                  <option value="IS">Islandia</option>
                  <option value="KY">Islas Caimán</option>
                  <option value="CK">Islas Cook</option>
                  <option value="CC">Islas de Cocos o Keeling</option>
                  <option value="FO">Islas Faroe</option>
                  <option value="HM">Islas Heard y McDonald</option>
                  <option value="FK">Islas Malvinas</option>
                  <option value="MP">Islas Marianas del Norte</option>
                  <option value="MH">Islas Marshall</option>
                  <option value="UM">Islas menores de Estados Unidos</option>
                  <option value="PW">Islas Palau</option>
                  <option value="SB">Islas Salomón</option>
                  <option value="SJ">Islas Svalbard y Jan Mayen</option>
                  <option value="TK">Islas Tokelau</option>
                  <option value="TC">Islas Turks y Caicos</option>
                  <option value="VI">Islas Vírgenes (EEUU)</option>
                  <option value="VG">Islas Vírgenes (Reino Unido)</option>
                  <option value="WF">Islas Wallis y Futuna</option>
                  <option value="IL">Israel</option>
                  <option value="IT">Italia</option>
                  <option value="JM">Jamaica</option>
                  <option value="JP">Japón</option>
                  <option value="JO">Jordania</option>
                  <option value="KZ">Kazajistán</option>
                  <option value="KE">Kenia</option>
                  <option value="KG">Kirguizistán</option>
                  <option value="KI">Kiribati</option>
                  <option value="KW">Kuwait</option>
                  <option value="LA">Laos</option>
                  <option value="LS">Lesotho</option>
                  <option value="LV">Letonia</option>
                  <option value="LB">Líbano</option>
                  <option value="LR">Liberia</option>
                  <option value="LY">Libia</option>
                  <option value="LI">Liechtenstein</option>
                  <option value="LT">Lituania</option>
                  <option value="LU">Luxemburgo</option>
                  <option value="MK">Macedonia, Ex-República Yugoslava de</option>
                  <option value="MG">Madagascar</option>
                  <option value="MY">Malasia</option>
                  <option value="MW">Malawi</option>
                  <option value="MV">Maldivas</option>
                  <option value="ML">Malí</option>
                  <option value="MT">Malta</option>
                  <option value="MA">Marruecos</option>
                  <option value="MQ">Martinica</option>
                  <option value="MU">Mauricio</option>
                  <option value="MR">Mauritania</option>
                  <option value="YT">Mayotte</option>
                  <option value="México">México</option>
                  <option value="FM">Micronesia</option>
                  <option value="MD">Moldavia</option>
                  <option value="MC">Mónaco</option>
                  <option value="MN">Mongolia</option>
                  <option value="MS">Montserrat</option>
                  <option value="MZ">Mozambique</option>
                  <option value="NA">Namibia</option>
                  <option value="NR">Nauru</option>
                  <option value="NP">Nepal</option>
                  <option value="NI">Nicaragua</option>
                  <option value="NE">Níger</option>
                  <option value="NG">Nigeria</option>
                  <option value="NU">Niue</option>
                  <option value="NF">Norfolk</option>
                  <option value="NO">Noruega</option>
                  <option value="NC">Nueva Caledonia</option>
                  <option value="NZ">Nueva Zelanda</option>
                  <option value="OM">Omán</option>
                  <option value="NL">Países Bajos</option>
                  <option value="PA">Panamá</option>
                  <option value="PG">Papúa Nueva Guinea</option>
                  <option value="PK">Paquistán</option>
                  <option value="PY">Paraguay</option>
                  <option value="PN">Pitcairn</option>
                  <option value="PF">Polinesia Francesa</option>
                  <option value="PL">Polonia</option>
                  <option value="PT">Portugal</option>
                  <option value="PR">Puerto Rico</option>
                  <option value="QA">Qatar</option>
                  <option value="UK">Reino Unido</option>
                  <option value="CF">República Centroafricana</option>
                  <option value="CZ">República Checa</option>
                  <option value="ZA">República de Sudáfrica</option>
                  <option value="DO">República Dominicana</option>
                  <option value="SK">República Eslovaca</option>
                  <option value="RE">Reunión</option>
                  <option value="RW">Ruanda</option>
                  <option value="RO">Rumania</option>
                  <option value="RU">Rusia</option>
                  <option value="EH">Sahara Occidental</option>
                  <option value="KN">Saint Kitts y Nevis</option>
                  <option value="WS">Samoa</option>
                  <option value="AS">Samoa Americana</option>
                  <option value="SM">San Marino</option>
                  <option value="VC">San Vicente y Granadinas</option>
                  <option value="SH">Santa Helena</option>
                  <option value="LC">Santa Lucía</option>
                  <option value="ST">Santo Tomé y Príncipe</option>
                  <option value="SN">Senegal</option>
                  <option value="SC">Seychelles</option>
                  <option value="SL">Sierra Leona</option>
                  <option value="SG">Singapur</option>
                  <option value="SY">Siria</option>
                  <option value="SO">Somalia</option>
                  <option value="LK">Sri Lanka</option>
                  <option value="PM">St Pierre y Miquelon</option>
                  <option value="SZ">Suazilandia</option>
                  <option value="SD">Sudán</option>
                  <option value="SE">Suecia</option>
                  <option value="CH">Suiza</option>
                  <option value="SR">Surinam</option>
                  <option value="TH">Tailandia</option>
                  <option value="TW">Taiwán</option>
                  <option value="TZ">Tanzania</option>
                  <option value="TJ">Tayikistán</option>
                  <option value="TF">Territorios franceses del Sur</option>
                  <option value="TP">Timor Oriental</option>
                  <option value="TG">Togo</option>
                  <option value="TO">Tonga</option>
                  <option value="TT">Trinidad y Tobago</option>
                  <option value="TN">Túnez</option>
                  <option value="TM">Turkmenistán</option>
                  <option value="TR">Turquía</option>
                  <option value="TV">Tuvalu</option>
                  <option value="UA">Ucrania</option>
                  <option value="UG">Uganda</option>
                  <option value="UY">Uruguay</option>
                  <option value="UZ">Uzbekistán</option>
                  <option value="VU">Vanuatu</option>
                  <option value="Venezuela">Venezuela</option>
                  <option value="VN">Vietnam</option>
                  <option value="YE">Yemen</option>
                  <option value="YU">Yugoslavia</option>
                  <option value="ZM">Zambia</option>
                  <option value="ZW">Zimbabue</option>
                </select>
              </div>

               <label class="control-label col-sm-1" for="district">Distrito: </label>
              <div class="col-sm-2">
                  <select class="form-control" name="district" placeholder="Distrito">
                  
                    <option></option>

                  </select>  

                </div>

              <label class="control-label col-sm-1" for="address">Dirección: </label>
              <div class="col-sm-4">             
                <input type="text" class="form-control" name="address" placeholder="Dirección">
              </div>
 
              </div>


              <br>
              <br>

              <div class="form-group">
               <label class="control-label col-sm-2" for="phone">Teléfono: </label>
              <div class="col-sm-3">                  
                <input type="text" class="form-control" name="phone" placeholder="Teléfono">
              </div>
 
         
              <label class="control-label col-sm-2" for="email">Correo: </label>
              <div class="col-sm-3">  
                
                <input type="text" class="form-control" name="email" placeholder="Correo">
              </div>
            </div>
           
              <br>
              <br>

              <div class="form-group">  
              <label class="control-label col-sm-1" for="clave">Contraseña: </label>
              <div class="col-sm-3">               
                <input type="password" autocomplete="off" class="form-control" name="clave" placeholder="Contraseña">
              </div>
      
              <label class="control-label col-sm-1" for="clave">Verificar contraseña</label>
              <div class="col-sm-3">               
                <input type="password" autocomplete="off" class="form-control" name="clave2" placeholder="Verificar contraseña">
              </div>
            </div>
            
              <div class="row" id="load" hidden="hidden">
                <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
                  <img src="img/load.gif" width="100%" alt="">
                </div>
                <div class="col-xs-12 center text-accent">
                  <span>Validando información...</span>
                </div>
              </div>
            

              <br>
              <br>

              <div class="row">
                <div class="col-xs-3 col-xs-offset-4">               
                  <button type="button" class="btn btn-success btn-block" name="button" id="registro">Registrar</button>
                  <a class="btn btn-danger btn-block" href="index.php">Cancelar</a>
                </div>
              </div>




              <a href="index.php"></a>
            </fieldset>
          </form>
        </div>
      </div> 
        <div class="col-12">
       
        <div class="col-md-12" style="text-align: center; margin: 0 auto;">
        <h2>Lista de Usuarios</h2>
          <table  id="datos-tabla" class="table table-bordered">
            
              <thead>
                
                <tr>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Usuario</th>
                  <th>País</th>
                  <th>Provincia</th>                                       
                  <th>Dirección</th>
                  <th>Teléfono</th>
                  <th>Fecha de Nacimento</th>           
                  <th>Correo</th>
                  <th>Perfil</th>
                  <th>Acciones</th>
                </tr>

              </thead>
              <tbody>
                
                <?php 
                
                  $query = "SELECT * FROM usuarios";
                  $result_usuarios = mysqli_query($conn, $query);


                  if($result_usuarios->num_rows > 0){


                while($row = mysqli_fetch_array($result_usuarios)) { ?>
                  
                <tr>
                  <td><?php echo $row['nombre'] ?></td>
                  <td><?php echo $row['apellido'] ?></td>
                  <td><?php echo $row['usuario'] ?></td>
                  <td><?php echo $row['pais'] ?></td>               
                  <td><?php echo $row['provincia'] ?></td>
                  <td><?php echo $row['direccion'] ?></td>
                  <td><?php echo $row['telefono'] ?></td>
                  <td><?php echo $row['nacimiento'] ?></td>
                  <td><?php echo $row['email'] ?></td>
                  <td><?php echo $row['cargo'] ?></td>

                  <td>
                    <a style='width:38px; height:30px' class="btn btn-primary btn-warning" href="view/admin/tablas-acciones/editar-usuarios.php?id=<?php echo $row['id'] ?>"><i class="glyphicon glyphicon-pencil" ><h6></h6></i></a>
                    <a style='width:38px; height:30px'class="btn btn-primary btn-danger" href="view/admin/tablas-acciones/eliminar-usuarios.php?id=<?php echo $row['id'] ?>"><i class="glyphicon glyphicon-trash"><h6></h6></i></a>
                  </td>

               </tr> 

              <?php } ?>

             </tbody>
            </table>

           <?php }else{
             echo "No hay registros :(";
           } ?>
         </div>
       </div>


      </div>
    </div>
</nav>

    <script src="js/jquery.js"></script>
   
    <script src="js/bootstrap.min.js"></script>
    
    <script src="js/sweetalert.min.js"></script>
   
    <script src="js/operaciones.js"></script>

    <script src="js/idioma.js"></script>
     <script src="js/jquery.dataTables.min.js"></script>    

  </body>
</html>
