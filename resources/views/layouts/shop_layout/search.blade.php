<style>
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
</style>
<form action="/shop/search?q=" method="get">
    <input type="text" class="search-click" name="search" placeholder="search here..." id="searchInput" />
    <div id="searchListItems"></div> <!-- Correct the ID here -->
</form>


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
