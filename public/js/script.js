$(document).ready(function() {
    var page = 2; // начальная страница для запроса следующих фотографий
    $(window).scroll(function() {
        if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
            $.ajax({
                url: '/next-photos?page=' + page,
                data: {
                    page: page
                },
                dataType: 'json',
                success: function(data) {
                    $.each(data, function(index, value) {
// добавляем полученные фотографии в галерею
                        var photoHtml = '<div class="col-lg-4 col-md-12 mb-4 mb-lg-0">' +
                            '<div class="card shadow-sm">' +
                            '<img class="card-img-top" src="' + value.urls.regular + '" alt="' + value.alt_description + '">' +
                            '<div class="card-body">' +
                            '<p class="card-text">' + (value.description ? value.description : '') + '</p>' +
                            '<div class="d-flex justify-content-between align-items-center">' +
                            '<small class="text-muted">' + value.user.name + '</small>' +
                            '<small class="text-muted">' + value.created_at + '</small>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                        $('.row').append(photoHtml);
                    });
                    page++; // увеличиваем номер страницы для следующего запроса
                }
            });
        }
    });
});
