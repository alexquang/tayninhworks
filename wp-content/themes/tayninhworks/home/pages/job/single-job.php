<?php
get_header();

global $wpdb;

$job_id = get_query_var('job_id');

    $job = $wpdb->get_row(
        $wpdb->prepare(
            "SELECT j.*, c.*, jd.*
            FROM {$wpdb->prefix}jobs j
            LEFT JOIN {$wpdb->prefix}companies c 
                ON j.company_id = c.id
            LEFT JOIN {$wpdb->prefix}job_details jd
                ON j.id = jd.job_id
            WHERE j.id = %d",
            $job_id
        )
    );
    if (!$job) {
        echo "<h3>Job not found</h3>";
        get_footer();
        exit;
    }

include get_template_directory() . '/home/views/job/single-job-form.php';
?>

<?php get_footer(); ?>