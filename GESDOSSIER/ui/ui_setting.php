
                                <div class="nk-fmg-body">
                                    <div class="nk-fmg-body-head d-none d-lg-flex">
                                        <div class="nk-fmg-search"><em class="icon ni ni-search"></em><input type="text"
                                                class="form-control border-transparent form-focus-none"
                                                placeholder="Search files, folders"></div>
                                        <div class="nk-fmg-actions">
                                            <ul class="nk-block-tools g-3">
                                                <li class="d-xl-none d-lg-inline-flex"><a href="#"
                                                        class="btn btn-trigger btn-icon toggle-expand"
                                                        data-target="filter-options"><em
                                                            class="icon ni ni-opt"></em></a></li>
                                                <li><a href="#" class="btn btn-round btn-light btn-icon"><em
                                                            class="icon ni ni-setting"></em></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="nk-fmg-body-content">
                                        <div class="nk-block-head nk-block-head-sm">
                                            <div class="nk-block-between position-relative">
                                                <div class="nk-block-head-content">
                                                    <h3 class="nk-block-title page-title">Recovery</h3>
                                                </div>
                                                <div class="nk-block-head-content">
                                                    <ul class="nk-block-tools g-1">
                                                        <li class="d-lg-none"><a href="#"
                                                                class="btn btn-trigger btn-icon search-toggle toggle-search"
                                                                data-target="search"><em
                                                                    class="icon ni ni-search"></em></a></li>
                                                        <li class="d-lg-none"><a href="#"
                                                                class="btn btn-trigger btn-icon toggle-expand"
                                                                data-target="filter-options"><em
                                                                    class="icon ni ni-opt"></em></a></li>
                                                        <li class="d-lg-none"><a href="#"
                                                                class="btn btn-trigger btn-icon"><em
                                                                    class="icon ni ni-setting"></em></a></li>
                                                        <li class="d-lg-none me-n1"><a href="#"
                                                                class="btn btn-trigger btn-icon toggle"
                                                                data-target="files-aside"><em
                                                                    class="icon ni ni-menu-alt-r"></em></a></li>
                                                    </ul>
                                                </div>
                                                <div class="search-wrap px-2 d-lg-none" data-search="search">
                                                    <div class="search-content"><a href="#"
                                                            class="search-back btn btn-icon toggle-search"
                                                            data-target="search"><em
                                                                class="icon ni ni-arrow-left"></em></a><input
                                                            type="text"
                                                            class="form-control border-transparent form-focus-none"
                                                            placeholder="Search by user or message"><button
                                                            class="search-submit btn btn-icon"><em
                                                                class="icon ni ni-search"></em></button></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-fmg-listing nk-block">
                                            <div class="row">
                                                <div class="col-xl-3 order-xl-12">
                                                    <div class="nk-fmg-filter toggle-expand-content"
                                                        data-content="filter-options">
                                                        <form action="manage/create.php" method="POST">
                                                            <input type="hidden" name="event" value="CREATE_RUBRIQUE" required>
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-4">
                                                                    <div class="form-group"><label
                                                                            class="form-label">Nouvelle rubrique</label>
                                                                        <div class="form-control-wrap">
                                                                            <div class="form-icon form-icon-left"><em
                                                                                    class="icon ni ni-calendar"></em>
                                                                            </div><input type="text"
                                                                                class="form-control" name="rubrique">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12"><button type="submit"
                                                                        class="link link-sm link-primary ms-n1">Enregistrer</button></div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="col-xl-9 col-lg-12">
                                                    <div class="nk-files nk-files-view-list">
                                                        <div class="nk-files-head">
                                                            <div class="nk-file-item">
                                                                <div class="nk-file-info">
                                                                    <div class="tb-head">Name</div>
                                                                </div>
                                                                <div class="nk-file-size">
                                                                    <div class="tb-head">Size</div>
                                                                </div>
                                                                <div class="nk-file-date">
                                                                    <div class="tb-head">Deleted At</div>
                                                                </div>
                                                                <div class="nk-file-actions">&nbsp;</div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-files-list">
                                                        <?php
                                                        $sql = "SELECT * FROM tbl_document";
                                                        $req = $app->fetchPrepared($sql);
                                                        foreach ($req as $row) {
                                                        ?>
                                                            <div class="nk-file-item nk-file">
                                                                <div class="nk-file-info"><a class="nk-file-link"
                                                                        href="#">
                                                                        <div class="nk-file-title">
                                                                            <div class="nk-file-icon"><span
                                                                                    class="nk-file-icon-type"><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 72 72">
                                                                                        <path
                                                                                            d="M50,61H22a6,6,0,0,1-6-6V22l9-11H50a6,6,0,0,1,6,6V55A6,6,0,0,1,50,61Z"
                                                                                            style="fill:#0089ff" />
                                                                                        <path
                                                                                            d="M25,20.556A1.444,1.444,0,0,1,23.556,22H16l9-11h0Z"
                                                                                            style="fill:#9bd5f9" />
                                                                                        <path
                                                                                            d="M44.7086,39.7209a2.0073,2.0073,0,0,1-.6719-1.13,13.6516,13.6516,0,0,1-.177-2.5892,20.1435,20.1435,0,0,0-.1409-2.6986,2.8313,2.8313,0,0,0-.5677-1.365,2.392,2.392,0,0,0-1.1045-.771A4.7219,4.7219,0,0,0,40.567,31h-.5834v1.6358h.323a2.2358,2.2358,0,0,1,1.3286.2761,1.3951,1.3951,0,0,1,.4115.9741q.052.396.0521,2.4278a7.4367,7.4367,0,0,0,.49,3.1831,3.5212,3.5212,0,0,0,1.688,1.5161A3.2462,3.2462,0,0,0,42.86,42.0913a4.1332,4.1332,0,0,0-.6668,1.8494q-.0938.6979-.0939,3.3029a2.8665,2.8665,0,0,1-.3542,1.7558,1.9512,1.9512,0,0,1-1.4379.3907h-.323v1.6358h.5834a5.15,5.15,0,0,0,1.2922-.1147,2.3263,2.3263,0,0,0,1.5888-1.3283,4.3336,4.3336,0,0,0,.3491-1.412q.052-.5522.0626-2.2922a12.6415,12.6415,0,0,1,.177-2.4537,2.0068,2.0068,0,0,1,.6719-1.13,2.0779,2.0779,0,0,1,1.3077-.4377V40.1586A2.0779,2.0779,0,0,1,44.7086,39.7209Z"
                                                                                            style="fill:#fff" />
                                                                                        <path
                                                                                            d="M30.1458,39.94a3.9507,3.9507,0,0,0,.6409-1.7192,30.109,30.109,0,0,0,.1145-3.4486,2.8422,2.8422,0,0,1,.3542-1.7454,1.9513,1.9513,0,0,1,1.4379-.3906h.3229V31h-.5834a5.6351,5.6351,0,0,0-1.292.1042,2.3154,2.3154,0,0,0-1.589,1.3336,4.3657,4.3657,0,0,0-.3491,1.4064q-.052.5525-.0624,2.2925a12.753,12.753,0,0,1-.1772,2.4588,1.9824,1.9824,0,0,1-.6719,1.13,2.0961,2.0961,0,0,1-1.3077.4326v1.6981a2.0781,2.0781,0,0,1,1.3077.4377,2.0086,2.0086,0,0,1,.6719,1.1358,13.7531,13.7531,0,0,1,.1772,2.5943,20.1384,20.1384,0,0,0,.1407,2.6987,2.7975,2.7975,0,0,0,.5676,1.36,2.4768,2.4768,0,0,0,1.1046.7762,4.7123,4.7123,0,0,0,1.48.1669h.5834V49.39h-.3229a2.2033,2.2033,0,0,1-1.3286-.2813,1.4643,1.4643,0,0,1-.422-.99q-.0414-.3855-.0417-2.4173a7.3922,7.3922,0,0,0-.5158-3.2247,3.179,3.179,0,0,0-1.6618-1.4639A3.8127,3.8127,0,0,0,30.1458,39.94Z"
                                                                                            style="fill:#fff" />
                                                                                    </svg></span></div>
                                                                            <div class="nk-file-name">
                                                                                <div class="nk-file-name-text"><span
                                                                                        class="title"><?php echo $row['designation_document']; ?></span>
                                                                                </div>
                                                                                <ul
                                                                                    class="breadcrumb breadcrumb-alt breadcrumb-xs breadcrumb-arrow">
                                                                                    <li class="breadcrumb-item">Project
                                                                                    </li>
                                                                                    <li class="breadcrumb-item">
                                                                                        Dashblite</li>
                                                                                    <li class="breadcrumb-item">apps
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </a></div>
                                                                <div class="nk-file-size">
                                                                    <div class="tb-lead">294.58 KB</div>
                                                                </div>
                                                                <div class="nk-file-date">
                                                                    <div class="tb-lead">2 hrs ago</div>
                                                                </div>
                                                                <div class="nk-file-actions">
                                                                    <div class="dropdown"><a href="#"
                                                                            class="dropdown-toggle btn btn-sm btn-icon btn-trigger"
                                                                            data-bs-toggle="dropdown"><em
                                                                                class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#" class="text-primary"><em
                                                                                            class="icon ni ni-undo"></em><span>Restore
                                                                                            Back</span></a></li>
                                                                                <li><a href="#" class="text-danger"><em
                                                                                            class="icon ni ni-trash"></em><span>Permanently
                                                                                            Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php
                                                            }
                                                        ?>
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