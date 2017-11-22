
$( "#prodForm" ).submit(function( event ) {
    $.ajax({
        type: "POST",
        url: '/product/create',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {name: $('#name').val(), quantity: $('#quantity').val(), price: $('#price').val()}
    }).done(function( msg ) {
        alert("success");
        location.reload();
    });
    event.preventDefault();
  });