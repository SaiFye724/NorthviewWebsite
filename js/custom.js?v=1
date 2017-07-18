/* Function to open/close side menu */
$(document).ready( function() {

    var menuVisible = false,
        $rightMenu     = $('#side-menu');

    $('#hamburger-menu ').on('click', function() {
        // menu is being shown
        $rightMenu.animate({ right: '0'}).css('display', 'block'); // animates menu in
        menuVisible = true; 
    })

    $('#close-side-menu').on('click', function() {
        // menu is now being hidden
        $rightMenu.animate({ right: '-310px'}).css('display', 'none');
        menuVisible = false; 
    })

    /* Function to open and close school submenu */
    var schoolSubmenuVisible = false;

    $('#side-school').click(function() {
        if (schoolSubmenuVisible == false) {
            $('#side-school-dropdown').css({
                'display': 'block'
            });
            schoolSubmenuVisible = true;
        } else {
            $('#side-school-dropdown').css({
                'display': 'none'
            });
            schoolSubmenuVisible = false;
        }
    });
    
    /*Function to move the selection to the middle*/
    var length = ($(".Wallop-list").height() - $(".Wallop-buttonNext").outerHeight())/2;
    $(".Wallop-buttonNext").css("margin-top",length+"px");
    $(".Wallop-buttonPrevious").css("margin-top",length+"px");
    $( window ).resize(function() {
        var length = ($(".Wallop-list").height() - $(".Wallop-buttonNext").outerHeight())/2;
        $(".Wallop-buttonNext").css("margin-top",length+"px");
        $(".Wallop-buttonPrevious").css("margin-top",length+"px");
    });
    
    /* Function to open and close student submenu */
    var studentSubmenuVisible = false;

    $('#side-students').click(function() {
        if (studentSubmenuVisible == false) {
            $('#side-students-dropdown').css({
                'display': 'block'
            });
            studentSubmenuVisible = true;

        } else {
            $('#side-students-dropdown').css({
                'display': 'none'
            });
            studentSubmenuVisible = false;
        }
    })

    /* Function to open and close parents submenu */
    var parentSubmenuVisible = false;

    $('#side-parents').click(function() {
        if (parentSubmenuVisible == false) {
            $('#side-parents-dropdown').css({
                'display': 'block'
            });
            parentSubmenuVisible = true;

        } else {
            $('#side-parents-dropdown').css({
                'display': 'none'
            });
            parentSubmenuVisible = false;
        }
    })

    var awardsSubmenuVisible = false;

    $('.aw-su').click(function() {
        if (awardsSubmenuVisible == false) {

            $('.aw-su-dr').css('display', 'block');
            $('.aw-su-i').css('display', 'block');
            awardsSubmenuVisible = true;

        } else {

            $('.aw-su-dr').css('display', 'none');
            $('.aw-su-i').css('display', 'none');
            awardsSubmenuVisible = false;
        }
    })

    var artsSubmenuVisible = false;

    $('.arts-su').click(function() {
        // submenu is being shown

        if (artsSubmenuVisible == false) {

            $('.arts-su-dr').css('display', 'block');
            $('.arts-su-i').css('display', 'block');
            artsSubmenuVisible = true;

        } else {

            $('.arts-su-dr').css('display', 'none');
            $('.arts-su-i').css('display', 'none');
            artsSubmenuVisible = false;
        }
    })

    var pubSubmenuVisible = false;

    $('.pub-su').click(function() {

         if (pubSubmenuVisible == false) {
        // submenu is being shown

            $('.pub-su-dr').css('display', 'block');
            $('.pub-su-i').css('display', 'block');
            pubSubmenuVisible = true;
         } else {

            $('.pub-su-dr').css('display', 'none');
            $('.pub-su-i').css('display', 'none');
            pubSubmenuVisible = false;

         }
    })
})

    /* Function to search tables */
    function createExpr(arr) {
           var index = 0;
           var expr = [":containsiAND('" + arr[0] + "')"];
           for (var i = 1; i < arr.length; i++) {
              if (arr[i] === 'AND') {
                 expr[index] += ":containsiAND('" + arr[i + 1] + "')";
                 i++;
              } else if (arr[i] === 'OR') {
                 index++;
                 expr[index] = ":containsiOR('" + arr[i + 1] + "')";
                 i++;
              }
           }
           return expr;
        }

        $(document).ready(function() {

           $(".searchKey").keyup(function() {
              var searchTerm = $(".searchKey").val().replace(/["']/g, "");
              // var listItem = $('.results tbody').children('tr');
              var arr = searchTerm.split(/(AND|OR)/);
              var exprs = createExpr(arr);

              var searchSplit = searchTerm.replace(/AND/g, "'):containsiAND('").replace(/OR/g, "'):containsiOR('");

              $.extend($.expr[':'], {
                 'containsiAND': function(element, i, match, array) {
                    return (element.textContent || element.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
                 }
              });
              $.extend($.expr[':'], {
                 'containsiOR': function(element, i, match, array) {
                    return (element.textContent || element.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
                 }
              });
              $('.results tbody tr').attr('visible', 'false');
              for (var expr in exprs) {
                 $(".results tbody tr" + exprs[expr]).each(function(e) {
                    $(this).attr('visible', 'true');
                 });
              }
              var searchCount = $('.results tbody tr[visible="true"]').length;
              $('.searchCount').text(searchCount + ' item');
              if (searchCount == '0') {
                 $('.no-result').show();
              } else {
                 $('.no-result').hide();
              }
              if ($('.searchKey').val().length == 0) {
                 $('.searchCount').hide();
              } else {
                 $('.searchCount').show();
              }
           });
        });


        /* Function to remove home alert when x is clicked */
        $(document).ready( function() {
            var $homealert = $('#home-alert');
            $('#close-homealert').on('click', function() {
                $homealert.fadeOut();
            })
        });
