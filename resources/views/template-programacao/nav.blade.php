<div class="navigation">
    <nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
            <nav class="stroke">
                <ul class="nav navbar-nav">
                    <li class="hvr-rectangle-out"><a href="{{ URL:: to('/')}}">Home</a></li>
                    <li><a class="hvr-rectangle-out" href="{{ URL:: to('horarios')}}">Horarios de Aula</a></li>
                    <li><a href="{{ URL:: to('informes')}}" class="hvr-rectangle-out">Informes</a></li>
                    <li class="active"><a href="{{ URL:: to('programacao')}}">Programação</a></li>
                    <li><a href="{{ URL:: to('radio')}}" class="hvr-rectangle-out">Radio</a></li>
                    <li><a href="{{ URL:: to('galeria')}}" class="hvr-rectangle-out">Galeria</a></li>
                </ul>
            </nav>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
</div>
