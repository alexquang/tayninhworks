<?php
function job_manager_list_page()
{

    global $wpdb;


    if (isset($_GET['approve'])) {

        $id = intval($_GET['approve']);

        $wpdb->update(
            $wpdb->prefix . 'jobs',
            ['status' => 'approved'],
            ['id' => $id]
        );

        echo "<div class='updated'><p>Job Approved</p></div>";
    }


    $results = $wpdb->get_results(

        "SELECT
        jobs.id,
        jobs.title,
        companies.company_name,
        companies.address,
        jobs.status
        FROM {$wpdb->prefix}jobs jobs
        JOIN {$wpdb->prefix}companies companies
        ON jobs.company_id = companies.id
        ORDER BY jobs.id DESC"
    );

    include get_template_directory() . '/admin/views/list-job-form.php';
}
