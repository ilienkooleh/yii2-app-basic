jQuery('document').ready(function () {
    $('#button').on('click', function () {
        $.ajax({
            url: 'index.php?page=userInfo',
            success: function (data) {
                console.log(data);
                $('#result').html('Ваш IP:' + data ['ip']);
            }
        });
    })
});



