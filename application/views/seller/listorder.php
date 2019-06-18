<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-12">
            <?= $this->session->flashdata('message'); ?>

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
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($listorder as $lo) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $lo['id_order']; ?></td>
                                        <td><?= $lo['buyer']; ?></td>
                                        <td><?= $lo['ticket']; ?></td>
                                        <td><?= $lo['event']; ?></td>
                                        <td><?= $lo['waiter']; ?></td>
                                        <td><?= $lo['datetime']; ?></td>
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