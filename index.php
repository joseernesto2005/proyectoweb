<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    

<body>

<center><h1>Bienvenido a mi pagina web</h1></center>
           <div class="container">
              <div class="row justify-content-center mt-5">
                  <div class="col-lg-4 col-md-8 col-sm-8">
                      <div class="card shadow-lg">
                         <div class="card-title text-center border-bottom">
                           <div class="text-center">
                          <img src="img/logo2.png" height="120" class="rounded" alt="..." >
                        </div>
                     </div>
                    <div class="card-body">
                    
                  <form action="conexion2.php"  method="POST" class="row g-3 needs-validation" novalidate>
                    
                <div class="mb-4">

                  <div class="form-group">
                    
              <label for="" class="form-label">Ingrese su nombre de Usuario:</label>
            <input type="text" name="usua"  class="form-control" required>
        




                  <div class="invalid-feedback">
                     Nombre obligatorio

                      </div>

                        </div>
               
                         <div class="mb-4">

                         <div class="form-group">
                   
                           <label for="" class="form-label">Ingrese su Contraseña:</label>
                           <input type="password"  name="contra" class="form-control" required>
                           

                     
                                   <div class="invalid-feedback">

                                     Contraseña Obligatoria


                                      </div>
                     
                                   </div>
                                  </div>
                                <div class="d-grid"> 
                                
                                
                                
                                
                             <button class="btn btn-primary"  type="submit">Ingresar </button><br>
                              

                           <a  role="button" class="btn btn-success" href="registrar3.php" >Registrarse</a>

                        </div>
                    </form>
                </div>
             </div>
          </div>
       </div>
   </div>

<script>


(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()








</script>








</body>


</html>
























