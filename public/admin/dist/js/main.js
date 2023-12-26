$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function deleteItem(target, url, method) {
    let element = $(target).parents('tr');
    if (confirm("Do you really want to delete?")) {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: url,
            type: method,

            success: function (data) {
                console.log(data.status)
                    element.hide(1000, function () {
                        element.remove()
                    });


            }

        });
    }
}
$('.viewImage').change(function (e) {
    $('.addImage').empty()
    var src = URL.createObjectURL(event.target.files[0]);
    var image = document.createElement("img");
    image.style.margin = "6px";
    image.style.width = "150px";
    image.style.height = "150px";
    image.src = src;
    image.id = 1000;
    var span = document.createElement("span");
    span.innerHTML = '<i class="fas fa-times fa-2x"></i>';
    span.style.fontSize = "17px";
    span.className = "delimg";
    span.setAttribute("data-id", '1000');
    $('.addImage').css('display', 'inline');
    $('.addImage').append(image);
    $('.addImage').append(span);


// }

});
$(document).on("click", ".delimg", function () {
    $('.custom-file-input.viewImage').val('');
    $('.addImage').html('');
})
