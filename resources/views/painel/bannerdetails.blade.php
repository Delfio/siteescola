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

<h3>Listar banners</h3>

<div class="grid-form">

    <div class="grid-form1">
        @if(count($errors) > 0)
            <div class="alert alert-warningr">
                <ul>
                    @foreach($errors->all() as $error)

                        <p><b>{!!$error!!}</b></p>

                    @endforeach
               </ul>
           </div>
       @endif

       <h3 id="forms-example" class="">@yield('title')</h3>

       {!! Form::model($banner,['route' =>  ['editbanner.update', $banner->id], 'class' => '','method'=>'PUT']) !!}
           <div class="form-group">
            {!! Form::label('nome', 'Nome: *' ) !!}
            {!! Form::text('nome', null, ['class' => 'form-control', 'placeholder' => ''] ) !!}
           </div>
           <div class="form-group">

               <img id="mostra" src="{{URL::to('/')}}/img-banner/{{$banner->foto_slide}}" width="480" height="360" alt="" />

            </div>

            <div class="form-group">
                <input type="file" id="exampleInputFile"  name="imagem" placeholder="imagePricipal(this);">
           </div>
          <div class="form-group">
           {!!Form::submit('ATUALIZAR', ['class' => 'btn btn-lg btn-primary'])!!}

            {!! Form::close() !!}



          @include('painel.modal-delete-banner')
           <button type="button" class="btn btn-lg btn-danger" data-toggle="modal" data-target="#myModal">
            Deletar Trabalho
           </button>
       </div>

</html>
