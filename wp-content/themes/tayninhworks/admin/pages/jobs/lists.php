<?php
function job_manager_list_page()
{

    global $wpdb;


    if (isset($_GET['approve'])) {

        $id = intval($_GET['approve']);
        $state = intval($_GET['state']);
        $status = 'pending';
        if ($state == '0') {
            $status = 'approve';
        } else {
            $status = 'pending';
        }
        $wpdb->update(
            $wpdb->prefix . 'jobs',
            ['status' => $status],
            ['id' => $id]
        );

        echo "<div class='updated'><p>Job Approved</p></div>";
    }


    $results = $wpdb->get_results(

        "SELECT
        jobs.id,
        jobs.title,
        companies.company_name,
        companies.business_license,
        jobs.status
        FROM {$wpdb->prefix}jobs jobs
        JOIN {$wpdb->prefix}companies companies
        ON jobs.company_id = companies.id
        ORDER BY jobs.id DESC"
    );

    include get_template_directory() . '/admin/views/jobs/lists-form.php';
}
