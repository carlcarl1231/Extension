<!-- jQuery -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Custom JavaScript for Nested Dropdown -->
    <script>
        $(document).ready(function(){
            $('.dropdown-submenu a.dropdown-toggle').on("click", function(e){
                e.stopPropagation();
                e.preventDefault();
                var $submenu = $(this).next('.dropdown-menu');
                if ($submenu.is(':visible')) {
                    $submenu.hide();
                } else {
                    $submenu.parent().siblings().find('.dropdown-menu').hide();
                    $submenu.toggle();
                }
            });
            $('.nav-item.dropdown > a.dropdown-toggle').on("click", function(e){
                e.stopPropagation();
                var $mainMenu = $(this).next('.dropdown-menu');
                if ($mainMenu.is(':visible')) {
                    $mainMenu.hide();
                } else {
                    $('.dropdown-menu').hide();
                    $mainMenu.show();
                }
            });
        });
    </scrip>