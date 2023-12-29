<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EconoMe - Subs</title>
        <?php include('./head.html') ?>
    </head>
    <body id="bg-grad">
        <?php include('./navbar.php')?>
        <div class="d-grid gap-2 text-center v-margin">
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#addnew">Add New Subcription</button>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 v-margin-left v-margin-right text-center">
            <div class="col">
                <div class="card h-100">
                    <img src="./circle.png" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Vaxy-Network</h5>
                        <p class="card-text">Price: 15$ Monthly</p>
                        <p class="card-text">Payment Method: <i class="bi bi-paypal"></i> PayPal</p>
                        <p class="card-text">Started on: 11/18/2010</p>
                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#confirm">Remove Subcription</button>
                    </div>
                </div>
            </div>

            <!-- Confirm Menu -->
            <div class="modal fade" id="confirm" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Do you really want to remove this subscription ? This action is unreversible.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-outline-danger">Remove</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('./menus.html')?>
    </body>
</html>