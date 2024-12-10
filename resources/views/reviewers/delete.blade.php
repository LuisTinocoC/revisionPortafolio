<!-- Modal para eliminar -->
<div class="modal fade" id="modal-delete-{{ $reviewer->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-delete-label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="modal-delete-label">Eliminar Revisor</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de que deseas eliminar al revisor <strong>{{ $reviewer->name }}</strong>? Esta acción no se puede deshacer.
            </div>
            <div class="modal-footer">
                <form action="{{ route('reviewers.destroy', $reviewer->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>
