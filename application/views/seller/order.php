<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Order <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-10">
                    <form action="" method="post">
                        <?php
                        $permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                        ?>
                        <input type="text" class="form-control" id="id_order" name="id_order" value="<?= 'O-' . substr(str_shuffle($permitted_chars), 0, 5) ?>" hidden>

                        <input type="text" class="form-control" id="id_user" name="id_user" value="<?= $user['name'] ?>" hidden>

                        <div class="form-group row">
                            <label for="event" class="col-sm-2 col-form-label">Choose Event</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="event" name="event">
                                    <?php foreach ($event as $ev) : ?>
                                        <option value="<?= $ev['id']; ?>"><?= $ev['event']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ticket" class="col-sm-2 col-form-label">Choose Ticket</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="ticket" name="ticket">
                                    <?php foreach ($ticket as $tk) : ?>
                                        <option value="<?= $tk['id']; ?>"><?= $tk['ticket']; ?></option>
                                    <?php endforeach; ?>
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
                        <button type="submit" name="SaveOrder" class="btn btn-primary float-right">Save Order</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->