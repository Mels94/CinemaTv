
$(document).ready(function () {
    /*-----------------------page loading-----------------------*/
    $.LoadingOverlaySetup({
        background: "rgba(255,255,255,0.85)",
        imageAnimation: '1500ms rotate_right',
        fade: '800 800',
        imageColor: "#ff55a5",
        image: '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" ' +
            'version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" ' +
            'xml:space="preserve"><g><g><path d="M256.001,0c-8.284,0-15,6.716-15,15v96.4c0,8.284,6.716,15,15,15s15-6.716,15-15V15C271.001,6.716,264.285,0,256.001,0z"/></g></g><g><g><path ' +
            'd="M256.001,385.601c-8.284,0-15,6.716-15,15V497c0,8.284,6.716,15,15,15s15-6.716,15-15v-96.399    ' +
            'C271.001,392.316,264.285,385.601,256.001,385.601z"/></g></g><g><g><path ' +
            'd="M196.691,123.272l-48.2-83.485c-4.142-7.175-13.316-9.633-20.49-5.49c-7.174,4.142-9.632,13.316-5.49,20.49l48.2,83.485    ' +
            'c2.778,4.813,7.82,7.502,13.004,7.502c2.545,0,5.124-0.648,7.486-2.012C198.375,139.62,200.833,130.446,196.691,123.272z"/></g></g><g><g><path ' +
            'd="M389.491,457.212l-48.199-83.483c-4.142-7.175-13.316-9.633-20.49-5.49c-7.174,4.142-9.632,13.316-5.49,20.49    ' +
            'l48.199,83.483c2.778,4.813,7.82,7.502,13.004,7.502c2.545,0,5.124-0.648,7.486-2.012    ' +
            'C391.175,473.56,393.633,464.386,389.491,457.212z"/></g></g><g><g><path ' +
            'd="M138.274,170.711L54.788,122.51c-7.176-4.144-16.348-1.685-20.49,5.49c-4.142,7.174-1.684,16.348,5.49,20.49    ' +
            'l83.486,48.202c2.362,1.364,4.941,2.012,7.486,2.012c5.184,0,10.226-2.69,13.004-7.503    ' +
            'C147.906,184.027,145.448,174.853,138.274,170.711z"/></g></g><g><g><path ' +
            'd="M472.213,363.51l-83.484-48.199c-7.176-4.142-16.349-1.684-20.49,5.491c-4.142,7.175-1.684,16.349,5.49,20.49    ' +
            'l83.484,48.199c2.363,1.364,4.941,2.012,7.486,2.012c5.184,0,10.227-2.69,13.004-7.502    ' +
            'C481.845,376.825,479.387,367.651,472.213,363.51z"/></g></g><g><g><path ' +
            'd="M111.401,241.002H15c-8.284,0-15,6.716-15,15s6.716,15,15,15h96.401c8.284,0,15-6.716,15-15    ' +
            'S119.685,241.002,111.401,241.002z"/></g></g><g><g><path ' +
            'd="M497,241.002h-96.398c-8.284,0-15,6.716-15,15s6.716,15,15,15H497c8.284,0,15-6.716,15-15S505.284,241.002,497,241.002z"/></g></g><g><g><path ' +
            'd="M143.765,320.802c-4.142-7.175-13.314-9.633-20.49-5.49l-83.486,48.2c-7.174,4.142-9.632,13.316-5.49,20.49    ' +
            'c2.778,4.813,7.82,7.502,13.004,7.502c2.545,0,5.124-0.648,7.486-2.012l83.486-48.2    ' +
            'C145.449,337.15,147.907,327.976,143.765,320.802z"/></g></g><g><g><path ' +
            'd="M477.702,128.003c-4.142-7.175-13.315-9.632-20.49-5.49l-83.484,48.2c-7.174,4.141-9.632,13.315-5.49,20.489    ' +
            'c2.778,4.813,7.82,7.503,13.004,7.503c2.544,0,5.124-0.648,7.486-2.012l83.484-48.2    ' +
            'C479.386,144.351,481.844,135.177,477.702,128.003z"/></g></g><g><g><path ' +
            'd="M191.201,368.239c-7.174-4.144-16.349-1.685-20.49,5.49l-48.2,83.485c-4.142,7.174-1.684,16.348,5.49,20.49    ' +
            'c2.362,1.364,4.941,2.012,7.486,2.012c5.184,0,10.227-2.69,13.004-7.502l48.2-83.485    ' +
            'C200.833,381.555,198.375,372.381,191.201,368.239z"/></g></g><g><g><path ' +
            'd="M384.001,34.3c-7.175-4.144-16.349-1.685-20.49,5.49l-48.199,83.483c-4.143,7.174-1.685,16.348,5.49,20.49    ' +
            'c2.362,1.364,4.941,2.012,7.486,2.012c5.184,0,10.226-2.69,13.004-7.502l48.199-83.483    ' +
            'C393.633,47.616,391.175,38.442,384.001,34.3z"/></g></g></svg>'
    });
        $.LoadingOverlay("show");
    setTimeout(function () {
        $.LoadingOverlay("hide");
    }, 2000);
/*        window.onload = () => {
            $.LoadingOverlay("hide");
        }*/

    /*------------------------pagination------------------------*/
    $(function () {
        $('.content_row').flexiblePagination({
            itemsPerPage: 12,
            itemSelector: 'div.result:visible',
            pagingControlsContainer: '.pagingControls',
            showingInfoSelector: '#showingInfo',
        });
    });

    /*--------------------------change user password-----------------------*/
    $(document).on('click', '.change_password', function () {
        let form = $(this).parents('form').serializeArray();
        let data = new FormData();
        $.each(form, function (i, item) {
            data.append(item.name, item.value);
        })
        data.append('change', 'send');
        $.ajax({
            url: window.location.origin + '/user/profile',
            type: 'post',
            dataType: 'json',
            data: data,
            processData: false,
            contentType: false,
            success: function (data) {
                console.log(data);
                $('#profile_form small').remove();
                if (data.success) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: data.message,
                        showConfirmButton: false,
                        timer: 3000
                    });
                    $('#profile_form input').val('');
                } else {
                    $.each(data.message, function (i, item) {
                        $('#profile_form input[name=' + i + ']').parent().append(`<small class="form-text text-muted">${item}</small>`)
                    })
                }
            }
        })
    })

    /*-------------------------delete user account-----------------------------*/
    $('.delete_account').on('click', function () {
        let val_input = $(this).parents('form').find('.modal-body').children().val();
        let _this_input = $(this).parents('form').find('.modal-body').children();
        $.ajax({
            url: window.location.origin + '/user/delete',
            type: 'post',
            dataType: 'json',
            data: {password: val_input},
            success: function (data) {
                if (data.success) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: data.message,
                        showConfirmButton: false,
                        timer: 3000
                    });
                    setTimeout(function () {
                        window.location.href = window.location.origin;
                    }, 3000);
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: data.message.password
                    })
                    _this_input.val('');
                }
            }
        })
    })


    /*----------------------------------video alert---------------------------*/
    $(document).on('click', '.popup__toggle', function () {
        $(this).closest('div').next().css("display", "block");
    })
    $(document).on('click', '.popup__overlay', function (event) {
        e = event || window.event;
        if (e.target == this) {
            var videos = document.querySelectorAll('iframe, video');
            Array.prototype.forEach.call(videos, function (video) {
                if (video.tagName.toLowerCase() === 'video') {
                    video.pause();
                } else {
                    var src = video.src;
                    video.src = src;
                }
            });
            $('.popup__overlay').css("display", "none");
        }
    })


    /*--------------------------accordion button append time------------------*/
    $('.accordion_btn').on('click', function () {
        let c_id = $(this).attr('data-id');
        let f_id = $(this).attr('accesskey');
        let f_name = $(this).attr('data-name');
        $('.remove').remove();
        $.ajax({
            url: window.location.origin + '/site/details_film/1',
            type: 'post',
            dataType: 'json',
            data: {cinema_id: c_id, film_id: f_id},
            success: function (data) {
                $.each(data, function (i, item) {
                    $('.tbody').append(`<tr class="remove">
                                            <th>${i + 1}</th>
                                            <td class="open-seats-modal" data-id="${c_id}" accesskey="${item.id}" dir="${f_name}">${item.start}</td>
                                            <td class="open-seats-modal" data-id="${c_id}" accesskey="${item.id}" dir="${f_name}">${item.end}</td>
                                        </tr><input type="hidden" value="${f_id}" id="film_id">`);
                })
            }
        })
    })


    /*--------------------------open film time modal--------------------------*/
    function appendSelect(data = []) {
        let option = ``;
        $.each(data, function (i, item) {
            option += `<option value="${item.id}">${item.start} to ${item.end}</option>`
        });
        return `<select class="custom-select change-date-film">
            <option disabled selected>Choose the day and time of the movie</option>
            ${option}
        </select> <div class="add-date-line mt-3"></div>`;
    }

    let modal = $('#exampleModal');
    $('.open-film-modal').on('click', function () {
        modal.find('.modal-body *').remove();
        let c_id = $(this).attr('accesskey');
        let f_id = $(this).attr('data-id');
        $.ajax({
            url: window.location.origin + '/site/details_film_cinema/1/2',
            type: 'post',
            dataType: 'json',
            data: {cinema_id: c_id, film_id: f_id},
            success: function (data) {
                modal.find('.modal-body').html(appendSelect(data) + `<input type="hidden" value="0" id="date_id" data-id="${c_id}">`);
            }
        })
        let film_name = $(this).attr('data-name');
        modal.find('.title-name').text(film_name);
        modal.modal('show');
    })

    /*-----------------------selected film time---------------------*/
    $(document).on('change', '.change-date-film', function () {
        let id = $(this).val();
        let cinema_id = $('#date_id').attr('data-id');
        modal.find('#date_id').val(id);
        $.ajax({
            url: window.location.origin + '/site/details_film_cinema/1/2',
            type: 'post',
            dataType: 'json',
            data: {c_id: cinema_id, time_id: id},
            success: function (data) {
                modal.find('.add-date-line div').remove();
                modal.find('.modal-body .add-date-line').append(`<div></div>`)
                let m = 1;
                let tr = ``;
                $.each(data.cinema, function (i, item) {
                    var td = `<div class="line-name">${item.name} - ${item.price}$</div><div class="d-flex w-100 justify-content-center line" data-price="${item.price}">`
                    for (let j = 1; j <= item.seats; j++) {
                        td += `<span data-id="${m}-${j}" class="seats" title="${j}"><i class="fas fa-chair"></i></span>`
                    }
                    tr += `<div class="d-flex ">${td}</div></div>`;
                    m++
                })
                modal.find('.add-date-line div').html(tr);
                $.each(data.selected, function (i, item) {
                    modal.find(`.add-date-line div span[data-id=${item.seats}] i`).css('color', 'red');
                    modal.find(`.add-date-line div span[data-id=${item.seats}]`).attr('disabled', 'disabled');
                    modal.find(`.add-date-line div span[data-id=${item.seats}]`).css('cursor', 'auto');
                })
            }
        })

    });


    /*-----------------------------------selected seats--------------------------*/
    $(document).on('click', '.seats', function () {
        let dateId = $('#date_id').val();
        let number = $(this).attr('data-id');
        let timeId = $(this).attr('accesskey');
        let arrSeats = number.split('-');
        let _this = $(this);
        let film_id = $('#film_id').val();
        let href = window.location.href;
        if (href === window.location.origin + '/site/details_film/' + film_id) {
            if (_this.attr('disabled')) {
                Swal.fire(
                    'Busy',
                    'Order another seat',
                    'question'
                )
            } else {
                $.confirm({
                    title: 'Warning',
                    content: 'In case of confirmation you will order the ' + arrSeats[1] + ' seat in the ' + arrSeats[0] + ' row',
                    buttons: {
                        OK: function () {
                            $.ajax({
                                url: window.location.origin + '/site/details_film/1',
                                type: 'post',
                                dataType: 'json',
                                data: {timeId: timeId, num: number},
                                success: function (data) {
                                    if (data) {
                                        _this.find('.fa-chair').css('color', 'red');
                                        _this.attr('disabled', 'disabled');
                                        _this.css('cursor', 'auto');
                                        Swal.fire(
                                            'Ordered!',
                                            'You have ordered the ' + arrSeats[1] + ' seat in the ' + arrSeats[0] + ' row',
                                            'success'
                                        )
                                    } else {
                                        window.location.href = window.location.origin + '/user/signIn';
                                    }
                                }
                            })
                        },
                        cancel: function () {

                        },
                    },
                });
            }

        } else {
            if (_this.attr('disabled')) {
                Swal.fire(
                    'Busy',
                    'Order another seat',
                    'question'
                )
            } else {
                $.confirm({
                    title: 'Warning',
                    content: 'In case of confirmation you will order the ' + arrSeats[1] + ' seat in the ' + arrSeats[0] + ' row',
                    buttons: {
                        OK: function () {
                            $.ajax({
                                url: window.location.origin + '/site/details_film_cinema/1/2',
                                type: 'post',
                                dataType: 'json',
                                data: {dateId: dateId, num: number},
                                success: function (data) {
                                    if (data) {
                                        _this.find('.fa-chair').css('color', 'red');
                                        _this.attr('disabled', 'disabled');
                                        _this.css('cursor', 'auto');
                                        Swal.fire(
                                            'Ordered!',
                                            'You have ordered the ' + arrSeats[1] + ' seat in the ' + arrSeats[0] + ' row',
                                            'success'
                                        )
                                    } else {
                                        window.location.href = window.location.origin + '/user/signIn';
                                    }
                                }
                            })
                        },
                        cancel: function () {

                        },
                    },
                });
            }
        }
    })


    /*----------------------------open seats modal-----------------------*/
    $(document).on('click', '.open-seats-modal', function () {
        let cinema_id = $(this).attr('data-id');
        let timeId = $(this).attr('accesskey');
        let film_name = $(this).attr('dir');
        let timeText = $(this).closest('tr').find('.open-seats-modal').text();
        let start = timeText.substring(0,19);
        let end = timeText.substring(19);
        $.ajax({
            url: window.location.origin + '/site/details_film/1',
            type: 'post',
            dataType: 'json',
            data: {c_id: cinema_id, time_id: timeId},
            success: function (data) {
                modal.find('.modal-body div').remove();
                $('.remove').remove();
                modal.find('.modal-body').append(`<div></div>`)
                let k = 1;
                let tr = ``;
                $.each(data.cinema, function (i, item) {
                    var td = `<div class="line-name">${item.name} - ${item.price}$</div><div class="d-flex w-100 justify-content-center line" data-price="${item.price}">`
                    for (let j = 1; j <= item.seats; j++) {
                        td += `<span data-id="${k}-${j}" class="seats" title="${j}" accesskey="${timeId}"><i class="fas fa-chair"></i></span>`
                    }
                    tr += `<div class="d-flex ">${td}</div></div>`;
                    k++
                })
                modal.find('.modal-body div').html(tr);
                $.each(data.selected, function (i, item) {
                    modal.find(`.modal-body div span[data-id=${item.seats}] i`).css('color', 'red');
                    modal.find(`.modal-body div span[data-id=${item.seats}]`).attr('disabled', 'disabled');
                    modal.find(`.modal-body div span[data-id=${item.seats}]`).css('cursor', 'auto');
                })
                modal.find('.modal-header').css('display', 'block');
                modal.find('.title-name').text(film_name);
                modal.find('.close').after(`<p class="mb-0 remove">${start} to ${end}</p>`);
                modal.modal('show');
            }
        })
    })


    /*--------------------filter cinema film-----------------------*/
    $('.filter__singleCinema').on('click', function () {
        let cinema_id = $(this).attr('data-id');
        let date = $('.datepicker-here').val();
        let isDate = date.search('-');
        let href = window.location.href;
        let param = href.split('/').pop();
        if (date !== '') {
            if (isDate == -1) {
                var start = date.split('.').reverse().join('-');
            } else {
                let arrDate = date.split('-');
                start = arrDate[0].trim().split('.').reverse().join('-');
                var end = arrDate[1].trim().split('.').reverse().join('-');
            }
        } else {
            start = '';
            end = '';
        }
        $.ajax({
            url: window.location.origin + '/site/single_cinema/1',
            type: 'post',
            dataType: 'json',
            data: {id: cinema_id, start: start, end: end},
            success: function (data) {
                $('.catalog .content_row *').remove();
                $('.pagingControls').remove();
                $.each(data, function (i, item) {
                    $('.catalog .content_row').append(`<div class="col-6 col-sm-4 col-lg-3 col-xl-2 result">
                                    <div class="cards">
                                        <div class="card__cover">
                                            <img class="img_film"
                                                 src="../../assets/images/films/${item.img_path}" alt="film">
                                            <a class="card__play popup__toggle">
                                                <i class="icon ion-ios-play"></i>
                                            </a>
                                        </div>
                                        <div class="popup__overlay">
                                            <div class="popup">
                                                <iframe src="https://www.youtube.com/embed/${item.video_path}"
                                                        frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="card__content">
                                            <h3 class="card__title"><a
                                                        href="/site/details_film_cinema/${param}/${item.id}">${item.name}</a>
                                            </h3>
                                            <span class="card__category">
                                                <a>${item.genre}</a>
                                            </span>
                                            <span class="card__rate"><i
                                                        class="icon ion-ios-star"></i>${item.rating}</span>
                                        </div>
                                    </div>
                                </div>`);
                })
                $('.catalog .content_row').after(`<div class="pagingControls paginator--list"></div>`);
                $(function () {
                    $('.content_row').flexiblePagination({
                        itemsPerPage: 12,
                        itemSelector: 'div.result:visible',
                        pagingControlsContainer: '.pagingControls',
                        showingInfoSelector: '#showingInfo',
                    });
                });
            }
        })

    })


    /*--------------------filter film grid-----------------------*/
    $(document).on('click', '.filter__grid', function () {
        let genre = $('.filter__genre').val();
        let ratStart = $('#filter__imbd-start').text();
        let ratEnd = $('#filter__imbd-end').text();
        let yStart = $('#filter__years-start').text();
        let yEnd = $('#filter__years-end').text();
        $.ajax({
            url: window.location.origin + '/site/filmsGrid',
            type: 'post',
            dataType: 'json',
            data: {genre: genre, ratingStartEnd: ratStart + '/' + ratEnd, yearsStartEnd: yStart + '/' + yEnd},
            success: function (data) {
                $('.catalog .content_row *').remove();
                $('.pagingControls').remove();
                $.each(data, function (i, item) {
                    $('.catalog .content_row').append(`<div class="col-6 col-sm-4 col-lg-3 col-xl-2 result">
                <div class="cards">
                    <div class="card__cover">
                        <img class="img_film" src="../../assets/images/films/${item.img_path}" alt="films">
                        <a class="card__play popup__toggle">
                            <i class="icon ion-ios-play"></i>
                        </a>
                    </div>
                    <div class="popup__overlay">
                        <div class="popup">
                            <iframe src="https://www.youtube.com/embed/${item.video_path}"
                                    frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="card__content">
                        <h3 class="card__title"><a href="/site/details_film/${item.id}">${item.name}</a></h3>
                        <span class="card__category">
                            <a>${item.genre}</a>
                        </span>
                        <span class="card__rate"><i class="icon ion-ios-star"></i>${item.rating}</span>
                    </div>
                </div>
            </div>`);
                })
                $('.catalog .content_row').after(`<div class="pagingControls paginator--list"></div>`);
                $(function () {
                    $('.content_row').flexiblePagination({
                        itemsPerPage: 12,
                        itemSelector: 'div.result:visible',
                        pagingControlsContainer: '.pagingControls',
                        showingInfoSelector: '#showingInfo',
                    });
                });
            }
        })


    })


    /*--------------------filter film list-----------------------*/
    $(document).on('click', '.filter__list', function () {
        let genre = $('.filter__genre').val();
        let ratStart = $('#filter__imbd-start').text();
        let ratEnd = $('#filter__imbd-end').text();
        let yStart = $('#filter__years-start').text();
        let yEnd = $('#filter__years-end').text();
        $.ajax({
            url: window.location.origin + '/site/filmsList',
            type: 'post',
            dataType: 'json',
            data: {genre: genre, ratingStartEnd: ratStart + '/' + ratEnd, yearsStartEnd: yStart + '/' + yEnd},
            success: function (data) {
                $('.catalog .content_row *').remove();
                $('.pagingControls').remove();
                $.each(data, function (i, item) {
                    $('.catalog .content_row').append(`<div class="col-6 col-sm-12 col-lg-6 result">
                <div class="cards card--list">
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <div class="card__cover">
                                <img class="new_img" src="../../assets/images/films/${item.img_path}" alt="films">
                                <a class="card__play popup__toggle">
                                    <i class="icon ion-ios-play"></i>
                                </a>
                            </div>
                            <div class="popup__overlay">
                                <div class="popup">
                                    <iframe src="https://www.youtube.com/embed/${item.video_path}" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-8">
                            <div class="card__content">
                                <h3 class="card__title"><a href="/site/details_film/${item.id}">${item.name}</a></h3>
                                <span class="card__category">
                                    <a>${item.genre}</a>
                                </span>

                                <div class="card__wrap">
                                    <span class="card__rate"><i class="icon ion-ios-star"></i>${item.rating}</span>
                                    <ul class="card__list">
                                        <li>${item.allowed}+</li>
                                    </ul>
                                </div>

                                <div class="card__description">
                                    <p>${item.desc}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>`);
                })
                $('.catalog .content_row').after(`<div class="pagingControls paginator--list"></div>`);
                $(function () {
                    $('.content_row').flexiblePagination({
                        itemsPerPage: 12,
                        itemSelector: 'div.result:visible',
                        pagingControlsContainer: '.pagingControls',
                        showingInfoSelector: '#showingInfo',
                    });
                });
            }
        })


    })


    /*-------------------forgot password send mail---------------*/
    $(document).on('click', '.forgot_btn', function (e) {
        let messages = {
            email: '',
            remember: ''
        };
        let isValid = false;
        let email = $(this).parents('form').find('.sign__input').val();
        let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z0-9]{2,}))$/;
        if (!re.test(String(email).toLowerCase())) {
            messages.email = 'email error';
            isValid = true;
        }
        let check = $('#remember:checked');
        if (!check.length) {
            isValid = true;
            messages.remember = 'remember error';
        }
        $.each(messages, function (i, item) {
            $(`.sign__form input[name=${i}]`).parent().find('small').text(item);
        })
        if (!isValid) {
            let timerInterval
            Swal.fire({
                title: 'Send to mail...',
                html: 'I will send in <b></b> milliseconds',
                timer: 3000,
                timerProgressBar: true,
                onBeforeOpen: () => {
                    Swal.showLoading()
                    timerInterval = setInterval(() => {
                        const content = Swal.getContent()
                        if (content) {
                            const b = content.querySelector('b')
                            if (b) {
                                b.textContent = Swal.getTimerLeft()
                            }
                        }
                    }, 100)
                },
                onClose: () => {
                    clearInterval(timerInterval)
                }
            }).then((result) => {
                if (result.dismiss === Swal.DismissReason.timer) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Successful!',
                        showConfirmButton: false,
                        timer: 3000
                    });
                }
            })
            $.ajax({
                url: window.location.origin + '/user/forgot',
                type: 'post',
                dataType: 'json',
                data: {email: email},
                success: function (data) {
                    if (data.success) {
                        $('.sign__form').addClass('d-none');
                        $('.forgot-content').append(`<h1 class="text-white mt-5">Email Send</h1>`)
                    }
                }
            })
        }

    })


    /*---------------------------------Contact--------------------------------*/
    $(document).on('click', '.contact_send', function () {
        let form = $(this).parents('form').serializeArray();
        let dataForm = new FormData();
        $.each(form, function (i, item) {
            dataForm.append(item.name, item.value);
        })
        dataForm.append('submit', 'send');
        $('.contact_send').attr('disabled', 'disabled');
        $.ajax({
            url: window.location.origin + '/site/contact',
            type: 'post',
            dataType: 'json',
            data: dataForm,
            processData: false,
            contentType: false,
            success: function (data) {
                if (data.success) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: data.message,
                        showConfirmButton: false,
                        timer: 3000
                    });
                    $('.form--contacts input, .form--contacts textarea').val('');
                    $('.contact_send').removeAttr('disabled');
                } else {
                    $.each(data.message, function (i, item) {
                        $('.contact_send').removeAttr('disabled');
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: item
                        })
                    })
                }
            }
        })
    })




})

