</div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
<<<<<<< HEAD
            <span>Copyright © Vanilla <?php echo date("Y");?></span>
=======
            <span>Copyright © Vanilla 2020</span>
>>>>>>> master
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Elige "Cerrar Sesión" si estas listo para salir de la plataforma.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="../BackEnd Cliente/logout.php">Cerrar sesión</a>
        </div>
      </div>
    </div>
  </div>

<<<<<<< HEAD
  <!-- Delete Account Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
=======
<<<<<<< Updated upstream
<<<<<<< Updated upstream
=======
=======
>>>>>>> Stashed changes
  <!-- Delete Account Modal-->
<div class="modal fade" id="deleteAccountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
>>>>>>> master
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Estas a punto de eliminar tu cuenta para siempre.</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">¿Estás seguro que deseas eliminarla?</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
<<<<<<< HEAD
            <input type="submit" name="delete" class="btn btn-sm btn-danger" value="Eliminar cuenta">
=======
            <a class="btn btn-primary" href="login.html" data-toggle="modal" data-target="#deleteAccountModal2">Eliminar cuenta</a>
>>>>>>> master
          </div>
        </div>
      </div>
    </div>

<!-- Change Password Modal-->
<div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cambia tu contraseña.</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
<<<<<<< HEAD
          <div class="form-label-group mb-3 ml-3 mr-3 mt-3">
            <input type="password" id="contra1" name="contra1" class="form-control" placeholder="text" required="required" autofocus="autofocus">
            <label for="contra1">Nueva contraseña:</label>
          </div>
          <div class="form-label-group mb-3 ml-3 mr-3">
            <input type="password" id="contra" name="contra" class="form-control" placeholder="text" required="required" autofocus="autofocus">
            <label for="contra">Confirmar contraseña:</label>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <input type="submit" name="password" class="btn btn-primary" value="Guardar datos">
=======
          <div class="form-label-group mb-3 ml-0 mr-0 mt-3">
            <input type="password" id="contra" name="contra" class="form-control" placeholder="text" required="required" autofocus="autofocus">
            <label for="contra">Contraseña actual:</label>
          </div>
          <div class="form-label-group mb-3 ml-0 mr-0">
            <input type="password" id="contra1" name="contra1" class="form-control" placeholder="text" required="required" autofocus="autofocus">
            <label for="contra1">Nueva contraseña:</label>
          </div>
          <div class="form-label-group mb-3 ml-0 mr-0">
            <input type="password" id="contra2" name="contra2" class="form-control" placeholder="text" required="required" autofocus="autofocus">
            <label for="contra2">Confirmar contraseña:</label>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="login.html" data-toggle="modal" data-target="#deleteAccountModal2">Cambiar contraseña</a>
>>>>>>> master
          </div>
        </div>
      </div>
    </div>

<!--Buy Avatar Modal-->
<div class="modal fade" id="buyAvatarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Estas a punto de comprar un nuevo Avatar.</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">¿Estás seguro que deseas comprarlo?</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="login.html" data-toggle="modal" data-target="#deleteAccountModal2">Comprar Avatar</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Reservation Modal-->
  <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Reservacion</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Llena el formulario para realizar una reservacion.
          <div class="form-label-group mb-3 ml-0 mr-0 mt-3">
            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="text" required="required" autofocus="autofocus">
            <label for="nombre">Nombre:</label>
          </div>
          <div class="form-label-group mb-3 ml-0 mr-0 mt-3">
            <input type="email" id="correo" name="correo" class="form-control" placeholder="text" required="required" autofocus="autofocus">
            <label for="correo">Correo:</label>
          </div>
          <div class="form-label-group mb-3 ml-0 mr-0 mt-3">
            <input type="phone" id="telefono" name="telefono" class="form-control" placeholder="text" required="required" autofocus="autofocus">
            <label for="telefono">Telefono:</label>
          </div>
          <div class="form-label-group mb-3 ml-0 mr-0 mt-3">
            <input type="number" id="personas" name="personas" class="form-control" placeholder="text" required="required" autofocus="autofocus">
            <label for="personas">Num. de personas:</label>
          </div>
          <div class="form-label-group mb-3 ml-0 mr-0 mt-3">
            <input type="text" id="comentario" name="comentario" class="form-control" placeholder="text" required="required" autofocus="autofocus">
            <label for="comentario">Comentario:</label>
          </div>
          <div class="form-label-group ml-0 mr-0 mt-3">
            <input type="datetime-local" id="fecha" name="fecha" class="form-control" placeholder="text" required="required" autofocus="autofocus">
            <label for="fecha">Fecha y hora:</label>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="#">Reservar</a>
        </div>
      </div>
    </div>
  </div>

<<<<<<< HEAD
=======
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
>>>>>>> master
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>
<<<<<<< HEAD
  <script src="js/main.js"></script>
=======

>>>>>>> master
</body>

</html>