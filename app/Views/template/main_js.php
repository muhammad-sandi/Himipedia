<script src="<?= base_url('');?>assets/vendor/jquery/jquery.min.js" type="255494c313aea54b82739eeb-text/javascript">
</script>
<script src="<?= base_url('');?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"
    type="255494c313aea54b82739eeb-text/javascript"></script>

<script src="<?= base_url('');?>assets/vendor/select2/js/select2.min.js"
    type="255494c313aea54b82739eeb-text/javascript"></script>

<script src="<?= base_url('');?>assets/vendor/owl-carousel/owl.carousel.js"
    type="255494c313aea54b82739eeb-text/javascript"></script>

<script src="<?= base_url('');?>assets/vendor/slider/slider.js" type="255494c313aea54b82739eeb-text/javascript">
</script>

<script src="<?= base_url('');?>assets/js/custom.js" type="255494c313aea54b82739eeb-text/javascript"></script>
<script src="<?= base_url('');?>assets/js/hc-offcanvas-nav0235.js?ver=4.1.1"
    type="255494c313aea54b82739eeb-text/javascript"></script>
<link rel="stylesheet" href="<?= base_url('');?>assets/js/demo6b00.css?ver=3.4.0">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script type="255494c313aea54b82739eeb-text/javascript">
    (function ($) {
        var $main_nav = $('#main-nav');
        var $toggle = $('.toggle');

        var defaultOptions = {
            disableAt: false,
            customToggle: $toggle,
            levelSpacing: 40,
            navTitle: 'All Categories',
            levelTitles: true,
            levelTitleAsBack: true,
            pushContent: '#container',
            insertClose: 2
        };

        // call our plugin
        var Nav = $main_nav.hcOffcanvasNav(defaultOptions);

        // add new items to original nav
        $main_nav.find('li.add').children('a').on('click', function () {
            var $this = $(this);
            var $li = $this.parent();
            var items = eval('(' + $this.attr('data-add') + ')');

            $li.before('<li class="new"><a href="#">' + items[0] + '</a></li>');

            items.shift();

            if (!items.length) {
                $li.remove();
            } else {
                $this.attr('data-add', JSON.stringify(items));
            }

            Nav.update(true);
        });

        // demo settings update

        const update = (settings) => {
            if (Nav.isOpen()) {
                Nav.on('close.once', function () {
                    Nav.update(settings);
                    Nav.open();
                });

                Nav.close();
            } else {
                Nav.update(settings);
            }
        };

        $('.actions').find('a').on('click', function (e) {
            e.preventDefault();

            var $this = $(this).addClass('active');
            var $siblings = $this.parent().siblings().children('a').removeClass('active');
            var settings = eval('(' + $this.data('demo') + ')');

            update(settings);
        });

        $('.actions').find('input').on('change', function () {
            var $this = $(this);
            var settings = eval('(' + $this.data('demo') + ')');

            if ($this.is(':checked')) {
                update(settings);
            } else {
                var removeData = {};
                $.each(settings, function (index, value) {
                    removeData[index] = false;
                });

                update(removeData);
            }
        });
    })(jQuery);
</script>
</body>

<!-- Mirrored from askbootstrap.com/preview/chpoee/demo2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jun 2022 11:50:47 GMT -->

</html>