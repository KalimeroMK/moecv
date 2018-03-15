<div class="modal fade" id="socialNetworksModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Choose your Social Network</h4>
            </div>
            <div class="modal-body">
                @include('profile.modals.socialNetworksModalBody')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveSocialNetworks">Save changes</button>
            </div>
        </div>
    </div>
</div>