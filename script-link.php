<!-- favicon -->

<link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png"sizes="32x32" href="../img/favicon//favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../img/favicon//favicon-16x16.png">
<link rel="manifest"href="/site.webmanifest"> 


<!-- Bootstrap files (jQuery first, then Popper.js, then Bootstrap JS) -->

    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>    

    
<!-- Load Images later -->    
<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.2.2/lazysizes.min.js" integrity="sha512-TmDwFLhg3UA4ZG0Eb4MIyT1O1Mb+Oww5kFG0uHqXsdbyZz9DcvYQhKpGgNkamAI6h2lGGZq2X8ftOJvF/XjTUg==" crossorigin="anonymous"></script> 
    
    
    
<!-- Navbar menu close -->
    
<script type="text/javascript">
    $(document).ready(function() {
        // Navbar menu close
        $('.navbar-collapse a').click(function(){
            $(".navbar-collapse").collapse('hide');
        });

        // Prevent closing from click inside dropdown
        $(document).on('click', '.dropdown-menu', function (e) {
            e.stopPropagation();
        });

        // add padding top to show content behind navbar
        $('body').css('padding-top', $('.navbar').outerHeight() + 'px')

        // detect scroll top or down
        if ($('.smart-scroll').length > 0) {
            let last_scroll_top = 0, scroll_top = 0;
            const smartscroll = $('.smart-scroll')
            const navbartoggler = $('button.navbar-toggler')

            $(window).on('scroll', function() {
                if (navbartoggler.attr('aria-expanded') == 'false') {
                    window.requestAnimationFrame(hasScrolled);
                }
            });

            function hasScrolled() {
                scroll_top = $(window).scrollTop();

                if (scroll_top <= 0) {
                    smartscroll.removeClass('scrolled-up').addClass('scrolled-down');
                } else {
                    if(scroll_top < last_scroll_top) {
                        smartscroll.removeClass('scrolled-up').addClass('scrolled-down');
                    } else {
                        smartscroll.removeClass('scrolled-down').addClass('scrolled-up');
                    }
                }
                
                last_scroll_top = scroll_top;
            }
        }

        // Sorting Alphabetically the table + delete features  not used
        $('#example').DataTable(  {
            "paging":   false,
            "searching": false,
            "info":     false
        });
    });    
</script>
   
 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
 <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<link src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
 <link src="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
   
    
<!-- DataTables javascript  tablebootstrap4 -->    
    
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.22/cr-1.5.2/r-2.2.6/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/cr-1.5.2/r-2.2.6/datatables.min.js"></script>



<!-- Adding links to the rows of bbootstrap data tables -->    

<script type="text/javascript">
$('table tr').on('click', function(e) {
    var link = $(this).data('href')
    window.location = link
})
    </script>