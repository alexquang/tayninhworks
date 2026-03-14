<?php
function job_detail_page()
{

    global $wpdb;

    $job_id = intval($_GET['id']);

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

    include get_template_directory() . '/admin/views/jobs/detail-form.php';

    save_job_detail();
}

function save_job_detail()
{
    try {
        if (
            !isset($_POST['_wpnonce']) ||
            !wp_verify_nonce($_POST['_wpnonce'], 'save_job_detail_nonce')
        ) {
            return;
        }

        if (!current_user_can('manage_options')) {
            return;
        }

        if (!isset($_POST['save_job_detail'])) {
            return;
        }

        global $wpdb;

        $table = $wpdb->prefix . 'job_details';
        $job_id = intval($_GET['id']);

        $data = [
            'job_description'  => wp_kses_post($_POST['job_description']),
            'job_benefit'      => wp_kses_post($_POST['job_benefit']),
            'working_time'     => sanitize_text_field($_POST['working_time']),
            'job_location'     => sanitize_text_field($_POST['job_location']),
            'company_overview' => wp_kses_post($_POST['company_overview'])
        ];

        // kiểm tra đã có job_details chưa
        $exists = $wpdb->get_var(
            $wpdb->prepare(
                "SELECT id FROM $table WHERE job_id=%d",
                $job_id
            )
        );

        if ($exists) {

            // UPDATE
            $wpdb->update(
                $table,
                $data,
                ['job_id' => $job_id]
            );

        } else {

            // INSERT
            $data['job_id'] = $job_id;

            $wpdb->insert(
                $table,
                $data
            );
        }

        echo "<script>window.location.href = window.location.href + '&updated=true';</script>";
        exit;
    } catch (Exception $e) {
        echo esc_html($e->getMessage());
    }
}
