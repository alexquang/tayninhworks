<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="wp-content\themes\tayninhworks\style.css">

</head>

<body <?php body_class(); ?>>

    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container">

            <a class="navbar-brand" href="#"><?php bloginfo('name'); ?></a>

            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="menu">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="jobs.html">Jobs</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="companies.html">Companies</a>
                    </li>
                </ul>

            </div>

        </div>

    </nav>

    <!-- HERO -->

    <section class="hero text-center text-white">

        <div class="container">

            <h1>Find Your Dream Job</h1>

            <p>Over 10,000 jobs available</p>

            <div class="row justify-content-center mt-4">

                <div class="col-md-4">
                    <input class="form-control" placeholder="Job title">
                </div>

                <div class="col-md-3">
                    <input class="form-control" placeholder="Location">
                </div>

                <div class="col-md-2">
                    <button class="btn btn-warning w-100">
                        Search
                    </button>
                </div>

            </div>

        </div>

    </section>