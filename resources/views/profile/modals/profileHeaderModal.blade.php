<div class="modal fade" id="profileHeaderModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add your best advice</h4>
            </div>
            <div class="modal-body">
                @include('profile.modals.profileHeaderModalBody')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button id="profileHeaderSave" type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

