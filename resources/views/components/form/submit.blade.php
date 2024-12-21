@props(['submit' => false, 'color' => false])
<div class="modal-footer">
    <div class="hstack gap-2 justify-content-end">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">close</button>
        <button type="submit" class="btn btn-{{ $color ? $color : 'success' }} " id="add-btn">save</button>
    </div>
</div>
