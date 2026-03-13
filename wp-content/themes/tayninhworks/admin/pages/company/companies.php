<?php
function job_manager_page()
{
    include get_template_directory() . '/admin/views/company/company-form.php';
    save_job_manager();
}

function save_job_manager()
{

    if (!isset($_POST['save_job'])) return;

    global $wpdb;
    $wpdb->query('START TRANSACTION');

    try {
        $company_table = $wpdb->prefix . 'companies';
        $job_table = $wpdb->prefix . 'jobs';

        $company_name = sanitize_text_field($_POST['company_name']);
        $address = sanitize_text_field($_POST['address']);
        $logo_id = sanitize_text_field($_POST['logo_id']);
        $website = sanitize_text_field($_POST['website']);
        $phone = sanitize_text_field($_POST['phone']);
        $business_license = sanitize_text_field($_POST['business_license']);
        $socials = sanitize_text_field($_POST['socials']);
        $business_type = sanitize_text_field($_POST['business_type']);
        $working_time = sanitize_text_field($_POST['working_time']);
        $benefits = sanitize_text_field($_POST['benefits']);
        //$company_images = sanitize_text_field($_POST['logo_id']);
        $company_description = sanitize_text_field($_POST['bussiness_info']);
        $status = sanitize_text_field($_POST['status']);

        $company = $wpdb->insert(
            $company_table,
            [
                'company_name'          => $company_name,
                'address'               => $address,
                'logo_id'               => '["img1.jpg"]',
                'created_at'            => current_time('mysql'),
                'website'               => $website,
                'phone'                 => $phone,
                'business_license'      => $business_license,
                'socials'               => $socials,
                'business_type'         => $business_type,
                'working_time'          => $working_time,
                'benefits'              => $benefits,
                'company_images'        => '["img1.jpg"]',
                'company_description'   => $company_description
            ]
        );

        $company_id = $wpdb->insert_id;

        if (!empty($_POST['jobs'])) {

            foreach ($_POST['jobs'] as $job) {

                $wpdb->insert(
                    $job_table,
                    [
                        'company_id' => $company_id,
                        'title' => sanitize_text_field($job),
                        'status' => $status,
                        'created_at' => current_time('mysql')
                    ]
                );
            }
        }

        $wpdb->query('COMMIT');
    } catch (Exception $e) {
        $wpdb->query('ROLLBACK');
        echo "Error: " . $e->getMessage();
    }

    echo "<div class='updated fs-5'>Tạo thông tin công ty thành công.</div>";
}
