<div class="menu-button" onclick="toggleMenu()">
    <span class="bar1"></span>
    <span class="bar2"></span>
    <span class="bar3"></span>
</div>

<script>
    function toggleMenu() {
        const menuButton = document.querySelector('.menu-button');
        menuButton.classList.toggle('open');
    }
</script>