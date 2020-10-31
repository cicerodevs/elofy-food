let initial = 1;
$(document).ready(function() {
    $('#maxRows').on('change', function() {
        getPagination('#myTable', $(this).val());
    });
    getPagination('#myTable');
});

function getPagination(table) {

    let trnum = 0;
    let maxRows = $('#maxRows').val();
    let totalRows = $(table + ' tbody tr').length;
    $(table + ' tr:gt(0)').each(function() {
        trnum++;
        if (trnum > maxRows) {

            $(this).hide();
        }
        if (trnum <= maxRows) {
            $(this).show();
        }
    });
    $('.pagination-info').html(initial + " - " + maxRows);
    $('.totalData').html(totalRows);
    if (totalRows > maxRows) {
        let pagenum = Math.ceil(totalRows / maxRows);
        for (let i = 1; i <= pagenum;) {
            $('.pagination').append('<li class"page-item active" data-page="' + i + '" style="display: none;"><span class="page-link">' + i++ + '<span class="sr-only">(current)</span></span></li>');
        }
    }
    $('.pagination li:first-child').addClass('active');
    $('.pagination li').on('click', function() {
        let pageNum = $(this).attr('data-page');
        let total_rows = maxRows * pageNum;
        if (total_rows == totalRows) {
            $('.next').attr("disabled", true);
        } else {
            $('.next').attr("disabled", false);
        }
        if ((total_rows - maxRows) > 0) {
            $('.prev').attr("disabled", false);
        }else{
            $('.prev').attr("disabled", true);
        }
       
        $('.pagination-info').html(((total_rows - maxRows) + 1) + " - " + total_rows);

        let trIndex = 0;
       
        $('.pagination li').removeClass('active');
        $(this).addClass('active');
        $(table + ' tr:gt(0)').each(function() {
            trIndex++;
            if (trIndex > (maxRows * pageNum) || trIndex <= ((maxRows * pageNum) - maxRows)) {
                $(this).hide();
            } else {
                $(this).show();
            }
        });
    });
    let currentNumber = 1;

    $('.prev').on('click', function() {
        let pageLinks = $('.pagination li');
        currentNumber--;

        if (currentNumber == 0) {
            currentNumber = pageLinks.length;
        }

        let previousLink = pageLinks.filter('.active').prev();
        if (previousLink.length == 0) {
            nextLink = pageLinks.last();
        }

        previousLink.trigger('click');
    });

    $(document).on('click', '.next', function() {
        let pageLinks = $('.pagination li');
        currentNumber++;
        if (currentNumber > pageLinks.length) {
            currentNumber = 1;
        }

        let nextLink = pageLinks.filter('.active').next();
        if (nextLink.length == 0) {
            nextLink = pageLinks.first();
        }
        nextLink.trigger('click');

    });
}