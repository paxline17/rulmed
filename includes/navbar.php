

<nav class="navbar fixed-bottom navbar-dark bg-success">
    <div class="container-fluid">


        <div class="d-flex justify-content-around p-2 w-100 fs-4">

            <a href="index.php" class="text-reset">
                <i class="fa-solid fa-house fa-2xl"></i>
            </a>


            <a href="availability.php" class="text-reset">
                <i class="fa-solid fa-wheelchair fa-2xl"></i>
            </a>


            <a href="setting.php" class="text-reset">
                <i class="fa-solid fa-gear fa-2xl"></i>
            </a>
        </div>
    </div>
</nav>

<script>
    const darkModeToggle = document.getElementById('darkModeToggle');
    const body = document.body;

    if (localStorage.getItem('theme') === 'dark' ) {
        body.classList.add('dark-mode');
        if (darkModeToggle){
            darkModeToggle.checked = true;
        }
    }

    if (darkModeToggle){
        darkModeToggle.addEventListener('change',() => {
            if (darkModeToggle.checked) {
                body.classList.add('dark-mode');
                localStorage.setItem('theme', 'dark');
            } else{
                body.classList.remove('dark-mode');
                localStorage.setItem('theme','light');
            }
        });
    }

</script>