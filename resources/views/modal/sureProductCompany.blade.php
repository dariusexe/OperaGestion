<div class="modal fade" id="sureProductCompany" tabindex="-1" role="dialog" arial-labelledby="sureLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="sureTitle">Eliminar Compañia</h4>
            </div>
            <div class="modal-body">
            


            

            </div>
      <div class="modal-footer">
      <form method="POST" action="" id="form-delete">
            <input name="_method" type="hidden" value="DELETE">
          <input name="_token" type="hidden" value="{{csrf_token()}}">

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger" id="delete2">Borrar</button>
        </form> 
      </div>
        </div>
    </div>
</div>
