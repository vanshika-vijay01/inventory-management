var loc = window.location.href;

    loc = loc.split("?")[0];

    index = loc.indexOf('#');

    if (index > 0)
    {
        loc= loc.substring(0, index);
    }

    $('.sidebar-content nav ul li').removeClass('active');

    var nav_a_loc = $('.sidebar-content nav ul li a[href="'+loc+'"]');

    nav_a_loc.parent().addClass('active');

    nav_a_loc.closest('.dropdown').addClass('active');

    // if(loc.indexOf('productEdit')>0)
    // {

    //   loc=loc.substr(0, loc.lastIndexOf("/"));
    //   loc=loc.replace("productEdit","addon_list");
    //   $('#navbar ul li a[href="'+loc+'"]').parent().addClass('active');
    // }