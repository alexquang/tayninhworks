<?php get_header(); ?>

<!-- FEATURED JOBS -->
<div class="container mt-4">
    <?php

    global $wpdb;

    $companies = $wpdb->get_results(
        "SELECT * FROM {$wpdb->prefix}companies"
    );


    foreach ($companies as $company) {


        $jobs = $wpdb->get_results(
            $wpdb->prepare(
                "SELECT * FROM {$wpdb->prefix}jobs WHERE status = 'approve' and company_id=%d",
                $company->id
            )
        );

        /* Nếu không có job → bỏ qua company */
        if (empty($jobs)) {
            continue;
        }

    ?>

        <div class="company-box">

            <div class="company-header">

                <img src="https://picsum.photos/120" class="img-fluid" loading="lazy" />

                <div class="company-info">

                    <h2><?php echo esc_html($company->company_name); ?></h2>

                    <p><?php echo esc_html($company->address); ?></p>

                    <h3 class="job-title">TUYỂN DỤNG</h3>

                </div>

            </div>

            <div class="job-list">

                <ul>

                    <?php
                    foreach ($jobs as $job) {
                    ?>

                        <li>
                            <a href="/tayninhworks/job/<?php echo $job->id; ?>">
                                <?php echo esc_html($job->title); ?>
                            </a>
                        </li>

                    <?php } ?>

                </ul>

            </div>

            <div class="company-footer">

                <a href="/company/<?php echo $company->id; ?>">
                    » Click vào xem tất cả
                </a>

            </div>

        </div>

    <?php } ?>
</div>

<?php get_footer(); ?>