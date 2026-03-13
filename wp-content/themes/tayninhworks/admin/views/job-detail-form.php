<?php

$job_id = intval($_GET['id']);

?>

<div class="wrap">

    <h1>Job Details</h1>

    <form method="post">

        <input type="hidden" name="job_id" value="<?php echo $job_id; ?>">

        <table class="form-table">

            <tr>
                <th>Mô tả công việc</th>
                <td>

                    <?php
                    wp_editor(
                        '',
                        'job_description',
                        [
                            'textarea_name' => 'job_description',
                            'textarea_rows' => 8,
                            'media_buttons' => false, 
                            'tinymce' => [
                                'browser_spellcheck' => false,
                                'paste_data_images'=>true,
                                'paste_as_text'=>false,
                                'paste_remove_styles_if_webkit'=>false,
                                'paste_webkit_styles'=>'all',
                                'paste_retain_style_properties'=>'all'
                            ]
                        ]
                    );
                    ?>

                </td>
            </tr>

            <tr>
                <th>Yêu cầu công việc</th>
                <td>

                    <?php
                    wp_editor(
                        '',
                        'job_requirement',
                        [
                            'textarea_name' => 'job_requirement',
                            'textarea_rows' => 8,
                            'media_buttons' => false, 
                            'tinymce' => [
                                'browser_spellcheck' => false,
                                'paste_data_images'=>true,
                                'paste_as_text'=>false,
                                'paste_remove_styles_if_webkit'=>false,
                                'paste_webkit_styles'=>'all',
                                'paste_retain_style_properties'=>'all'
                            ]
                        ]
                    );
                    ?>

                </td>
            </tr>

            <tr>
                <th>Quyền lợi</th>
                <td>

                    <?php
                    wp_editor(
                        '',
                        'job_benefit',
                        [
                            'textarea_name' => 'job_benefit',
                            'textarea_rows' => 8,
                            'media_buttons' => false, 
                            'tinymce' => [
                                'browser_spellcheck' => false,
                                'paste_data_images'=>true,
                                'paste_as_text'=>false,
                                'paste_remove_styles_if_webkit'=>false,
                                'paste_webkit_styles'=>'all',
                                'paste_retain_style_properties'=>'all'
                            ]
                        ]
                    );
                    ?>

                </td>
            </tr>

            <tr>
                <th>Thời gian làm việc</th>
                <td>
                    <input type="text" name="working_time" class="regular-text">
                </td>
            </tr>

            <tr>
                <th>Địa điểm làm việc</th>
                <td>
                    <input type="text" name="job_location" class="regular-text">
                </td>
            </tr>

            <tr>
                <th>Sơ lược công ty</th>
                <td>

                    <?php
                    wp_editor(
                        '',
                        'company_overview',
                        [
                            'textarea_name' => 'company_overview',
                            'textarea_rows' => 8,
                            'media_buttons' => false, 
                            'tinymce' => [
                                'browser_spellcheck' => false,
                                'paste_data_images'=>true,
                                'paste_as_text'=>false,
                                'paste_remove_styles_if_webkit'=>false,
                                'paste_webkit_styles'=>'all',
                                'paste_retain_style_properties'=>'all'
                            ]
                        ]
                    );
                    ?>

                </td>
            </tr>

        </table>

        <p>
            <input type="submit" name="save_job_detail"
                class="button button-primary"
                value="Save">
        </p>

    </form>

</div>