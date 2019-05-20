<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-12">
            <?= $this->session->flashdata('message'); ?>

            <a href="" class="btn btn-primary mb-3 addSellerButton" data-toggle="modal" data-target="#menuModal">Add New Seller</a>

            <!-- DataTales Example -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th>ID Order</th>
                                    <th>Buyer</th>
                                    <th>Ticket</th>
                                    <th>Event</th>
                                    <th>Waiter</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($order as $o) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $o['name']; ?></td>
                                        <td><?= $o['email']; ?></td>
                                        <td><?= $o['phone']; ?></td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" <?= member_active($o['is_active']); ?>>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="<?= base_url(); ?>admin/memberdelete/<?= $o['id']; ?>" class="badge badge-danger" onclick="return confirm('Are you sure you want to delete the ticket?');">delete</a>
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