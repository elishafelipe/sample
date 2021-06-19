const nav = document.querySelector('.nav')
window.addEventListener('scroll', fixNav)

function fixNav() {
    if(window.scrollY > nav.offsetHeight + 150) {
        nav.classList.add('active')
    } else {
        nav.classList.remove('active')
    }
}
const panels = document.querySelectorAll('.panel')

panels.forEach(panel => {
    panel.addEventListener('click', () => {
        removeActiveClasses()
        panel.classList.add('active')
    })
})

function removeActiveClasses() {
    panels.forEach(panel => {
        panel.classList.remove('active')
    })
}

$(document).ready(function() {
    $('#videos a').each(function() {
       var data = $(this).attr('data');
       $(this).append('<img src="http://img.youtube.com/vi/'+data+'/maxresdefault.jpg" />');
    });
 
    $('#videos a').click(function() {
       var data = $(this).attr('data');
       $('#loader').append('<iframe src="https://www.youtube.com/embed/'+data+'" frameborder="0" allowfullscreen></iframe>');
       $('#overlay').fadeIn(250);
    });
 
    $('#close').click(function() {
       $('#overlay').fadeOut(250,function() {
          $('#loader').html('');
       });
    });
 });