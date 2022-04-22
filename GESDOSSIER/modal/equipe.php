    
    <div class="modal fade" id="equipe-new">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Customer Info</h5><a href="#" class="close" data-bs-dismiss="modal"
                        aria-label="Close"><em class="icon ni ni-cross"></em></a>
                </div>
                <div class="modal-body">
                    <form action="manage/create.php" class="form-validate is-alter" method="POST">
                        <input type="hidden" name="event" value="CREATE_EQUIPE" required>
                        <div class="form-group"><label class="form-label" for="full-name">Full Name</label>
                            <div class="form-control-wrap"><input type="text" name="equipe" class="form-control" id="full-name"
                                    required></div>
                        </div>
                        <div class="form-group"><button type="submit" class="btn btn-lg btn-primary">Save
                                Informations</button></div>
                    </form>
                </div>
                <div class="modal-footer bg-light"><span class="sub-text">Modal Footer Text</span></div>
            </div>
        </div>
    </div>


    