<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" action="/admin/commande/add_food.php" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter Food</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="bg">
                        <div class="input-cont">

                            <div class="row">
                                <div class="col-3">
                                    <label for="name" class="label-name">
                                        <span class="content-name">
                                            Nom Food
                                        </span>
                                    </label>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="f_name" autocomplete="off" required>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="bg">
                        <div class="input-cont">

                            <div class="row">
                                <div class="col-3">
                                    <label for="name" class="label-name">
                                        <span class="content-name">
                                            Description
                                        </span>
                                    </label>
                                </div>
                                <div class="col">
                                    <textarea class="form-control" size="35" name="f_description" autocomplete="off" required></textarea>
                                </div>
                            </div>

                        </div>
                    </div>



                    <div class="bg">
                        <div class="input-cont">

                            <div class="row">
                                <div class="col-3">
                                    <label for="name" class="label-name">
                                        <span class="content-name">
                                            Prix
                                        </span>
                                    </label>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="f_price" autocomplete="off" required>
                                </div>
                            </div>

                        </div>
                    </div>



                    <div class="bg">
                        <div class="input-cont">

                            <label for="name" class="label-name">
                                <span class="content-name">
                                    Images Upload
                                </span>
                            </label>
                            <input type="file" name="f_image" class="uploadnew" value="Upload Image">
                        </div>
                    </div>
                </div>





                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>