<?php 
get_header();
?>

<style>
.mainContainer {
    background-color: #F1F1F1;
    border: 4px solid #000;
    padding-inline: 4rem;
    padding-block: 2rem;
}

.topBarContainer {
    display: flex;
    gap: 1rem;
    justify-content: space-between;
    align-items: center;
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
    flex: 1;
    color: #000;
    outline: none;
}

.dropdown {
    width: 100%;
}

.btn-custom {
    margin-top: 1rem;
    width: 100%;
}
</style>

<div class="mainContainer">
    <div class="row topBarContainer">
        <!-- Search Location -->
        <div class="col-5">
            <div class="searchTitle">Search Location</div>
            <div class="searchInput">
                <div class="searchIcon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <input type="text" id="search_query" class="searchInputform" placeholder="Search Location" />
            </div>
        </div>

        <!-- No. of Bedrooms Dropdown -->
        <div class="col-2">
            <div class="searchTitle">No. Of Bedrooms</div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Dropdown
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>

        <!-- Property Type Dropdown -->
        <div class="col-1   ">
            <div class="searchTitle">Property Type</div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Dropdown
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>

        <!-- Filter Dropdown -->
        <div class="col-2">
            <div class="searchTitle">Filter</div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Dropdown button
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>


        <div class="col-1   ">
            <button class="btn btn-primary btn-custom">Search</button>
        </div>
    </div>

    <!-- Submit Button -->

</div>

<?php get_footer(); ?>

<!-- Add JavaScript dependencies before closing body tag -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>