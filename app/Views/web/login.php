<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Luchi | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background: linear-gradient(135deg, #1c1c1c, #2c2c2c);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', sans-serif;
            color: #fff;
        }

        .login-wrapper {
            max-width: 500px;
            width: 100%;
            padding: 30px;
        }

        .login-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border-radius: 20px;
            padding: 50px 40px;
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.6);
            transition: all 0.4s ease-in-out;
        }

        .brand-title {
            font-size: 36px;
            font-weight: bold;
            background: linear-gradient(90deg, #d4af37, #ffcc70);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-family: 'Georgia', serif;
        }

        svg {
            filter: drop-shadow(0 0 10px rgba(255, 215, 0, 0.7));
        }

        .form-control {
            border-radius: 14px;
            border: 1px solid #555;
            padding: 14px;
            font-size: 1.1rem;
            background-color: #ffffff;
            color: #000000;
        }

        .form-control::placeholder {
            color: #999999;
            opacity: 1;
        }

        .form-control:focus {
            border-color: #d4af37;
            box-shadow: 0 0 0 0.25rem rgba(212, 175, 55, 0.25);
        }


        .btn-gold {
            background: linear-gradient(135deg, #d4af37, #ffcc70);
            color: #1c1c1c;
            border: none;
            border-radius: 14px;
            font-weight: 600;
            padding: 14px;
            font-size: 1.1rem;
            transition: transform 0.3s ease, background 0.3s ease;
        }

        .btn-gold:hover {
            transform: scale(1.03);
            background: linear-gradient(135deg, #c39e30, #ffbb55);
        }

        .text-small {
            font-size: 1rem;
            color: #ccc;
        }

        @media (max-width: 576px) {
            .login-card {
                padding: 40px 25px;
            }

            .brand-title {
                font-size: 30px;
            }

            svg {
                width: 48px;
                height: 48px;
            }
        }
    </style>
</head>

<body>

    <div class="login-wrapper">
        <div class="login-card">
            <div class="text-center mb-4">
                <!-- Gold Jewellery Icon -->
                <svg width="64" height="64" viewBox="0 0 64 64" fill="url(#goldGradient)" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="goldGradient" x1="0" y1="0" x2="1" y2="1">
                            <stop offset="0%" stop-color="#d4af37" />
                            <stop offset="100%" stop-color="#ffcc70" />
                        </linearGradient>
                    </defs>
                    <g filter="url(#glow)">
                        <!-- Ring Band -->
                        <circle cx="32" cy="32" r="20" stroke="url(#goldGradient)" stroke-width="6" fill="none" />
                        <circle cx="32" cy="32" r="14" fill="none" stroke="#1c1c1c" stroke-width="4" />

                        <!-- Diamond -->
                        <polygon points="32,10 28,16 36,16" fill="url(#goldGradient)" />
                        <polygon points="28,16 24,22 40,22 36,16" fill="url(#goldGradient)" />
                    </g>

                    <!-- Optional Glow Filter -->
                    <filter id="glow" x="-50%" y="-50%" width="200%" height="200%">
                        <feDropShadow dx="0" dy="0" stdDeviation="2" flood-color="#ffd700" flood-opacity="0.6" />
                        <feDropShadow dx="0" dy="0" stdDeviation="4" flood-color="#ffcc70" flood-opacity="0.4" />
                    </filter>
                </svg>


                <div class="brand-title mt-3">Luchi</div>
                <p class="text-small mt-1">Luxury crafted just for you</p>
            </div>







            <?php $session = session() ?>
            <?php if ($session->getFlashdata('msg') !== null) : ?>
                <div class="alert alert-<?= $session->getFlashdata('msg')['type'] ?> alert-dismissible fade show d-flex justify-content-between" role="alert">
                    <div>
                        <?= $session->getFlashdata('msg')['msg'] ?>
                    </div>

                    <div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            <?php endif; ?>



            <?php if ($session->get('invalid_creds') !== null) : ?>
                <div class="alert alert-<?= $session->get('invalid_creds')['type'] ?> alert-dismissible fade show d-flex justify-content-between" role="alert">
                    <div>
                        <?php foreach (array_keys($session->get('invalid_creds')['errors']) as $item) : ?>
                            <?= $session->get('invalid_creds')['errors'][$item] ?><br>
                        <?php endforeach; ?>
                    </div>

                    <div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            <?php endif; ?>


            <?php if ($session->getFlashdata('error_msg') !== null) : ?>
                <div class="alert alert-<?= $session->getFlashdata('error_msg')['type'] ?> alert-dismissible fade show d-flex justify-content-between" role="alert">
                    <div>
                        <?= $session->getFlashdata('error_msg')['msg'] ?>
                    </div>

                    <div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            <?php endif; ?>





            <form action="<?= base_url() ?>" method="POST" novalidate>
                <div class="mb-4">
                    <label for="email" class="form-label text-white fs-5">Email address</label>
                    <input
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        required
                        placeholder="you@example.com">
                    <div class="invalid-feedback">Please enter a valid email.</div>
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label text-white fs-5">Password</label>
                    <input
                        type="password"
                        class="form-control"
                        id="password"
                        name="password"
                        required
                        minlength="6"
                        placeholder="Enter password">
                    <div class="invalid-feedback">Password must be at least 6 characters.</div>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-gold">Login</button>
                </div>

                <!-- <div class="text-center mt-4">
                    <a href="#" class="text-decoration-none text-small">Forgot Password?</a>
                </div> -->
            </form>
        </div>
    </div>

    <script>
        (() => {
            'use strict';
            const forms = document.querySelectorAll('form');
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>