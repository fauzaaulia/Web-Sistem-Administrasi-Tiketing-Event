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
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>O-1281</td>
                                    <td>Aulia</td>
                                    <td>SO7</td>
                                    <td>Ossmanda</td>
                                    <td>Fauza</td>
                                    <td>20/04/2019</td>
                                </tr>
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