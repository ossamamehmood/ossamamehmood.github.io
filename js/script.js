document.getElementById("toggle").addEventListener("click", function()
{
    document.getElementsByTagName('body')[0].classList.toggle("dark-theme");
});

// Set the initial zoom level to 60%
document.body.style.zoom = "60%";

$("input, textarea").focusout(function(){
    $('meta[name=viewport]').remove();
    $('head').append('<meta name="viewport" content="width=device-width, initial-scale=0.6, maximum-scale=1.0, user-scalable=0">');

    $('meta[name=viewport]').remove();
    $('head').append('<meta name="viewport" content="width=device-width, initial-scale=yes">' );
});