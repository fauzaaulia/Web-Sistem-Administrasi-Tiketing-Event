<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-12">

            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>

            <a href="" class="btn btn-primary mb-3 addEventButton" data-toggle="modal" data-target="#eventModal">Add New Event</a>

            <!-- DataTales Example -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th>Name</th>
                                    <th>Tanggal</th>
                                    <th>Lokasi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($event as $ev) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $ev['event']; ?></td>
                                        <td><?= $ev['date']; ?></td>
                                        <td>
                                            <a data-toggle="tooltip" data-placement="right" title="<?= $ev['address']; ?>"><?= $ev['location']; ?></a>
                                        </td>
                                        <td>
                                            <a href="<?= base_url(); ?>events/info/<?= $ev['id']; ?>" class="badge badge-info infoEventModal" data-toggle="modal" data-target="#infoEventModal" data-id="<?= $ev['id']; ?>">info</a>

                                            <a href="<?= base_url(); ?>events/edit/<?= $ev['id']; ?>" class="badge badge-success showModalEditEvent" data-toggle="modal" data-target="#eventModal" data-id="<?= $ev['id']; ?>">edit</a>

                                            <a href="<?= base_url(); ?>events/delete/<?= $ev['id']; ?>" class="badge badge-danger" onclick="return confirm('Are you sure you want to delete the event?');">delete</a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eventModalLabel">Add New Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('events'); ?>" method="post">
                <div class="modal-body">
                    <input type="hidden" class="form-control" id="id" name="id">
                    <input type="hidden" class="form-control" id="user_id" name="user_id" value="<?= $user_id['id']; ?>">
                    <div class="form-group">
                        <label for="event"> Event name </label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="date"> Date </label>
                        <input type="text" name="date" id="date" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="location"> Location </label>
                        <input type="text" class="form-control" id="location" name="location">
                    </div>
                    <div class="form-group">
                        <label for="address"> Address </label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                    <div class="form-group">
                        <label for="phone"> Phone </label>
                        <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                    <input type="hidden" class="form-control" id="is_active" name="is_active">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Info -->
<div class="modal fade" id="infoEventModal" tabindex="-1" role="dialog" aria-labelledby="infoEventModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title" id="infoEventModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3 id="name2"><b> Nama </b></h3>
                <h6 id="date2"> Tanggal </h6>
                <h6 id="location2"> Lokasi </h6>
                <h6 id="address2"> Address </h6>
                <h6 id="phone2"> Phone </h6>
            </div>
        </div>
    </div>
</div>