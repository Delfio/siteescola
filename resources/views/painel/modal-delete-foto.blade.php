<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
               <div class="modal-dialog">
                   <div class="modal-content">
                       <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h2 class="modal-title">Deletar Foto</h2>
                       </div>
                       <div class="modal-body">
                           <h2>Deletar Fotos</h2>
                           <p>Gostaria mesmo de deletar este Foto?</p>

                       </div>
                       <div class="modal-body">
                           <div class="form-group">

                                <img id="mostra" src="{{URL:: to('/')}}/img-imagens/{{ $foto->foto }}"width="400" height="600" alt="" />

                           </div>
                           <p>Gostaria mesmo de deletar esta Foto?</p>


                       </div>
                       <div class="modal-footer">
                               <!-- Form para deletar isto -->
                               {!! Form::open(['route'=> ['deletarfoto.destroy', $foto->id],'method'=>'DELETE']) !!}

                                     <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                                     {!!Form::submit('DELETAR', ['class' => 'btn btn-danger', 'data' => 'modal'])!!}

                              {!! Form::close() !!}

                       </div>
                   </div><!-- /.modal-content -->
               </div><!-- /.modal-dialog -->
           </div>
