      <!-- /.navbar-default -->
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{url('/')}}"  title="&copy; QuetzalEdu 2017"><img src="{{asset('img/logotipo.png')}}"></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="{{url('/quienes_somos')}}">¿QUIÉNES SOMOS?</a></li>
                <li><a href="{{url('/#cursos')}}">CURSOS</a></li>
                <li><a href="{{url('/#experiencias')}}">EXPERIENCIAS</a></li>
                <li><a href="{{url('/#contacto')}}">CONTACTO</a></li>
                <li><a href="{{url('/ingresar')}}" class="ingresar">INICIAR SESIÓN</a></li>
                <a href="{{url('/registro')}}" class="btn btn-danger registro">REGISTRARSE</a>
              </ul>
            </div>
          </div>
        </nav>
      <!-- navbar-default./ -->