                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-12">
                                            <div class="card card-bordered">
                                                <div class="card-inner">
                                                    <div class="card-title mb-4">
                                                        <h3 class="title">Welcome to CFT Dashboard!</h3>
                                                    </div>
                                                    <div class="row g-gs">
                                                        <div class="col-xxl-3">
                                                            <div class="fake-class">
                                                                <h5 class="title">Get Started</h5>
                                                                <div class="nk-block-des text-soft">
                                                                    <p>You can customize your site from here.</p>
                                                                </div><a href="#"
                                                                    class="btn btn-primary btn-lg mt-4">Customize
                                                                    Site</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-4 col-xxl-3">
                                                            <div class="fake-class">
                                                                <h5 class="title">Personnel activity</h5>
                                                                <ul class="link-list is-compact pb-0">
                                                                    <li><a href="post-add.html"><em
                                                                                class="icon ni ni-file-text"></em><span>Write
                                                                                a blog post</span></a></li>
                                                                    <li><a href="page-add.html"><em
                                                                                class="icon ni ni-property-add"></em><span>Add
                                                                                an about page</span></a></li>
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-laptop"></em><span>View
                                                                                your site</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-4 col-xxl-3">
                                                            <div class="fake-class">
                                                                <h5 class="title">Nombre d'employes</h5>
                                                                <ul class="link-list is-compact pb-0">
                                                                <?php
                                                                    $sql = "SELECT COUNT(id_personne) as nbre FROM tbl_personne";
                                                                    $req = $app->fetchPrepared($sql);
                                                                    foreach ($req as $row) {
                                                                ?>
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-edit-fill"></em><span><?php echo $row["nbre"]?> Personnes
                                                                                </span></a></li>
                                                                <?php
                                                                    }
                                                                ?>
                                                                <?php
                                                                    $sql = "SELECT COUNT(id_dossier) as nbre FROM tbl_dossier";
                                                                    $req = $app->fetchPrepared($sql);
                                                                    foreach ($req as $row) {
                                                                ?>
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-files"></em><span><?php echo $row["nbre"]?>
                                                                                Dossiers</span></a></li>
                                                                <?php
                                                                    }
                                                                ?>
                                                                    
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-4 col-xxl-3">
                                                            <div class="fake-class">
                                                                <h5 class="title">More Actions</h5>
                                                                <ul class="link-list is-compact pb-0">
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-grid-fill"></em><span>Manage
                                                                                widgets or menu</span></a></li>
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-comments"></em><span>Trun
                                                                                comments off or on</span></a></li>
                                                                    <li><a href="#"><em
                                                                                class="icon ni ni-more-h"></em><span>More
                                                                                about getting started</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    