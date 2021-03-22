    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        const dropDown = document.querySelectorAll('.dropdown-trigger');
        M.Dropdown.init(dropDown);

        const sidenav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sidenav);


        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
            interval: 3000
        });

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);
    </script>

</body>

<footer class="orange white-text center flow-text">
    <h5>@Web Company Profile</h5>
</footer>


</html>