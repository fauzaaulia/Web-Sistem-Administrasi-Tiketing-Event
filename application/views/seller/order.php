<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-10">
                    <div class="form-group row">
                        <label for="event" class="col-sm-2 col-form-label">Choose Event</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="event" name="event">
                                <option>Event 1</option>
                                <option>Event 2</option>
                                <option>Event 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ticket" class="col-sm-2 col-form-label">Choose Ticket</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="ticket" name="ticket">
                                <option>Ticket 1</option>
                                <option>Ticket 2</option>
                                <option>Ticket 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Full name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name">
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="phone" name="phone">
                            <?= form_error('phone', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary float-right">Save Order</button>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->