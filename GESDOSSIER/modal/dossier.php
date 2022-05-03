    <div class="modal fade" id="dossier">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Customer Info</h5><a href="#" class="close" data-bs-dismiss="modal"
                        aria-label="Close"><em class="icon ni ni-cross"></em></a>
                </div>
                <div class="modal-body">
                    <form action="manage/create.php" class="form-validate is-alter" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="event" value="CREATE_DOSSIER" required>
                        <input type="hidden" name="id" value="<?php echo $_GET['id']?>" required>
                        <div class="form-group">
                            <label class="form-label" for="default-06">Photo</label>
                            <div class="form-control-wrap">
                                <div class="form-file">
                                    <input type="file" multiple class="form-file-input" id="customFile" name="photo">
                                    <label class="form-file-label" for="customFile">Selectionner une photo</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"><button type="submit" class="btn btn-lg btn-primary">Save
                                Informations</button></div>
                    </form>
                </div>
                <div class="modal-footer bg-light"><span class="sub-text">Modal Footer Text</span></div>
            </div>
        </div>
    </div>