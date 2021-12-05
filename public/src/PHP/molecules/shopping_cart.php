<div class="dropdown" style="float:right;">
    <a class="text-decoration-none">
        <div onclick="myFunction()" class="material-icons dropbtn">shopping_bag</div>
    </a>
    <div id="myDropdown" class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
        <a href="#">Link 3</a>
        <a href="#">Link 3</a>
        <a href="#">Link 3</a>

    </div>
</div>

<script>
    function myFunction() {
        var dropdown = document.getElementById("myDropdown").classList;

        if (dropdown.contains("show_dropdown")) {
            dropdown.remove("show_dropdown");
        } else {
            dropdown.add("show_dropdown");
        }
    }
</script>