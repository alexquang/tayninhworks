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
        $logo_name = '';
        if (!empty($_FILES['logo_file']['name'])) {

            $upload_dir = wp_upload_dir();

            wp_mkdir_p($upload_dir['path']);

            $filename = basename($_FILES['logo_file']['name']);

            $target_path = $upload_dir['path'] . '/' . $filename;

            if (move_uploaded_file($_FILES['logo_file']['tmp_name'], $target_path)) {
                $logo_name = $filename;
            } else {

                echo "Upload lỗi";
            }
        }

        $uploaded_images = [];
        if (!empty($_FILES['company_images']['name'][0])) {

            $total_files = count($_FILES['company_images']['name']);
            if ($total_files > 10) {
                wp_die ("<div class='error'><span class='badge bg-secondary fs-7'>Tối đa 10 hình.</span></div>");
            }

            $upload_dir = wp_upload_dir();

            foreach ($_FILES['company_images']['name'] as $key => $filename) {

                if ($_FILES['company_images']['error'][$key] === 0) {

                    $tmp_name = $_FILES['company_images']['tmp_name'][$key];

                    $filename = basename($filename);

                    $target_path = $upload_dir['path'] . '/' . $filename;

                    if (move_uploaded_file($tmp_name, $target_path)) {

                        $uploaded_images[] = $filename;
                    }
                }
            }
        }

        $company_table = $wpdb->prefix . 'companies';
        $job_table = $wpdb->prefix . 'jobs';

        $company_name = sanitize_text_field($_POST['company_name']);
        $address = sanitize_text_field($_POST['address']);
        $website = sanitize_text_field($_POST['website']);
        $phone = sanitize_text_field($_POST['phone']);
        $business_license = sanitize_text_field($_POST['business_license']);
        $socials = sanitize_text_field($_POST['socials']);
        $business_type = sanitize_text_field($_POST['business_type']);
        $working_time = sanitize_text_field($_POST['working_time']);
        $benefits = sanitize_text_field($_POST['benefits']);
        $company_description = sanitize_text_field($_POST['bussiness_info']);
        $status = sanitize_text_field($_POST['status']);

        $company = $wpdb->insert(
            $company_table,
            [
                'company_name'          => $company_name,
                'address'               => $address,
                'logo_id'               => $logo_name,
                'created_at'            => current_time('mysql'),
                'website'               => $website,
                'phone'                 => $phone,
                'business_license'      => $business_license,
                'socials'               => $socials,
                'business_type'         => $business_type,
                'working_time'          => $working_time,
                'benefits'              => $benefits,
                'company_images'        => json_encode($uploaded_images),
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
        echo "<div class='updated'><span class='badge bg-secondary fs-7'>Tạo thông tin công ty thành công.</span></div>";
    } catch (Exception $e) {
        $wpdb->query('ROLLBACK');
        echo "Error: " . $e->getMessage();
    }
}
