<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' );?>">
    <title><?php bloginfo( 'name' );?></title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts (Roboto) -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- WordPress Pingback -->
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' );?>">

    <?php wp_head();?>


</head>

<body <?php body_class(); ?>>

    <!-- <div class=" row  main-navbar ">
        <div>
            <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/img/image.png" class="brand-image"> </a>
        </div>




        <div class=" space-between gap-4">

            <div class="dropdown ">

                <div class="btn btn-group dropdown-toggle-split bg-white space-between gap-4" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <div>
                        Rent</div>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item text-black" href="#">Appartments</a></li>
                    <li><a class="dropdown-item text-black" href="#">Villas</a></li>
                    <li><a class="dropdown-item text-black" href="#">Buildings</a></li>
                    <li><a class="dropdown-item text-black" href="#">Offices</a></li>
                </ul>
            </div>

            <div class="dropdown ">

                <div class="btn btn-group dropdown-toggle-split bg-white space-between gap-4" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <div>
                        Sale</div>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item text-black" href="#">Appartments</a></li>
                    <li><a class="dropdown-item text-black" href="#">Villas</a></li>
                    <li><a class="dropdown-item text-black" href="#">Buildings</a></li>
                    <li><a class="dropdown-item text-black" href="#">Lands</a></li>
                    <li><a class="dropdown-item text-black" href="#">Offices</a></li>
                </ul>
            </div>

            <div class="dropdown ">

                <div class="btn btn-group dropdown-toggle-split bg-white space-between gap-4" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <div>
                        More fgjjjjjjjjj</div>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item text-black" href="#">Appartments</a></li>
                    <li><a class="dropdown-item text-black" href="#">Villas</a></li>
                    <li><a class="dropdown-item text-black" href="#">Buildings</a></li>
                    <li><a class="dropdown-item text-black" href="#">Offices</a></li>
                    <li><a class="dropdown-item text-black" href="#">Appartments</a></li>
                    <li><a class="dropdown-item text-black" href="#">Villas</a></li>
                    <li><a class="dropdown-item text-black" href="#">Buildings</a></li>
                    <li><a class="dropdown-item text-black" href="#">Offices</a></li>
                </ul>
            </div>

            <span class="btn     ">Weetas Blog </span>

        </div>

        <div style="width: 20px; height: 30px; background-color: #000;"></div>


        <div class=" space-between ">

            <div class="btn " style="background-color: #F17B4C;  ">
                <i class="fa-solid fa-pen" style="color: #ffffff; margin-right: .5rem ;"></i> <span>Request
                    Property</span>
            </div>
            <div class="btn " style="background-color: #FF0000; ">
                <i class="fa-solid fa-plus" style="color: #ffffff; margin-right: .5rem ;"></i><span>Submit
                    Property</span>
            </div>
            <div class="btn " style="background-color: #fff;">
                <i class="fa-regular fa-circle-user " style=" margin-right: .5rem ;"></i><span>Submit Property</span>
            </div>

        </div>

    </div> -->


    <div style="display: flex; 
    flex-direction: row; align-items: center; " class="main-navbar">
        <div>
            <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/img/image.png" class="brand-image"> </a>
        </div>


        <div style="align-items: center; display: flex; flex-direction:row ; margin-left: 400px;">



            <div style="display: flex; flex-direction:row ; align-items: center;">


                <div class="dropdown ">

                    <div class="btn btn-group dropdown-toggle-split bg-white space-between gap-4" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <div>
                            Rent</div>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-black" href="#">Appartments</a></li>
                        <li><a class="dropdown-item text-black" href="#">Villas</a></li>
                        <li><a class="dropdown-item text-black" href="#">Buildings</a></li>
                        <li><a class="dropdown-item text-black" href="#">Offices</a></li>
                    </ul>
                </div>

                <div class="dropdown ">

                    <div class="btn btn-group dropdown-toggle-split bg-white space-between gap-4" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <div>
                            Sale</div>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-black" href="#">Appartments</a></li>
                        <li><a class="dropdown-item text-black" href="#">Villas</a></li>
                        <li><a class="dropdown-item text-black" href="#">Buildings</a></li>
                        <li><a class="dropdown-item text-black" href="#">Lands</a></li>
                        <li><a class="dropdown-item text-black" href="#">Offices</a></li>
                    </ul>
                </div>

                <div class="dropdown ">

                    <div class="btn btn-group dropdown-toggle-split bg-white space-between gap-4" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <div>
                            More fgjjjjjjjjj</div>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-black" href="#">Appartments</a></li>
                        <li><a class="dropdown-item text-black" href="#">Villas</a></li>
                        <li><a class="dropdown-item text-black" href="#">Buildings</a></li>
                        <li><a class="dropdown-item text-black" href="#">Offices</a></li>
                        <li><a class="dropdown-item text-black" href="#">Appartments</a></li>
                        <li><a class="dropdown-item text-black" href="#">Villas</a></li>
                        <li><a class="dropdown-item text-black" href="#">Buildings</a></li>
                        <li><a class="dropdown-item text-black" href="#">Offices</a></li>
                    </ul>
                </div>

                <div class="btn">Weetas Blog</div>

            </div>

            <div style="width: 2px; height: 30px; background-color: #000; margin-inline: 20px;"></div>



            <div style="gap:1rem ;  display: flex; flex-direction: row; justify-content: space-between;">

                <div class="btn " style="background-color: #F17B4C;  ">
                    <i class="fa-solid fa-pen" style="color: #ffffff; margin-right: .5rem ;"></i> <span>Request
                        Property</span>
                </div>
                <div class="btn " style="background-color: #FF0000; ">
                    <i class="fa-solid fa-plus" style="color: #ffffff; margin-right: .5rem ;"></i><span>Submit
                        Property</span>
                </div>
                <div class="btn " style="background-color: #fff;">
                    <i class="fa-regular fa-circle-user " style=" margin-right: .5rem ;"></i><span>Login
                    </span>
                </div>

            </div>

        </div>

    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Popper.js for Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>