$('.cardInfo').on('click', '.link_add', function(event) {
    event.preventDefault();
    $.ajax({
        url: '/comment/show',
        data: {
            book_id: $(this).data('id')
        },
        type: 'GET',
        success: function (res) {
            showCart(res);
        },
        error: function() {
            alert('Error');
        }
    })
})

$('.cardInfo').on('click', '.link_check', function(event) {
    event.preventDefault();
    $.ajax({
        url: '/comment/check',
        data: {
            book_id: $(this).data('id')
        },
        type: 'GET',
        success: function (res) {
            showCart(res);
        },
        error: function() {
            alert('Error');
        }
    })
})

$('.modal').on('click', '.img', function(event) {
    $('.modal').css('display', 'none');
})

function showCart(res) {
    $('.modal').html(res);
    $('.modal').css('display', 'block')
}

$('.input').on('input', function(event) {
    $.ajax({
        url: '/search/index',
        data: {
            search: $(this).val()
        },
        type: 'GET',
        success: function (res) {
            showCart(res);
        },
        error: function() {
            alert('Error');
        }
    })
})