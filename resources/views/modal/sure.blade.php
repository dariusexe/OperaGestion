<div class="modal fade" id="sure" tabindex="-1" role="dialog" arial-labelledby="sureLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Eliminar Usuario</h4>
            </div>
            <div class="modal-body">
            <form method="POST" action="{{url('/users').'/:USER_ID'}}" id="form-delete">
            <input name="_method" type="hidden" value="GET">
            <input name="_token" type="hidden" value="">


         </form> 
            </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="#" class="btn btn-danger" >Borrar</a>

      </div>
            
        </div>
    </div>
</div>
