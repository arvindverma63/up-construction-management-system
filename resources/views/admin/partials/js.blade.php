
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function () {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.querySelector('.main-content');
            const navbar = document.querySelector('.navbar');
            const overlay = document.getElementById('overlay');

            sidebar.classList.toggle('active');
            mainContent.classList.toggle('expanded');
            navbar.classList.toggle('expanded');
            overlay.classList.toggle('active');
        });

        document.getElementById('overlay').addEventListener('click', function () {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.querySelector('.main-content');
            const navbar = document.querySelector('.navbar');
            const overlay = document.getElementById('overlay');

            sidebar.classList.remove('active');
            mainContent.classList.add('expanded');
            navbar.classList.add('expanded');
            overlay.classList.remove('active');
        });
    </script>
