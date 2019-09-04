<!DOCTYPE HTML>
<html>
@include('template-painel.head')
<body>
<div id="wrapper">

<!----->
        @include('template-painel.topo')


            <!-- Brand and toggle get grouped for better mobile display -->

		   <!-- Collect the nav links, forms, and other content for toggling -->

			<div class="clearfix">
<!-- espaçamento-->
     </div>

		    @include('template-painel.menu')
			</div>
        </nav>
        <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">

  		<!--Conteudo da pagina###################################################################################-->
<div class="gallery">

<h3>Listar disciplina</h3>
<div class="gallery">
    <h3 id="forms-example" class="">@yield('title')</h3>
    @if(Session::has('message'))
        <div class="alert alert-success">
              <button type="button" class="btn btn-success warning_2" data-dismiss="alert" aria-hidden="true">×</button>
              {!! Session::get('message') !!}
              <a href="{{ URL:: to('inserir-programacao')}}" class="alert-link">Inserir outra disciplina??</a>
        </div>
    @endif


    <div class="panel-body">
               <div class="dataTable_wrapper">
                   <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                       <thead>
                           <tr>
                               <th>Nome</th>
                           </tr>
                       </thead>
                       <tbody>
                         @foreach( $disciplina as $disciplina )

                           <tr>
                             <td>{{$disciplina->nome}}</td>
                             <td>
                                <a href="{{URL::to('discplina/' .$disciplina->id. '/edit')}}"><button class="btn btn-primary" type="button" name="button">Detalhes</button></a>
                             </td>

                           </tr>

                         @endforeach
                       </tbody>
                   </table>
               </div>
           </div>
    <!--foreach-->


 <!--//Conteudo da pagina###################################################################################-->
 <!--content-->

</div>
<div class="clearfix"> </div>
</div>
    </div>
</div>
<div class="clearfix"> </div>
</div>
<!--//content-->



<!---->
 @include('template-painel.footer')
 </body>
 </html>
