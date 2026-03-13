<?php 
function job_detail_page(){

    global $wpdb;

    $job_id = intval($_GET['id']);

    $job = $wpdb->get_row(
        $wpdb->prepare(
            "SELECT * FROM {$wpdb->prefix}jobs WHERE id=%d",
            $job_id
        )
    );

    include get_template_directory() . '/admin/views/job-detail-form.php';

    save_job_detail();
}

function save_job_detail(){

    if (!wp_verify_nonce($_POST['_wpnonce'], 'save_job_detail_nonce')) {
        return;
    }

    if (!current_user_can('manage_options')) {
        return;
    }

    if(!isset($_POST['save_job_detail'])){
        return;
    }

    global $wpdb;

    $table = $wpdb->prefix.'job_details';

    $wpdb->insert(

        $table,

        [
            'job_id'=>intval($_GET['id']),
            'job_description'=>wp_kses_post($_POST['job_description']),
            'job_requirement'=>wp_kses_post($_POST['job_requirement']),
            'job_benefit'=>wp_kses_post($_POST['job_benefit']),
            'working_time'=>sanitize_text_field($_POST['working_time']),
            'job_location'=>sanitize_text_field($_POST['job_location']),
            'company_overview'=>wp_kses_post($_POST['company_overview'])
        ]

    );

}

?>