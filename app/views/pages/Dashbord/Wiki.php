<?php
require APPROOT . '/views/inc/header.php'; 
require APPROOT . '/views/inc/sidebar.php'; 

 ?>
<main class="mt-5 pt-3">
    <div class="main mt-2">

        <!-- ================ Order Details List ================= -->
        <div class="lyrics">
            <div class="recentOrders">
                <div class="cardHeader ms-2">
                    <h2>WIKI</h2>
                    <!-- <a href="#" class="btn">View All</a> -->
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="card">
                            <div class="card-header">
                                <span><i class="bi bi-table me-2"></i></span> Data WIKI
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped data-table" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Tlitle</th>
                                                <th>Content</th>
                                                <th>Images</th>
                                                <th>Date_Create</th>
                                                <th>Status</th>
                                                <th>Author</th>
                                                <th>Categorie</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- <?php foreach($data['Wiki'] as $Wiki){ ?> -->
                                            <tr>
                                                <td>
                                                    <?= $Wiki->getWikiID() ?>
                                                </td>
                                                <td>
                                                    <?= $Wiki->getTitle() ?>
                                                </td>
                                                <td>
                                                    <?= $Wiki->getContent() ?>
                                                </td>
                                                <td>
                                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode( $Wiki->getImage()); ?>"
                                                        style="width: 100px; border-radius: 10px;" />

                                                </td>
                                                <td>
                                                    <?= $Wiki->getDateCreated() ?>
                                                </td>
                                                <td>
                                                    <?= $Wiki->getStatus() ?>
                                                </td>
                                                <td>
                                                    <?= $Wiki->getAuthor()->getNom() ?>
                                                </td>
                                                <td>
                                                    <?= $Wiki->getCategorie()->getCategoryName() ?>
                                                </td>


                                                <td>
                                                    <a class="update_Wiki" type="button" data-bs-toggle="modal"
                                                        value="<?= $Wiki->getContent() ?>"
                                                        data-key="<?= $Wiki->getWikiID() ?>"
                                                        data-bs-target="#updateGenreModal" data-bs-whatever="@mdo">
                                                        <i class="btn btn-primary far fa-pen"></i>

                                                        <a
                                                            href="<?= URLROOT ?>/AdminController/DelletTags?id=<?= $Wiki->getWikiID() ?>"><i
                                                                class="btn btn-danger ms-1 far fa-trash"></i>
                                                        </a>
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

            <!-- ================= New modal  ================ -->
            <div class="button-add-student float-end me-4">


                <div class="modal fade" id="updateGenreModal" tabindex="-1" aria-labelledby="updateGenreModalModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="updateGenreModalModalLabel">Archive Wiki</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="<?= URLROOT ?>/AdminController/UpdateTags"
                                    enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="Wiki" class="col-form-label">Wiki:</label>
                                        <input id="idTagsWiki" type="hidden" class="form-control" name="id">
                                        <textarea id="Wiki" type="text" class="form-control" name="Wiki"></textarea>
                                    </div>



                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" name="updatetags" class="btn btn-primary">Archive
                                            Wiki</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


</main>
<?php

require APPROOT . '/views/inc/footer.php'; 
?>