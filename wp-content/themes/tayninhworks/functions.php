<?php
function admin_fonts() {

    wp_enqueue_style(
        'admin-font',
        'https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;600&display=swap'
    );

    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css'
    );

    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js',
        [],
        null,
        true
    );


}
add_action('admin_enqueue_scripts','admin_fonts');

add_filter('tiny_mce_before_init', function($init) {

    $init['entity_encoding'] = 'raw';

    return $init;

});

add_action('admin_enqueue_scripts','job_manager_scripts');

function custom_job_rewrite_rule() {
    add_rewrite_rule(
        '^job/([0-9]+)/?$',
        'index.php?job_id=$matches[1]',
        'top'
    );
}
add_action('init', 'custom_job_rewrite_rule');

function custom_job_query_vars($vars) {
    $vars[] = 'job_id';
    return $vars;
}
add_filter('query_vars', 'custom_job_query_vars');

function load_job_template($template) {

    $job_id = get_query_var('job_id');

    if ($job_id) {

        $new_template = locate_template(['home/pages/job/single-job.php']);

        if ($new_template) {
            return $new_template;
        }

    }

    return $template;
}
add_filter('template_include', 'load_job_template');


require_once get_template_directory() . '/admin/pages/company/companies.php';
require_once get_template_directory() . '/admin/pages/jobs/lists.php';
require_once get_template_directory() . '/admin/pages/jobs/detail.php';

function job_manager_scripts($hook){

    if($hook != 'toplevel_page_job-manager'){
        return;
    }

    wp_enqueue_script(
        'create-job-js',
        get_template_directory_uri().'/assets/js/admin/job-manager.js',
        array(),
        '1.0',
        true
    );
}

add_action('admin_menu', 'job_manager_menu');

function job_manager_menu()
{

    add_menu_page(
        'Create Job',
        'Job Manager',
        'manage_options',
        'job-manager',
        'job_manager_page',
        'dashicons-businessman',
        5
    );

    add_submenu_page(
        'job-manager',
        'Job List',
        'Job List',
        'manage_options',
        'job-list',
        'job_manager_list_page'
    );

    add_submenu_page(
        null,                // không hiện menu
        'Job Detail',
        'Job Detail',
        'manage_options',
        'job-detail',
        'job_detail_page'
    );
}

add_action('admin_enqueue_scripts','job_manager_scripts');
?>