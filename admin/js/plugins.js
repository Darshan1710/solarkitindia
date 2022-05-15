  $(function() {


    // Plugin initialization
	  
    
    $('#modal').modal();

    // Materialize Slider
    $('.slider').slider({
      full_width: true
    });

 $('.parallax').parallax();
    $('.materialboxed').materialbox();
    
    // Commom, Translation & Horizontal Dropdown
    $('.dropdown-button, .translation-button, .dropdown-menu').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrainWidth: false,
      hover: true,
      gutter: 0,
      belowOrigin: true,
      alignment: 'left',
      stopPropagation: false
    });
    // Notification, Profile & Settings Dropdown
    $('.notification-button, .profile-button, .dropdown-settings').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrainWidth: false,
      hover: true,
      gutter: 0,
      belowOrigin: true,
      alignment: 'right',
      stopPropagation: false
    });

    // Materialize scrollSpy
    $('.scrollspy').scrollSpy();

    // Materialize tooltip
    $('.tooltipped').tooltip({
      delay: 50
    });


  });