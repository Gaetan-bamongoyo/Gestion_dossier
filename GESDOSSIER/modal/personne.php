    <div class="modal fade" id="personne">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Customer Info</h5><a href="#" class="close" data-bs-dismiss="modal"
                        aria-label="Close"><em class="icon ni ni-cross"></em></a>
                </div>
                <div class="modal-body">
                    <form action="manage/create.php" class="form-validate is-alter" method="POST">
                        <input type="hidden" name="event" value="CREATE_PERSONNE" required>
                        <input type="hidden" name="id" value="<?php echo $_GET['id']?>" required>
                        <div class="form-group">
                            <label class="form-label" for="full-name">Nom</label>
                            <div class="form-control-wrap">
                                <input type="text" name="nom" class="form-control" id="full-name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="full-name">Postnom</label>
                            <div class="form-control-wrap">
                                <input type="text" name="postnom" class="form-control" id="full-name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="full-name">Prenom</label>
                            <div class="form-control-wrap">
                                <input type="text" name="prenom" class="form-control" id="full-name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="full-name">Lieu de naissance</label>
                            <div class="form-control-wrap">
                                <input type="text" name="lieu" class="form-control" id="full-name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="full-name">Date de naissance</label>
                            <div class="form-control-wrap">
                                <input type="date" name="date" class="form-control" id="full-name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-control-wrap ">
                                <label class="form-label" for="full-name">Sexe</label>
                                <div class="form-control-select">
                                    <select class="form-control" id="default-06" name="sexe">
                                        <option value="Feminin">Feminin</option> 
                                        <option value="Masculin">Masculin</option>                                         
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="full-name">Adresse</label>
                            <div class="form-control-wrap">
                                <input type="text" name="adresse" class="form-control" id="full-name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="full-name">Matricule</label>
                            <div class="form-control-wrap">
                                <input type="text" name="matricule" class="form-control" id="full-name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="full-name">Telephone</label>
                            <div class="form-control-wrap">
                                <input type="number" name="phone" class="form-control" id="full-name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="full-name">Email</label>
                            <div class="form-control-wrap">
                                <input type="text" name="email" class="form-control" id="full-name" required>
                            </div>
                        </div>
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