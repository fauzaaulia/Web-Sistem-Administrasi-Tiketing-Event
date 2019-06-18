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

            <a href="" class="btn btn-primary mb-3 addTicketButton" data-toggle="modal" data-target="#ticketModal">Add New Ticket</a>

            <!-- DataTales Example -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th>Name</th>
                                    <th>Event</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($ticket as $tk) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><a data-toggle="tooltip" data-placement="right" title="price: <?= $tk['price']; ?>"><?= $tk['ticket']; ?></a></td>
                                        <td><a data-toggle="tooltip" data-placement="right" title="date: <?= $tk['date']; ?>"><?= $tk['event']; ?></a></td>
                                        <td><?= $tk['total']; ?></td>
                                        <td>
                                            <a href="<?= base_url(); ?>tickets/info/<?= $tk['id']; ?>" class="badge badge-info showInfoTicketModal" data-toggle="modal" data-target="#infoTicketModal" data-id="<?= $tk['id']; ?>">info</a>

                                            <a href="<?= base_url(); ?>tickets/edit/<?= $tk['id']; ?>" class="badge badge-success showEditTicketModal" data-toggle="modal" data-target="#ticketModal" data-id="<?= $tk['id']; ?>">edit</a>

                                            <a href="<?= base_url(); ?>tickets/delete/<?= $tk['id']; ?>" class="badge badge-danger" onclick="return confirm('Are you sure you want to delete the ticket?');">delete</a>
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
<div class="modal fade" id="ticketModal" tabindex="-1" role="dialog" aria-labelledby="ticketModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ticketModalLabel">Add New Ticket</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('tickets'); ?>" method="post">
                <div class="modal-body">
                    <input type="hidden" class="form-control" id="id" name="id" value="<?= $tk['id']; ?>">
                    <div class="form-group">
                        <select name="event_id" id="event_id" class="form-control">
                            <option value="">Select for Event</option>
                            <?php foreach ($event as $ev) : ?>
                                <option value="<?= $ev['id']; ?>"><?= $ev['event']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="ticket" name="ticket" placeholder="Ticket Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="price" name="price" placeholder="Price">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="total" name="total" placeholder="Total">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                            <label class="form-check-label" for="is_active">
                                Active?
                            </label>
                        </div>
                    </div>
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
<div class="modal fade" id="infoTicketModal" tabindex="-1" role="dialog" aria-labelledby="infoTicketModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title" id="infoTicketModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3 id="ticket2"><b> Tiket </b></h3>
                <h6 id="event2"> Event </h6>
                <h6 id="price2"> Price </h6>
                <h6 id="total2"> Total </h6>
            </div>
        </div>
    </div>
</div>