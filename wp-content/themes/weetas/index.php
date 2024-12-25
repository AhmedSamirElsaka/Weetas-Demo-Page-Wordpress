<?php 
get_header();
?>

<!-- <style>
.mainContainer {
    background-color: #F1F1F1;
    padding-inline: 4rem;
    padding-block: 2rem;
}

.topBarContainer {
    display: flex;
    gap: 1rem;
    justify-content: space-between;
    align-items: center;
        border: 4px solid #000;

}

.searchTitle {
    color: #4D4C4C;
    margin-bottom: 0.5rem;
}

.searchInput {
    background-color: #FEF3EE;
    border: 1px solid #F8DED4;
    padding: .5rem;
    border-radius: 5px;
    display: flex;
    align-items: center;
    gap: 10px;
    position: relative;
}

.searchInput .searchIcon {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    cursor: pointer;
    transition: opacity 0.2s ease-in-out;
}

.searchInput .searchIcon:hover {
    opacity: 0.8;
}

.searchInput .searchIcon:active {
    opacity: 0.6;
}

.searchInputform {
    border: none;
    background-color: #FEF3EE;
    width: 100%;
    color: #000;
    outline: none;
}

.dropdown {
    width: 100%;
    background-color: #F8F8F8;
}

.btn-group {
    width: 100%;
    background-color: #F8F8F8;
    color: #000;
    justify-content: space-between;
    align-items: center;
}

.btn-group div {
    text-align: left;

}

.dropdown-item {
    color: #F1F1F1;
}

.btn-search {
    width: 100%;
    background-color: #EE4035;
    color: #FFF;
}

.btn-cancel {
    width: 100%;
    background-color: #fff;
    color: #000;
}

.btn-search:hover {
    background-color: #EE4035;
    color: #FFF;
}

.modal-header h2 {
    color: #000;
    font-family: Manrope;
    font-size: 1.5rem;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
}

.modal-header {
    padding: 2px 16px;
    background-color: #fff;
    color: black;
    justify-content: space-between;

}

/* The Modal (background) */
.modal {
    display: none;
    /* Hidden by default */
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1;
    width: 40%;
    height: fit-content;
    overflow: auto;
    background-color: #fff;
    padding: 16px;
    border-radius: 8px;
}



/* Add Animation */
@-webkit-keyframes animatetop {
    from {
        top: -300px;
        opacity: 0
    }

    to {
        top: 0;
        opacity: 1
    }
}

@keyframes animatetop {
    from {
        top: -300px;
        opacity: 0
    }

    to {
        top: 0;
        opacity: 1
    }
}

/* The Close Button */
.close {
    color: black;
    font-size: 18px;
}

.close:hover,
.close:focus {
    color: white;
    text-decoration: none;
    cursor: pointer;
}

.modal-body {
    padding: 36px 16px;
}


.radio-group {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
    background-color: white;
    padding-top: 8px;
    border-radius: 8px;
    width: 90%;

}

.radio-group input[type="radio"] {
    display: none;
}

.radio-label {
    text-align: center;
    padding: 10px 20px;
    border: 2px solid #ddd;
    border-radius: 30px;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 10px;
    position: relative;
    background-color: #F0F0F0;
}

.radio-label::before {
    content: "";
    width: 16px;
    height: 16px;
    border: 2px solid #ddd;
    border-radius: 50%;
    background-color: transparent;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    color: white;
    font-weight: bold;
}

.radio-group :checked+.radio-label {
    border-color: #ff0000;
    color: #ff0000;
    font-weight: bold;
}

.radio-group :checked+.radio-label::before {
    background-color: #ff0000;
    border-color: #ff0000;
    content: "✔";
}


.price-input {
    width: 100%;
    display: flex;
    margin: 30px 0 56px;
    align-items: center;
}

.price-input .field {
    display: flex;
    width: 100%;
    height: 45px;
    align-items: center;


}

.field input {
    width: 100%;
    height: 100%;
    outline: none;
    font-size: 19px;
    margin-left: 12px;
    border-radius: 5px;
    text-align: center;
    border: 1px solid #999;
    -moz-appearance: textfield;
    justify-content: space-between;
}

input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
}

.price-input .separator {
    width: 60px;
    display: flex;
    font-size: 19px;
    align-items: center;
    justify-content: center;
    height: 1px;
    background-color: #DBDBDB;
    margin: 0px 56px 0px 56px;

}

.slider {
    height: 5px;
    position: relative;
    background: #ddd;
    border-radius: 5px;
    margin-top: 56px;
}

.slider .progress {
    height: 100%;
    left: 25%;
    right: 25%;
    position: absolute;
    border-radius: 5px;
    background: #EE4035;
}

.range-input {
    position: relative;
}

.range-input input {
    position: absolute;
    width: 100%;
    height: 5px;
    top: -5px;
    background: none;
    pointer-events: none;
    -webkit-appearance: none;
    -moz-appearance: none;
}

input[type="range"]::-webkit-slider-thumb {
    height: 36px;
    width: 36px;
    border-radius: 50%;
    background: #fff;
    pointer-events: auto;
    -webkit-appearance: none;
    box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
    border: 3px solid #EE4035;
    /* Define a border with width, style, and color */
}

/* input[type="range"]::-moz-range-thumb {
    height: 17px;
    width: 17px;
    border: none;
    border-radius: 50%;
    background: #fff;
    pointer-events: auto;
    -moz-appearance: none;
    box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
    border-width: 6px;
    border: #EE4035;
} */



.modal-footer {
    padding: 2px 16px;
    background-color: #fff;
    color: white;
}
</style> -->

<div>

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

        <div class="modal" id="myModal">
            <div class="modal-header">
                <h2>Filter</h2>
                <i class="fa-regular fa-circle-xmark close" style="color: #000000;"></i>
            </div>
            <!-- <br> -->
            <div class="modal-body">
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
                                <li><a class="dropdown-item" href="#">1</a></li>
                                <li><a class="dropdown-item" href="#">2</a></li>
                                <li><a class="dropdown-item" href="#">3</a></li>
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
                                <li><a class="dropdown-item" href="#">1</a></li>
                                <li><a class="dropdown-item" href="#">2</a></li>
                                <li><a class="dropdown-item" href="#">3</a></li>
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

            <div class="modal-footer">
                <h3>Modal Footer</h3>
            </div>
        </div>


    </div>



    <div style=" padding-inline: 2rem;
  padding-top: 2rem; display: flex; flex-direction: column; gap: 1rem;">
        <span
            style="color: #212121; font-family: Manrope; font-size: 30px; font-style: normal; font-weight: 800; line-height: normal;">5,354
            Apartments for rent in Bahrain</span>

        <span style="color: #EB4A48;
font-family: Manrope;
font-size: 16px;
font-style: normal;
font-weight: 600;
line-height: normal;">
            32 New Posted
        </span>


        <span style="color: #000;
font-family: Manrope;
font-size: 18px;
font-style: normal;
font-weight: 700;
line-height: normal;
font-size: 1.5rem;
margin-top: 24px;">
            Check also
        </span>



        <div style="border-radius: 10px;
background: #F9F9F9; width: 90%; padding-inline: 100px; padding-block: 24px; display: flex; flex-direction: row;">
            <div>hello </div>
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