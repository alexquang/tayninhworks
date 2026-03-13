<?php 
function job_manager_page()
{
    include get_template_directory() . '/admin/views/create-job-form.php';
    save_job_manager();
}

function save_job_manager()
{

    if (!isset($_POST['save_job'])) return;

    global $wpdb;

    $company_table = $wpdb->prefix . 'companies';
    $job_table = $wpdb->prefix . 'jobs';

    $company = sanitize_text_field($_POST['company']);
    $address = sanitize_text_field($_POST['address']);

    $wpdb->insert(
        $company_table,
        [
            'company_name' => $company,
            'address' => $address,
            'created_at' => current_time('mysql')
        ]
    );

    $company_id = $wpdb->insert_id;

    $location = sanitize_text_field($_POST['job_location']);
    $description = wp_kses_post($_POST['job_description']);
    $status = sanitize_text_field($_POST['status']);

    if (!empty($_POST['jobs'])) {

        foreach ($_POST['jobs'] as $job) {

            $wpdb->insert(
                $job_table,
                [
                    'company_id' => $company_id,
                    'title' => sanitize_text_field($job),
                    'location' => $location,
                    'description' => $description,
                    'status' => $status,
                    'created_at' => current_time('mysql')
                ]
            );
        }
    }

    echo "<div class='updated'><p>Job saved</p></div>";
}
?>