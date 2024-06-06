document.addEventListener('DOMContentLoaded', function () {
    var dropbtns = document.querySelectorAll('.dropbtn');
    
    dropbtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            var dropdownContent = this.nextElementSibling;
            dropdownContent.classList.toggle('show');
        });
    });

    window.addEventListener('click', function (event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.querySelectorAll('.dropdown-content');
            dropdowns.forEach(function (dropdown) {
                if (dropdown.classList.contains('show')) {
                    dropdown.classList.remove('show');
                }
            });
        }
    });
});
