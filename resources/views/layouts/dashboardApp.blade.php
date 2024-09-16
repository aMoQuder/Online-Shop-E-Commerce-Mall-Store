<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- Mirrored from educhamp.themetrades.com/demo/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:08:15 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard V.1 | jeweler - Material Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
  ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
  ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
  ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
  ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
  ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
  ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
  ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
  ============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
  ============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- forms CSS
    ============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- morrisjs CSS
  ============================================ -->

    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
  ============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
  ============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
  ============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
  ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
  ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <!-- modernizr JS
  ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- summernote CSS
  ============================================ -->
    <link rel="stylesheet" href="css/summernote/summernote.css">
    <style>
        .review-bx-reply .form-control {
            height: 150px;
        }

        .bookmarks-bx .card-courses-list-bx {
            margin-bottom: 10px;
        }

        .done {

            margin-left: 6px;
        }

        .bigdone {
            display: flex;
        }

        /* Card Courses List */
        .card-courses-list {
            display: flex;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            padding-bottom: 30px;
            margin-bottom: 30px;
        }

        .card-courses-list:last-child {
            border-bottom: 0;
            padding-bottom: 0;
            margin-bottom: 0;
        }

        .card-courses-media {
            width: 250px;
            min-width: 250px;
            height: 250px;
            margin-right: 30px;
            border-radius: 4px;
            overflow: hidden;
        }

        .card-courses-media img {
            width: 100%;
            object-fit: cover;
            height: 250px;
        }

        .card-courses-view {
            margin: 0;
            padding: 0;
            list-style: none;
            display: flex;
            align-items: center;
            width: 100%;
        }

        .card-courses-user {
            display: flex;
            align-items: center;
        }

        .card-courses-user-pic {
            width: 50px;
            height: 50px;
            border-radius: 50px;
            overflow: hidden;
            margin-right: 10px;
        }

        .card-courses-view>li {
            position: relative;
            padding-right: 30px;
        }

        .card-courses-view>li:last-child {
            padding-right: 0;
        }

        .card-courses-stats h5,
        .card-courses-price del,
        .card-courses-review h5,
        .card-courses-categories h5,
        .card-courses-user-info h5 {
            font-size: 12px;
            color: #C0C0C0;
            margin: 0;
            line-height: 18px;
        }

        .card-courses-categories h4,
        .card-courses-user-info h4 {
            font-size: 14px;
            margin: 0;
            line-height: 22px;
            color: #606060;
            text-transform: uppercase;
        }

        .card-courses-price {
            margin-left: auto;
        }

        .card-courses-list-bx {
            margin-bottom: 20px;
        }

        .card-courses-dec p {
            font-size: 14px;
            line-height: 22px;
        }

        .card-courses-dec-list {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .card-courses-dec-list li {
            display: flex;
            font-size: 14px;
            color: #606060;
            padding-bottom: 10px;
            width: 50%;
            float: left;
        }

        .card-courses-dec-list li strong {
            margin-right: 10px;
            color: #000;
            width: 40%;
        }

        /* Reply */
    </style>
</head>


<body class="ttr-opened-sidebar ttr-pinned-sidebar">

    <!-- welcome devolper -->
    <!-- ======================  -->
    <!-- ------------------------------------------------------------------------------------------------------------  -->
    <!-- start project -->

    <div id="appdashboard">
        @include('temp.navbarDashboard')

        <main class="">
            @yield('content')
        </main>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright &copy; 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All
                                rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- end project -->
    <!-- ------------------------------------------------------------------------------------------------------------- -->


    <script>
        // Pricing add
        function newMenuItem() {
            var newElem = $('tr.list-itemd').first().clone();
            newElem.find('input').val('');
            newElem.appendTo('table#item-addd');
        }
        if ($("table#item-addd").is('*')) {
            $('.add-itemd').on('click', function(e) {
                e.preventDefault();
                newMenuItem();
            });
            $(document).on("click", "#item-addd .delete", function(e) {
                e.preventDefault();
                $(this).parent().parent().parent().parent().remove();
            });
        }
    </script>
    <script>
        let colorCounter = 1; // عداد لتتبع عدد العناصر
        document.getElementById('add-color-button').addEventListener('click', function() {
            colorCounter++;
            var container = document.getElementById('item-addd');
            var originalSelectRow = document.querySelector('.list-itemd');
            var newSelectRow = originalSelectRow.cloneNode(true);
            var newSelect = newSelectRow.querySelector('input');
            newSelect.id = 'color' + colorCounter; // إضافة معرف فريد
            newSelect.selectedIndex = -1; // إعادة تعيين القائمة المنسدلة للقيمة الافتراضية
            container.appendChild(newSelectRow);
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#image').change(function() {
                let reader = new FileReader();
                reader.onload = function(e) {
                    $('#preview').attr('src', e.target.result);
                    $('#preview').show();
                }
                reader.readAsDataURL(this.files[0]);
            });
        });

        function previewFile() {
            document.getElementById('append-big-btn').value = this.value;
            var fileInput = document.getElementById('updateImage');
            var preview = document.getElementById('image_preview');

            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                }

                reader.readAsDataURL(fileInput.files[0]);
            }
        }
    </script>
    <!-- jquery
  ============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
            ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
            ============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
            ============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
            ============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
            ============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
            ============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
            ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
            ============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
            ============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
            ============================================ -->
    <script src="js/morrisjs/raphael-min.js"></script>
    <script src="js/morrisjs/morris.js"></script>
    <script src="js/morrisjs/morris-active.js"></script>
    <!-- morrisjs JS
            ============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
            ============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- summernote JS
  ============================================ -->
    <script src="js/summernote/summernote.min.js"></script>
    <script src="js/summernote/summernote-active.js"></script>
    <!-- plugins JS
            ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
            ============================================ -->
    <script src="js/main.js"></script>
    {{-- ============================================ --> --}}
    <script src="js/tab.js"></script>

    <!-- payment away JS
  ============================================ -->
    <script src="js/card.js"></script>
    <script src="js/jquery.payform.min.js"></script>
    <script src="js/e-payment.js"></script>
    <!-- plugins JS
</body>

</html>
