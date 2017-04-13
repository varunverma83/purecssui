<!-- Beginning of header.php -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A set of horizontal menus that switch to vertical
and which hide at small window widths.">

<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
 


<!--[if lte IE 8]>
    <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/grids-responsive-old-ie-min.css">
<![endif]-->
<!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/grids-responsive-min.css">
<!--<![endif]-->

<style>
.custom-wrapper {
    background-color: #ffd390;
    margin-bottom: 1em;
    -webkit-font-smoothing: antialiased;
    height: 2.1em;
    overflow: hidden;
    -webkit-transition: height 0.5s;
    -moz-transition: height 0.5s;
    -ms-transition: height 0.5s;
    transition: height 0.5s;
}

.pure-menu {
    background-color: rgb(223,181,60);
}

.pure-menu-item {
    background-color: rgb(223,181,60);
}

.pure-menu-link {
    color: black;
}

.custom-wrapper.open {
    height: 14em;
}

.custom-menu-3 {
    text-align: right;
}

.custom-toggle {
    width: 34px;
    height: 34px;
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    display: none;
}

.custom-toggle .bar {
    background-color: #777;
    display: block;
    width: 20px;
    height: 2px;
    border-radius: 100px;
    position: absolute;
    top: 18px;
    right: 7px;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -ms-transition: all 0.5s;
    transition: all 0.5s;
}

.custom-toggle .bar:first-child {
    -webkit-transform: translateY(-6px);
    -moz-transform: translateY(-6px);
    -ms-transform: translateY(-6px);
    transform: translateY(-6px);
}

.custom-toggle.x .bar {
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}

.custom-toggle.x .bar:first-child {
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    transform: rotate(-45deg);
}

@media (max-width: 47.999em) {

    .custom-menu-3 {
        text-align: left;
    }

    .custom-toggle {
        display: block;
    }

}

.page-header {
  font-size: 1.2em;
  font-weight: bold;
  padding: 0.8em;
}
</style>
<div class="pure-menu pure-menu-horizontal">
    <ul class="pure-menu-list">
        <li class="pure-menu-item pure-menu-selected"><a href="generate_license.php" class="pure-menu-link">Generate License</a></li>
        <li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover">
            <a href="#" id="menuLink1" class="pure-menu-link">Tenant Management</a>
            <ul class="pure-menu-children">
                <li class="pure-menu-item"><a href="create_tenant.php" class="pure-menu-link">Create Tenant</a></li>
                <li class="pure-menu-item"><a href="delete_tenant.php" class="pure-menu-link">Delete Tenant</a></li>
                <li class="pure-menu-item"><a href="upload_license.php" class="pure-menu-link">Upload License</a></li>
                <li class="pure-menu-item"><a href="suspend_tenant.php" class="pure-menu-link">Suspend Tenant</a></li>
                <li class="pure-menu-item"><a href="reactivate_tenant.php" class="pure-menu-link">Reactivate Tenant</a></li>
            </ul>
        </li>
    </ul>
</div>
<script>
(function (window, document) {
var menu = document.getElementById('menu'),
    WINDOW_CHANGE_EVENT = ('onorientationchange' in window) ? 'orientationchange':'resize';

function toggleHorizontal() {
    [].forEach.call(
        document.getElementById('menu').querySelectorAll('.custom-can-transform'),
        function(el){
            el.classList.toggle('pure-menu-horizontal');
        }
    );
};

function toggleMenu() {
    // set timeout so that the panel has a chance to roll up
    // before the menu switches states
    if (menu.classList.contains('open')) {
        setTimeout(toggleHorizontal, 500);
    }
    else {
        toggleHorizontal();
    }
    menu.classList.toggle('open');
    document.getElementById('toggle').classList.toggle('x');
};

function closeMenu() {
    if (menu.classList.contains('open')) {
        toggleMenu();
    }
}

document.getElementById('toggle').addEventListener('click', function (e) {
    toggleMenu();
    e.preventDefault();
});

window.addEventListener(WINDOW_CHANGE_EVENT, closeMenu);
})(this, this.document);

</script>

<style>
.main {
    padding: 2em;
    color: black;
}
</style>
<!-- End of header.php -->