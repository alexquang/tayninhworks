<div class="wrap">

    <div class="d-flex align-items-center highlight-toolbar ps-3 pe-2 py-1 border-0 border-bottom mb-3"> 
        <small class="text-body-secondary text-uppercase"><h1>DANH SÁCH VIỆC LÀM</h1></small>  
    </div>

        <table class="table table-striped table-hover align-middle mb-0">

            <thead class="table-light">
                <tr>
                    <th>Mã ID</th>
                    <th>Tên Công ty</th>
                    <th>Mã số thuế</th>
                    <th>Vị trí tuyển dụng</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($results as $row) { ?>

                    <tr>

                        <td><?php echo $row->id; ?></td>

                        <td><?php echo esc_html($row->company_name); ?></td>

                        <td><?php echo esc_html($row->business_license); ?></td>

                        <td>
                            <a href="<?php echo admin_url('admin.php?page=job-detail&id='.$row->id); ?>" class="text-primary text-decoration-none"><?php echo $row->title; ?></a>
                        </td>
                        <td><?php echo esc_html($row->status); ?></td>
                        <td>
                            <?php if ($row->status == 'pending') { ?>
                                <a href="?page=job-list&state=0&approve=<?php echo $row->id; ?>" class="btn btn-success btn-sm">Approve</a>
                            <?php } else { ?>
                                <a href="?page=job-list&state=1&approve=<?php echo $row->id; ?>" class="btn btn-warning btn-sm">Pending</a>
                            <?php } ?>
                        </td>

                    </tr>

                <?php } ?>

            </tbody>

        </table>

    </div>