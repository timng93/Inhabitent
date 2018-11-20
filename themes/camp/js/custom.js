(function($) {
  $(document).ready(function() {
    const $searchField = $('.header-bar input.search-field');

    $('.header-bar .search-submit').click(function() {
      $searchField.toggle('slow');
      $searchField.focus();
    });

    $searchField.on('blur', function() {
      $searchField.toggle();
    });

    $(window).scroll(function() {
      if ($(document).scrollTop() > 800) {
        $('.home .header-bar, .page-template-about .header-bar').css({
          position: 'fixed',
          background: 'rgba(255, 255, 255, 0.6)',
          borderBottom: '1px solid #e1e1e1'
        });

        $('.home .header-bar a, .page-template-about .header-bar a').css(
          'color',
          '#248a83'
        );
        $('.home .header-bar .logo, .page-template-about .logo').css(
          'display',
          'inline-block'
        );
        $(
          '.home .header-bar .white-logo, .page-template-about .white-logo'
        ).css('display', 'none');
        $('.home .header-bar .fa-search, .page-template-about .fa-search').css(
          'color',
          '#248a83'
        );
      } else {
        $('.home .header-bar, .page-template-about .header-bar').css({
          position: 'absolute',
          background: 'rgba(255, 255, 255, 0)',
          borderBottom: 'none'
        });
        $('.home .header-bar a, .page-template-about .header-bar a').css(
          'color',
          '#fff'
        );

        $('.home .header-bar .logo, .page-template-about .logo').css(
          'display',
          'none'
        );
        $(
          '.home .header-bar .white-logo, .page-template-about .white-logo'
        ).css('display', 'inline-block');
        $('.home .header-bar .fa-search, .page-template-about .fa-search').css(
          'color',
          '#fff'
        );
      }
    });

    $(window).scroll(function() {
      if ($(document).scrollTop() > 700) {
        $(' .page-template-about .header-bar').css({
          position: 'fixed',
          background: 'rgba(255, 255, 255, 0.6)',
          borderBottom: '1px solid #e1e1e1'
        });
        $(' .page-template-about .header-bar a').css('color', '#248a83');
        $('.page-template-about .logo').css('display', 'inline-block');
        $('.page-template-about .white-logo').css('display', 'none');
        $(' .page-template-about .fa-search').css('color', '#248a83');
      } else {
        $('.page-template-about .header-bar').css({
          position: 'absolute',
          background: 'rgba(255, 255, 255, 0)',
          borderBottom: 'none'
        });
        $(' .page-template-about .header-bar a').css('color', '#fff');
        $('.page-template-about .logo').css('display', 'none');
        $(' .page-template-about .white-logo').css('display', 'inline-block');
        $('.page-template-about .fa-search').css('color', '#fff');
      }
    });

    
  });
})(jQuery);

