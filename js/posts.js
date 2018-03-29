$(function () {

    $('.like').on('click', function () {
        var $this = $(this),
            oCount = $this.find('.count'),
            iCount = oCount.html(),
            oIcon = $this.find('svg.fa-heart');


        if (oIcon.attr('data-prefix') === 'far') {
            oIcon.attr('data-prefix', 'fas');
            oCount.html(++iCount);
        } else {
            oIcon.attr('data-prefix', 'far');
            oCount.html(--iCount);
        }

        console.log(oIcon.attr('data-prefix'));

    });

});