    <div class="modal fade" id="affectation">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Customer Info</h5><a href="#" class="close" data-bs-dismiss="modal"
                        aria-label="Close"><em class="icon ni ni-cross"></em></a>
                </div>
                <div class="modal-body">
                    <form action="manage/create.php" class="form-validate is-alter" method="POST">
                        <input type="hidden" name="event" value="CREATE_AFFECTATION" required>
                        <input type="hidden" name="id" value="<?php echo $_GET['id']?>" required>
                        <div class="form-group">
                            <div class="form-control-wrap ">
                                <label class="form-label" for="full-name">Document</label>
                                <div class="form-control-select">
                                    <select class="form-control" id="default-06" name="affectation">
                                    <?php
                                                $sql = "SELECT * FROM tbl_document";
                                                $req = $app->fetchPrepared($sql);
                                                foreach ($req as $row) {
                                                ?> 
                                        <option value="<?php echo $row['id_document']?>"><?php echo $row['designation_document']?></option> 
                                    <?php
                                                }
                                    ?>                                        
                                    </select>
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