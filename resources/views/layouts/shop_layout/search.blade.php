{{-- <style>
    .search-click {
        border: 1px solid #ccc;
        outline: none;
        background-size: 22px;
        background-position: 13px;
        border-radius: 10px;
        width: 70px;
        height: 50px;
        padding: 10px;
        transition: all 0.5s;
    }

    .search-click:focus {
        width: 200px;
        padding-left: 30px;
    }

    .search-click {
        position: relative;
        overflow: hidden;
        height: 30px;
    }

    .search-click input {
        background: transparent;
        border: 1px solid #ccc;
        outline: none;
        position: absolute;
        width: 100px;
        height: 50px;
        left: 0%;
        padding: 10px;
    }

    #searchListItems {
        z-index: 30;
    }
</style>

<script>
    const searchInput = document.querySelector("#searchInput");

    searchInput.addEventListener('keydown', function() {
        console.log(this.value)
        const query = this.value.trim(); // Trim whitespace from the input
        if (query.length == 0) {
            document.getElementById("searchListItems").innerHTML = "";
            document.getElementById("searchListItems").style.border = "0px";
            return;
        }

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("searchListItems").innerHTML = this.responseText;
                document.getElementById("searchListItems").style.border = "1px solid #A5ACB2";
            }
        }
        xmlhttp.open("GET", "/shop/search?q=" + query, true);
        xmlhttp.send();

    });
</script>
<form action="/shop/search?q=" method="get">
    <input type="text" class="search-click" name="search" placeholder="search here..." id="searchInput" />
    <div id="searchListItems"></div> <!-- Correct the ID here -->
</form> --}}




<style>
    .modal {
        display: none;
        /* Hide the modal by default */
        position: fixed;
        /* Stay in place */
        z-index: 100;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scrolling if needed */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        /* Center modal on screen */
        padding: 30px;
        border-radius: 10px;
        border: 1px solid #888;
        width: 50%;
        /* Set the width */
    }

    .close {
        color: red;
        float: right;
        font-size: 28px;
        font-weight: bold;
        /* padding: 10px */
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    .search-click {
        border: 1px solid #ccc;
        outline: none;
        background-size: 22px;
        background-position: 13px;
        /* border-radius: 10px; */
        width: 60%;
        height: 50px;
        padding: 10px;
        transition: all 0.5s;
    }

    .search-click:focus {
        width: 80%;
        padding-left: 30px;
    }

    .search-click {
        position: relative;
        overflow: hidden;
        height: 30px;
    }

    .search-click input {
        background: transparent;
        border: 1px solid #ccc;
        outline: none;
        position: absolute;
        width: 100px;
        height: 50px;
        left: 0%;
        padding: 10px;
    }

    #searchListItems {
        z-index: 50;
    }
</style>

<button id="openModalBtn" class="btn btn-outline-light"><i class="fa fa-search fa-2x text-dark"></i></button>

<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <div class="modal-content">
        <form action="/shop/search?q=" method="get">
            <input type="text" class="search-click" name="search" placeholder="search here..." id="searchInput" />
            <div id="searchListItems"></div> <!-- Correct the ID here -->
        </form>
    </div>
</div>

<script>
    // Get the modal element
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("openModalBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        // console.log("Hell")
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
    const searchInput = document.querySelector("#searchInput");

    searchInput.addEventListener('keydown', function() {
        console.log(this.value)
        const query = this.value.trim(); // Trim whitespace from the input
        if (query.length == 0) {
            document.getElementById("searchListItems").innerHTML = "";
            document.getElementById("searchListItems").style.border = "0px";
            return;
        }

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("searchListItems").innerHTML = this.responseText;
                document.getElementById("searchListItems").style.border = "1px solid #A5ACB2";
            }
        }
        xmlhttp.open("GET", "/shop/search?q=" + query, true);
        xmlhttp.send();

    });
</script>
