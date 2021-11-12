
        <form action="{{ route('storeclient')}}" method="POST">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="title"> Cedula:</label>
                <input type="text" class="form-control" name="cedula" >
            </div>
            <div class="form-group">
                <label for="title"> Nombre:</label>
                <input type="text" class="form-control" name="nombre" >
            </div>
            <div class="form-group">
                <label for="title"> Apellido:</label>
                <input type="text" class="form-control" name="apellido" >
            </div>
            <div class="form-group">
                <label for="title"> Direccion:</label>
                <input type="text" class="form-control" name="direccion" >
            </div>
            <div class="form-group">
                <label for="title"> Telefono:</label>
                <input type="text" class="form-control" name="telefono" >
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
     
      