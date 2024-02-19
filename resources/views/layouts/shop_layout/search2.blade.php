<style>
    .model2 {
        display: none;
        /* Hide the model2 by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
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

    .model2-content {
        background-color: #fefefe;
        margin: 15% auto;
        /* Center model2 on screen */
        padding: 30px;
        border-radius: 10px;
        border: 1px solid #888;
        width: 100%;
        /* Set the width */
    }

    .close2 {
        color: red;
        float: right;
        font-size: 28px;
        font-weight: bold;
        /* padding: 10px */
    }

    .close2:hover,
    .close2:focus {
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
        width: 100%;
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

    #searchListItems2 {
        z-index: 30;
    }
</style>

<button id="openmodel2Btn2" class="btn btn-outline-light"><i class="fa fa-search fa-2x text-dark"></i></button>

<div id="mymodel22" class="model2">
    <span class="close2">&times;</span>
    <div class="model2-content">
        <form action="/shop/search?q=" method="get">
            <input type="text" class="search-click" name="search" placeholder="search here..." id="searchInput2" />
            <div id="searchListItems2"></div> <!-- Correct the ID here -->
        </form>
    </div>
</div>

<script>
    // Get the model2 element
    var model2 = document.getElementById("mymodel22");

    // Get the button that opens the model2
    var btn = document.getElementById("openmodel2Btn2");

    // Get the <span> element that close2s the model2
    var span = document.getElementsByClassName("close2")[0];

    // When the user clicks the button, open the model2
    btn.onclick = function() {
        model2.style.display = "block";
    }

    // When the user clicks on <span> (x), close22 the model2
    span.onclick = function() {
        model2.style.display = "none";
    }

    // When the user clicks anywhere outside of the model2, close22 it
    window.onclick = function(event) {
        if (event.target == model2) {
            model2.style.display = "none";
        }
    }
</script>

<script>
    const searchInput2 = document.querySelector("#searchInput2");

    searchInput2.addEventListener('keydown', function() {
        console.log(this.value)
        const query = this.value.trim(); // Trim whitespace from the input
        if (query.length == 0) {
            document.getElementById("searchListItems2").innerHTML = "";
            document.getElementById("searchListItems2").style.border = "0px";
            return;
        }

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("searchListItems2").innerHTML = this.responseText;
                document.getElementById("searchListItems2").style.border = "1px solid #A5ACB2";
            }
        }
        xmlhttp.open("GET", "/shop/search?q=" + query, true);
        xmlhttp.send();

    });
</script>
