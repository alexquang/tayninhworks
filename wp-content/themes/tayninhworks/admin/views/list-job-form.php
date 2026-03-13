<div class="wrap">

        <h1>Job List</h1>

        <table class="wp-list-table widefat fixed striped">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Company</th>
                    <th>Address</th>
                    <th>Job Title</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($results as $row) { ?>

                    <tr>

                        <td><?php echo $row->id; ?></td>

                        <td><?php echo esc_html($row->company_name); ?></td>

                        <td><?php echo esc_html($row->address); ?></td>

                        <td>
                            <a href="<?php echo admin_url('admin.php?page=job-detail&id='.$row->id); ?>"><?php echo $row->title; ?></a>
                        </td>
                        <td><?php echo esc_html($row->status); ?></td>
                        <td><a href="?page=job-list&approve=<?php echo $row->id; ?>" class="button button-small">Approve</a>
                        </td>

                    </tr>

                <?php } ?>

            </tbody>

        </table>

    </div>