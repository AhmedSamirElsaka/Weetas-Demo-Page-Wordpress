<?php 
get_header();
?>


<style>
body.modal-open {
    overflow: visible !important;
    /* Allow scrolling */
}

.modal-backdrop {
    display: none;
    /* Optional: Remove the black overlay */
}

.modal {
    z-index: 1050;
    /* Ensure modal is above the backdrop */
    pointer-events: auto;
    background-color: rgb(0, 0, 0, 0.5);
    width: 100%;
    height: 100%;
    /* Ensure the modal is interactive */
}

.modal-body {
    background-color: #fff;
}
</style>
<div style="overflow: scroll; display: flex; flex-direction: column; width: 100%; height:100%">

    <div class="mainContainer">
        <div class="row topBarContainer">
            <!-- Search Location -->
            <div class="col-6">
                <div class="searchTitle">Search Location</div>
                <div class="searchInput">
                    <div class="searchIcon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <input type="text" id="search_query" class="searchInputform" placeholder="Search Location" />
                </div>
            </div>

            <!-- No. of Bedrooms Dropdown -->
            <div class="col">
                <div class="searchTitle">No. Of Bedrooms</div>
                <div class="dropdown">

                    <div class="btn btn-group dropdown-toggle-split" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">

                        <div>
                            1</div>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">1</a></li>
                        <li><a class="dropdown-item" href="#">2</a></li>
                        <li><a class="dropdown-item" href="#">3</a></li>
                    </ul>
                </div>
            </div>

            <!-- Property Type Dropdown -->
            <div class="col">
                <div class="searchTitle">Property Type</div>
                <div class="dropdown">
                    <div class="btn btn-group dropdown-toggle-split" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">

                        <div>
                            rent</div>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">rent 2</a></li>
                        <li><a class="dropdown-item" href="#">rent 2</a></li>
                        <li><a class="dropdown-item" href="#">rent 2</a></li>
                    </ul>
                </div>
            </div>

            <!-- Filter Dropdown -->
            <div class="col ">
                <div class="searchTitle">Filter</div>
                <div class="dropdown">
                    <div class="btn btn-group dropdown-toggle-split" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false" id="filter_button">

                        <div>
                            filter</div>
                        <i class="fa-solid fa-filter"></i>
                    </div>
                </div>
            </div>


            <div class="col mt-3">
                <button class="btn  btn-search">Search</button>
            </div>
        </div>

        <!-- Submit Button -->

        <div class="modal " id="myModal">
            <div class="modal-header" style="width:50%; position: absolute; top:19%; left:25%; padding: 24px;">
                <h2>Filter</h2>
                <i class="fa-regular fa-circle-xmark close" style="color: #000000;"></i>
            </div>
            <!-- <br> -->
            <div class="modal-body top-bar-filter-modal" style="width:50%; position: absolute; top:25%; left:25%;">
                <span>Select Type</span>


                <div class="radio-group">
                    <input type="radio" id="all" name="property" value="all" checked>
                    <label for="all" class="radio-label">All</label>

                    <input type="radio" id="apartments" name="property" value="apartments">
                    <label for="apartments" class="radio-label">Apartments</label>

                    <input type="radio" id="buildings" name="property" value="buildings">
                    <label for="buildings" class="radio-label">Buildings</label>

                    <input type="radio" id="offices" name="property" value="offices">
                    <label for="offices" class="radio-label">Office Spaces</label>

                    <input type="radio" id="villas" name="property" value="villas">
                    <label for="villas" class="radio-label">Villas</label>

                    <input type="radio" id="lands" name="property" value="lands">
                    <label for="lands" class="radio-label">Lands</label>
                </div>

                <hr>


                <div class="slider">
                    <div class="progress"></div>
                </div>
                <div class="range-input">
                    <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
                    <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
                </div>
                <div class="price-input">
                    <div class="field">
                        <span>BHD</span>
                        <input type="number" class="input-min" value="2500">
                    </div>
                    <div class="separator"></div>
                    <div class="field">
                        <span>BHD</span>
                        <input type="number" class="input-max" value="7500">
                    </div>
                </div>



                <hr>


                <div class="row">

                    <div class="col-4">
                        <div class="searchTitle">No. Of Bedrooms</div>
                        <div class="dropdown">

                            <div class="btn btn-group dropdown-toggle-split" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa-solid fa-bed"></i>

                                <div>
                                    1</div>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#" style="color: #000;">1</a></li>
                                <li><a class="dropdown-item" href="#" style="color: #000;">2</a></li>
                                <li><a class="dropdown-item" href="#" style="color: #000;">3</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-4">
                        <div class="searchTitle">No. of Bathroom</div>
                        <div class="dropdown">

                            <div class="btn btn-group dropdown-toggle-split" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa-solid fa-bath"></i>
                                <div>
                                    1</div>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#" style="color: #000;">1</a></li>
                                <li><a class="dropdown-item" href="#" style="color: #000;">2</a></li>
                                <li><a class="dropdown-item" href="#" style="color: #000;">3</a></li>
                            </ul>
                        </div>
                    </div>


                </div>

                <div class="row">
                    <div class="col-3 mt-3">
                        <button class="btn  btn-search">Apply Filter</button>
                    </div>

                    <div class="col-3 mt-3">
                        <button class="btn  btn-cancel">Cancel</button>
                    </div>
                </div>



            </div>


        </div>
    </div>
    <div class="row">
        <div class="col-9"
            style=" padding-inline: 200px;   padding-top: 2rem; display: flex; flex-direction: column; gap: 1rem;">
            <span
                style="color: #212121; font-family: Manrope; font-size: 30px; font-style: normal; font-weight: 800; line-height: normal;">5,354
                Apartments for rent in Bahrain</span> <span
                style="color: #EB4A48; font-family: Manrope; font-size: 16px; font-style: normal; font-weight: 600; line-height: normal;">
                32 New Posted </span> <span
                style="color: #000; font-family: Manrope; font-size: 18px; font-style: normal; font-weight: 700; line-height: normal; font-size: 1.5rem; margin-top: 24px;">
                Check also </span>
            <div
                style="border-radius: 10px; background: #F9F9F9; width: 100%;  padding-block: 24px; display: flex; flex-direction: column; padding-inline: 16px; gap: 24px;">
                <div style="display: flex; flex-direction: row; gap: 100px;">
                    <div> <span
                            style="color: #F00; font-family: Manrope; font-size: 18px; font-style: normal; font-weight: 700; line-height: normal;">(
                            811 )</span> <span
                            style="color: #000; font-family: Manrope; font-size: 18px; font-style: normal; font-weight: 400; line-height: normal;">Three
                            bedroom apartments for rent in Bahrain</span>
                    </div>
                    <div>
                        <span
                            style="color: #F00; font-family: Manrope; font-size: 18px; font-style: normal; font-weight: 700; line-height: normal;">(
                            2,865 )</span> <span
                            style="color: #000; font-family: Manrope; font-size: 18px; font-style: normal; font-weight: 400; line-height: normal;">Two
                            bedroom apartments for rent in Bahrain</span>
                    </div>
                </div>
                <div style="display: flex; flex-direction: row; gap: 100px;">
                    <div> <span
                            style="color: #F00; font-family: Manrope; font-size: 18px; font-style: normal; font-weight: 700; line-height: normal;">(
                            1,337 )</span> <span
                            style="color: #000; font-family: Manrope; font-size: 18px; font-style: normal; font-weight: 400; line-height: normal;">One
                            bedroom apartments for rent in Bahrain</span> </div>
                    <div> <span
                            style="color: #F00; font-family: Manrope; font-size: 18px; font-style: normal; font-weight: 700; line-height: normal;">(
                            2,865 )</span> <span
                            style="color: #000; font-family: Manrope; font-size: 18px; font-style: normal; font-weight: 400; line-height: normal;">Two
                            bedroom apartments for rent in Bahrain</span> </div>
                </div>
            </div>

            <div
                style="display: flex; flex-direction: row; align-items: center; background: #fff; width:fit-content ; margin-top: 24px; gap:16px">
                <span style="width: fit-content; ">Sort by : </span>
                <div class="dropdown" style="display: flex; width: fit-content;">

                    <div class="btn btn-group dropdown-toggle-split bg-white space-between gap-4" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false"
                        style="display: flex; width: fit-content; height: 38px; padding: 5px 15px; align-items: center; border-radius: 5px; border: 0.5px solid var(--Light-Gray, #D9D9D9); background: var(--Extra-Light-Gray, #F8F8F8);">
                        <div>
                            Newest to Oldest</div>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-black" href="#">Newest to Oldest</a></li>
                        <li><a class="dropdown-item text-black" href="#">Oldest to Newest</a></li>
                        <li><a class="dropdown-item text-black" href="#">Date Updated</a></li>
                        <li><a class="dropdown-item text-black" href="#">Bedroom Less</a></li>
                        <li><a class="dropdown-item text-black" href="#">Bedroom More</a></li>
                        <li><a class="dropdown-item text-black" href="#">Price High To Low</a></li>
                        <li><a class="dropdown-item text-black" href="#">Price Low To High</a></li>

                    </ul>
                </div>





                <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#filtersModal"
                    style="background: #EB4A48; width:100px; color: #fff;">
                    Filters
                </button>


                <!-- <div class=" modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true"> -->
                <div class="modal fade" id="filtersModal" tabindex="-1" aria-labelledby="filtersModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="filtersModalLabel">
                                    <?php esc_html_e('Filter Properties', 'weetas2024'); ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="<?php esc_attr_e('Close', 'weetas2024'); ?>"></button>
                            </div>
                            <div class="modal-body">
                                <form method="GET" action="">
                                    <input type="hidden" name="search"
                                        value="<?php echo esc_attr($_GET['search'] ?? ''); ?>">
                                    <input type="hidden" name="town"
                                        value="<?php echo esc_attr($_GET['town'] ?? ''); ?>">
                                    <div class="mb-3">
                                        <label for="min_price"
                                            class="form-label"><?php esc_html_e('Min Price:', 'weetas2024'); ?></label>
                                        <input type="number" name="min_price" id="min_price" class="form-control"
                                            value="<?php echo esc_attr($_GET['min_price'] ?? ''); ?>"
                                            placeholder="<?php esc_attr_e('Min Price', 'weetas2024'); ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="max_price"
                                            class="form-label"><?php esc_html_e('Max Price:', 'weetas2024'); ?></label>
                                        <input type="number" name="max_price" id="max_price" class="form-control"
                                            value="<?php echo esc_attr($_GET['max_price'] ?? ''); ?>"
                                            placeholder="<?php esc_attr_e('Max Price', 'weetas2024'); ?>">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal"><?php esc_html_e('Close', 'weetas2024'); ?></button>
                                        <button type="submit"
                                            class="btn btn-primary"><?php esc_html_e('Apply Filters', 'weetas2024'); ?></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



            </div>



            <php>
                <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post(); 
                
?>


                <div class="main-post">

                    <!-- <?php echo get_fields()['name'];?>
                    <?php echo get_fields()['price'];?>
                    <?php echo get_fields()['place'];?>
                    <?php echo get_fields()['state'];?>
                    <?php echo get_fields()['is_inclusive'];?>
                    <?php echo get_fields()['noof_beds'];?>
                    <?php echo get_fields()['noof_baths'];?>
                    <?php echo get_fields()['ref_id'];?>
                    <?php echo get_fields()['producer_number'];?> -->


                    <div style="display: flex; flex-direction: row; gap: 16px;">

                        <img src="<?php echo get_fields()['product_image'];?>" class="post_image">
                        <div style="display: flex; flex-direction: column; gap: 8px; padding: 16px;">
                            <div
                                style="color: #000; font-family: Manrope; font-size: 18px; font-style: normal; font-weight: 700; line-height: normal;">
                                <?php echo get_fields()['name'];?></div>

                            <div
                                style="color: #F00; font-family: Manrope; font-size: 30px; font-style: normal; font-weight: 700; line-height: normal; display: flex; flex-direction: row; gap: 8px; align-items: center;">
                                <?php echo get_fields()['price'];?><div
                                    style="color: #212121; font-family: Manrope; font-size: 14px; font-style: normal; font-weight: 700; line-height: normal;">
                                    / Month</div>
                            </div>
                            <div style="display: flex; flex-direction: row; gap: 8px; margin-top: 24px;">
                                <i class="fa-solid fa-location-dot"></i>
                                <div
                                    style="color: #757373; font-family: Manrope; font-size: 13px; font-style: normal; font-weight: 500; line-height: normal;">
                                    <?php echo get_fields()['place'];?>
                                </div>
                            </div>


                            <div
                                style="display: flex; flex-direction: row; gap: 16px; margin-top: 8px; align-items: center;">
                                <div style="display: flex; flex-direction: row; gap:8px">

                                    <i class="fa-solid fa-cube"></i>
                                    <div
                                        style="color: #757373; font-family: Manrope; font-size: 13px; font-style: normal; font-weight: 500; line-height: normal;">
                                        <?php echo get_fields()['state'];?>
                                    </div>
                                </div>
                                <div
                                    style="display: flex; flex-direction: row; gap:8px ; background-color: #FEF3EE; padding-inline: 16px; padding-block:8px ; border-radius: 8px;">

                                    <i class="fa-solid fa-bolt-lightning" style="color: #EE4035;"></i>
                                    <div
                                        style="color: #EE4035; font-family: Manrope; font-size: 12px; font-style: normal; font-weight: 700; line-height: normal;">
                                        <?php echo get_fields()['is_inclusive'];?>
                                    </div>
                                </div>

                            </div>
                            <div
                                style="display: flex; flex-direction: row; gap: 16px; margin-top: 8px; align-items: center; ">
                                <div style="display: flex; flex-direction: row; gap:8px ;align-items: center;">

                                    <i class="fa-solid fa-bed"></i>
                                    <div
                                        style="color: #000; font-family: Manrope; font-size: 13px; font-style: normal; font-weight: 500; line-height: normal;">
                                        <?php echo get_fields()['noof_beds'];?>
                                    </div>
                                </div>
                                <div
                                    style="display: flex; flex-direction: row; gap:8px ; background-color: #fff; padding-inline: 16px; padding-block:8px ; border-radius: 8px; align-items: center;">

                                    <i class="fa-solid fa-bath"></i>
                                    <div
                                        style=" font-family: Manrope; font-size: 12px; font-style: normal; font-weight: 700; line-height: normal;">
                                        <?php echo get_fields()['noof_baths'];?>
                                    </div>
                                </div>

                            </div>

                            <div style="display: flex; flex-direction: row; gap: 16px;">
                                <div class="btn"
                                    style="display: flex; border-radius: 3px; color:#F17B4C ;    background: var(--Extra-Light-Orange, #FEF3EE); width: 170px; height: 46px; padding: 10px 20px; justify-content: center; align-items: center; gap: 15px;">
                                    Show Number
                                </div>

                                <div class="btn"
                                    style="display: flex; border-radius: 3px; color:#fff ;    background: var(--Extra-Light-Orange, #FF0000); width: 170px; height: 46px; padding: 10px 20px; justify-content: center; align-items: center; gap: 15px;">
                                    Inquire Now
                                </div>

                                <div class="btn"
                                    style="border-radius: 6px; align-items: center; background: #FEF3EE; justify-content: center;">
                                    <i class="fa-solid fa-ellipsis-vertical fa-xl"
                                        style="color: #F17B4C; align-items: center;"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
            }
        }
        ?>

                </div>
            </php>


        </div>


        <div class="col-3 ">
            <?php 
                    if(is_active_sidebar('main-sidebar')){
                        dynamic_sidebar('main-sidebar');
                    }
                
                
                ?>
        </div>


        <div class="pagination-container">
            <?php wpbeginner_numeric_posts_nav(); ?>
        </div>



        <span style="color: #212121; font-family: Manrope; font-size: 24px; font-style: normal; font-weight: 800; line-height: normal;
            margin-bottom: 56px; margin-inline: 200px;">What
            is the average price of Apartments in Bahrain?</span>


        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>
                            <i class="fa-solid fa-dollar-sign"></i> Apartment Size
                            <span></span>
                        </th>
                        <th>

                        </th>
                        <th>
                            <i class="fa-solid fa-dollar-sign"></i> Average Price
                            <span></span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Studio</td>
                        <td>
                            <a href="#" class="button">See 256 Apartments</a>
                        </td>
                        <td>308 BHD</td>
                    </tr>
                    <tr>
                        <td>Studio</td>
                        <td>
                            <a href="#" class="button">See 256 Apartments</a>
                        </td>
                        <td>308 BHD</td>
                    </tr>
                    <tr>
                        <td>Studio</td>
                        <td>
                            <a href="#" class="button">See 256 Apartments</a>
                        </td>
                        <td>308 BHD</td>
                    </tr>
                    <tr>
                        <td>Studio</td>
                        <td>
                            <a href="#" class="button">See 256 Apartments</a>
                        </td>
                        <td>308 BHD</td>
                    </tr>
                    <tr>
                        <td>Studio</td>
                        <td>
                            <a href="#" class="button">See 256 Apartments</a>
                        </td>
                        <td>308 BHD</td>
                    </tr>
                    <tr>
                        <td>Studio</td>
                        <td>
                            <a href="#" class="button">See 256 Apartments</a>
                        </td>
                        <td>308 BHD</td>
                    </tr>
                </tbody>
            </table>
        </div>


        <div class="expandable">
            <div class="expandable-header" onclick="toggleExpand()">
                Is Bahrain a safe country?
                <div class="icon" id="icon">&#9660;</div>
            </div>
            <div class="expandable-content" id="content">
                Bahrain is generally considered a safe country for both locals and visitors. It has a low crime rate,
                and its government prioritizes the safety and security of its citizens and residents.
            </div>
        </div>

    </div>



</div>




</div>


<?php get_footer(); ?>

<!-- Add JavaScript dependencies before closing body tag -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>


<script>

</script>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("filter_button");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0] || document.querySelector(".modal-header .close");

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


<script>
const rangeInput = document.querySelectorAll(".range-input input"),
    priceInput = document.querySelectorAll(".price-input input"),
    range = document.querySelector(".slider .progress");
let priceGap = 1000;

priceInput.forEach((input) => {
    input.addEventListener("input", (e) => {
        let minPrice = parseInt(priceInput[0].value),
            maxPrice = parseInt(priceInput[1].value);

        if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
            if (e.target.className === "input-min") {
                rangeInput[0].value = minPrice;
                range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
            } else {
                rangeInput[1].value = maxPrice;
                range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
            }
        }
    });
});

rangeInput.forEach((input) => {
    input.addEventListener("input", (e) => {
        let minVal = parseInt(rangeInput[0].value),
            maxVal = parseInt(rangeInput[1].value);

        if (maxVal - minVal < priceGap) {
            if (e.target.className === "range-min") {
                rangeInput[0].value = maxVal - priceGap;
            } else {
                rangeInput[1].value = minVal + priceGap;
            }
        } else {
            priceInput[0].value = minVal;
            priceInput[1].value = maxVal;
            range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
            range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
        }
    });
});
</script>


<!-- <script>
// Get the modal
var modal = document.getElementById("filtersModal");

// Get the button that opens the modal
var btn = document.getElementById("filter_button_body");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0] || document.querySelector(".modal-header .close");

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script> -->


<script>
function toggleExpand() {
    const content = document.getElementById('content');
    const icon = document.getElementById('icon');
    content.classList.toggle('expanded');
    icon.classList.toggle('rotated');
}
</script>