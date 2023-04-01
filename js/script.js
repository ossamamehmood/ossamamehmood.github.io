document.getElementById("toggle").addEventListener("click", function()
{
    document.getElementsByTagName('body')[0].classList.toggle("dark-theme");
});

// Set the initial zoom level to 60%
document.body.style.zoom = 0.6