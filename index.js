// For Accordian
const accordian = document.getElementsByClassName('accordian');
var i;

for (i = 0; i < accordian.length; i++) {
    accordian[i].addEventListener('click', function() {
        this.classList.toggle('active');
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight){
            panel.style.maxHeight = null;
        }else {
            panel.style.maxHeight = panel.scrollHeight + 'px';
        }
    });
}

// For Copyright Year

var currentYear = new Date().getFullYear();
document.getElementById('copyYear').innerText = currentYear;

// For Scroll To Top

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
        document.getElementById("scrollToTop").style.display = "block";
    } else {
        document.getElementById("scrollToTop").style.display = "none";
    }
}

function topFunction() {
    window.scrollTo({top: 0, behavior: 'smooth'});
}
const scrollTop = document.getElementById('scrollToTop');
scrollTop.addEventListener('click', topFunction);
