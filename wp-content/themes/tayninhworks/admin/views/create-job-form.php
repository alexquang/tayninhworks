<div class="wrap">

    <h1>Add New Job</h1>

    <form method="post">

        <table class="form-table">

            <tr>
                <th>Company Name</th>
                <td>
                    <input type="text" name="company" class="regular-text" required>
                </td>
            </tr>

            <tr>
                <th>Company Address</th>
                <td>
                    <input type="text" name="address" class="regular-text">
                </td>
            </tr>

            <tr>
                <th>Job Title</th>
                <td>
                    <input type="text" name="job_title" class="regular-text">
                </td>
            </tr>

            <tr>
                <th>Job Location</th>
                <td>
                    <input type="text" name="job_location" class="regular-text">
                </td>
            </tr>
            <tr>
                <th>Job Description</th>
                <td>

                    <?php
                    wp_editor(
                        '',
                        'job_description',
                        [
                            'textarea_name' => 'job_description',
                            'textarea_rows' => 8
                        ]
                    );
                    ?>

                </td>
            </tr>

            <tr>
                <th>Job List</th>
                <td>

                    <div id="job-list">

                        <div class="job-item">
                            <input type="text" name="jobs[]" placeholder="Job title" class="regular-text">
                            <button type="button" class="button remove-job">Remove</button>
                        </div>

                    </div>

                    <br>

                    <button type="button" id="add-job" class="button button-secondary">
                        + Add Job
                    </button>

                </td>
            </tr>

            <tr>
                <th>Status</th>
                <td>

                    <select name="status">
                        <option value="pending">Pending</option>
                        <option value="approved">Approved</option>
                    </select>

                </td>
            </tr>

        </table>

        <p>

            <input type="submit" name="save_job" class="button button-primary" value="Publish Job">

        </p>

    </form>
</div>