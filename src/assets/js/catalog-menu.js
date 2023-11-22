// catalog-menu----------------------------
$(function() {
    let $overlay_header2 = $('.j-overlay-width-header2'),
        $nav = $('.j-catalog-menu-nav'),
        $li = $('.j-catalog-menu-li'),
        $a = $('.j-catalog-menu-a'),
        $submenu = $('.j-catalog-menu-submenu');

    // $a.on('click', function(e) {
    //     e.preventDefault();

    //     let $this = $(this),
    //         $submenu = $this.siblings('.j-catalog-menu-submenu');

    //     if($window.width() > 1200) {
    //         if($this.closest('.j-header-catalog').length == 0) {
    //             $overlay_header2.addClass('active-target');
    //         }

    //         $nav.addClass('active');
    //         $this.addClass('active');
    //         $submenu.show();

    //         $.ajax({
    //         	method: 'POST',
    //         	url: '../templates/catalog-menu-submenu.php',
    //         	complete: function(response) {
    //         		$submenu.append(response.responseText);
    //         	}
    //         });
    //     }
    // });

    // $li.on('mouseleave', function() {
    //     let $this = $(this);

    //     if($window.width() > 1200) {
    //         if($this.closest('.j-header-catalog').length == 0) {
    //             $overlay_header2.removeClass('active-target');
    //         }
    //         $submenu.hide();
    //         $submenu.html('');
    //         $nav.removeClass('active');
    //         $('.catalog-menu__list-a').removeClass('active');
    //     }
    // });

    $a.on('click', function(e) {
        let $this = $(this),
            $this_submenu = $this.siblings('.j-catalog-menu-submenu');
        
        // if($window.width() <= 1200) {
            if($this.closest('.j-header-catalog').length == 0) {
                $overlay_header2.addClass('active-target');
            }

            $submenu.hide();
            $submenu.html('');

            if($this.is('.active')) {
                $overlay_header2.removeClass('active-target');
                $a.removeClass('active');
                $nav.removeClass('active');
                $this.removeClass('active');
            } else {
                $a.removeClass('active');
                $nav.addClass('active');
                $this.addClass('active');
                $this_submenu.show();

                $.ajax({
                	method: 'POST',
                	url: '../templates/catalog-menu-submenu.php',
                	complete: function(response) {
                		$this_submenu.append(response.responseText);
                	}
                });
            }

            return false;
        // }
    });

    $document.on('click', '.j-catalog-menu-a-sub', function(e) {
        e.preventDefault();

        let $this = $(this),
            $this_submenu = $this.siblings('.j-catalog-menu-submenu');
        
        $('.j-catalog-menu-a-sub').hide()
        $this_submenu.show();
    });

    $document.on('click', '.j-catalog-menu-back', function() {
        let $this = $(this),
            $this_submenu = $this.closest('.j-catalog-menu-submenu');
        
        $('.j-catalog-menu-a-sub').show();
        $this_submenu.hide();
    });

    $document.on('click', '.j-catalog-menu-close', function() {
        let $this = $(this),
            $this_submenu = $this.closest('.j-catalog-menu-submenu');
        
        $overlay_header2.removeClass('active-target'); 
        $a.removeClass('active');
        $nav.removeClass('active');
        $this_submenu.hide();
    });

    $document.on('click', function(e) {
        let $target = $(e.target);
        
        if(!$target.is('.catalog-menu') && !$target.parents().is('.catalog-menu')) {
            $overlay_header2.removeClass('active-target'); 
            $a.removeClass('active');
            $nav.removeClass('active');
            $submenu.hide();
        }
    });
})