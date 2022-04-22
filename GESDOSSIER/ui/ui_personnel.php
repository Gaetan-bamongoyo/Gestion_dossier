                                <?php
                                    include('class/app.php');
                                ?>
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="nk-block-title">Liste de personnel</h4>
                                                <div class="nk-block-des">
                                                    <a  href="#personne" data-bs-toggle="modal" class="btn btn-dim btn-outline-primary" data-id="<?php echo $_GET['id'] ?>">Nouveau personnel</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-bordered card-preview">
                                            <div class="card-inner">
                                                <table class="datatable-init nk-tb-list nk-tb-ulist"
                                                    data-auto-responsive="false">
                                                    <thead>
                                                        <tr class="nk-tb-item nk-tb-head">
                                                            <th class="nk-tb-col nk-tb-col-check">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox notext">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="uid"><label class="custom-control-label"
                                                                        for="uid"></label></div>
                                                            </th>
                                                            <th class="nk-tb-col"><span class="sub-text">Personnel</span>
                                                            </th>
                                                            <th class="nk-tb-col tb-col-mb"><span
                                                                    class="sub-text">Matricule</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span
                                                                    class="sub-text">Phone</span></th>
                                                            <th class="nk-tb-col tb-col-lg"><span
                                                                    class="sub-text">Adresse</span></th>
                                                            <th class="nk-tb-col tb-col-md"><span
                                                                    class="sub-text">Status</span></th>
                                                            <th class="nk-tb-col nk-tb-col-tools text-end"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        $id = $_GET['id'];
                                                        $sql = "SELECT * FROM tbl_personne INNER JOIN tbl_equipe 
                                                        ON tbl_personne.code_equipe = tbl_equipe.id_equipe 
                                                        WHERE tbl_equipe.id_equipe = $id";
                                                        $req = $app->fetchPrepared($sql);
                                                        foreach ($req as $row) {
                                                    ?>
                                                        <tr class="nk-tb-item">
                                                            <td class="nk-tb-col nk-tb-col-check">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-checkbox notext">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="uid1"><label class="custom-control-label"
                                                                        for="uid1"></label></div>
                                                            </td>
                                                            <td class="nk-tb-col">
                                                                <div class="user-card">
                                                                    <div
                                                                        class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                                        <span>AB</span></div>
                                                                    <div class="user-info"><span class="tb-lead"><?php echo $row['nom'].' '.$row['prenom']?><span
                                                                                class="dot dot-success d-md-none ms-1"></span></span><span>info@softnio.com</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-mb" data-order="35040.34"><span
                                                                    class="tb-amount"><?php echo $row['matricule']?><span
                                                                        class="currency"></span></span></td>
                                                            <td class="nk-tb-col tb-col-md"><span><?php echo $row['phone']?></span>
                                                            </td>
                                                            <td class="nk-tb-col tb-col-lg"
                                                                data-order="Email Verified - Kyc Unverified">
                                                                <ul class="list-status">
                                                                    <li><em
                                                                            class="icon text-success ni ni-check-circle"></em>
                                                                        <span><?php echo $row['adresse']?></span></li>
                                                                </ul>
                                                            </td>
                                                            <td class="nk-tb-col nk-tb-col-tools">
                                                                <ul class="nk-tb-actions gx-1">
                                                                    <li>
                                                                        <div class="drodown"><a href="#"
                                                                                class="dropdown-toggle btn btn-icon btn-trigger"
                                                                                data-bs-toggle="dropdown"><em
                                                                                    class="icon ni ni-more-h"></em></a>
                                                                            <div
                                                                                class="dropdown-menu dropdown-menu-end">
                                                                                <ul class="link-list-opt no-bdr">
                                                                                    <li><a href="document.php?id=<?php echo $row['id_personne'] ?>"><em
                                                                                                class="icon ni ni-eye"></em><span>
                                                                                                Documents</span></a></li>
                                                                                    <li><a href="profil.php?id=<?php echo ['id_personnel']?>"><em
                                                                                                class="icon ni ni-focus"></em><span>
                                                                                                Profil</span></a></li>
                                                                                    <li><a href="profil.php?id=<?php echo ['id_personnel']?>"><em
                                                                                                class="icon ni ni-eye"></em><span>
                                                                                                Editer</span></a></li>

                                                                                    <li><a href="profil.php?id=<?php echo ['id_personnel']?>"><em
                                                                                                class="icon ni ni-repeat"></em><span>Supprimer</span></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                        }
                                                    ?>
                                                    </tbody>
                                                </table>
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