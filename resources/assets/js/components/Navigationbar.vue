<template>
    <ul class="nav navbar-nav" id="main-menu">
        <li class="icon-link">
            <a href="#"><i class="fa fa-home"></i></a>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages<b class="caret"></b></a>
            <!-- Dropdown Menu -->
            <ul class="dropdown-menu">
                <li class="dropdown-header">Flexor Version Pages</li>
                <li><a href="elements.html" tabindex="-1" class="menu-item">Elements</a></li>
                <li><a href="about.html" tabindex="-1" class="menu-item">About / Inner Page</a></li>
                <!--<li><a v-bind:href="url.login" tabindex="-1" class="menu-item">Login</a></li>-->
                <li><a href="register.html" tabindex="-1" class="menu-item">Sign-Up</a></li>
                <li class="dropdown-footer">Dropdown footer</li>
            </ul>
        </li>
        <li><a href="#">Menu Link</a></li>
        <li class="dropdown dropdown-mm">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mega Menu<b class="caret"></b></a>
            <!-- Dropdown Menu -->
            <ul class="dropdown-menu dropdown-menu-mm dropdown-menu-persist">
                <li class="row">
                    <ul class="col-md-6">
                        <li class="dropdown-header">Websites and Apps</li>
                        <li><a href="#">Analysis and Planning</a></li>
                        <li><a href="#">User Experience / Information Architecture</a></li>
                        <li><a href="#">User Interface Design / UI Design</a></li>
                        <li><a href="#">Code &amp; Development / Implementation &amp; Support</a></li>
                    </ul>
                    <ul class="col-md-6">
                        <li class="dropdown-header">Enterprise solutions</li>
                        <li><a href="#">Business Analysis</a></li>
                        <li><a href="#">Custom UX Consulting</a></li>
                        <li><a href="#">Quality Assurance</a></li>
                    </ul>
                </li>

            </ul>
        </li>
    </ul>
</template>

<script>
    export default {
        name: "Navigationbar"
    }
</script>

<style scoped>

</style>