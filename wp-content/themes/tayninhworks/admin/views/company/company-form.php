<?php 

    global $wpdb;
    $company_id = 0; // nếu chỉnh sửa thì set ID
    $company = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}companies WHERE id = $company_id");
    $logo_id = $company->logo_id ?? '';
?>
<div class="wrap">

    <div class="d-flex align-items-center highlight-toolbar ps-3 pe-2 py-1 border-0 border-bottom mb-3"> 
        <small class="text-body-secondary text-uppercase"><h1>TẠO MỚI THÔNG TIN CÔNG TY</h1></small>  
    </div>

    <form method="post">

        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Tên công ty</label>
                        <input type="text" name="company_name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Địa chỉ</label>
                        <input type="text" name="address" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold d-block">Logo công ty</label>
                        <input type="hidden" name="logo_id" id="logo_id" class="form-control" value="<?php echo esc_attr($logo_id); ?>">
                        <button type="button" class="button" id="upload_logo_button">Upload Logo</button>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Website</label>
                        <input type="text" name="website" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Phone</label>
                        <input type="text" name="phone" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Giấy phép kinh doanh</label>
                        <input type="text" name="business_license" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Mạng xã hội</label>
                        <input type="text" name="socials" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Loại hình kinh doanh</label>
                        <input type="text" name="business_type" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Thời gian làm việc</label>
                        <input type="text" name="working_time" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Phúc lợi</label>
                        <input type="text" name="benefits" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label fw-bold" name="bussiness_info">Thông tin công ty</label>
                        <?php
                        wp_editor(
                            '',
                            'job_benefit',
                            [
                                'textarea_name' => 'bussiness_info',
                                'textarea_rows' => 8,
                                'media_buttons' => false,
                                'tinymce' => [
                                    'browser_spellcheck' => false,
                                    'paste_data_images' => true,
                                    'paste_as_text' => false,
                                    'paste_remove_styles_if_webkit' => false,
                                    'paste_webkit_styles' => 'all',
                                    'paste_retain_style_properties' => 'all'
                                ]
                            ]
                        );
                        ?>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6 clearfix">
                    <div class="mb-3" id="job-list">
                        <label class="form-label fw-bold">Danh sách vị trí công việc</label>
                        <input type="text" name="jobs[]" placeholder="Job title" class="form-control">
                    </div>
                        <button type="button" id="add-job" class="button button-secondary">
                            + Add Job
                        </button>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6 clearfix">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Trạng thái</label>
                        <select name="status" class="form-control">
                            <option value="pending">Pending</option>
                            <option value="approved">Approved</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3">
                    <input type="submit" name="save_job" class="button button-primary" value="Publish Job">
                </div>
            </div>
        </div>
    </form>
</div>