(
    function() {

        var hamburger = {
            navToggle: document.querySelector('.nav-toggle'),
            nav: document.querySelector('nav'),
            content: document.querySelector('.nav-content'),
            doToggle: function(e) {
                e.preventDefault();
                this.navToggle.classList.toggle('expanded');
                this.nav.classList.toggle('expanded');
                this.content.classList.toggle('expanded');
            }
        };

        hamburger.navToggle.addEventListener('click', function(e) { hamburger.doToggle(e); });

    }());