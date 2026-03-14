<?php

$job_id = intval($_GET['id']);

?>

<div class="wrap">
    <div class="d-flex align-items-center highlight-toolbar ps-3 pe-2 py-1 border-0 border-bottom mb-3">
        <small class="text-body-secondary text-uppercase">
            <div class="mb-2">
                <h1>THÔNG TIN CHI TIẾT</h1>
            </div>

            <div>
                <span class="badge bg-secondary"><?php echo $job->title; ?></span>
                <span class="mx-2">|</span>
                <span class="badge bg-secondary"><?php echo $job->company_name; ?></span>
            </div>
        </small>
    </div>

    <form method="post">

        <input type="hidden" name="job_id" value="<?php echo $job_id; ?>">
        <?php wp_nonce_field('save_job_detail_nonce'); ?>


        <div class="container-fluid">
            <div class="row mb-3">
                <div class="mb-3">
                    <label class="form-label fw-bold">Mô tả công việc</label>
                    <?php
                    $job_description = isset($job->job_description) ? trim($job->job_description) : '';
                    wp_editor(
                        $job_description,
                        'job_description',
                        [
                            'textarea_name' => 'job_description',
                            'textarea_rows' => 8,
                            'media_buttons' => false,
                            'tinymce' => [
                                'browser_spellcheck' => false,
                                'paste_data_images' => true,
                                'paste_as_text' => false,
                                'paste_remove_styles_if_webkit' => false,
                                'paste_webkit_styles' => 'all',
                                'paste_retain_style_properties' => 'all',
                                'toolbar1' => 'formatselect,bold,italic,underline,bullist,numlist,link,unlink',
                                'toolbar2' => 'undo,redo'
                            ]
                        ]
                    );
                    ?>
                </div>
            </div>
            <div class="row mb-3">
                <div class="mb-3">
                    <label class="form-label fw-bold">Quyền lợi</label>
                    <?php
                    $job_benefit = isset($job->job_benefit) ? trim($job->job_benefit) : '';
                    wp_editor(
                        $job_benefit,
                        'job_benefit',
                        [
                            'textarea_name' => 'job_benefit',
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
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Thời gian làm việc</label>
                        <input type="text" name="working_time" class="form-control" value="<?php echo $job->working_time ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Tên công ty</label>
                        <input type="text" name="job_location" class="form-control" value='<?php echo $job->job_location ?>'>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label class="form-label fw-bold">Sơ lược công ty</label>
                <?php
                $company_overview = isset($job->company_overview) ? trim($job->company_overview) : '';
                wp_editor(
                    $company_overview,
                    'company_overview',
                    [
                        'textarea_name' => 'company_overview',
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
            <div class="row mb-3">
                <div class="md-3">
                    <input type="submit" name="save_job_detail"
                        class="btn btn-primary"
                        value="Save">
                    <input type="submit" name="back_list"
                        class="btn btn-secondary"
                        value="Back">
                </div>
            </div>
        </div>
    </form>

</div>